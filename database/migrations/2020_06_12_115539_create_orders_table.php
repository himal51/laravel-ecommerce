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
            $table->string('customer_name', 128);
            $table->string('customer_phone_number', 128); 
            $table->text('address');
            $table->string('city', 40);
            $table->string('postal_code',20);
            $table->decimal('total_amount',10,2);
            $table->decimal('discount_amount',10,2)->default(0.00);
            $table->decimal('paid_amount',10,2);
            $table->string('payment_status',20)->default("pending");
            $table->text('payment_details')->nullable();
            $table->string('operational_status',20)->default("pending");
            //$table->unsignedInteger('user_id');
            //$table->unsignedInteger('process_by')->nullable();
            $table->timestamps();
            $table->foreignId('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreignId('process_by')->references('id')->on('users')->onDelete('cascade')->nullable();
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
