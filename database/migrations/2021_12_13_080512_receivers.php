<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Receivers extends Migration
{
    public function up()
    {
        Schema::create('receivers', function (Blueprint $table) {
            $table->id();
            $table->string('receiver_name',50);
            $table->string('receiver_telp',50);
            $table->string('receiver_city',50);
            $table->string('receiver_address');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('receivers');

    }
}
