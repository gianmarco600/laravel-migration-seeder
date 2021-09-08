<?php

use Illuminate\Database\Seeder;
use App\Trip;

class TripsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for( $i=0 ; $i<50 ; $i++ ){
            $newTrip = new Trip();
            $newTrip->title = 'viaggio #' . rand(1,100);
            $newTrip->duration = 10;
            $newTrip->description = ' Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis, nisi! Amet veniam animi consectetur incidunt libero adipisci accusantium! A, maxime quisquam? Consectetur assumenda id culpa obcaecati modi iure sequi veniam.';
            $newTrip->availability = 1;
            $newTrip->departure = 'roma';
            $newTrip->price = rand(100,20000);
            $newTrip->save();
        }
    }
}
