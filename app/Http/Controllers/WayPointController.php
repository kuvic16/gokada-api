<?php

namespace App\Http\Controllers;

use App\WayPoint;
use Illuminate\Http\Request;

class WayPointController extends Controller
{

    /**
     * Initialize the class
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

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
     * @param  \App\WayPoint  $wayPoint
     * @return \Illuminate\Http\Response
     */
    public function show(WayPoint $wayPoint)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\WayPoint  $wayPoint
     * @return \Illuminate\Http\Response
     */
    public function edit(WayPoint $wayPoint)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\WayPoint  $wayPoint
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, WayPoint $wayPoint)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\WayPoint  $wayPoint
     * @return \Illuminate\Http\Response
     */
    public function destroy(WayPoint $wayPoint)
    {
        //
    }

    /**
     * Update driver arrive info
     *
     * @return array
     */
    public function driverArrived(){

    }

    /**
     * Update driver picked up parcel
     *
     * @return array
     */
    public function pickedupParcel(){

    }

    /**
     * Update driver dropped off the parcel
     *
     * @return array
     */
    public function dropoffedParcel(){

    }
}
