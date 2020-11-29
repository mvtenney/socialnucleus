<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Campaign;
use App\Models\User;
use App\Models\Team;

class CampaignsTest extends TestCase
{
    use WithFaker, RefreshDatabase;

    /** @test */
    public function a_user_can_create_a_campaign()
    {
        $this->be(User::factory()->create());
        $this->get(route('create_campaign'))->assertStatus(200);
        $attributes = [
            'user_id' => auth()->id(),
            'team_id' => auth()->user()->currentTeam->id,
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
        ];

        $campaign = Campaign::factory()->create($attributes);

        $this->get($campaign->path())
            ->assertSee($attributes['title'])
            ->assertSee($attributes['description']);
    }

    /** @test */
    public function a_user_can_view_their_campaigns()
    {
        $this->actingAs(User::factory()->create());

        $campaign = Campaign::factory()->create(['user_id' => auth()->id(), 'team_id' => auth()->user()->currentTeam->id]);

        $this->get($campaign->path())
            ->assertSee($campaign->title)
            ->assertSee($campaign->description);
    }

    /** @test */
    public function an_authenticated_user_cannot_view_the_campaigns_of_others()
    {
        $this->be(User::factory()->create());

        $campaign = Campaign::factory()->create();

        $this->get($campaign->path())->assertStatus(403);
    }

    /** @test */
    public function guests_may_not_control_campaigns()
    {
        $campaign = Campaign::factory()->create();

        $this->get('/campaigns')->assertRedirect('login');
        $this->get('/campaigns/create')->assertRedirect('login');
        $this->get($campaign->path())->assertRedirect('login');
        $this->post('/campaigns', $campaign->toArray())->assertRedirect('login');
    }

    /** @test */
    public function a_campaign_belongs_to_an_owner()
    {
        $this->be(User::factory()->create());
        $campaign = Campaign::factory()->create([
            'user_id' => auth()->id(),
            'team_id' => auth()->user()->currentTeam->id,
        ]);
        $this->assertInstanceOf(User::class, $campaign->owner);
    }

    /** @test */
    public function a_campaign_belongs_to_a_team()
    {
        $this->be(User::factory()->create());
        $campaign = Campaign::factory()->create([
            'user_id' => auth()->id(),
            'team_id' => auth()->user()->currentTeam->id,
        ]);
        $this->assertInstanceOf(Team::class, $campaign->team);
    }

    /** @test */
    public function a_campaign_requires_a_team()
    {
        $this->actingAs(User::factory()->create());
        $campaign = Campaign::factory()->create(['user_id' => auth()->id()]);
        $this->get($campaign->path())->assertStatus(403);
    }

    /** @test */
    public function a_campaign_requires_a_title()
    {
        $this->actingAs(User::factory()->create());
        $attributes = Campaign::factory()->raw(['title' => '']);
        $this->post('/campaigns', $attributes)->assertSessionHasErrors('title');
    }

    /** @test */
    public function a_campaign_requires_a_description()
    {
        $this->actingAs(User::factory()->create());
        $attributes = Campaign::factory()->raw(['description' => '']);
        $this->post('/campaigns', $attributes)->assertSessionHasErrors('description');
    }

    // if (auth()->id() !== $campaign->user_id){
    //     abort(403);
    // }
}
