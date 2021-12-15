<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipper extends Model
{
    use HasFactory;

    protected $table = "shippers";

    protected $fillable = [
        'shipper_name', 
        'shipper_telp', 
        'shipper_city',
        'shipper_address'
    ];
}
