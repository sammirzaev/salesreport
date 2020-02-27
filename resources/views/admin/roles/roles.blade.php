@extends('layouts.index')
@section('content')
    <div class="app-content content">
        <!-- Table head options start -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header mt-5">
                        <h4 class="card-title">User Roles</h4>
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
                            <button type="button" class="btn btn-icon btn-bg-gradient-x-purple-red mr-1 shadow-lg toggle"><i class="ft-package"></i></button>
                            @include('admin.roles.add_role')
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
                                @if($roles)
                                    @foreach($roles as $role)
                                        <tr>
                                            <th scope="row">{{$role->id}}</th>
                                            <td>{{$role->name}}</td>
                                            <td>{{$role->created_at->diffForHumans()}}</td>
                                            <td>{{$role->updated_at->diffForHumans()}}</td>
                                            <td>
                                                <a href="{{ route('roles.edit', $role->id)}}" type="button" class="btn btn-icon btn-bg-gradient-x-blue-green mr-1 shadow-lg shadow-lg" data-editname="{{$role->name}}" data-roleid="{{$role->id}}" data-toggle="modal" data-keyboard="false" data-target="#editRole" id="roleEditBtn"><i class="ft-edit"></i></a>
                                                <button type="button" class="btn btn-icon btn-bg-gradient-x-purple-red mr-1 shadow-lg shadow-lg" data-roleid="{{$role->id}}" data-toggle="modal" data-keyboard="false" data-target="#deleteRole_confirm"><i class="ft-trash"></i></button>
                                            </td>
                                        </tr>
                                        @include('admin.roles.edit_role')
                                        @include('admin.roles.deleteRole_confirm')
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

