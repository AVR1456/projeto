<?php

use Illuminate\Database\Seeder;
use App\RealState;

class RealStateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        App\RealStateSeeder::truncate();
        
        factory(App\RealState::class, 1)->create();
    }
}
