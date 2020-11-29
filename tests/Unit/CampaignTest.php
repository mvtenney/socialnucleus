<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Campaign;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CampaignTest extends TestCase
{
    use RefreshDatabase;

    /** @test */

    public function it_has_a_path()
    {
        $campaign = Campaign::factory()->create();
        $this->assertEquals('/campaigns/' . $campaign->id, $campaign->path());
    }
}
