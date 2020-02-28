@extends('layouts.index')
@section('content')
    <div class="app-content content">
        <div class="app-content"></div>
        <div class="content-body">
            <!-- line chart section start -->
            <section id="chartjs-line-charts">
                <!-- Line Chart -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header mt-5">
                                <h4 class="card-title">Inquiry Type Report</h4>
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
                            <div class="card-content collapse show">
                                <div class="card-body chartjs">
                                    <div class="height-400">
                                        {!! $chart->container() !!}
                                    </div>
                                </div>
                            </div>
                            <div class="card-content collapse show">
                                <div class="card-body chartjs">
                                    <div class="height-400">
                                        {!! $chartWeeks->container() !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- // line chart section end -->
        </div>
    </div>
    {!! $chart->script() !!}
    {!! $chartWeeks->script() !!}
@stop



