<div class="modal fade text-left show" id="userConfirmDelete" tabindex="-1" role="dialog" aria-labelledby="basicModalLabel3" aria-modal="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        {!! Form::open(['method'=>'DELETE','action'=>['UserController@destroy', $user->id]]) !!}
        <div class="modal-content">
            <div class="modal-header bg-gradient-directional-danger">
                <h4 class="modal-title text-center font-large-1 text-white" id="basicModalLabel3">PLEASE CONFIRM</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body bg-gradient-radial-info text-white">
                <input type="hidden" name="user_id" id="user_id" value="">
                <h3 class="text-center text-white">Are You Sure ? Do you want delete the Item.</h3>
            </div>
            <div class="modal-footer bg-gradient-y-danger">
                <button type="button" class="btn btn-bg-gradient-x-blue-cyan" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-bg-gradient-x-purple-blue">YES</button>
            </div>
        </div>
        {!! Form::close() !!}
    </div>
</div>
