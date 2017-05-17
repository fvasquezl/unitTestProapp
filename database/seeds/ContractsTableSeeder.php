<?php

use Illuminate\Database\Seeder;

class ContractsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Contract::class)->create([
            'car_id' => 1,
            'name' => 'Juan Perez',
        ]);
        factory(App\Contract::class)->create([
            'car_id' => 2,
            'name' => 'Juan Gomez',
        ]);
    }
}
