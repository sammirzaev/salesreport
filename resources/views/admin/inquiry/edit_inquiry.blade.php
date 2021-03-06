      <div class="modal fade text-left show" id="editInquiry" tabindex="-1" role="dialog" aria-labelledby="basicModalLabel3" aria-modal="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
              {!! Form::open(['method'=>'PATCH', 'action'=>['InquiriesController@update', $inquiry->id],  'id'=>'editInquiry', 'files'=>true]) !!}
              <div class="modal-content">
                  <div class="modal-header bg-gradient-directional-pink">
                      <h4 class="modal-title text-center font-large-1 text-white" id="basicModalLabel3">EDIT INQUIRY</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">×</span>
                      </button>
                  </div>
                  <div class="modal-body bg-gradient-radial-info text-white">
                      <div class="card-body row">
                          <fieldset class="form-group col-xl-6 col-lg-6 col-md-6">
                              <input type="hidden" name="inquiry_id" id="inquiry_id" value="">
                              {!! Form::select('status_id', $status, null, ['class'=>'form-control', 'id'=>'status_id', 'required']) !!}
                          </fieldset>
                          <fieldset class="form-group col-xl-6 col-lg-6 col-md-6">
                              {!! Form::select('category_id', $categories, null, ['class'=>'form-control', 'id'=>'category_id', 'required']) !!}
                          </fieldset>
                          <fieldset class="form-group col-xl-6 col-lg-6 col-md-6">
                              {!! Form::text('date', null, ['class'=>'form-control', 'placeholder'=>'DD/MM/YYYY', 'id'=>'date', 'data-date-format'=>'dd/mm/yyyy', 'required']) !!}
                          </fieldset>
                          <fieldset class="form-group col-xl-6 col-lg-6 col-md-6">
                              {!! Form::text('company', null, ['class'=>'form-control', 'placeholder'=>'Company Name', 'id'=>'company']) !!}
                          </fieldset>
                          <fieldset class="form-group col-xl-6 col-lg-6 col-md-6">
                              {!! Form::text('industry', null, ['class'=>'form-control', 'placeholder'=>'Industry Name', 'id'=>'industry']) !!}
                          </fieldset>
                          <fieldset class="form-group col-xl-6 col-lg-6 col-md-6">
                              {!! Form::text('address', null, ['class'=>'form-control', 'placeholder'=>'Company Address', 'id'=>'address']) !!}
                          </fieldset>
                          <fieldset class="form-group col-xl-6 col-lg-6 col-md-6">
                              {!! Form::text('website', null, ['class'=>'form-control', 'placeholder'=>'Company Website', 'id'=>'website']) !!}
                          </fieldset>
                          <fieldset class="form-group col-xl-6 col-lg-6 col-md-6">
                              {!! Form::text('fullName', null, ['class'=>'form-control', 'placeholder'=>'Requester Full Name', 'id'=>'fullName']) !!}
                          </fieldset>
                          <fieldset class="form-group col-xl-6 col-lg-6 col-md-6">
                              {!! Form::text('position', null, ['class'=>'form-control', 'placeholder'=>'Requester Position', 'id'=>'position']) !!}
                          </fieldset>
                          <fieldset class="form-group col-xl-6 col-lg-6 col-md-6">
                              {!! Form::email('email', null, ['class'=>'form-control', 'placeholder'=>'Requester Email', 'id'=>'email']) !!}
                          </fieldset>
                          <fieldset class="form-group col-xl-6 col-lg-6 col-md-6">
                              {!! Form::text('phnumber', null, ['class'=>'form-control', 'placeholder'=>'Requester Phone Number', 'id'=>'phnumber']) !!}
                          </fieldset>
                          <fieldset class="form-group col-xl-6 col-lg-6 col-md-6">
                              {!! Form::text('subject', null, ['class'=>'form-control', 'placeholder'=>'Requester Subject', 'id'=>'subject']) !!}
                          </fieldset>
                          <fieldset class="form-group col-xl-12 col-lg-12 col-md-12">
                              {!! Form::text('seller', Auth::user()->name, ['class'=>'form-control', 'placeholder'=>'Seller Name', 'id'=>'seller']) !!}
                          </fieldset>
                          <fieldset class="form-group col-xl-12 col-lg-12 col-md-12">
                              {!! Form::textarea('description', null, ['class'=>'form-control', 'placeholder'=>'Requester Description', 'id'=>'description']) !!}
                          </fieldset>
                      </div>

                  </div>
                  <div class="modal-footer bg-gradient-directional-pink">
                      {!! Form::submit('Update Category', ['class'=>'btn btn-icon btn-bg-gradient-x-blue-green mr-1 shadow-lg float-left', 'id'=>'btnSubmit']) !!}
                      <button type="button" class="btn btn-bg-gradient-x-blue-cyan" data-dismiss="modal">Close</button>
                  </div>
              </div>
              {!! Form::close() !!}
          </div>
      </div>
