<?php

namespace App\Http\Controllers;

use App\Charts;
use Illuminate\Http\Request;

class ChartsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.charts.chart');
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
     * @param  \App\Charts  $charts
     * @return \Illuminate\Http\Response
     */
    public function show(Charts $charts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Charts  $charts
     * @return \Illuminate\Http\Response
     */
    public function edit(Charts $charts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Charts  $charts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Charts $charts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Charts  $charts
     * @return \Illuminate\Http\Response
     */
    public function destroy(Charts $charts)
    {
        //
    }
}
