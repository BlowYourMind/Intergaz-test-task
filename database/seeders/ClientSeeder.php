<?php

namespace Database\Seeders;

use App\Models\Clients;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Clients::create(['name' => 'Maksims Ņikitins', 'phone' => '23123131']);
        Clients::create(['name' => 'Donald Trump', 'phone' => '23123132']);
        Clients::create(['name' => 'Egils Levits', 'phone' => '23123133']);
        Clients::create(['name' => 'Raimonds Pauls', 'phone' => '23123134']);
        Clients::create(['name' => 'Miley Cyrus', 'phone' => '23123135']);
        Clients::create(['name' => 'Michael Jordan', 'phone' => '23123136']);
        Clients::create(['name' => 'Michael Phelps', 'phone' => '23781326']);


    }
}
