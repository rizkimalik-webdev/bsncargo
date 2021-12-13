<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Invoices extends Migration
{
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->string('no_invoice',50);
            $table->string('service',50);
            $table->string('service_type',50); 
            $table->string('origin');
            $table->string('destination');
            $table->timestamp('datetime');
            $table->text('description');
            $table->integer('amount');
            $table->string('unit',50);
            $table->string('status',50);
            $table->string('file_invoice');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('invoices');

    }
}
