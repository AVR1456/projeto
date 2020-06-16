<?php

use Illuminate\Database\Seeder;
use App\Owner;

class OwnerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\Owner::class, 50)->create();
    }
}