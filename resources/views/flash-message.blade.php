@if ($message = Session::get('success'))
    <div class="alert alert-success alert-block btn-bg-gradient-x-blue-green">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
    </div>
@endif

@if ($message = Session::get('error'))
    <div class="alert alert-danger alert-block btn-bg-gradient-x-purple-red">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
    </div>
@endif

@if ($message = Session::get('warning'))
    <div class="alert alert-warning alert-block btn-bg-gradient-x-orange-yellow">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
    </div>
@endif

@if ($message = Session::get('info'))
    <div class="alert alert-info alert-block btn-bg-gradient-x-blue-cyan">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
    </div>
@endif

@if ($errors->any())
    <div class="alert alert-danger btn-bg-gradient-x-red-pink">
        <button type="button" class="close" data-dismiss="alert">×</button>
        Please fill the required fields
    </div>
@endif
