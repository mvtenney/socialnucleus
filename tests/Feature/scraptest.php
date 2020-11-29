<?php
   /** @test */
   public function a_user_can_create_a_campaign()
   {
       $this->withoutExceptionHandling();
       $this->withoutMiddleware();

       $user = User::factory()->create();

       $response = $this->actingAs($user)
                        ->get('/campaigns/create')->assertStatus(200);
       $attributes = [
           'user_id' => $user->id,
           'team_id' => 1,
           'title' => $this->faker->sentence,
           'description' => $this->faker->paragraph,
       ];

       $response->assertRedirect(Campaign::path());

       $this->get(Campaign::path())
           ->assertSee($attributes['title'])
           ->assertSee($attributes['description']);

       $this->post('/campaigns', $attributes)->assertRedirect('/campaigns');
       $this->assertDatabaseHas('campaign', $attributes);
       $this->get(route('campaigns'))->assertSee($attributes['title']);
   }
