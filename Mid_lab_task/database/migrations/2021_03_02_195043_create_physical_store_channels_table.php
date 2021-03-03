<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhysicalStoreChannelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('physical_store_channels', function (Blueprint $table) {
            $table->increments('id');
            $table->string('customer_name');
            $table->string('address');
            $table->string('phone');
            $table->string('product_id');
            $table->string('product_name');
            $table->string('unit_price');
            $table->string('quantity');
            $table->string('total_price');
            $table->string('date_sold');
            $table->string('payment_type');
            $table->string('status');
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
        Schema::dropIfExists('physical_store_channels');
    }
}
