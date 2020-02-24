@extends('layouts.index')
@section('content')
    <div class="app-content content">
        <!-- Table head options start -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
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
                                <form action="{{route('export')}}" method="GET" enctype="multipart/form-data">
                                <button class="btn btn-bg-gradient-x-purple-blue mr-3 ml-3"><i class="ft-download"> Export Data By Type</i></button>
                                </form>
                                <form action="{{route('exportByStatus')}}" method="GET" enctype="multipart/form-data">
                                <button class="btn btn-bg-gradient-x-blue-purple-1 ml-2 mr-5"><i class="ft-download"> Export Data By Status</i></button>
                                </form>
                                <div class="input-group offset-4 mt-3">
                                        <form action="{{route('filter')}}" class="col-md-4">
                                            {!! Form::select('status_id', array(''=>'Filter By Status') + $status, null, ['class'=>'form-control status_id mr-2', 'id'=>'status_id']) !!}
                                        </form>
                                        <form action="{{route('filterCat')}}" class="col-md-4">
                                            {!! Form::select('category_id', array(''=>'Filter By Category') + $categories, null, ['class'=>'form-control status_id mr-2', 'id'=>'category_id']) !!}
                                        </form>
                                    <a class="btn btn-bg-gradient-x-red-pink col-md-3" href="{{route('inquiry.index')}}"><i class="ft-filter"> Reset Filter</i></a>
                                </div>
                           </div>
                            <div class="input-group col-md-4 col-lg-4 col-4 col-xl-4">

                            </div>
                           <div class="col-md-12 input-group offset-4">
                               {!! Form::open(['method'=>'GET', 'action'=>'InquiriesController@index', 'id'=>'addInquiry', 'style'=>'margin-bottom:20px;', 'files'=>'true']) !!}
                            </div>
                            <div class="input-group">
                                <input type="text"
                                       class="search-box col-xl-6 offset-2 search"
                                       name="search"
                                       id="search"
                                       style="
                                       border-bottom-left-radius: 20px;
                                       border-top-left-radius: 20px;
                                       padding: 10px;"
                                       value="{{isset($search) ? $search : ''}}">
                                <button type="submit"
                                        class="btn btn-bg-gradient-x-purple-blue float-right"
                                        id="searchBtn"
                                        style="
                                        border-bottom-right-radius: 20px;
                                        border-top-right-radius: 20px;">Search</button>
                            </div>
                            {{Form::close()}}
                            </div>
                        </div>
                        <div class="table-responsive table">
                            <table class="table" id="dataTable">
                                <thead class="thead-dark">
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
                                                <th scope="row">{{$inquiry->id}}</th>
                                                <td><span class="badge btn-bg-gradient-x-red-pink">{{$inquiry->date}}</span></td>
                                                <td><span class="badge badge-primary">{{$inquiry->seller}}</span></td>
                                                <td><span class="badge btn-bg-gradient-x-blue-green">{{$inquiry->category->name}}</span></td>
                                                <td><span class="badge btn-bg-gradient-x-blue-cyan">{{$inquiry->status->name}}</span></td>
                                                <td>{{$inquiry->company}}</td>
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
                                                    <button type="button"
                                                            class="btn btn-icon btn-bg-gradient-x-purple-red mr-1 shadow-lg shadow-lg"
                                                            data-inquiryid="{{$inquiry->id}}"
                                                            data-toggle="modal"
                                                            data-keyboard="false"
                                                            data-target="#deleteInquiry_confirm">
                                                        <i class="ft-trash"></i>
                                                    </button>
                                                </td>
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
                          {{$inquiries->render()}}
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
@stop

