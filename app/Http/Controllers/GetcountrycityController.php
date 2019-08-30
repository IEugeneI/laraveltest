<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GetcountrycityController extends Controller
{
    //
    private $guzzle;


    public function __construct()
    {
        $this->guzzle = new \GuzzleHttp\Client();;
    }


    public function getCountryNamesByIso2()
    {
        $result = $this->guzzle->get('http://country.io/names.json');
        $content = json_decode($result->getBody(),true);
        return $content;
    }


    public function getIso3ByIso2()
    {
        $result= $this->guzzle->get('http://country.io/iso3.json');
        $content=json_decode($result->getBody(),true);
        return $content;
    }


    public function getCapitalNamesByIso2()
    {
        $result= $this->guzzle->get('http://country.io/capital.json');
        $content=json_decode($result->getBody(),true);
        return $content;
    }
}
