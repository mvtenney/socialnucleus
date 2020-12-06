<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $user = User::inRandomOrder()->first() ?? User::factory()->create();
        $type = ['post', 'video'];
        $status = ['draft', 'published'];
        return [
            'user_id' => $user->id,
            'team_id' => $user->currentTeam->id,
            'campaign_id' => $user->campaigns()->inRandomOrder()->first(),
            'description' => $this->faker->paragraph,
            'title' => $this->faker->words(4, true),
            'status' => $status[array_rand($status)],
            'type'    => $type[array_rand($type)],
            'photo_path' => $this->faker->imageUrl($width = 225, $height = 225),
            'hashtags' => $this->faker->words(6, false),
            'body' => $this->faker->realText($maxNbChars = 140, $indexSize = 2),
        ];
    }
}
