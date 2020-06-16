<?php

use Illuminate\Database\Seeder;
use App\Renter;

class RenterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\Renter::class, 50)->create();
    }
}
