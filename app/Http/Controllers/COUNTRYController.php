<?php

namespace App\Http\Controllers;
use App\Http\Resources\COUNTRYResource;
use App\COUNTRY;
use Illuminate\Http\Request;
use DB;
use App\Http\Controllers\CITYController;


class COUNTRYController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      //  $citycontr=new CITYController();
       // $output=$citycontr->getCitiesByCountryID(1);
      //  foreach ($output as $item) {
        //    echo $item->CITY_NAME;
       //     echo"<br>";
       // }

        $country_list=$this->getAllCountries();
        return view('welcome')->with('country_list',$country_list);
    }

    public function fetch(Request $request)
    {
        $id=$request->get('id');
        $citycontr=new CITYController();

        $data=$citycontr->getCitiesByCountryID($id);
       $output='<option value="">SELECY CITY</option>';

        foreach ($data as $item) {
            $output.='<option value="'.$item->CITY_NAME.'" id="'.$item->CITY_ID.'">'.$item->CITY_NAME.'</option>';

       }
        return $output ;

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(COUNTRY $country)
    {
       return new COUNTRYResource($country);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getAllCountries()
    {
        return COUNTRY::all();
    }

    public function getCountryBNameyISO3($name)
    {
        return COUNTRY::where('COUNTRY_ISO3',$name)->get('COUNTRY_NAME');
    }

    public function getCountryIDByName($id)
    {
        return COUNTRY::where('COUNTRY_ID', $id)->get('COUNTRY_NAME');
    }


}
