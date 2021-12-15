<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipment extends Model
{
    use HasFactory;

    protected $table = "shipments";

    protected $fillable = [
        'logistic_id', 
        'no_invoice', 
        'service', 
        'service_type', 
        'origin', 
        'destination', 
        'datetime', 
        'description', 
        'product', 
        'amount', 
        'unit', 
        'driver', 
        'no_truck', 
        'file_invoice'
    ];
}
