<div class="modal fade text-left show" id="addInquiry" tabindex="-1" role="dialog" aria-labelledby="basicModalLabel3" aria-modal="true">
    <div class="modal-dialog modal-dialog-centered" role="document">

        <div class="modal-content">
            <div class="modal-header bg-gradient-radial-success">
                <h4 class="modal-title text-center font-large-1 text-white" id="basicModalLabel3">Add Inquiry</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            {!! Form::open(['method'=>'POST', 'action'=>'InquiriesController@store', 'id'=>'addInquiry', 'files'=>'true']) !!}
            <div class="modal-body bg-gradient-directional-pink text-white">
                <div class="card-body row">
                    <fieldset class="form-group col-xl-6 col-lg-6 col-md-6">
                        {!! Form::select('status_id', array(''=>'Choose Status') + $status, null, ['class'=>'form-control', 'id'=>'inputPosition', 'required']) !!}
                    </fieldset>
                    <fieldset class="form-group col-xl-6 col-lg-6 col-md-6">
                        {!! Form::select('category_id', array(''=>'Choose Category') + $categories, null, ['class'=>'form-control', 'id'=>'inputPosition', 'required']) !!}
                    </fieldset>
                    <fieldset class="form-group col-xl-6 col-lg-6 col-md-6">
                        {!! Form::text('date', null, ['class'=>'form-control', 'placeholder'=>'DD/MM/YYYY', 'id'=>'date', 'required']) !!}
                    </fieldset>
                    <fieldset class="form-group col-xl-6 col-lg-6 col-md-6">
                        {!! Form::text('company', null, ['class'=>'form-control', 'placeholder'=>'Company Name', 'id'=>'company', 'required']) !!}
                    </fieldset>
                    <fieldset class="form-group col-xl-6 col-lg-6 col-md-6">
                        {!! Form::text('industry', null, ['class'=>'form-control', 'placeholder'=>'Industry Name', 'id'=>'company', 'required']) !!}
                    </fieldset>
                    <fieldset class="form-group col-xl-6 col-lg-6 col-md-6">
                        {!! Form::text('address', null, ['class'=>'form-control', 'placeholder'=>'Company Address', 'id'=>'address', 'required']) !!}
                    </fieldset>
                    <fieldset class="form-group col-xl-6 col-lg-6 col-md-6">
                        {!! Form::text('website', null, ['class'=>'form-control', 'placeholder'=>'Company Website', 'id'=>'address', 'required']) !!}
                    </fieldset>
                    <fieldset class="form-group col-xl-6 col-lg-6 col-md-6">
                        {!! Form::text('fullName', null, ['class'=>'form-control', 'placeholder'=>'Requester Full Name', 'id'=>'fullName', 'required']) !!}
                    </fieldset>
                    <fieldset class="form-group col-xl-6 col-lg-6 col-md-6">
                        {!! Form::text('position', null, ['class'=>'form-control', 'placeholder'=>'Requester Position', 'id'=>'position', 'required']) !!}
                    </fieldset>
                    <fieldset class="form-group col-xl-6 col-lg-6 col-md-6">
                        {!! Form::email('email', null, ['class'=>'form-control', 'placeholder'=>'Requester Email', 'id'=>'email', 'required']) !!}
                    </fieldset>
                    <fieldset class="form-group col-xl-6 col-lg-6 col-md-6">
                        {!! Form::text('phnumber', null, ['class'=>'form-control', 'placeholder'=>'Requester Phone Number', 'id'=>'phnumber', 'required']) !!}
                    </fieldset>
                    <fieldset class="form-group col-xl-6 col-lg-6 col-md-6">
                        {!! Form::text('subject', null, ['class'=>'form-control', 'placeholder'=>'Requester Subject', 'id'=>'subject', 'required']) !!}
                    </fieldset>
                    <fieldset class="form-group col-xl-12 col-lg-12 col-md-12">
                        {!! Form::text('seller', null, ['class'=>'form-control', 'placeholder'=>'Seller Name', 'id'=>'seller', 'required']) !!}
                    </fieldset>
                    <fieldset class="form-group col-xl-12 col-lg-12 col-md-12">
                        {!! Form::textarea('description', null, ['class'=>'form-control', 'placeholder'=>'Requester Description', 'id'=>'description', 'required']) !!}
                    </fieldset>
                </div>

            </div>
            <div class="modal-footer bg-gradient-directional-blue-grey">
                {!! Form::submit('Add Inquiry', ['class'=>'btn btn-icon btn-bg-gradient-x-blue-green mr-1 shadow-lg float-left', 'id'=>'btnSubmit']) !!}
                <button type="button" class="btn btn-bg-gradient-x-blue-cyan" data-dismiss="modal">Close</button>
            </div>
        </div>
        {!! Form::close() !!}
    </div>
</div>
