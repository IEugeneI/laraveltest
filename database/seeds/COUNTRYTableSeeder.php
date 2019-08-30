<?php

use Illuminate\Database\Seeder;
use App\Http\Controllers\ParsingDataController;
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
        $countrys=new ParsingDataController();

        foreach ($countrys->setIIso3CountryArray() as $key=>$value) {
            DB::table('COUNTRY')->insert([
                'COUNTRY_ISO3'=>$key,
                'COUNTRY_NAME'=>$value,
            ]);
        }

      /*  DB::table('COUNTRY')->insert([
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
        ]);*/
    }
}
