<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Team;
use Illuminate\Support\Str;
use App\Actions\Fortify;
use App\Actions\Jetstream;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i = 0; $i <= 60; $i++){
            $userCreate = new Fortify\CreateNewUser();

            $user = $userCreate->create([
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'password' => 'password', // password
                'password_confirmation' => 'password',
            ]);

            User::where('id', $user->id)->update(array(
                'email_verified_at' => now(),
                'remember_token' => Str::random(10),
                'profile_photo_path' => $faker->imageUrl(250,250),
            ));
        }
    }
}
