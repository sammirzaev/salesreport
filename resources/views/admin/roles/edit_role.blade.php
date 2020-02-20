      <div class="modal fade text-left show" id="editRole" tabindex="-1" role="dialog" aria-labelledby="basicModalLabel3" aria-modal="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
              {!! Form::open(['method'=>'PATCH', 'action'=>['RolesController@update', $role->id],  'id'=>'editRoles', 'files'=>true]) !!}
              <div class="modal-content">
                  <div class="modal-header bg-gradient-directional-pink">
                      <h4 class="modal-title text-center font-large-1 text-white" id="basicModalLabel3">EDIT ROLE</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">×</span>
                      </button>
                  </div>
                  <div class="modal-body bg-gradient-radial-info text-white">
                      <div class="card-body row">
                          <fieldset class="form-group col-xl-12 col-lg-12 col-md-12">
                              <input type="hidden" name="role_id" id="role_id" value="">
                              {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Role Name', 'id'=>'name', 'required']) !!}
                          </fieldset>
                      </div>
                  </div>
                  <div class="modal-footer bg-gradient-directional-pink">
                      {!! Form::submit('Update Role', ['class'=>'btn btn-icon btn-bg-gradient-x-blue-green mr-1 shadow-lg float-left', 'id'=>'btnSubmit']) !!}
                      <button type="button" class="btn btn-bg-gradient-x-blue-cyan" data-dismiss="modal">Close</button>
                  </div>
              </div>
              {!! Form::close() !!}
          </div>
      </div>
