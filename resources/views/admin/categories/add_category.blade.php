<div class="modal fade text-left show" id="addCategory" tabindex="-1" role="dialog" aria-labelledby="basicModalLabel3" aria-modal="true">
    <div class="modal-dialog modal-dialog-centered" role="document">

        <div class="modal-content">
            <div class="modal-header bg-gradient-radial-success">
                <h4 class="modal-title text-center font-large-1 text-white" id="basicModalLabel3">Add Category</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            {!! Form::open(['method'=>'POST', 'action'=>'CategoriesController@store', 'id'=>'addCategory', 'files'=>'true']) !!}
            <div class="modal-body bg-gradient-directional-pink text-white">
                <div class="card-body row">
                    <fieldset class="form-group col-xl-12 col-lg-12 col-md-12">
                        {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Category Name', 'id'=>'name', 'required']) !!}
                    </fieldset>
                </div>

            </div>
            <div class="modal-footer bg-gradient-directional-blue-grey">
                {!! Form::submit('Add Category', ['class'=>'btn btn-icon btn-bg-gradient-x-blue-green mr-1 shadow-lg float-left', 'id'=>'btnSubmit']) !!}
                <button type="button" class="btn btn-bg-gradient-x-blue-cyan" data-dismiss="modal">Close</button>
            </div>
        </div>
        {!! Form::close() !!}
    </div>
</div>
