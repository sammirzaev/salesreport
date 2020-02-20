@extends('layouts.index')
@section('content')
    <div class="app-content content">
        <!-- Table head options start -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Inquiry Status</h4>
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
                            <button type="button" class="btn btn-icon btn-bg-gradient-x-purple-red mr-1 shadow-lg toggle"><i class="ft-star"></i></button>
                            @include('admin.status.add_status')
                        </div>
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="thead-dark">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Created Date</th>
                                    <th scope="col">Updated Date</th>
                                    <th scope="col"></th>
                                </tr>
                                </thead>
                                <tbody>
                                @if($statuses)
                                    @foreach($statuses as $status)
                                        <tr>
                                            <th scope="row">{{$status->id}}</th>
                                            <td>{{$status->name}}</td>
                                            <td>{{$status->created_at->diffForHumans()}}</td>
                                            <td>{{$status->updated_at->diffForHumans()}}</td>
                                            <td>
                                                <a href="{{ route('status.edit', $status->id)}}"
                                                   type="button"
                                                   class="btn btn-icon btn-bg-gradient-x-blue-green mr-1 shadow-lg shadow-lg"
                                                   data-statusname="{{$status->name}}"
                                                   data-statusid="{{$status->id}}"
                                                   data-toggle="modal"
                                                   data-keyboard="false"
                                                   data-target="#editStatus"
                                                   id="roleStatusBtn">
                                                    <i class="ft-edit"></i>
                                                </a>
                                                <button type="button"
                                                        class="btn btn-icon btn-bg-gradient-x-purple-red mr-1 shadow-lg shadow-lg"
                                                        data-statusid="{{$status->id}}"
                                                        data-toggle="modal"
                                                        data-keyboard="false"
                                                        data-target="#deleteStatus_confirm">
                                                    <i class="ft-trash"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        @include('admin.status.edit_status')
                                        @include('admin.status.deleteStatus_confirm')
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
    </div>

@stop

