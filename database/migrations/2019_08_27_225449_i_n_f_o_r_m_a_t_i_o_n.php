<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class INFORMATION extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

        Schema::create('i_n_f_o_r_m_a_t_i_o_n', function (Blueprint $table) {
            $table->integer('CITY_ID');
            $table->integer('COUNTRY_ID');
            $table->string('IP',64);
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('i_n_f_o_r_m_a_t_i_o_n');
    }
}
