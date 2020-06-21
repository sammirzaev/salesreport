@extends('layouts.index')
@section('content')
    <div class="app-content content">
        <!-- Table head options start -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header mt-5">
                        <h4 class="card-title">Inquiry Registration</h4>
                        <div class="content">
                            <div class="col-md-4 col-lg-4 col-sm-12 float-right mt-2" style="opacity: .6;">
                                @include('flash-message')
                            </div>
                        </div>
                        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                        <div class="heading-elements">
                            <ul class="list-inline mb-0">
                                <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                <li><a data-action="close"><i class="ft-x"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-content collapse show">
                        <div class="card-body">
                            <div class="input-group col-md-8 col-lg-8 col-8 col-xl-8">
                            <button type="button"
                                    class="btn btn-icon btn-bg-gradient-x-purple-red mr-1 shadow-lg toggle"
                                    data-toggle="modal"
                                    data-keyboard="false"
                                    data-target="#addInquiry"
                                    id="inquiryAddBtn">
                                <i class="ft-droplet"></i>
                            </button>
                                @include('admin.inquiry.add_inquiry')
                                <div class="input-group offset-5 mt-3">
                                        <form action="{{route('filter')}}" class="col-md-4">
                                            {!! Form::select('status_id', array(''=>'Filter By Status') + $status, null, ['class'=>'form-control status_id mr-2', 'id'=>'status_id']) !!}
                                        </form>
                                        <form action="{{route('filterCat')}}" class="col-md-4">
                                            {!! Form::select('category_id', array(''=>'Filter By Category') + $categories, null, ['class'=>'form-control status_id mr-2', 'id'=>'category_id']) !!}
                                        </form>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <a class="btn btn-bg-gradient-x-red-pink" href="{{route('inquiry.index')}}"><i class="ft-filter"> Reset Filter</i></a>
                                        </div>
                                    </div>
                                </div>
                           </div>
                            <form action="{{route('dateRange')}}" method="GET" class="row offset-3 mt-5" id="input-daterange">
                                <div class="form-group">
                                    <span class="badge badge-primary">FROM</span>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input type="text" id="fromDate" name="fromDate" class="form-control" readonly>
                                    </div>
                                </div>
                                    <div class="form-group">
                                        <span class="badge badge-primary">TO</span>
                                    </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                       <input type="text" id="toDate" name="toDate" class="form-control" readonly>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-outline-success shadow-lg"><i class="ft-filter"> Filter Date</i></button>
                                    </div>
                                </div>
                            </form>
                            </div>
                        </div>
                        <div class="table-responsive table">
                            <table class="table m-1" id="dataTable">
                                <thead class="fixed-table-header">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Date of Request</th>
                                    <th scope="col">Seller</th>
                                    <th scope="col">Inquiry Type</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Company Name</th>
                                    <th scope="col">Industry</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">Website</th>
                                    <th scope="col">Full Name</th>
                                    <th scope="col">Position</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Phone Number</th>
                                    <th scope="col">Subject</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Created Date</th>
                                    <th scope="col">Updated Date</th>
                                    <th scope="col"></th>
                                </tr>
                                </thead>
                                <tbody>
                                    @if($inquiries)
                                        @foreach($inquiries as $inquiry)
                                            <tr>
                                                @if(Auth::user()->role_id == 1 || Auth::user()->role->name == 'seller' || Auth::user()->role->name == 'reporter' || Auth::user()->role->name == 'editor')
                                                <th scope="row">{{$inquiry->id}}</th>
                                                <td><span class="badge btn-bg-gradient-x-red-pink">{{$inquiry->date}}</span></td>
                                                <td><span class="badge badge-primary">{{$inquiry->seller}}</span></td>
                                                <td><span class="badge btn-bg-gradient-x-blue-green">{{$inquiry->category->name}}</span></td>
                                                <td><span class="badge btn-bg-gradient-x-blue-cyan">{{$inquiry->status->name}}</span></td>
                                                <td>{{$inquiry->company}}</td>
                                                @if(Auth::user()->role_id == 1 || Auth::user()->name == $inquiry->seller || Auth::user()->role->name == 'reporter' || Auth::user()->role->name == 'editor')
                                                <td>{{$inquiry->industry}}</td>
                                                <td>{{$inquiry->address}}</td>
                                                <td>{{$inquiry->website}}</td>
                                                <td>{{$inquiry->fullName}}</td>
                                                <td>{{$inquiry->position}}</td>
                                                <td>{{$inquiry->email}}</td>
                                                <td>{{$inquiry->phnumber}}</td>
                                                <td>{{$inquiry->subject}}</td>
                                                <td>{{$inquiry->description}}</td>
                                                <td>{{$inquiry->created_at->diffForHumans()}}</td>
                                                <td>{{$inquiry->updated_at->diffForHumans()}}</td>
                                                @if(Auth::user()->role_id == 1 || Auth::user()->role->name == 'editor' || Auth::user()->role->name == 'reporter' || Auth::user()->name == $inquiry->seller)
                                                <td>
                                                    <a href="{{ route('inquiry.edit', $inquiry->id)}}"
                                                       type="button"
                                                       class="btn btn-icon btn-bg-gradient-x-blue-green mr-1 shadow-lg shadow-lg"
                                                       data-inquiryid="{{$inquiry->id}}"
                                                       data-date="{{$inquiry->date}}"
                                                       data-type="{{$inquiry->category->id}}"
                                                       data-company="{{$inquiry->company}}"
                                                       data-industry="{{$inquiry->industry}}"
                                                       data-address="{{$inquiry->address}}"
                                                       data-website="{{$inquiry->website}}"
                                                       data-fullname="{{$inquiry->fullName}}"
                                                       data-position="{{$inquiry->position}}"
                                                       data-email="{{$inquiry->email}}"
                                                       data-phone="{{$inquiry->phnumber}}"
                                                       data-subject="{{$inquiry->subject}}"
                                                       data-desc="{{$inquiry->description}}"
                                                       data-status="{{$inquiry->status->id}}"
                                                       data-seller="{{$inquiry->seller}}"
                                                       data-toggle="modal"
                                                       data-keyboard="false"
                                                       data-target="#editInquiry"
                                                       id="inquiriesEditBtn">
                                                        <i class="ft-edit"></i>
                                                    </a>
                                                @endif
                                                    @if(Auth::user()->role_id == 1 || Auth::user()->role->name == 'editor')
                                                    <button type="button"
                                                            class="btn btn-icon btn-bg-gradient-x-purple-red mr-1 shadow-lg shadow-lg"
                                                            data-inquiryid="{{$inquiry->id}}"
                                                            data-toggle="modal"
                                                            data-keyboard="false"
                                                            data-target="#deleteInquiry_confirm">
                                                        <i class="ft-trash"></i>
                                                    </button>
                                                    @endif
                                                 @endif
                                                </td>
                                                @endif
                                            </tr>
                                            @include('admin.inquiry.edit_inquiry')
                                            @include('admin.inquiry.deleteInquiry_confirm')
                                        @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- Table head options end -->
        <div class="col-lg-6 col-md-12 offset-5">
            <div class="text-center mb-3">
                <nav aria-label="Page navigation">
                    <ul class="pagination pagination-round">
                        <li class="page-item">
{{--                          {{$inquiries->render()}}--}}
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
@stop
@section('scripts')
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4-4.1.1/jq-3.3.1/jszip-2.5.0/dt-1.10.20/af-2.3.4/b-1.6.1/b-colvis-1.6.1/b-flash-1.6.1/b-html5-1.6.1/b-print-1.6.1/cr-1.5.2/fc-3.3.0/fh-3.1.6/kt-2.5.1/r-2.2.3/rg-1.1.1/rr-1.2.6/sc-2.0.1/sp-1.0.1/sl-1.3.1/datatables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#dataTable').DataTable( {
                "paging": true,
                "pagingType": "full_numbers",
                "iDisplayLength": 30,
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'print'
                ]
            } );
        } );
        $('#datepicker').datepicker({
            weekStart: 1,
            dateFormat: 'mm-dd-yy',
            daysOfWeekHighlighted: "6,0",
            autoclose: true,
            todayHighlight: true,
        });

        $('#fromDate').datepicker({
            weekStart: 1,
            daysOfWeekHighlighted: "6,0",
            autoclose: true,
            todayHighlight: true,
        });

        $('#toDate').datepicker({
            weekStart: 1,
            daysOfWeekHighlighted: "6,0",
            autoclose: true,
            todayHighlight: true,
        });
    </script>
@stop
