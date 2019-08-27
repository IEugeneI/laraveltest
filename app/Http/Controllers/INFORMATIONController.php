<?php

namespace App\Http\Controllers;
use App\INFORMATION;
use Illuminate\Http\Request;


class INFORMATIONController extends Controller
{

    //
    public function storeInformation(Request $request)
    {
        $countryId=$request->get('countryId');
        $cityId=$request->get('cityId');
        $information=new INFORMATION();
        $information->COUNTRY_ID=$countryId;
        $information->CITY_ID=$cityId;
        $information->IP= \Request::ip();
        $information->save();
        echo "Спасибо ваш ответ сохранен!";

    }
}
