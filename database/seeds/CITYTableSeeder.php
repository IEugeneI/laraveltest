<?php

use Illuminate\Database\Seeder;
use App\Http\Controllers\ParsingDataController;
use App\COUNTRY;
class CITYTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $controller=new ParsingDataController();
        foreach ($controller->setCapitalNameAndIso3() as $key=>$value)
        {
            $id=COUNTRY::where('COUNTRY_ISO3',$key)->value('COUNTRY_ID');
             DB::table('CITY')->insert([
           'COUNTRY_ID'=>$id,
           'CITY_NAME'=>$value,
             ]);
       }

       //
      /* DB::table('CITY')->insert([
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
       ]);*/


    }
}
