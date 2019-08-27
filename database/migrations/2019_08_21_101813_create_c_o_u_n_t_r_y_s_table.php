<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCOUNTRYSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('COUNTRY', function (Blueprint $table) {
            $table->bigIncrements('COUNTRY_ID');
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
        Schema::dropIfExists('c_o_u_n_t_r_y_s');
    }
}
