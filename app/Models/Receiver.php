<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receiver extends Model
{
    use HasFactory;

    protected $table = "receivers";

    protected $fillable = [
        'receiver_name', 
        'receiver_telp', 
        'receiver_city',
        'receiver_address'
    ];
}
