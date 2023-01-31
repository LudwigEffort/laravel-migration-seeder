<?php

use Faker\Generator as Faker;
use App\Train;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $rows = [
            [
                'company' => 'Trenitalia',
                'departure_rail_station' => 'Roma',
                'arrival_rail_station' => 'Milano',
                'departure_time' => '2022-02-15',
                'arrival_time' => '2022-02-16',
                'train_code' => '18799',
                'number_carriage' => '09',
                'in_time' => true,
                'delay' => false,
            ],
            [
                'company' => 'France Trains',
                'departure_rail_station' => 'Parigi',
                'arrival_rail_station' => 'Milano',
                'departure_time' => '2022-02-10',
                'arrival_time' => '2022-02-11',
                'train_code' => '19396',
                'number_carriage' => '42',
                'in_time' => false,
                'delay' => true,
            ],
            [
                'company' => 'Flatlandia Trains',
                'departure_rail_station' => 'Roma',
                'arrival_rail_station' => 'Milano',
                'departure_time' => '2022-02-15',
                'arrival_time' => '2022-02-17',
                'train_code' => '10882',
                'number_carriage' => '99',
                'in_time' => true,
                'delay' => false,
            ],
       ];

       foreach ($rows as $row) {
            $train = new Train();
            $train->company = $row['company'];
            $train->departure_rail_station = $row['departure_rail_station'];
            $train->arrival_rail_station = $row['arrival_rail_station'];
            $train->departure_time = $row['departure_time'];
            $train->arrival_time = $row['arrival_time'];
            $train->train_code = $row['train_code'];
            $train->number_carriage = $row['number_carriage'];
            $train->in_time = $row['in_time'];
            $train->delay = $row['delay'];
            $train->save();
       }

        for ($i = 0; $i < 250; $i++) {
            $train = new Train();
            $train->company = $faker->randomElement(['Trenitalia', 'Flatlandia Trainsns', 'German Rails', 'France Trains', 'Royaol Trains']);
            $train->departure_rail_station = $faker->randomElement(['Roma', 'Londra', 'Parigi', 'Milano', 'Torino', 'Berlino', 'Catania', 'Lione']);
            $train->arrival_rail_station = $faker->randomElement(['Roma', 'Londra', 'Parigi', 'Milano', 'Torino', 'Berlino', 'Catania', 'Lione']);
            $train->departure_time = '2022-02-15';
            $train->arrival_time = '2022-02-16';
            $train->train_code = rand(00000, 99999);
            $train->number_carriage = rand(01, 99);
            $train->in_time = true;
            $train->delay = false;
            $train->save();
        }
    }
}
