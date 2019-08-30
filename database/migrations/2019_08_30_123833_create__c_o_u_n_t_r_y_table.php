<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCOUNTRYTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('COUNTRY', function (Blueprint $table) {
            $table->increments('COUNTRY_ID');
            $table->string('COUNTRY_ISO3',4);
            $table->string('COUNTRY_NAME',64);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('COUNTRY');
    }
}
