<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShipmentTracking extends Model
{
    use HasFactory;

    protected $table = "shipment_tracking";

    protected $fillable = [
        'no_invoice', 
        'datetime', 
        'status',
        'description'
    ];
}
