<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Campaign;
use App\Models\User;
use App\Models\Team;
// use App\Models\Task;

class CampaignTasksTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_campaign_can_have_tasks()
    {
        $this->withoutExceptionHandling();

        $this->signIn();

        $campaign = Campaign::factory()->create(['owner_id' => auth()->id()]);

        $this->post($campaign->path() . '/tasks', ['body' => 'Test Task']);

        $this->get($campaign->path())->assertSee('Test Task');
    }
}
