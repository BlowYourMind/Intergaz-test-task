<?php

namespace App\Http\Controllers;

use App\Models\Addresses;
use App\Models\Clients;
use App\Models\Deliveries;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InactiveClientsController extends Controller
{
    private array $addressesTitles = [];
    private array $clientNames = [];

    public function show()
    {
        $results = DB::table('deliveries')
            ->distinct()
            ->select('addressID')
            ->whereRaw('addressID NOT IN (
            SELECT addressID from deliveries WHERE type = 1
            )')
            ->get();

        foreach ($results as $result) {
            $this->addressesTitles[] = Addresses::where('id', $result->addressID)->get()->first();
            $this->clientNames[] = Clients::where('id', Addresses::where('id', $result->addressID)->get()->first()['clientID'])->get()->first()['name'];
        }

        return view('inactive-clients', [
            'addressesTitles' => $this->addressesTitles,
            'clientNames' => $this->clientNames,
        ]);
        // 1 2 3 5 , need 4 - 6
    }
}
