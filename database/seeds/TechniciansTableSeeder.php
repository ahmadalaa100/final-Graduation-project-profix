<?php

use Illuminate\Database\Seeder;

class TechniciansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Technicians::class, 50)->create();

    }
}
