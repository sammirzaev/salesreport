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
                          <fieldset class="form-group col-xl-12 col-lg-12 col-md-12">
                              <input type="hidden" name="inquiry_id" id="inquiry_id" value="">
                              {!! Form::select('status_id', $status, null, ['class'=>'form-control', 'id'=>'inputStatus', 'required']) !!}
                          </fieldset>
                          <fieldset class="form-group col-xl-12 col-lg-12 col-md-12">
                              {!! Form::select('category_id', $categories, null, ['class'=>'form-control', 'id'=>'inputCategory', 'required']) !!}
                          </fieldset>
                          <fieldset class="form-group col-xl-12 col-lg-12 col-md-12">
                              {!! Form::text('date', null, ['class'=>'form-control', 'placeholder'=>'DD/MM/YYYY', 'id'=>'date', 'required']) !!}
                          </fieldset>
                          <fieldset class="form-group col-xl-12 col-lg-12 col-md-12">
                              {!! Form::text('company', null, ['class'=>'form-control', 'placeholder'=>'Company Name', 'id'=>'company', 'required']) !!}
                          </fieldset>
                          <fieldset class="form-group col-xl-12 col-lg-12 col-md-12">
                              {!! Form::text('industry', null, ['class'=>'form-control', 'placeholder'=>'Industry Name', 'id'=>'industry', 'required']) !!}
                          </fieldset>
                          <fieldset class="form-group col-xl-12 col-lg-12 col-md-12">
                              {!! Form::text('address', null, ['class'=>'form-control', 'placeholder'=>'Company Address', 'id'=>'address', 'required']) !!}
                          </fieldset>
                          <fieldset class="form-group col-xl-12 col-lg-12 col-md-12">
                              {!! Form::text('website', null, ['class'=>'form-control', 'placeholder'=>'Company Website', 'id'=>'website', 'required']) !!}
                          </fieldset>
                          <fieldset class="form-group col-xl-12 col-lg-12 col-md-12">
                              {!! Form::text('fullName', null, ['class'=>'form-control', 'placeholder'=>'Requester Full Name', 'id'=>'fullName', 'required']) !!}
                          </fieldset>
                          <fieldset class="form-group col-xl-12 col-lg-12 col-md-12">
                              {!! Form::text('position', null, ['class'=>'form-control', 'placeholder'=>'Requester Position', 'id'=>'position', 'required']) !!}
                          </fieldset>
                          <fieldset class="form-group col-xl-12 col-lg-12 col-md-12">
                              {!! Form::email('email', null, ['class'=>'form-control', 'placeholder'=>'Requester Email', 'id'=>'email', 'required']) !!}
                          </fieldset>
                          <fieldset class="form-group col-xl-12 col-lg-12 col-md-12">
                              {!! Form::text('phnumber', null, ['class'=>'form-control', 'placeholder'=>'Requester Phone Number', 'id'=>'phnumber', 'required']) !!}
                          </fieldset>
                          <fieldset class="form-group col-xl-12 col-lg-12 col-md-12">
                              {!! Form::text('subject', null, ['class'=>'form-control', 'placeholder'=>'Requester Subject', 'id'=>'subject', 'required']) !!}
                          </fieldset>
                          <fieldset class="form-group col-xl-12 col-lg-12 col-md-12">
                              {!! Form::textarea('description', null, ['class'=>'form-control', 'placeholder'=>'Requester Description', 'id'=>'description', 'required']) !!}
                          </fieldset>
                          <fieldset class="form-group col-xl-12 col-lg-12 col-md-12">
                              {!! Form::textarea('comment', null, ['class'=>'form-control', 'placeholder'=>'User Comment', 'id'=>'comment', 'required']) !!}
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
