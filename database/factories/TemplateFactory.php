<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Template;
use Illuminate\Database\Eloquent\Factories\Factory;

class TemplateFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Template::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $type = ['post', 'video'];
        $status = ['draft', 'published'];
        $user = User::inRandomOrder()->first();
        return [
            'user_id' => $user->id,
            'team_id' => $user->current_team_id,
            'type'    => $type[array_rand($type)],
            'status'  => $status[array_rand($status)],
            'template_json' => ''
        ];
    }
}
