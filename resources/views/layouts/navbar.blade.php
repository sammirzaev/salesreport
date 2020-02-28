<body class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu" data-color="bg-chartbg" data-col="2-columns">
<!-- fixed-top-->
<nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-light">
    <div class="navbar-wrapper">
        <div class="navbar-container content">
            <div class="collapse navbar-collapse show" id="navbar-mobile">
                <ul class="nav navbar-nav mr-auto float-left">
                    <li class="nav-item d-block d-md-none"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu"></i></a></li>
                    <li class="nav-item d-none d-md-block"><a class="nav-link nav-link-expand" href="#"><i class="ficon ft-maximize"></i></a></li>
                    <li class="nav-item dropdown navbar-search"><a class="nav-link dropdown-toggle hide" data-toggle="dropdown" href="#"><i class="ficon ft-search"></i></a>
                        <ul class="dropdown-menu">
                            <li class="arrow_box">
                                <form>
                                    <div class="input-group search-box">
                                        <div class="position-relative has-icon-right full-width">
                                            <input class="form-control" id="search" type="text" placeholder="Search here...">
                                            <div class="form-control-position navbar-search-close"><i class="ft-x">   </i></div>
                                        </div>
                                    </div>
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav float-right">
                    <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                            <span class="avatar avatar-online">
                                <img src="{{asset('assets/images/logo.png')}}" alt="avatar"><i></i>
                            </span></a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="arrow_box_right">
                                <a class="dropdown-item" href="#"><span class="avatar avatar-online">
                                        <img style="background: #C2C2C2;" src="{{asset('assets/images/logo.png')}}" alt="avatar">
                                        <span class="user-name text-bold-700 ml-1" style="font-size: 9px;">{{ Auth::user()->name }}</span></span>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">
                                    <i class="ft-user"></i> <span class="badge bg-gradient-directional-pink p-2">{{strtoupper(Auth::user()->role->name)}}</span>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item"  href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <i class="ft-power"></i> {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<!-- ////////////////////////////////////////////////////////////////////////////-->
<div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true" data-img="{{asset('assets/theme-assets/images/backgrounds/02.jpg')}}">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto"><a class="navbar-brand" href="{{route('admin')}}">
                    <img class="brand-logo" alt="Chameleon admin logo" src="{{asset('assets/theme-assets/images/logo/logo.png')}}"/>
                    <h3 class="brand-text">{{Auth::user()->name}}</h3></a></li>
            <li class="nav-item d-md-none"><a class="nav-link close-navbar"><i class="ft-x"></i></a></li>
        </ul>
    </div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class="{{ Route::currentRouteName() === 'admin' ? 'active' : '' }}">
                <a href="{{route('admin')}}"><i class="ft-home"></i><span class="menu-title" data-i18n="">Dashboard</span></a>
            </li>
            @if(Auth::user()->role_id == 1)
            <li class="{{ Route::currentRouteName() === 'users.index' ? 'active' : '' }} nav-item">
                <a href="{{route('users.index')}}"><i class="la la-user-secret"></i><span class="menu-title" data-i18n="">Users</span></a>
            </li>
            <li class="{{ Route::currentRouteName() === 'roles.index' ? 'active' : '' }} nav-item">
                <a href="{{route('roles.index')}}"><i class="la la-bullhorn"></i><span class="menu-title" data-i18n="">Roles</span></a>
            </li>
            @endif
            <li class="{{ Route::currentRouteName() === 'categories.index' ? 'active' : '' }} nav-item">
                <a href="{{route('categories.index')}}"><i class="ft-layout"></i><span class="menu-title" data-i18n="">Categories</span></a>
            </li>
            <li class="{{ Route::currentRouteName() === 'status.index' ? 'active' : '' }} nav-item">
                <a href="{{route('status.index')}}"><i class="ft-star"></i><span class="menu-title" data-i18n="">Status</span></a>
            </li>
            <li class="{{ Route::currentRouteName() === 'inquiry.index' ? 'active' : '' }} nav-item">
                <a href="{{route('inquiry.index')}}"><i class="la la-fire"></i><span class="menu-title" data-i18n="">Inquiry</span></a>
            </li>
            <li class="{{ Route::currentRouteName() === 'inquirytype.index' ? 'active' : '' }} nav-item">
                <a href="{{route('inquirytype.index')}}"><i class="la la-folder-open-o"></i><span class="menu-title" data-i18n="">Inquiry Type Charts</span></a>
            </li>
            <li class="nav-item
                {{ Route::currentRouteName() === 'weekly_report' ? 'active' : '' }}
                {{ Route::currentRouteName() === 'monthly_report' ? 'active' : '' }}
                has-sub"><a href="#"><i class="ft-layout"></i><span class="menu-title" data-i18n="">Reports</span></a>
                <ul class="menu-content" style="">
                    <li class="{{ Route::currentRouteName() === 'weekly_report' ? 'active' : '' }} nav-item">
                        <a href="{{route('weekly_report')}}"><span class="menu-title" data-i18n="">Weekly Reports</span></a>
                    </li>
                    <li class="{{ Route::currentRouteName() === 'seller' ? 'active' : '' }} nav-item">
                        <a href="{{route('seller')}}"><span class="menu-title" data-i18n="">Weekly Seller Reports</span></a>
                    </li>
                    <li class="{{ Route::currentRouteName() === 'monthly_report' ? 'active' : '' }} nav-item">
                        <a href="{{route('monthly_report')}}"><span class="menu-title" data-i18n="">Monthly Reports</span></a>
                    </li>
                </ul>
            </li>
         </ul>
    </div>
    <div class="navigation-background"></div>
</div>
