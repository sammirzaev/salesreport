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
            DB::raw('DAY(created_at) as day'),
            DB::raw('MONTHNAME(created_at) as month'),
            DB::raw('year(created_at) as year')
        ])->groupBy(['year', 'week', 'day', 'month'])->get();
        return view('admin.weeks.weeks', compact( 'ordersByWeek'));
    }

    public function monthlyReports(Request $request){
        $ordersByMonth = DB::table('inquiries')->select([
            DB::raw('count(id) as monthly_report'),
            DB::raw('MONTHNAME(created_at) as month'),
            DB::raw('year(created_at) as year')
        ])->groupBy(['year', 'month'])->get();
        return view('admin.month.monthly', compact('ordersByMonth'));
    }

    public function seller(){
        $sellerByWeek = DB::table('inquiries')->select([
            DB::raw('count(id) as weekly_report_quantity'),
            DB::raw('DAYNAME(created_at) as week'),
            DB::raw('DAY(created_at) as day'),
            DB::raw('MONTHNAME(created_at) as month'),
            DB::raw('year(created_at) as year'),
            DB::raw('seller as seller')
        ])->groupBy(['year', 'week', 'seller', 'day', 'month'])->get();
        return view('admin.weeks.seller', compact( 'sellerByWeek'));
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
