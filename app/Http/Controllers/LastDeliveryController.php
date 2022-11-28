<?php

namespace App\Http\Controllers;

use App\Models\Addresses;
use App\Models\Clients;
use App\Models\Deliveries;
use App\Models\DeliveryLines;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LastDeliveryController extends Controller
{
    private array $names = [];
    private array $addresses = [];
    private array $dates = [];
    private array $types = [];
    private array $productPrices = [];
    private array $productQTY = [];

    public function show()
    {

        $results = DB::table(DB::raw('deliveries tt'))
            ->select('tt.*')
            ->join(DB::raw('(SELECT addressID, MAX(created_at) AS MaxDateTime
      FROM deliveries
      GROUP BY addressID) groupedtt'), function ($join) {
                $join->on('tt.addressID', '=', 'groupedtt.addressID')
                    ->on('tt.created_at', '=', 'groupedtt.MaxDateTime');
            })
            ->get();
        foreach ($results as $result) {
            $deliveries = new Deliveries();
            $this->names[] = Clients::where('id', Addresses::where('id', $result->addressID)->first()['clientID'])->get()->first();
            $this->addresses[] = Addresses::where('id', $result->addressID)->get()->first()['title'];
            $this->dates[] = $result->created_at;
            $this->types[] = $deliveries->checkType($result->type);
            $this->productPrices[] = DeliveryLines::where('deliveryID', $result->id)->get()->first()['price'];
            $this->productQTY[] = DeliveryLines::where('deliveryID', $result->id)->get()->first()['QTY'];

        }

        return view('client-all-last-deliveries', [
            'names' => $this->names,
            'addresses' => $this->addresses,
            'dates' => $this->dates,
            'types' => $this->types,
            'productPrices' => $this->productPrices,
            'productQTY' => $this->productQTY
        ]);
    }
}
