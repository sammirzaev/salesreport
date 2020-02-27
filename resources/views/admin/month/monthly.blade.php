@extends('layouts.index')
@section('content')
    <div class="app-content content">
        <!-- Table head options start -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header mt-5">
                        <h4 class="card-title">Inquiry Monthly Report</h4>
                        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                        <div class="heading-elements">
                            <ul class="list-inline mb-0">
                                <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                <li><a data-action="close"><i class="ft-x"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="table-responsive mt-5">
                        <table class="table table table-bordered table-hover" id="exportData">
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col">Export Monthly Report</th>
                                <th scope="col">Monthly Quantity Inquiries</th>
                                <th scope="col">Months</th>
                                <th scope="col">Year</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if($ordersByMonth)
                                @foreach($ordersByMonth as $month)
                                    <tr>
                                        <td></td>
                                        <td>{{$month->monthly_report}}</td>
                                        <td><span class="badge bg-gradient-directional-teal shadow-lg font-small-3"> {{$month->month}}</span></td>
                                        <td>{{$month->year}}</td>
                                    </tr>
                                @endforeach
                            @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Table head options end -->
    <div class="col-lg-6 col-md-12 offset-5">
        <div class="text-center mb-3">
            <nav aria-label="Page navigation">
                <ul class="pagination pagination-round">
                    <li class="page-item">
{{--                        {{$inquiries->render()}}--}}
                    </li>
                </ul>
            </nav>
        </div>
    </div>

@stop
@section('scripts')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdn.rawgit.com/eligrey/FileSaver.js/e9d941381475b5df8b7d7691013401e171014e89/FileSaver.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/TableExport/3.3.5/js/tableexport.min.js"></script>
    <script type="text/javascript">
        $('table').tableExport({
            position: "top",
            fileName: 'Inquiries Weekly Report',
            formats: ["csv"],
            headers: true,
            footers: true,
            exportButtons: true,
        });
    </script>
@stop

