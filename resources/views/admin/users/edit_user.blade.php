      @extends('layouts.index')
      @section('content')
          <div class="content">
              <div class="col-md-12">
                  <div class="card">
                      <div class="card-header"></div>
                      {!! Form::model($user, ['method'=>'PATCH', 'action'=>['UserController@update', $user->id],  'id'=>'editUser', 'files'=>true]) !!}
                      <div class="card-body row">
                          <fieldset class="form-group col-xl-4 col-lg-6 col-md-12">
                              {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Full Name', 'id'=>'fullName', 'required']) !!}
                          </fieldset>
                          <fieldset class="form-group col-xl-4 col-lg-6 col-md-12">
                              {!! Form::email('email', null, ['class'=>'form-control', 'placeholder'=>'Email', 'id'=>'email', 'required']) !!}
                          </fieldset>
                          <fieldset class="form-group col-xl-4 col-lg-6 col-md-12">
                              {!! Form::select('role_id', $roles, null, ['class'=>'form-control', 'id'=>'inputPosition', 'required']) !!}
                          </fieldset>
                          <fieldset class="form-group col-xl-4 col-lg-6 col-md-12">
                              {!! Form::select('is_active', array( 1=>'Active', 0=>'Not Active'), null, ['class'=>'form-control', 'id'=>'inputPosition', 'required']) !!}
                          </fieldset>
                          <fieldset class="form-group col-xl-4 col-lg-6 col-md-12">
                              {!! Form::password('password', ['class'=>'form-control', 'placeholder'=>'Password', 'id'=>'password', 'required']) !!}
                          </fieldset>
                          <fieldset class="form-group col-xl-4 col-lg-6 col-md-12">
                              {!! Form::submit('Edit User', ['class'=>'btn btn-icon btn-bg-gradient-x-blue-green mr-1 shadow-lg float-left', 'id'=>'btnSubmit']) !!}
                              <a href="{{route('users.index')}}" type="button" class="btn btn-icon btn-bg-gradient-x-purple-blue mr-1 shadow-lg shadow-lg"><i class="la la-sign-in"></i></a>
                          </fieldset>
                      </div>
                      {!! Form::close() !!}
                  </div>
              </div>
          </div>
        @stop

      <button class=""></button>
