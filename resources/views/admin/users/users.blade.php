@extends('layouts.index')
@section('content')
    <div class="app-content content">
        <!-- Table head options start -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header mt-5">
                        <h4 class="card-title">Users  <span class="badge bg-gradient-directional-red p-2">{{strtoupper('If you will face any issue please contact with developer')}}</span></h4>
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
                            <button type="button" class="btn btn-icon btn-bg-gradient-x-purple-red mr-1 shadow-lg toggle"><i class="ft-command"></i></button>
                            @include('admin.users.add_user')
                        </div>
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="thead-dark">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Full Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Role</th>
                                    <th scope="col">Is Active</th>
                                    <th scope="col">Password</th>
                                    <th scope="col">Created Date</th>
                                    <th scope="col">Updated Date</th>
                                    <th scope="col"></th>
                                </tr>
                                </thead>
                                <tbody>
                                @if($users)
                                    @foreach($users as $user)
                                    <tr>
                                        <th scope="row">{{$user->id}}</th>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->email}}</td>
                                        <td><span class="badge bg-gradient-directional-pink p-2">{{strtoupper($user->role->name)}}</span></td>
                                        @if($user->is_active == 1)
                                            <td><span class="badge badge-success btn-bg-gradient-x-blue-green">{{$user->is_active == 1 ? 'Active': 'Not Active'}}</span></td>
                                        @else
                                            <td><span class="badge badge-danger btn-bg-gradient-x-purple-red">{{$user->is_active == 1 ? 'Active': 'Not Active'}}</span></td>
                                        @endif
                                        <td>{{substr($user->password, 0, 10)}}</td>
                                        <td>{{$user->created_at->diffForHumans()}}</td>
                                        <td>{{$user->updated_at->diffForHumans()}}</td>
                                        <td>
                                            <a href="{{ route('users.edit', $user->id)}}" type="button" class="btn btn-icon btn-bg-gradient-x-blue-green mr-1 shadow-lg shadow-lg" id="userEdit"><i class="ft-edit"></i></a>
                                            <button type="button" class="btn btn-icon btn-bg-gradient-x-purple-red mr-1 shadow-lg shadow-lg" data-userid="{{$user->id}}" data-toggle="modal" data-keyboard="false" data-target="#userConfirmDelete"><i class="ft-trash"></i></button>
                                        </td>
                                    </tr>
                                        @include('admin.users.delete_confirm')
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
