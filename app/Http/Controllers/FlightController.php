<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flight;

class FlightController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $flights = Flight::with('airportDeparture', 'airportArrival', 'airline')->get();
      return $flights;
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
      $flight = new Flight();
      $flight->code = $request->code;
      $flight->type = $request->type;
      $flight->departure_id = $request->departure_id;
      $flight->destination_id = $request->destination_id;
      $flight->departure_time = $request->departure_time;
      $flight->arrival_time = $request->arrival_time;
      $flight->airline_id = $request->airline_id;
      $flight->save();
      return $flight;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $flight = Flight::findOrFail($request->id);
        $flight->code = $request->code;
        $flight->type = $request->type;
        $flight->departure_id = $request->departure_id;
        $flight->destination_id = $request->destination_id;
        $flight->departure_time = $request->departure_time;
        $flight->arrival_time = $request->arrival_time;
        $flight->airline_id = $request->airline_id;
        $flight->save();
        return $flight;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $flight = Flight::destroy($request->id);
      return $airport;
    }
}
