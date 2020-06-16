<?php

use Illuminate\Database\Seeder;
use App\RealStateAgent;

class RealStateAgentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\RealStateAgent::class, 50)->create();
    }
}
