<?php

namespace App\Http\Controllers;

use App\Categories;
use App\Exports\InquiriesExport;
use App\Exports\InquiriesExportByStatus;
use App\Exports\InquiryExport;
use App\Inquiries;
use App\Status;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rules\In;
use Maatwebsite\Excel\Facades\Excel;
use Yajra\DataTables\Facades\DataTables;

class InquiriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
            $search = $request->get('search');
            $inquiries = Inquiries::where('company', 'like', '%'.$search.'%')->
            orWhere('industry', 'like', '%'.$search.'%')->
            orWhere('address', 'like', '%'.$search.'%')->
            orWhere('fullName', 'like', '%'.$search.'%')->
            orWhere('position', 'like', '%'.$search.'%')->
            orWhere('email', 'like', '%'.$search.'%')->
            orWhere('subject', 'like', '%'.$search.'%')->
            orWhere('website', 'like', '%'.$search.'%')->
            orWhere('seller', 'like', '%'.$search.'%')->
            orWhere('description', 'like', '%'.$search.'%')->
            orderBy('id', 'DESC')->get();
        $status = Status::pluck('name', 'id')->all();
        $categories = Categories::pluck('name', 'id')->all();
        return view('admin.inquiry.inquiry', compact('inquiries', 'status', 'categories'));
    }
    public function filter(Request $request){
        $filter = $request->status_id;
        if (!empty($filter)) {
            $inquiries = Inquiries::where('status_id', 'like', $filter)->orderBy('id', 'DESC')->paginate(30);
        } else {
            $inquiries = Inquiries::where('id')->paginate(30);
        }
        $status = Status::pluck('name', 'id')->all();
        $categories = Categories::pluck('name', 'id')->all();
        return view('admin.inquiry.inquiry', compact('status', 'categories', 'inquiries'));
    }

    public function filterCat(Request $request){
        $filter = $request->category_id;
        if (!empty($filter)) {
            $inquiries = Inquiries::where('category_id', 'like', $filter)->orderBy('id', 'DESC')->get();
        } else {
            $inquiries = Inquiries::where('id')->get();
        }
        $status = Status::pluck('name', 'id')->all();
        $categories = Categories::pluck('name', 'id')->all();
        return view('admin.inquiry.inquiry', compact('status', 'categories', 'inquiries'));
    }

    public function export(){
        return Excel::download(new InquiriesExport(), 'inquiries_data_category - '.date("d-m-Y").'.xlsx');
    }
    public function exportByStatus(){
        return Excel::download(new InquiriesExportByStatus(), 'inquiries_data_status - '.date("d-m-Y").'.xlsx');
    }

    public function dateRange(Request $request){

        $filterFrom = $request->get('fromDate');
        $filterTo = $request->get('toDate');
        if (!empty($filterFrom) && !empty($filterTo)) {
            $inquiries = Inquiries::whereBetween('date',[$filterFrom, $filterTo])->get();
        } else {
            $inquiries = Inquiries::all();
        }
        $status = Status::pluck('name', 'id')->all();
        $categories = Categories::pluck('name', 'id')->all();
        return view('admin.inquiry.inquiry', compact('status', 'categories', 'inquiries'));
    }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $inquiries = Inquiries::all();
        $status = Status::pluck('name', 'id')->all();
        $categories = Categories::pluck('name', 'id')->all();
        return view('admin.inquiry.inquriy', compact('inquiries', 'status', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Inquiries::create($request->all());
        return redirect('admin/inquiry')->with('success', 'Inquiry has been registered successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Inquiries  $inquiries
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Inquiries  $inquiries
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $inquiries = Inquiries::findOrFail($id);
        $statuses = Status::pluck('name', 'id')->all();
        $categories = Categories::pluck('name', 'id')->all();
        return view('admin.inquiry.inquriy', compact('inquiries', 'statuses', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Inquiries  $inquiries
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $inquiries = Inquiries::findOrFail($request->inquiry_id);
        $inquiries->update($request->all());
        return redirect('admin/inquiry')->with('info', 'Inquiry has been updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Inquiries  $inquiries
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $inquiries = Inquiries::findOrFail($request->inquiry_id);
        $inquiries->delete();
        return redirect('admin/inquiry')->with('success', 'Inquiry has been deleted successfully!');
    }
}
