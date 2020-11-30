<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\CampaignTask;
use Illuminate\Database\Eloquent\Factories\Factory;

class CampaignTaskFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CampaignTask::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $user = User::factory()->create();
        $type = ['content_request', 'brainstorm'];
        $status = ['backlog', 'published'];
        $priority = [1,2,3];
        return [
            'user_id' => $user->id,
            'team_id' => $user->currentTeam->id,
            'campaign_id' => $user->campaigns()->inRandomOrder()->first(),
            'assigned_to' => $user->id,
            'title' => $this->faker->words(4, true),
            'body' => $this->faker->paragraph,
            'type'    => $type[array_rand($type)],
            'status' => $status[array_rand($status)],
            'priority' => $priority[array_rand($priority)],
        ];
    }
}
