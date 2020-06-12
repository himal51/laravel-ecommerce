<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_products', function (Blueprint $table) {
            $table->id();
            //$table->unsignedInteger('order_id');
            //$table->unsignedInteger('product_id');
            $table->integer('quantity');
            $table->decimal('price', 10, 2);
            $table->foreignId('order_id')->reference('id')->on('orders')->onDelete('cascade');
            $table->foreignId('product_id')->reference('id')->on('products')->onDelete('cascade');
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
        Schema::dropIfExists('order_products');
    }
}
