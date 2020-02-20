<div class="col-md-12">
    <div class="card">
        <div class="card-header"></div>
        {!! Form::open(['method'=>'POST', 'action'=>'UserController@store', 'id'=>'addForm', 'style'=>'display:none','files'=>'true']) !!}
            <div class="card-body row">
                <fieldset class="form-group col-xl-4 col-lg-6 col-md-12">
                    {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Full Name', 'id'=>'name', 'required']) !!}
                </fieldset>
                <fieldset class="form-group col-xl-4 col-lg-6 col-md-12">
                    {!! Form::email('email', null, ['class'=>'form-control', 'placeholder'=>'Email', 'id'=>'email', 'required']) !!}
                </fieldset>
                <fieldset class="form-group col-xl-4 col-lg-6 col-md-12">
                    {!! Form::select('role_id', array(''=>'Choose Role') + $roles, null, ['class'=>'form-control', 'id'=>'inputPosition', 'required']) !!}
                </fieldset>
                <fieldset class="form-group col-xl-4 col-lg-6 col-md-12">
                    {!! Form::select('is_active', array( 1=>'Active', 0=>'Not Active'), 0, ['class'=>'form-control', 'id'=>'inputPosition', 'required']) !!}
                </fieldset>
                <fieldset class="form-group col-xl-4 col-lg-6 col-md-12">
                    {!! Form::password('password', ['class'=>'form-control', 'placeholder'=>'Password', 'id'=>'password', 'required']) !!}
                </fieldset>
                <fieldset class="form-group col-xl-4 col-lg-6 col-md-12">
                {!! Form::submit('Add User', ['class'=>'btn btn-icon btn-bg-gradient-x-blue-green mr-1 shadow-lg float-left', 'id'=>'btnSubmit']) !!}
                </fieldset>
            </div>
        {!! Form::close() !!}
    </div>
</div>
