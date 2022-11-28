<?php

namespace App\Http\Controllers;

use App\Models\Addresses;
use App\Models\Clients;
use App\Models\Deliveries;
use App\Models\DeliveryLines;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DeliveriesController extends Controller
{
    public function show(Request $request)
    {
        return view('client-deliveries',
            [
                'client'=> Clients::where('id', $request['clientID'])->first(),
                'deliveries' => Deliveries::where('addressID', Clients::where('id', $request['clientID'])->first()['id'])->get(),
                'addresses' => Addresses::all(),
                'deliveryLines' => DeliveryLines::where('client_id', $request['clientID'])->get(),
            ]);
    }
}
