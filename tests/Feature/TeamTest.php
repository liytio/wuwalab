<?php

namespace Tests\Feature;

use App\Models\Resonator;
use App\Models\Team;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class TeamTest extends TestCase
{
    use RefreshDatabase;

    public function test_user_can_create_team_with_three_different_members(): void
    {
        $user = User::factory()->create();
        [$a, $b, $c] = Resonator::factory()->count(3)->create();

        $this->actingAs($user)->post('/teams', [
            'name' => 'Tim Utama',
            'member1_id' => $a->id,
            'member2_id' => $b->id,
            'member3_id' => $c->id,
        ])->assertSessionHasNoErrors();

        $this->assertSame(1, $user->teams()->count());
    }

    public function test_team_members_must_be_different(): void
    {
        $user = User::factory()->create();
        [$a, $b] = Resonator::factory()->count(2)->create();

        $this->actingAs($user)->post('/teams', [
            'name' => 'Tim Duplikat',
            'member1_id' => $a->id,
            'member2_id' => $b->id,
            'member3_id' => $a->id,
        ])->assertSessionHasErrors('member3_id');

        $this->assertSame(0, Team::count());
    }

    public function test_user_cannot_have_more_than_ten_teams(): void
    {
        $user = User::factory()->create();
        [$a, $b, $c] = Resonator::factory()->count(3)->create();
        $payload = ['member1_id' => $a->id, 'member2_id' => $b->id, 'member3_id' => $c->id];

        for ($i = 1; $i <= 10; $i++) {
            $this->actingAs($user)->post('/teams', $payload + ['name' => "Tim {$i}"])->assertSessionHas('success');
        }

        $this->actingAs($user)->post('/teams', $payload + ['name' => 'Tim 11'])->assertSessionHas('error');
        $this->assertSame(10, $user->teams()->count());
    }

    public function test_user_cannot_edit_someone_elses_team(): void
    {
        [$a, $b, $c] = Resonator::factory()->count(3)->create();
        $owner = User::factory()->create();
        $team = new Team(['name' => 'Tim Orang', 'member1_id' => $a->id, 'member2_id' => $b->id, 'member3_id' => $c->id]);
        $team->user_id = $owner->id;
        $team->save();

        $this->actingAs(User::factory()->create())->get("/teams/{$team->id}/edit")->assertForbidden();
    }
}
