<?php

namespace Database\Seeders;

use App\Models\Deliveries;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DeliveriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // here need delay for normal date creation, otherwise all records
        // will receive one date, so it will be impossible to sort records by date
        Deliveries::create(['routeID' => 1, 'addressID' => 1, 'type' => 1, 'status' => 1]);sleep(1);
        Deliveries::create(['routeID' => 2, 'addressID' => 2, 'type' => 1, 'status' => 1]);sleep(1);
        Deliveries::create(['routeID' => 3, 'addressID' => 3, 'type' => 1, 'status' => 1]);sleep(1);
        Deliveries::create(['routeID' => 4, 'addressID' => 4, 'type' => 1, 'status' => 3]);sleep(1);
        Deliveries::create(['routeID' => 5, 'addressID' => 5, 'type' => 2, 'status' => 2]);sleep(1);
        Deliveries::create(['routeID' => 6, 'addressID' => 6, 'type' => 2, 'status' => 3]);sleep(1);
        Deliveries::create(['routeID' => 7, 'addressID' => 7, 'type' => 2, 'status' => 3]);sleep(1);
        Deliveries::create(['routeID' => 8, 'addressID' => 1, 'type' => 1, 'status' => 2]);sleep(1);
        Deliveries::create(['routeID' => 9, 'addressID' => 3, 'type' => 1, 'status' => 1]);sleep(1);
        Deliveries::create(['routeID' => 10, 'addressID' => 3, 'type' => 2, 'status' => 1]);sleep(1);
        Deliveries::create(['routeID' => 11, 'addressID' => 7, 'type' => 2, 'status' => 2]);sleep(1);
        Deliveries::create(['routeID' => 12, 'addressID' => 1, 'type' => 2, 'status' => 3]);sleep(1);
        Deliveries::create(['routeID' => 13, 'addressID' => 2, 'type' => 1, 'status' => 1]);sleep(1);


    }
}
