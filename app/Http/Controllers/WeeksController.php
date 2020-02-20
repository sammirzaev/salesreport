<?php

namespace App\Http\Controllers;

use App\Weeks;
use Illuminate\Http\Request;

class WeeksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.weeks.weeks');
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
     * @param  \App\Weeks  $weeks
     * @return \Illuminate\Http\Response
     */
    public function show(Weeks $weeks)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Weeks  $weeks
     * @return \Illuminate\Http\Response
     */
    public function edit(Weeks $weeks)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Weeks  $weeks
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Weeks $weeks)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Weeks  $weeks
     * @return \Illuminate\Http\Response
     */
    public function destroy(Weeks $weeks)
    {
        //
    }
}
