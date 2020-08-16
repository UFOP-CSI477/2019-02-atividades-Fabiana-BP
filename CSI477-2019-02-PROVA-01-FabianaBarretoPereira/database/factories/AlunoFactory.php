<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Aluno;
use Faker\Generator as Faker;

$factory->define(Aluno::class, function (Faker $faker) {
  $cursos=['SJM','CJM','PJM'];
    return [
        'nome'=>$faker->name,
        'curso'=>$faker->randomElement($cursos),
    ];
});
