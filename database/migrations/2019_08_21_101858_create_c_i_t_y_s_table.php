<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCITYSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('c_i_t_y_s', function (Blueprint $table) {
            $table->bigIncrements('CITY_ID');
            $table->integer('COUNTRY_ID');
            $table->string('CITY_NAME',64);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('c_i_t_y_s');
    }
}
