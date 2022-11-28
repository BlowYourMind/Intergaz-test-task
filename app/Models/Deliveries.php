<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deliveries extends Model
{
    const TYPE_LIQUID_PRODUCT = 1;
    const TYPE_SOLID_PRODUCT = 2;
    const STATUS_DELIVERED_PRODUCT = 1;
    const STATUS_NOT_DELIVERED_PRODUCT = 2;
    const STATUS_DECLINED_PRODUCT = 3;

    public function checkType  (int $id)
    {
        if($id == self::TYPE_LIQUID_PRODUCT)
        {
            return "Liquid Product";
        }
        elseif($id == self::TYPE_SOLID_PRODUCT)
        {
            return "Solid Product";
        }
        else{
                return response()->json(['error' =>'Invalid type id']);
        }
    }

    public function checkStatus(int $id)
    {
        if($id == self::STATUS_DELIVERED_PRODUCT)
        {
            return "Product delivered";
        }
        elseif($id == self::STATUS_NOT_DELIVERED_PRODUCT)
        {
            return "Product still on the way";
        }
        elseif($id == self::STATUS_DECLINED_PRODUCT)
        {
            return "Shipping declined";
        }
    }

    protected $fillable = ['routeID','addressID', 'type', 'status'];

}
