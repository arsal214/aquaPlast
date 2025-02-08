<!-- search-box-layout -->
<div class="wraper_flyout_search">
    <div class="table">
        <div class="table-cell">
            <div class="flyout-search-layer"></div>
            <div class="flyout-search-layer"></div>
            <div class="flyout-search-layer"></div>
            <div class="flyout-search-close">
                <span class="flyout-search-close-line"></span>
                <span class="flyout-search-close-line"></span>
            </div>
            <div class="flyout_search">
                <div class="flyout-search-title">
                    <h4>Search</h4>
                </div>
                <div class="flyout-search-bar">
                    <form role="search" method="get" action="#">
                        <div class="form-row">
                            <input type="search" placeholder="Type to search..." value="" name="s" required="">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- search-box-layout end -->


<!-- main header -->
<header class="main-header style-four">
    <!-- header-top -->
    <div class="header-top">
        <div class="container">
            <div class="inner-container clearfix">

                <ul class="header-nav pull-right">
                    <li class="phone"><i class="flaticon-telephone-auricular-with-cable"></i><a href="tel:{{adminSettings('admin_app_contact')}}">
                            {{adminSettings('admin_app_contact')}}
                        </a></li>

                </ul>
            </div>
        </div>
    </div><!-- header-top end -->

    <!-- header-bottom -->
    <div class="header-bottom">
        <div class="container">
            <div >
                <div class="nav-outer clearfix">
                    <div class="menu-area pull-left clearfix">
                        <figure class="logo-box"><a href="{{url('/')}}"><img src="{{asset('images/settings/'.adminSettings('admin_app_logo_white'))}}" width="100px" height="100px" alt=""></a></figure>
                        <nav class="main-menu navbar-expand-lg">
                            <div class="navbar-header">
                                <!-- Toggle Button -->
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div class="navbar-collapse collapse clearfix">
                                <ul class="navigation clearfix">
                                    <li class="{{ Request::is('/') ? 'current dropdown' : 'dropdown' }}">
                                        <a href="{{ url('/') }}">Home</a>
                                    </li>
                                    <li class="{{ Request::is('about') ? 'current dropdown' : 'dropdown' }}">
                                        <a href="{{ url('/about') }}">About</a>
                                    </li>
                                    <li class="{{ Request::is('team') ? 'current dropdown' : 'dropdown' }}">
                                        <a href="{{ url('/team') }}">Team</a>
                                    </li>
                                    <li class="{{ Request::is('productList') ? 'current dropdown' : 'dropdown' }}">
                                        <a href="{{ url('/productList') }}">Our Products</a>
                                    </li>
                                    <li class="{{ Request::is('blog') ? 'current dropdown' : 'dropdown' }}">
                                        <a href="{{ url('/blog') }}">Blogs</a>
                                    </li>
                                    <li class="{{ Request::is('contact') ? 'current dropdown' : 'dropdown' }}">
                                        <a href="{{ url('/contact') }}">Contact Us</a>
                                    </li>

                                </ul>
                            </div>
                        </nav>
                    </div>
                    <div class="info-box pull-right clearfix">
                        <div class="search-box">
                            <div class="header-flyout-searchbar">
                                <i class="fa fa-search"></i>
                            </div>
                        </div>

                        <div class="btn-box"><a href="contact.html"><i class="fas fa-arrow-right"></i>Get Quick Support</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- header-bottom end -->

    <!--sticky Header-->
    <div class="sticky-header">
        <div class="container clearfix">
            <figure class="logo-box"><a href="index.html"><img src="{{asset('images/settings/'.adminSettings('admin_app_logo_white'))}}" width="100px" height="100px" alt=""></a></figure>
            <div class="menu-area">
                <nav class="main-menu navbar-expand-lg">
                    <div class="navbar-header">
                        <!-- Toggle Button -->
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="navbar-collapse collapse clearfix">
                        <ul class="navigation clearfix">
                            <li class="{{ Request::is('/') ? 'current dropdown' : 'dropdown' }}">
                                <a href="{{ url('/') }}">Home</a>
                            </li>
                            <li class="{{ Request::is('about') ? 'current dropdown' : 'dropdown' }}">
                                <a href="{{ url('/about') }}">About</a>
                            </li>
                            <li class="{{ Request::is('team') ? 'current dropdown' : 'dropdown' }}">
                                <a href="{{ url('/team') }}">Team</a>
                            </li>
                            <li class="{{ Request::is('productList') ? 'current dropdown' : 'dropdown' }}">
                                <a href="{{ url('/productList') }}">Our Products</a>
                            </li>
                            <li class="{{ Request::is('blog') ? 'current dropdown' : 'dropdown' }}">
                                <a href="{{ url('/blog') }}">Blogs</a>
                            </li>
                            <li class="{{ Request::is('contact') ? 'current dropdown' : 'dropdown' }}">
                                <a href="{{ url('/contact') }}">Contact Us</a>
                            </li>

                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div><!-- sticky-header end -->
</header>
<!-- main-header end -->
