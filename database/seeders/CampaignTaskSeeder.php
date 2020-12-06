<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CampaignTask;

class CampaignTaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CampaignTask::factory()->count(12)->create();
    }
}
