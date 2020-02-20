<?php

namespace App\Http\Controllers;

use App\Inquiries;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class APIController extends Controller
{
    public function ajax(){
        return Datatables::of(Inquiries::all())->make(true);
    }
}
