<?php

namespace Database\Seeders;

use App\Models\Deliveries;
use App\Models\DeliveryLines;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DeliveryLinesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DeliveryLines::create(['client_id' => 1, 'deliveryID' => 1, 'item' => 'fuel', 'price' => 1.99, 'QTY' => 80]);
        DeliveryLines::create(['client_id' => 2, 'deliveryID' => 2, 'item' => 'fuel', 'price' => 1.89, 'QTY' => 42]);
        DeliveryLines::create(['client_id' => 3, 'deliveryID' => 3, 'item' => 'fuel', 'price' => 1.69, 'QTY' => 12]);
        DeliveryLines::create(['client_id' => 4, 'deliveryID' => 4, 'item' => 'fuel', 'price' => 2.99, 'QTY' => 30]);
        DeliveryLines::create(['client_id' => 5, 'deliveryID' => 5, 'item' => 'concrete', 'price' => 13.99, 'QTY' => 80]);
        DeliveryLines::create(['client_id' => 6, 'deliveryID' => 6, 'item' => 'concrete', 'price' => 15.99, 'QTY' => 15]);
        DeliveryLines::create(['client_id' => 7, 'deliveryID' => 7, 'item' => 'concrete', 'price' => 12.99, 'QTY' => 36]);
        DeliveryLines::create(['client_id' => 1, 'deliveryID' => 8, 'item' => 'fuel', 'price' => 1.49, 'QTY' => 100.12]);
        DeliveryLines::create(['client_id' => 3, 'deliveryID' => 9, 'item' => 'fuel', 'price' => 1.69, 'QTY' => 35]);
        DeliveryLines::create(['client_id' => 3, 'deliveryID' => 10, 'item' => 'concrete', 'price' => 14.99, 'QTY' => 65]);
        DeliveryLines::create(['client_id' => 7, 'deliveryID' => 11, 'item' => 'concrete', 'price' => 15.99, 'QTY' => 34]);
        DeliveryLines::create(['client_id' => 1, 'deliveryID' => 12, 'item' => 'concrete', 'price' => 15.99, 'QTY' => 2]);
        DeliveryLines::create(['client_id' => 2, 'deliveryID' => 13, 'item' => 'fuel', 'price' => 1.99, 'QTY' => 44]);



    }
}
