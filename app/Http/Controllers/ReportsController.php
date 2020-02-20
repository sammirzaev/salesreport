<?php

namespace App\Http\Controllers;

use App\Categories;
use App\Inquiries;
use App\Reports;
use App\Status;
use Carbon\CarbonImmutable;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class ReportsController extends Controller
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


    public function weeklyReports(){
        $ordersByWeek = DB::table('inquiries')->select([
            DB::raw('count(id) as weekly_report_quantity'),
            DB::raw('DAYNAME(created_at) as week'),
            DB::raw('year(created_at) as year')
        ])->groupBy(['year', 'week'])->get();
        return view('admin.weeks.weeks', compact( 'ordersByWeek'));
    }

    public function monthlyReports(Request $request){
        $search = $request->get('search');
        $inquiries = Inquiries::where('company', 'like', '%'.$search.'%')->
        orWhere('date', 'like', '%'.$search.'%')->
        orWhere('company', 'like', '%'.$search.'%')->
        orWhere('position', 'like', '%'.$search.'%')->
        orWhere('email', 'like', '%'.$search.'%')->
        orWhere('subject', 'like', '%'.$search.'%')->
        orWhere('website', 'like', '%'.$search.'%')->
        orWhere('description', 'like', '%'.$search.'%')->
        orWhere('id', 'like', '%'.$search.'%')->
        orderBy('id', 'DESC')->paginate(30);
        $status = Status::pluck('name', 'id')->all();
        $categories = Categories::pluck('name', 'id')->all();
        return view('admin.month.monthly', compact('status', 'categories', 'inquiries'));
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
     * @param  \App\Reports  $reports
     * @return \Illuminate\Http\Response
     */
    public function show(Reports $reports)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Reports  $reports
     * @return \Illuminate\Http\Response
     */
    public function edit(Reports $reports)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Reports  $reports
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reports $reports)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Reports  $reports
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reports $reports)
    {
        //
    }
}
