<?php

namespace App\Http\Controllers;

use App\Models\Addresses;
use App\Models\Clients;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DeliveryTypeController extends Controller
{
    private array $addresses = [];
    private array $names = [];

    public function show()
    {

        $results = DB::table('deliveries')
            ->select('*')
            ->whereIn('addressID', (function ($query) {
                $query->from('deliveries')
                    ->select('addressID')
                    ->groupBy('addressID')
                    ->havingRaw('count(*) > 1');
            }))->get()->unique('addressID');

        foreach ($results as $result) {

            $this->addresses[] = Addresses::where('id', $result->addressID)->first()['title'];
            $this->names[] = Clients::where('id', Addresses::where('id', $result->addressID)->first()['clientID'])->first()['name'];
        }

        return view('client-deliveries-types', [
            'clientNames' => $this->names,
            'clientAddresses' => $this->addresses

        ]);
    }

}
