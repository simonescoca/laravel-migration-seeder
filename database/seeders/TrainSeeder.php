<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;


class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run (Faker $faker)
    {
        for ($i = 0; $i < 20; $i++) {
            $newTrain = new Train();
            $newTrain -> azienda = $faker -> company;
            $newTrain -> stazione_partenza = $faker -> city;
            $newTrain -> stazione_arrivo = $faker -> city;
            $newTrain -> orario_partenza = $faker -> dateTimeBetween ('now', '+1 week');
            $newTrain -> orario_arrivo = $faker -> dateTimeBetween ('now', '+1 week');
            $newTrain -> codice_treno = $faker -> unique() -> ean8;
            $newTrain -> numero_carrozze = $faker -> numberBetween (1, 10);
            $newTrain -> in_orario = $faker -> boolean;
            $newTrain -> cancellato = $faker -> boolean;
            $newTrain -> save ();
        }
    }
}
