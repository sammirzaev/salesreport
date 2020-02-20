<?php

namespace App\Http\Controllers;

use App\Months;
use Illuminate\Http\Request;

class MonthsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.month.monthly');
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
     * @param  \App\Months  $months
     * @return \Illuminate\Http\Response
     */
    public function show(Months $months)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Months  $months
     * @return \Illuminate\Http\Response
     */
    public function edit(Months $months)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Months  $months
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Months $months)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Months  $months
     * @return \Illuminate\Http\Response
     */
    public function destroy(Months $months)
    {
        //
    }
}
