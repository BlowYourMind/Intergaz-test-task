<?php

namespace Database\Seeders;

use App\Models\Addresses;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AddressesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Addresses::create(['title' => 'Lielā iela 1', 'clientID' => '1']);
        Addresses::create(['title' => 'Lielā iela 33', 'clientID' => '2']);
        Addresses::create(['title' => 'Lielā iela 22', 'clientID' => '3']);
        Addresses::create(['title' => 'Lielā iela 123', 'clientID' => '4']);
        Addresses::create(['title' => 'Lielā iela 1254', 'clientID' => '5']);
        Addresses::create(['title' => 'Lielā iela 12', 'clientID' => '6']);
        Addresses::create(['title' => 'Lielā iela 84', 'clientID' => '7']);


    }
}
