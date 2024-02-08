<?php

namespace Database\Seeders;

use App\Models\Pokemon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class PokemonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {


        for ($i=0; $i < 50 ; $i++) {
            $pokemon = new Pokemon();
            $pokemon->name = $faker->unique()->firstName();
            $pokemon->thumb = $faker->unique()->imageUrl(400,600, 'pokemons');
            $pokemon->description = $faker->unique()->name();
            $pokemon->no = $faker->numberBetween(1, 10);
            $pokemon->type = $faker->unique()->name();
            $pokemon->weakness = $faker->unique()->name();
            $pokemon->strength = $faker->unique()->name();
            $pokemon->save();
        }

    }
}
