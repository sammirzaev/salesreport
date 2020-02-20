<?php

namespace App\Http\Controllers;

use App\MonthlyCharts;
use Illuminate\Http\Request;

class MonthlyChartsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.charts.monthlychart');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

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
     * @param  \App\MonthlyCharts  $monthlyCharts
     * @return \Illuminate\Http\Response
     */
    public function show(MonthlyCharts $monthlyCharts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MonthlyCharts  $monthlyCharts
     * @return \Illuminate\Http\Response
     */
    public function edit(MonthlyCharts $monthlyCharts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MonthlyCharts  $monthlyCharts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MonthlyCharts $monthlyCharts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MonthlyCharts  $monthlyCharts
     * @return \Illuminate\Http\Response
     */
    public function destroy(MonthlyCharts $monthlyCharts)
    {
        //
    }
}
