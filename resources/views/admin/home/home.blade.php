 <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-wrapper-before"></div>
            <div class="content-header row">
            </div>
            <div class="content-body"><!-- Chart -->
                <div class="row match-height">
                    <div class="col-12">
                        <div class="">
                            <div id="gradient-line-chart1" class="height-250 GradientlineShadow1"></div>
                        </div>
                    </div>
                </div>
                <!-- Chart -->
                <!-- eCommerce statistic -->
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-md-12">
                        <div class="card pull-up ecom-card-1 bg-white">
                            <div class="card-content ecom-card2 height-180">
                                <h5 class="text-muted danger position-absolute p-1">Total Weekly Inquiries</h5>
                                <div>
                                    <i class="ft-pie-chart danger font-large-1 float-right p-1"></i>
                                </div>
                                <div class="progress-stats-container ct-golden-section height-75 position-relative pt-3  ">
                                    <div id="progress-stats-bar-chart"></div>
                                    <div id="progress-stats-line-chart" class="progress-stats-shadow"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-12">
                        <div class="card pull-up ecom-card-1 bg-white">
                            <div class="card-content ecom-card2 height-180">
                                <h5 class="text-muted info position-absolute p-1">Total Approved Inquiries</h5>
                                <div>
                                    <i class="ft-activity info font-large-1 float-right p-1"></i>
                                </div>
                                <div class="progress-stats-container ct-golden-section height-75 position-relative pt-3">
                                    <div id="progress-stats-bar-chart1"></div>
                                    <div id="progress-stats-line-chart1" class="progress-stats-shadow"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-12">
                        <div class="card pull-up ecom-card-1 bg-white">
                            <div class="card-content ecom-card2 height-180">
                                <h5 class="text-muted warning position-absolute p-1">Weekly Top Categories</h5>
                                <div>
                                    <i class="ft-shopping-cart warning font-large-1 float-right p-1"></i>
                                </div>
                                <div class="progress-stats-container ct-golden-section height-75 position-relative pt-3">
                                    <div id="progress-stats-bar-chart2"></div>
                                    <div id="progress-stats-line-chart2" class="progress-stats-shadow"></div>
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
                                    <h4 class="card-title">Active Inquiries</h4>
                                    <h6 class="card-subtitle text-muted">In Process Inquiries</h6>
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
                                <span class="float-left">2 days ago</span>
                                <span class="tags float-right">
                                    <span class="badge badge-pill badge-primary">Branding</span>
                                    <span class="badge badge-pill badge-danger">Design</span>
                                </span>
                            </div>
                        </div>
                    </div>
                <!--/ Statistics -->
            </div>
        </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->
