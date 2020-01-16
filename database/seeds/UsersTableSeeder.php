<?php

use Illuminate\Database\Seeder;

use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        $faker = \Faker\Factory::create();

        User::create([
          'first_name' => 'Patrick',
          'last_name' => 'Doyle',
          'email' => 'admin@null.com',
          'password' => 'password'
        ]);

        for ($i = 0; $i < 10; $i++) {
            User::create([
              'first_name' => $faker->firstName,
              'last_name' => $faker->lastName,
              'email' => $faker->email,
              'password' => 'password'
            ]);
        }
    }
}
