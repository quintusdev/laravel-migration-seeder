<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

use App\Models\Train;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        /* INSERIMENTO DATI DB CON FAKER */
        for ($i = 0; $i < 10; $i++) {
            $train = new Train();
            $train->azienda = $faker->word();
            $train->stazione_di_partenza = $faker->word();
            $train->stazione_di_arrivo = $faker->word();
            $train->orario_di_partenza = $faker->time();
            $train->orario_di_arrivo = $faker->time();
            $train->codice_treno = $faker->randomNumber(4, true);
            $train->numero_carrozze = $faker->randomDigitNotNull(1, 50);
            $train->in_orario = $faker->boolean();
            $train->cancellato = $faker->boolean();
            $train->data = $faker->date();

            $train->save();
        }
    }
}
