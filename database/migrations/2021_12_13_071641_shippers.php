<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Shippers extends Migration
{
    public function up()
    {
        Schema::create('shippers', function (Blueprint $table) {
            $table->id();
            $table->string('shipper_name',50);
            $table->string('shipper_telp',50);
            $table->string('shipper_city',50);
            $table->string('shipper_address');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('shippers');

    }
}
