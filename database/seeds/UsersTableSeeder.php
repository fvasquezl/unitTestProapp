<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class)->create([
            'name' => 'Faustino Vasquez',
            'email' => 'fvasquez@local.com',
            'password' => bcrypt('123456'),
            'role' => 'admin',
        ]);
        factory(App\User::class)->create([
            'name' => 'Sebastian Vasquez',
            'email' => 'svasquez@local.com',
            'password' => bcrypt('123456'),
            'role' => 'client',
        ]);
        factory(App\User::class,10)->create();
    }
}
