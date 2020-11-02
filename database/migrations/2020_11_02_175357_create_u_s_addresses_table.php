<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUSAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('u_s_addresses', function (Blueprint $table) {
            $table->id();
            $table->string('house_number');
            $table->string('street_number');
            $table->string('state_name');
            $table->string('postal_code');
            $table->string('telephone_number');
            $table->boolean('deletable')->default(false);
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
        Schema::dropIfExists('u_s_addresses');
    }
}
