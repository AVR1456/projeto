<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/
//Gera dados fake
$fakerBr = Faker\Factory::create('pt_BR');

$factory->define(App\User::class, function ($faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => str_random(10),
        'remember_token' => str_random(10),
    ];
});
    //
$factory->define(App\RealState::class, function ($faker) use($fakerBr) {
    return [
        'name' => $fakerBr->name,
        'cnpj' => $fakerBr->randomNumber($nbDigits = NULL, $strict = false),
        'address' => $fakerBr->address,
        'phone'=> $fakerBr->randomNumber($nbDigits = 8, $strict = false),
        'email'=> $fakerBr->email
    ];
});

$factory->define(App\RealStateAgent::class, function ($faker) use($fakerBr) {
    return [
        'name' => $fakerBr->name,
        'phone'=> $fakerBr->randomNumber($nbDigits = 8, $strict = false),
        'email'=> $fakerBr->email,
        'real_state_id'=> App\RealState::all()->random()->id
    ];
});

$factory->define(App\Owner::class, function ($faker) use($fakerBr) {
    return [
        'name' => $fakerBr->name,
        'cpf' => $fakerBr->randomNumber($nbDigits = NULL, $strict = false),
        'address' => $fakerBr->address,
        'phone'=> $fakerBr->randomNumber($nbDigits = 8, $strict = false),
        'realstate_id'=> App\RealState::all()->random()->id
       
    ];
});

$factory->define(App\Renter::class, function ($faker) use($fakerBr) {
    return [
        'name' => $fakerBr->name,
        'cpf' => $fakerBr->randomNumber($nbDigits = NULL, $strict = false),
        'birth_date' =>$fakerBr->date,
        'phone'=> $fakerBr->randomNumber($nbDigits = 8, $strict = false),
        'email'=> $fakerBr->email,
        'realstateagent_id'=> App\RealStateAgent::all()->random()->id
       
    ];
});
