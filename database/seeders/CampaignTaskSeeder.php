<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CampaignTask;
use App\Models\Team;

class CampaignTaskSeeder extends Seeder
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
            foreach ($user->campaigns as $campaign) {
                CampaignTask::factory([
                    'user_id' => $user->id,
                    'team_id' => 2,
                    'campaign_id' => $campaign->id,
                    'assigned_to' => $user->id,
                ])->count(5)->create();
            }
        }
        CampaignTask::factory()->count(10)->create();
    }
}
