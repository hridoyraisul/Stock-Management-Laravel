<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSupplyerPaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supplyer_payments', function (Blueprint $table) {
            $table->id();
            $table->integer('amount')->nullable();
            $table->integer('supplyersID')->nullable();
            $table->tinyInteger('paymentMethod')->nullable();
            $table->integer('boxID')->nullable();
            $table->string('remarks')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('supplyer_payments');
    }
}
