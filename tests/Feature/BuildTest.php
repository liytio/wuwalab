<?php

namespace Tests\Feature;

use App\Models\Build;
use App\Models\Resonator;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class BuildTest extends TestCase
{
    use RefreshDatabase;

    private function payload(array $overrides = []): array
    {
        return array_merge([
            'resonator_id' => Resonator::factory()->create()->id,
            'title' => 'Jiyan Hyper Carry',
            'level' => 90,
            'sequence' => 0,
            'echo_costs' => ['4', '3', '3', '1', '1'],
        ], $overrides);
    }

    public function test_user_can_create_build_as_draft(): void
    {
        $user = User::factory()->create();

        $this->actingAs($user)->post('/builds', $this->payload())->assertSessionHasNoErrors();

        $build = Build::first();
        $this->assertSame(Build::STATUS_DRAFT, $build->status);
        $this->assertSame([4, 3, 3, 1, 1], $build->echo_costs);
    }

    public function test_level_boundaries(): void
    {
        $user = User::factory()->create();

        foreach ([0 => true, 1 => false, 90 => false, 91 => true] as $level => $hasError) {
            $response = $this->actingAs($user)->post('/builds', $this->payload(['level' => $level]));
            $hasError ? $response->assertSessionHasErrors('level') : $response->assertSessionDoesntHaveErrors('level');
        }
    }

    public function test_sequence_boundaries(): void
    {
        $user = User::factory()->create();

        foreach ([-1 => true, 0 => false, 6 => false, 7 => true] as $sequence => $hasError) {
            $response = $this->actingAs($user)->post('/builds', $this->payload(['sequence' => $sequence]));
            $hasError ? $response->assertSessionHasErrors('sequence') : $response->assertSessionDoesntHaveErrors('sequence');
        }
    }

    public function test_echo_total_cost_cannot_exceed_twelve(): void
    {
        $user = User::factory()->create();

        // 4+4+3+1 = 12 diterima, 4+4+3+1+1 = 13 ditolak
        $this->actingAs($user)->post('/builds', $this->payload(['echo_costs' => ['4', '4', '3', '1', '']]))
            ->assertSessionDoesntHaveErrors('echo_costs');
        $this->actingAs($user)->post('/builds', $this->payload(['echo_costs' => ['4', '4', '3', '1', '1']]))
            ->assertSessionHasErrors('echo_costs');
    }

    public function test_echo_requires_at_least_one_slot_and_valid_costs(): void
    {
        $user = User::factory()->create();

        $this->actingAs($user)->post('/builds', $this->payload(['echo_costs' => ['', '', '', '', '']]))
            ->assertSessionHasErrors('echo_costs');
        $this->actingAs($user)->post('/builds', $this->payload(['echo_costs' => ['2']]))
            ->assertSessionHasErrors('echo_costs');
        $this->actingAs($user)->post('/builds', $this->payload(['echo_costs' => ['1', '1', '1', '1', '1', '1']]))
            ->assertSessionHasErrors('echo_costs');
    }

    public function test_status_transitions_follow_rules(): void
    {
        $build = Build::factory()->create();
        $owner = $build->user;

        // draft -> archived tidak diizinkan
        $this->actingAs($owner)->patch("/builds/{$build->id}/status", ['status' => 'archived'])
            ->assertSessionHas('error');
        $this->assertSame('draft', $build->fresh()->status);

        // draft -> published -> archived -> draft diizinkan
        foreach (['published', 'archived', 'draft'] as $target) {
            $this->actingAs($owner)->patch("/builds/{$build->id}/status", ['status' => $target])
                ->assertSessionHas('success');
            $this->assertSame($target, $build->fresh()->status);
        }
    }

    public function test_published_build_cannot_be_edited(): void
    {
        $build = Build::factory()->published()->create();

        $this->actingAs($build->user)->put("/builds/{$build->id}", $this->payload(['title' => 'Judul Baru']))
            ->assertSessionHas('error');
        $this->assertNotSame('Judul Baru', $build->fresh()->title);
    }

    public function test_user_cannot_modify_someone_elses_build(): void
    {
        $build = Build::factory()->create();
        $other = User::factory()->create();

        $this->actingAs($other)->delete("/builds/{$build->id}")->assertForbidden();
        $this->actingAs($other)->patch("/builds/{$build->id}/status", ['status' => 'published'])->assertForbidden();
    }

    public function test_draft_build_is_hidden_from_others(): void
    {
        $build = Build::factory()->create();

        $this->get("/builds/{$build->id}")->assertNotFound();
        $this->actingAs($build->user)->get("/builds/{$build->id}")->assertOk();
    }

    public function test_rating_rules(): void
    {
        $build = Build::factory()->published()->create();
        $rater = User::factory()->create();

        foreach ([0 => true, 1 => false, 5 => false, 6 => true] as $score => $hasError) {
            $response = $this->actingAs($rater)->post("/builds/{$build->id}/rating", ['score' => $score]);
            $hasError ? $response->assertSessionHasErrors('score') : $response->assertSessionHas('success');
        }

        // Rating ulang menimpa, bukan menambah
        $this->assertSame(1, $build->ratings()->count());
        $this->assertSame(5, $build->ratings()->first()->score);

        // Pemilik tidak bisa menilai build sendiri
        $this->actingAs($build->user)->post("/builds/{$build->id}/rating", ['score' => 5])->assertSessionHas('error');
    }

    public function test_draft_build_cannot_be_rated(): void
    {
        $build = Build::factory()->create();

        $this->actingAs(User::factory()->create())->post("/builds/{$build->id}/rating", ['score' => 4])
            ->assertSessionHas('error');
        $this->assertSame(0, $build->ratings()->count());
    }

    public function test_community_page_only_lists_published_builds(): void
    {
        Build::factory()->create(['title' => 'Build Draft']);
        Build::factory()->published()->create(['title' => 'Build Publik']);

        $this->get('/builds/community')->assertOk()->assertSee('Build Publik')->assertDontSee('Build Draft');
    }
}
