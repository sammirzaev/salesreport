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
                           </div>
                            @include('admin.inquiry.add_inquiry')
                           <div class="col-md-12 input-group offset-4">
                               {!! Form::open(['method'=>'GET', 'action'=>'InquiriesController@index', 'id'=>'addInquiry', 'style'=>'margin-bottom:20px;', 'files'=>'true']) !!}
                               <div class="input-group row">
                                        <fieldset class="form-group col-xl-4 col-lg-4 col-md-4">
                                            <select class="custom-select catID" id="catID" name="catID" data-column="0">
                                                <option selected="" value="">Filter Category</option>
                                                @foreach(App\Categories::all() as $category)
                                                <option value="{{$category->id}}">{{$category->name}}</option>
                                                @endforeach
                                            </select>
                                        </fieldset>
                                       <fieldset class="form-group col-xl-4 col-lg-4 col-md-4">
                                           <select class="custom-select statusID" id="statusID" name="statusID" data-column="1">
                                               <option selected="" value="">Filter Status</option>
                                               @foreach(App\Status::all() as $sts)
                                                   <option name="search" value="{{$sts->id}}">{{$sts->name}}</option>
                                               @endforeach
                                           </select>
                                       </fieldset>
                                   <fieldset class="form-group col-xl-2 col-lg-2 col-md-2">
                                       <button class="btn btn-bg-gradient-x-red-pink" type="button" name="filterBtn" id="filterBtn">Filter</button>
                                   </fieldset>
                                   <fieldset class="form-group col-xl-2 col-lg-2 col-md-2">
                                       <button class="btn btn-bg-gradient-x-orange-yellow" type="button" name="reset" id="reset">Reset Filter</button>
                                   </fieldset>
                                 </div>
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
                                    <th scope="col">User Comment</th>
                                    <th scope="col">Created Date</th>
                                    <th scope="col">Updated Date</th>
                                    <th scope="col"></th>
                                </tr>
                                </thead>
                                <tbody>
                                @if($inquiries)
                                    @foreach($inquiries as $inquiry)
                                        <tr>
                                            <th scope="row" name="id">{{$inquiry->id}}</th>
                                            <td><span class="badge btn-bg-gradient-x-red-pink" name="date">{{$inquiry->date}}</span></td>
                                            <td><span class="badge btn-bg-gradient-x-blue-green" name="category_id">{{$inquiry->category->name}}</span></td>
                                            <td><span class="badge btn-bg-gradient-x-blue-cyan" name="status_id">{{$inquiry->status->name}}</span></td>
                                            <td name="company">{{$inquiry->company}}</td>
                                            <td name="industry">{{$inquiry->industry}}</td>
                                            <td name="address">{{$inquiry->address}}</td>
                                            <td name="website">{{$inquiry->website}}</td>
                                            <td name="fullName">{{$inquiry->fullName}}</td>
                                            <td name="position">{{$inquiry->position}}</td>
                                            <td name="email">{{$inquiry->email}}</td>
                                            <td name="phnumber">{{$inquiry->phnumber}}</td>
                                            <td name="subject">{{$inquiry->subject}}</td>
                                            <td name="description">{{$inquiry->description}}</td>
                                            <td name="comment">{{$inquiry->comment}}</td>
                                            <td name="created_at">{{$inquiry->created_at->diffForHumans()}}</td>
                                            <td name="updated_at">{{$inquiry->updated_at->diffForHumans()}}</td>
                                            <td>
                                                <a href="{{ route('inquiry.edit', $inquiry->id)}}"
                                                   type="button"
                                                   class="btn btn-icon btn-bg-gradient-x-blue-green mr-1 shadow-lg shadow-lg"
                                                   data-inquiryid="{{$inquiry->id}}"
                                                   data-inquirydate="{{$inquiry->date}}"
                                                   data-inquirytype="{{$inquiry->category->name}}"
                                                   data-inquirycompany="{{$inquiry->company}}"
                                                   data-inquiryindustry="{{$inquiry->industry}}"
                                                   data-inquiryaddress="{{$inquiry->address}}"
                                                   data-inquirywebsite="{{$inquiry->website}}"
                                                   data-inquiryfullname="{{$inquiry->fullName}}"
                                                   data-inquiryposition="{{$inquiry->position}}"
                                                   data-inquiryemail="{{$inquiry->email}}"
                                                   data-inquiryphone="{{$inquiry->phnumber}}"
                                                   data-inquirysubject="{{$inquiry->subject}}"
                                                   data-inquirydesc="{{$inquiry->description}}"
                                                   data-inquirystatus="{{$inquiry->status->name}}"
                                                   data-inquirycomment="{{$inquiry->comment}}"
                                                   data-toggle="modal"
                                                   data-keyboard="false"
                                                   data-target="#editInquiry"
                                                   id="categoryEditBtn">
                                                      <i class="ft-edit"></i>
                                                 </a>
                                                <button type="button"
                                                        class="btn btn-icon btn-bg-gradient-x-purple-red mr-1 shadow-lg shadow-lg"
                                                        data-categoryid="{{$inquiry->id}}"
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
@section('scripts')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdn.rawgit.com/eligrey/FileSaver.js/e9d941381475b5df8b7d7691013401e171014e89/FileSaver.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/TableExport/3.3.5/js/tableexport.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">
        $('table').tableExport({
            position: "top",
            fileName: 'Inquiries Report',
            formats: ["csv"],
            bootstrap: true,
            headers: true,
            footers: true,
            exportButtons: true,
        });
        document.getElementsByClassName('catID').value = localStorage.getItem('catID');
        document.getElementsByClassName('statusID').value = localStorage.getItem('statusID');
    </script>
@stop

