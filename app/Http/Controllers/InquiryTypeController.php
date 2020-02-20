<?php

namespace App\Http\Controllers;

use App\Categories;
use App\Charts\InquiryChart;
use App\Inquiries;
use App\InquiryType;
use App\Status;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;


class InquiryTypeController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
// ================Monthly Inquiries Chart=================================================//
        //Inquiries month with array
        $month_array = [];
        $cat_month = Inquiries::orderBy('created_at', 'ASC')->pluck('created_at');
        if(!empty($cat_month)){
            foreach ($cat_month as $month){
                $date = new \DateTime($month);
                $month_num = $date->format('m');
                $month_name = $date->format('M y');
                $month_array[$month_num] = $month_name;
            }
        }
        //Inquiries name pushing to array()
        $month_array_name = array();
        if (!empty( $month_array )) {
            foreach ($month_array as $month_name){
                array_push($month_array_name, $month_name);
            }
        }
        //Inquiries number month count
        $monthly_cat_count_array = array();
        $month_array = $this->getAllInquiriesCategoryAllMonth();
        if (!empty( $month_array )) {
            foreach ($month_array as $month_num => $month_name){
                $monthly_cat_count = $this->getAllInquiriesCategoryCount($month_num);
                array_push($monthly_cat_count_array, $monthly_cat_count);
            }
        }
        //rounding up max count
        $max_num = max($monthly_cat_count_array);
        $max = round(($max_num + 10/2)/10)*10;
// ================END Monthly Inquiries Chart===============================================//
//  =======================Weekly Inquiries Chart===========================================//
        //Inquiries number week count
        $weekly_cat_count_array = array();
        $weeks_array = $this->getAllInquiriesAllWeeks();
        if (!empty( $weeks_array )) {
            foreach ($weeks_array as  $week_days_num => $week_days_name){
                $weekly_cat_count = $this->getWeeksAllInquiries($week_days_num);
                array_push($weekly_cat_count_array, $weekly_cat_count);
            }
        }

        //Inquiries name pushing to array()
        $week_array_name = array();
        if (!empty( $weeks_array )) {
            foreach ($weeks_array as $week_days_name){
                array_push($week_array_name, $week_days_name);
            }
        }

        //Inquiries name pushing to array()
        $week_array_day = array();
        if (!empty( $weeks_array )) {
            foreach ($weeks_array as $week_days_num){
                $weekly_cat_count = $this->getWeeksAllInquiries($week_days_num);
                array_push($week_array_day, $week_days_num);
            }
        }
        //  =======================END Weekly Inquiries Chart======================================//
        //Chartjs Bar with Laravel
        $chart = new InquiryChart();
        $chart->labels($month_array_name);
        $chart->title('Monthly Inquiries');
        $chart->loaderColor('#3F3A60');
        $chart->dataset('Inquiries Monthly', 'bar', $monthly_cat_count_array)
            ->color("rgb(255, 99, 132)")
            ->backgroundcolor("rgb(255, 99, 132)")
            ->fill(true)
            ->linetension(0.3);
        $chart->displayLegend('Inquiries Weekly');

        $chartWeeks = new InquiryChart();
        $chartWeeks->labels($week_array_name);
        $chartWeeks->title('Weekly Inquiries');
        $chartWeeks->loaderColor('#3F3A60');
        $chartWeeks->dataset('Inquiries Weekly', 'line', $weekly_cat_count_array)
            ->color("rgb(255, 99, 132)")
            ->backgroundcolor("rgb(255, 99, 132)")
            ->fill(false)
            ->linetension(0.3);
        $chartWeeks->displayLegend('Inquiries Weekly');
        return view('admin.charts.inquirytype', compact('chart', 'chartWeeks'));
    }

//============Montly Chartjs Count==========================
    public function getAllInquiriesCategoryAllMonth(){
        $month_array = array();
        $cat_month = Inquiries::orderBy('created_at', 'ASC')->pluck('created_at');
        if(!empty($cat_month)){
            foreach ($cat_month as $month){
                $date = new \DateTime($month);
                $month_num = $date->format('m');
                $month_name = $date->format('M');
                $month_array[$month_num] = $month_name;
            }
        }
        return $month_array;
    }
//============Montly Chartjs Count==========================
    public function getAllInquiriesCategoryCount($month){
        $monthly_cat_count = Inquiries::whereMonth('created_at', $month)->count();
        return $monthly_cat_count;
    }

//============Weekly Chartjs Count==========================
    public function getWeeksAllInquiries($days){
        $week_days = Inquiries::whereDay('created_at', '=', $days)->count();;
        return $week_days;
    }

    public function getAllInquiriesAllWeeks(){
        $weeks_array = [];
        $cat_weeks =  Inquiries::orderBy('created_at', 'ASC')->pluck('created_at');
        if(!empty($cat_weeks)){
            foreach ($cat_weeks as $weeks){
                $date = new \DateTime($weeks);
                $week_days_name = $date->format('l M');
                $week_days_num = $date->format('d');
                $weeks_array[$week_days_num] = $week_days_name;
            }
        }
        return $weeks_array;
    }

//    public function getCatAllMonth(){
//        $monthly_cat_count_array = array();
//        $month_array = $this->getAllInquiriesCategoryAllMonth();
//        $month_name_array = array();
//        if (!empty( $month_array )) {
//            foreach ($month_array as $month_num => $month_name){
//                $monthly_cat_count = $this->getAllInquiriesCategoryCount($month_num);
//                array_push($monthly_cat_count_array, $monthly_cat_count);
//                array_push($month_name_array, $month_name);
//            }
//        }
//        $max_num = max($monthly_cat_count_array);
//        $max = round(($max_num + 10/2)/10)*10;
//        $monthly_cat_data_array = array(
//            'months' => $month_name_array,
//            'cat_count' => $monthly_cat_count_array,
//            'max' => $max,
//        );
//        return $monthly_cat_data_array;
//    }


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
     * @param  \App\InquiryType  $inquiryType
     * @return \Illuminate\Http\Response
     */
    public function show(InquiryType $inquiryType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\InquiryType  $inquiryType
     * @return \Illuminate\Http\Response
     */
    public function edit(InquiryType $inquiryType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\InquiryType  $inquiryType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, InquiryType $inquiryType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\InquiryType  $inquiryType
     * @return \Illuminate\Http\Response
     */
    public function destroy(InquiryType $inquiryType)
    {
        //
    }
}
