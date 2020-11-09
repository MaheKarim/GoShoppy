<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShipForMesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ship_for_mes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('status_id');
            $table->string('product_name');
            $table->string('product_link')->nullable();
            $table->string('product_weight');
            $table->string('product_quantity');
            $table->string('recvr_name');
            $table->string('recvr_phn_number1');
            $table->string('recvr_phn_number2')->nullable();
            $table->string('recvr_mail')->nullable();
            $table->longText('recvr_address');
            $table->string('recvr_upazila');
            $table->string('recvr_zila');
            $table->string('track_id');
            $table->longText('comment')->nullable();
            $table->string('delivery_time')->nullable();
            $table->string('user_id');
            $table->foreignId('payment_status')->default(1);
            $table->string('payble_money')->nullable();
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
        Schema::dropIfExists('ship_for_mes');
    }
}
