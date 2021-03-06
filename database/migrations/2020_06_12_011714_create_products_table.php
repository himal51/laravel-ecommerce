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
            $table->string('title', 128)->unique();
            $table->string('slug', 128)->unique();
            $table->longText('description');
            $table->tinyInteger('in_stock')->default(1);
            $table->decimal('price', 8, 2);
            $table->decimal('sales_price', 8, 2)->nullable();
            $table->tinyInteger('active')->default(1);
            $table->unsignedInteger('category_id');
            //$table->foreignId('category_id')->references('id')->on('categories')->onDelete('cascade')->default(0);
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
