<?php

namespace App\Http\Controllers;

use App\CITY;
use App\COUNTRY;
use Illuminate\Http\Request;

class CITYController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\CITY  $cITY
     * @return \Illuminate\Http\Response
     */
    public function show(CITY $cITY)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CITY  $cITY
     * @return \Illuminate\Http\Response
     */
    public function edit(CITY $cITY)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CITY  $cITY
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CITY $cITY)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CITY  $cITY
     * @return \Illuminate\Http\Response
     */
    public function destroy(CITY $cITY)
    {
        //
    }

    public function getCitiesByCountryID($id)
    {
        return CITY::where('COUNTRY_ID', $id)->select('CITY_ID', 'CITY_NAME')->get();
    }

    public function getCitiesByCountryISO3($iso)
    {
        $id=COUNTRY::where('COUNTRY_ISO3',$iso)->value('COUNTRY_ID');
        return CITY::where('COUNTRY_ID', $id)->select('CITY_ID', 'CITY_NAME')->get();

    }
}
