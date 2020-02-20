@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Sales Report Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                     Dear  <span style="font-size: 16px; font-family: Roboto; font-style: oblique;"> {{ Auth::user()->name }}</span>
                        you are currently
                        <span class="badge badge-danger" style="font-size: 14px; font-family: Roboto;">Not Active</span><br>
                        <br>
                        <span class="alert alert-danger"> Please kindly contact with Administrator</span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
