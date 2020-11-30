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

    /** @test */

    public function it_can_add_a_task()
    {
        $this->signIn();
        $campaign = Campaign::factory()->create();

        $attributes = [
            'user_id' => auth()->id(),
            'team_id' => auth()->user()->currentTeam->id,
            'campaign_id' => $campaign->id,
            'assigned_to' => auth()->id(),
            'title' => 'Test Title',
            'body' => 'Test Body',
            'type'    => 'create_content',
            'status' => 'pending',
            'priority' => "3",
        ];

        $task = $campaign->addTask($attributes);
        $this->assertCount(1, $campaign->tasks);
        $this->assertTrue($campaign->tasks->contains($task));
    }
}
