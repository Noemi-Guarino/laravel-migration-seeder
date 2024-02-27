<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// Models
use App\Models\Train;

class TrainsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Train::truncate();

        for ($i = 0; $i < 50; $i++) {
            // Istanzio il model
            $train = new Train();
            // Ne riempio le colonne
            $train->Agency = fake()->words(rand(1, 5), true);
            $train->DepartureStation = fake()->name();
            $train->ArrivalStation = fake()->name();
            $train->DepartureTime = fake()->dateTime();
            $train->ArrivalTime = fake()->dateTime();
            $train->TrainCode = fake()->numerify();
            $train->NumberOfCarriages = fake()->numerify();
            $train->Intime = fake()->boolean() ;
            $train->Deleted = fake()->boolean() ;

            // Lo salvo in persistenza
            $train->save();
        }
    }
}
