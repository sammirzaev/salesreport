@extends('layouts.index')
@section('content')
    <div class="app-content content">
        <!-- Table head options start -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Inquiry Monthly Report</h4>
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
                            <div class="col-md-12 input-group offset-2">
                                {{--                            {!! Form::open(['method'=>'GET', 'action'=>'InquiriesController@show', 'id'=>'status', 'files'=>'true']) !!}--}}
                                {{--                            <div class="input-group">--}}
                                {{--                                <fieldset class="form-group col-xl-12 col-lg-12 col-md-12 offset-7">--}}
                                {{--                                    <a href="{{url('admin/inquiry/status/'.$status)}}">--}}
                                {{--                                    {!! Form::select('status_id', array(''=>'Search by Status') + $status, null, ['class'=>'form-control custom-select', 'id'=>'status']) !!}--}}
                                {{--                                    </a>--}}
                                {{--                                </fieldset>--}}
                                {{--                            </div>--}}
                                {{--                            {{Form::close()}}--}}
                                {{--                             {!! Form::open(['method'=>'GET', 'action'=>'InquiriesController@category', 'id'=>'category', 'files'=>'true']) !!}--}}
                                {{--                               <div class="input-group">--}}
                                {{--                                        <fieldset class="form-group col-xl-12 col-lg-12 col-md-12 offset-7">--}}
                                {{--                                            <a href="{{url('admin/inquiry/category/'.$categories)}}">--}}
                                {{--                                            {!! Form::select('category_id', array(''=>'Search by Category') + $categories, null, ['class'=>'form-control custom-select', 'id'=>'category']) !!}--}}
                                {{--                                            </a>--}}
                                {{--                                        </fieldset>--}}
                                {{--                                 </div>--}}
                                {{--                              {{Form::close()}}--}}
                            </div>
                            {!! Form::open(['method'=>'GET', 'action'=>'InquiriesController@index', 'id'=>'addInquiry', 'class'=>'input-group', 'style'=>'margin-bottom:20px;', 'files'=>'true']) !!}
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
                            {{Form::close()}}
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Date of Request</th>
                                <th scope="col">Inquiry Type</th>
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
                                <th scope="col">Status</th>
                                <th scope="col">User Comment</th>
                                <th scope="col">Created Date</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if($inquiries)
                                @foreach($inquiries as $inquiry)
                                    <tr>
                                        <th scope="row">{{$inquiry->id}}</th>
                                        <td><span class="badge btn-bg-gradient-x-red-pink">{{$inquiry->date}}</span></td>
                                        <td><span class="badge btn-bg-gradient-x-blue-green">{{$inquiry->category->name}}</span></td>
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
                                        <td><span class="badge btn-bg-gradient-x-blue-cyan">{{$inquiry->status->name}}</span></td>
                                        <td>{{$inquiry->comment}}</td>
                                        <td>{{$inquiry->created_at->diffForHumans()}}</td>
                                    </tr>
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


