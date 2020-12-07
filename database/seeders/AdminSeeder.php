<?php

namespace Database\Seeders;
use App\Models\User;
use App\Models\Team;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use App\Actions\Fortify;
use App\Actions\Jetstream;
use Faker\Factory as Faker;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $user = User::create([
            'name' => 'Michael Tenney',
            'email' => 'mike@devdallas.com',
            'password' => bcrypt('password'),
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ]);

        $user->ownedTeams()->save(Team::forceCreate([
            'user_id' => $user->id,
            'name' => "Michael Tenney's Team",
            'personal_team' => true,
        ]));

        $createTeam = new Jetstream\CreateTeam();
        $team = $createTeam->create($user, ['name' => 'Test Team']);

        for ($i = 0; $i <= 5; $i++){
            $teamMemberCreate = new Fortify\CreateNewUser();

            $teamMember = $teamMemberCreate->create([
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'password' => 'password', // password
                'password_confirmation' => 'password',
            ]);

            User::where('id', $teamMember->id)->update(array(
                'email_verified_at' => now(),
                'remember_token' => Str::random(10),
                'profile_photo_path' => $faker->imageUrl(250,250),
            ));

            $modifyTeam = new Jetstream\AddTeamMember();
            $modifyTeam->add($user, $team, $teamMember->email, 'editor');
        }
    }
}
