 <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-wrapper-before"></div>
            <div class="content-header row">
            </div>
            <div class="content-body"><!-- Chart -->
                <div class="row match-height">
                    <div class="col-12">
                        <div class="">
                            <div id="gradient-line-chart1" class="height-250 GradientlineShadow1">
                                <div class="digital-clock">00:00:00</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Chart -->
                <!-- eCommerce statistic -->
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-md-12">
                        <div class="card pull-up ecom-card-1 bg-gradient-directional-white">
                            <div class="card-content ecom-card2 height-180">
                                <h5 class="text-muted danger position-absolute p-1">Total Inquiries</h5>
                                <div>
                                    <i class="ft-calendar danger font-large-1 float-right p-1"></i>
                                </div>
                                <div class="col-md-12 mt-5 offset-5">
                                    <h2 class="badge bg-gradient-directional-purple font-large-3 rounded">{{$inquiries}}</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-12">
                        <div class="card pull-up ecom-card-1 bg-white">
                            <div class="card-content ecom-card2 height-180">
                                <h5 class="text-muted info position-absolute p-1">Total Completed Inquiries</h5>
                                <div>
                                    <i class="ft-activity info font-large-1 float-right p-1"></i>
                                </div>
                                <div class="col-md-12 mt-5 offset-5">
                                    <h2 class="badge bg-gradient-directional-purple font-large-3 rounded">{{$inquiries_status}}</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-12">
                        <div class="card pull-up ecom-card-1 bg-white">
                            <div class="card-content ecom-card2 height-180">
                                <h5 class="text-muted warning position-absolute p-1">Inquiries from WEBSITE</h5>
                                <div>
                                    <i class="ft-shopping-cart warning font-large-1 float-right p-1"></i>
                                </div>
                                <div class="col-md-12 mt-5 offset-5">
                                    <h2 class="badge bg-gradient-directional-purple font-large-3 rounded">{{$seller}}</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ eCommerce statistic -->
                    <div class="col-xl-4 col-lg-12">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <h4 class="card-title">Active Categories</h4>
                                    <h6 class="card-subtitle text-muted">In Process for use Inquiries</h6>
                                </div>
                                <div id="carousel-area" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <li data-target="#carousel-area" data-slide-to="0" class="active"></li>
                                        <li data-target="#carousel-area" data-slide-to="1"></li>
                                        <li data-target="#carousel-area" data-slide-to="2"></li>
                                    </ol>
                                    <div class="carousel-inner" role="listbox">
                                        <div class="carousel-item active">
                                            <img src="{{asset('assets/theme-assets/images/carousel/08.jpg')}}" class="d-block w-100" alt="First slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="{{asset('assets/theme-assets/images/carousel/03.jpg')}}" class="d-block w-100" alt="Second slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="{{asset('assets/theme-assets/images/carousel/01.jpg')}}" class="d-block w-100" alt="Third slide">
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carousel-area" role="button" data-slide="prev">
                                        <span class="la la-angle-left" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carousel-area" role="button" data-slide="next">
                                        <span class="la la-angle-right icon-next" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                            <div class="card-footer border-top-blue-grey border-top-lighten-5 text-muted">
                                <span class="float-left">{{\Carbon\Carbon::now('Asia/Dubai')->toTimeString()}}</span>
                                <span class="tags float-right">
                                    @foreach($categories as $category)
                                    <span class="badge badge-pill badge-primary">{{$category->name}}</span>
                                    @endforeach
                                </span>
                            </div>
                        </div>
                    </div>
                <!--/ Statistics -->
            </div>
        </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->
@section('scripts')
    <script type="text/javascript">
        $(document).ready(function() {
            clockUpdate();
            setInterval(clockUpdate, 1000);
        })

        function clockUpdate() {
            var date = new Date();
            $('.digital-clock').css({'color': '#fff', 'text-shadow': '0 0 6px #ff0'});
            function addZero(x) {
                if (x < 10) {
                    return x = '0' + x;
                } else {
                    return x;
                }
            }

            function twelveHour(x) {
                if (x > 12) {
                    return x = x - 12;
                } else if (x == 0) {
                    return x = 12;
                } else {
                    return x;
                }
            }
            var h = addZero(twelveHour(date.getHours()));
            var m = addZero(date.getMinutes());
            var s = addZero(date.getSeconds());

            $('.digital-clock').text(h + ':' + m + ':' + s)
        }
    </script>
@stop
