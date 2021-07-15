<?php

use Illuminate\Database\Seeder;
use App\Holiday;

class HolidaysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $holiday = config('holidays');

        foreach ($holiday as $item) {

            $holiday = new Holiday();

            $holiday -> src = $item["src"];
            $holiday -> location = $item["location"];
            $holiday -> tipology = $item["city"];
            $holiday -> city = $item["city"];
            $holiday -> country = $item["country"];
            $holiday -> price = $item["price"];
            $holiday -> vote = $item["vote"];
            $holiday -> available = $item["available"];
            $holiday -> email = $item["email"];
            $holiday -> telephone = $item["telephone"];

            $holiday -> save();
        }
    }
}
