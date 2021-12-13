<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ServiceType extends Migration
{
    public function up()
    {
        Schema::create('service_type', function (Blueprint $table) {
            $table->id();
            $table->integer('service_id');
            $table->string('service_type_name',50);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('service_type');

    }
}
