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
            $table->string('bfm_product_name');
            $table->string('bfm_product_url');
            $table->string('bfm_product_unit_price');
            $table->string('bfm_product_unit_quantity');
            $table->string('bfm_product_unit_color')->nullable();
            $table->string('bfm_product_unit_size')->nullable();
            $table->longText('bfm_product_comment')->nullable();
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
