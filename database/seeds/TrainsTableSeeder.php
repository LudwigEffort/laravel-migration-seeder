<?php

use App\Train;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 250; $i++) {
            $train = new Train();
            $train->company = 'Trenitalia';
            $train->departure_rail_station = 'Roma';
            $train->arrival_rail_station = 'Milano';
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
