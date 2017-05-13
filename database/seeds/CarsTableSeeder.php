<?php

use Illuminate\Database\Seeder;

class CarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Car::class)->create([
            'user_id' => 2,
            'name' => 'Nissan',
        ]);
        factory(App\Car::class)->create([
            'user_id'=> 2,
            'name' => 'Vento',
        ]);
    }
}
