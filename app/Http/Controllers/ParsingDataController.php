<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ParsingDataController extends Controller
{
    //
    private $getCountryCityController;
    private $iso3Iso2;
    private $iso2Country;
    private $capitalIso2;

    public function __construct()
    {
        $this->getCountryCityController=new GetcountrycityController();
        $this->iso3Iso2=$this->getCountryCityController->getIso3ByIso2();
        $this->iso2Country=$this->getCountryCityController->getCountryNamesByIso2();
        $this->capitalIso2=$this->getCountryCityController->getCapitalNamesByIso2();
    }

    public function setIIso3CountryArray()
    {
        $iso3countryname=[];

        foreach ($this->iso3Iso2 as $key=>$value)
        {
            foreach ($this->iso2Country as $keey=>$item)
                {
                        if($key==$keey)
                        {
                            $iso3countryname[$value]=$item;
                        }
                }
        }
        return $iso3countryname;
    }

    public function setCapitalNameAndIso3()
    {
        $capitalIso3=[];
        foreach ($this->iso3Iso2 as $item=>$value)
        {
          foreach ($this->capitalIso2 as $key=>$res)
          {
              if($item==$key)
              {
                  $capitalIso3[$value]=$res;
              }
          }
        }
        return $capitalIso3;
    }

}
