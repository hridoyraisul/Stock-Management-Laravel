<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('pName')->nullable();
            $table->string('color')->nullable();
            $table->string('size')->nullable();
            $table->string('boxID');
            $table->integer('quantity');
            $table->integer('price')->default(0);;
            $table->integer('availableQty')->default(0);
            $table->integer('styleID');
            $table->integer('brandID');
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
        Schema::dropIfExists('products');
    }
}
