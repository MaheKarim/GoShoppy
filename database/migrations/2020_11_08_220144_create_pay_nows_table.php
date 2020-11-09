<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePayNowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pay_nows', function (Blueprint $table) {
            $table->id();
            $table->string('payment_trackID');
            $table->bigInteger('payment_name_id');
            $table->string('payment_sender_acc');
            $table->string('payment_sender_money');
            $table->string('payment_sender_traxid')->nullable();
            $table->foreignId('status_id');
            $table->integer('user_id');
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
        Schema::dropIfExists('pay_nows');
    }
}
