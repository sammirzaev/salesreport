<div class="col-md-12">
    <div class="card">
        <div class="card-header"></div>
        {!! Form::open(['method'=>'POST', 'action'=>'StatusController@store', 'id'=>'addStatus', 'style'=>'display:none']) !!}
        <div class="card-body row">
            <fieldset class="form-group col-xl-4 col-lg-6 col-md-12">
                {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Status Name', 'id'=>'name', 'required']) !!}
            </fieldset>
            <fieldset class="form-group col-xl-4 col-lg-6 col-md-12">
                {!! Form::submit('Add Status', ['class'=>'btn btn-icon btn-bg-gradient-x-blue-green mr-1 shadow-lg float-left', 'id'=>'btnSubmit']) !!}
            </fieldset>
        </div>
        {!! Form::close() !!}
    </div>
</div>
