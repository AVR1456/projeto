<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        Model::unguard();
        //DB::statement('SET foreign_key_checks = 0;');

       // $this->call('UserTableSeeder');

       //$this->call('RealStateTableSeeder');

       //$this->call('RealStateAgentTableSeeder');

       $this->call('OwnerTableSeeder');

       $this->call('RenterTableSeeder');

       //DB::statement('SET foreign_key_checks = 1;');

       Model::reguard();
    }
}
