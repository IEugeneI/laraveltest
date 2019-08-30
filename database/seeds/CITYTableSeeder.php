<?php

use Illuminate\Database\Seeder;

class CITYTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('CITY')->insert([
            'COUNTRY_ID'=>'1',
            'CITY_NAME'=>'KYIV',
        ]);
        DB::table('CITY')->insert([
            'COUNTRY_ID'=>'1',
            'CITY_NAME'=>'DNIPRO',
        ]);
        DB::table('CITY')->insert([
            'COUNTRY_ID'=>'1',
            'CITY_NAME'=>'ODESSA',
        ]);
        DB::table('CITY')->insert([
            'COUNTRY_ID'=>'2',
            'CITY_NAME'=>'NEW YORK',
        ]);
        DB::table('CITY')->insert([
            'COUNTRY_ID'=>'2',
            'CITY_NAME'=>'NEW JERSEY',
        ]);
        DB::table('CITY')->insert([
            'COUNTRY_ID'=>'2',
            'CITY_NAME'=>'CHIKAGO',
        ]);
        DB::table('CITY')->insert([
            'COUNTRY_ID'=>'3',
            'CITY_NAME'=>'LONDON',
        ]);
        DB::table('CITY')->insert([
            'COUNTRY_ID'=>'3',
            'CITY_NAME'=>'BIRMINGHAM',
        ]);
        DB::table('CITY')->insert([
            'COUNTRY_ID'=>'3',
            'CITY_NAME'=>'NEW CASTLE',
        ]);


    }
}
