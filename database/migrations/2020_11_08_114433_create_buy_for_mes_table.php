<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuyForMesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buy_for_mes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('url');
            $table->string('unit_price');
            $table->string('unit_quantity');
            $table->string('unit_color')->nullable();
            $table->string('unit_size')->nullable();
            $table->longText('comment')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->string('courier_charge')->nullable();
            $table->foreignId('status_id')->default(1);
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
        Schema::dropIfExists('buy_for_mes');
    }
}
