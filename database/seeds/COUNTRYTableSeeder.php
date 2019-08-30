<?php

use Illuminate\Database\Seeder;

class COUNTRYTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('COUNTRY')->insert([
            'COUNTRY_ISO3'=>'UKR',
            'COUNTRY_NAME'=>'UKRAINE',
        ]);
        DB::table('COUNTRY')->insert([
            'COUNTRY_ISO3'=>'USA',
            'COUNTRY_NAME'=>'UNITED STATED',
        ]);
        DB::table('COUNTRY')->insert([
            'COUNTRY_ISO3'=>'GBR',
            'COUNTRY_NAME'=>'UNITED KINGDOM',
        ]);
    }
}
