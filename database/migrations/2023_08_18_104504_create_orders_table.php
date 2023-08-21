<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('order_product_title_name')->nullable();
            $table->string('order_total_price')->nullable();
            $table->string('order_price')->nullable();
            $table->string('order_discount_price')->nullable();
            $table->string('order_quantity')->nullable();
            $table->string('order_user_Id')->nullable();
            $table->string('order_email')->nullable();
            $table->string('order_product_image')->nullable();
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
        Schema::dropIfExists('orders');
    }
}
