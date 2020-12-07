<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Campaign;
use App\Models\Team;
class CampaignSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $team = Team::where('id', 2)->first();
        $users = $team->allUsers();

        foreach ($users as $user){
            Campaign::factory(['user_id' => $user->id, 'team_id' => 2])->count(6)->create();
        }
        Campaign::factory()->count(12)->create();
    }
}
