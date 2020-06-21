@extends('layouts.index')
@section('content')
    <div class="app-content content">
        <!-- Table head options start -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header mt-5">
                        <h4 class="card-title">Inquiry Categories</h4>
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
                        @if(Auth::user()->role_id == 1 || Auth::user()->role->name == 'editor')
                        <div class="card-body">
                            <button type="button" class="btn btn-icon btn-bg-gradient-x-purple-red mr-1 shadow-lg toggle" data-toggle="modal" data-keyboard="false" data-target="#addCategory" id="categoryAddBtn"><i class="ft-scissors"></i></button>
                        </div>
                        @endif
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
                                @if($categories)
                                    @foreach($categories as $category)
                                        <tr>
                                            <th scope="row">{{$category->id}}</th>
                                            <td>{{$category->name}}</td>
                                            <td>{{$category->created_at->diffForHumans()}}</td>
                                            <td>{{$category->updated_at->diffForHumans()}}</td>
                                            @if(Auth::user()->role_id == 1 || Auth::user()->role->name == 'editor')
                                            <td>
                                                <a href="{{ route('roles.edit', $category->id)}}" type="button" class="btn btn-icon btn-bg-gradient-x-blue-green mr-1 shadow-lg shadow-lg" data-categoryname="{{$category->name}}" data-categoryid="{{$category->id}}" data-toggle="modal" data-keyboard="false" data-target="#editCategory" id="categoryEditBtn"><i class="ft-edit"></i></a>
                                                <button type="button" class="btn btn-icon btn-bg-gradient-x-purple-red mr-1 shadow-lg shadow-lg" data-categoryid="{{$category->id}}" data-toggle="modal" data-keyboard="false" data-target="#deleteCat_confirm"><i class="ft-trash"></i></button>
                                            </td>
                                            @endif
                                        </tr>
                                        @include('admin.categories.edit_category')
                                        @include('admin.categories.deleteCat_confirm')
                                    @endforeach
                                @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('admin.categories.add_category')
        <!-- Table head options end -->
    </div>

@stop

