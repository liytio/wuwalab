<?php

namespace Tests\Feature;

use App\Models\Resonator;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ResonatorFilterTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        Resonator::factory()->create(['name' => 'Jiyan', 'element' => 'Aero', 'weapon_type' => 'Broadblade', 'rarity' => 5]);
        Resonator::factory()->create(['name' => 'Sanhua', 'element' => 'Glacio', 'weapon_type' => 'Sword', 'rarity' => 4]);
    }

    public function test_search_by_name(): void
    {
        $this->get('/?q=jiy')->assertOk()->assertSee('Jiyan')->assertDontSee('Sanhua');
    }

    public function test_filter_by_element_and_rarity(): void
    {
        $this->get('/?element=Glacio')->assertSee('Sanhua')->assertDontSee('Jiyan');
        $this->get('/?rarity=5')->assertSee('Jiyan')->assertDontSee('Sanhua');
    }

    public function test_combined_filters_with_no_result_shows_empty_state(): void
    {
        $this->get('/?element=Aero&rarity=4')->assertSee('Tidak ada resonator yang cocok');
    }

    public function test_invalid_rarity_is_rejected(): void
    {
        $this->get('/?rarity=3')->assertSessionHasErrors('rarity');
    }
}
