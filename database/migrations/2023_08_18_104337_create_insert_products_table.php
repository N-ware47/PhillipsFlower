<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInsertProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('insert_products', function (Blueprint $table) {
            $table->id();
            $table->string('product_id')->nullable();
            $table->string('product_name')->nullable();
            $table->text('description')->nullable();
            $table->string('price')->nullable();
            $table->string('discount_price')->nullable();
            $table->string('quantity')->nullable();
            $table->string('tags')->nullable();
            $table->string('image')->nullable();
            $table->string('product_category')->nullable();
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
        Schema::dropIfExists('insert_products');
    }
}
