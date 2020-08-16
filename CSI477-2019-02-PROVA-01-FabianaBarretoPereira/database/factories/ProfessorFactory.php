<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Professor;
use Faker\Generator as Faker;

$factory->define(Professor::class, function (Faker $faker) {
        $area=['INTELIGÊNCIA ARTIFICIAL','BANCO DE DADOS','SISTEMAS WEB','ACESSIBILIDADE WEB','APRENDIZAGEM DE MÁQUINA'];
          return [
              'nome'=>$faker->name,
              'area'=>$faker->randomElement($area),
          ];
});
