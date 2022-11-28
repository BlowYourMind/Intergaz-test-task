<?php

use App\Http\Controllers\DeliveriesController;
use App\Http\Controllers\DeliveryTypeController;
use App\Http\Controllers\InactiveClientsController;
use App\Http\Controllers\LastDeliveryController;
use App\Models\Addresses;
use App\Models\Clients;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/clients', function () {
    return view('client-list',
        [
            'clients' => Clients::all(),
            'addresses' => Addresses::all()
        ]);
});

Route::get('/client-deliveries', [DeliveriesController::class, 'show'])->middleware('requestCheck');
Route::get('/deliveries-types', [DeliveryTypeController::class, 'show']);
Route::get('/last-deliveries', [LastDeliveryController::class, 'show']);
Route::get('/inactive-clients', [InactiveClientsController::class, 'show']);


