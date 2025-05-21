@extends('frontend.layouts.app')

@section('template_title')
    Aqua Plast | Home
@endsection

@section('content')
    <!-- main-slider -->
    <section class="slider-style-four centred">
        <div class="main-slider-carousel-2 owl-carousel owl-theme">

            @foreach ($sliders as $slider)
                <div class="slide" style="background-image:url({{ env('APP_URL') . $slider->thumbnail }})">
                    {{-- <div class="container">
                        <div class="content-box">
                            <h1>{{ $slider->title }}</h1>
                            <h3>{{ $slider->description }}</h3>
                        </div>
                    </div> --}}
                </div>
            @endforeach

        </div>
    </section>
    <!-- main-slider end -->


    <!-- intro-section -->
    <section class="intro-section">
        <div class="container">
            <div class="inner-container clearfix">
                <div class="single-item">
                    <div class="inner-box">
                        <div class="icon-box"><i class="flaticon-valve"></i></div>
                        <h5><a href="#">Project transport</a></h5>
                    </div>
                </div>
                <div class="single-item">
                    <div class="inner-box">
                        <div class="icon-box"><i class="flaticon-gas-pipe"></i></div>
                        <h5><a href="#">Project planning</a></h5>
                    </div>
                </div>
                <div class="single-item">
                    <div class="inner-box">
                        <div class="icon-box"><i class="flaticon-pipe"></i></div>
                        <h5><a href="#">Midstream plant</a></h5>
                    </div>
                </div>
                <div class="single-item">
                    <div class="inner-box">
                        <div class="icon-box"><i class="flaticon-oil-2"></i></div>
                        <h5><a href="#">Downstream capacity</a></h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- intro-section -->

    <section class="project-style-four">
        <div class="container">
            <div class="sortable-masonry">
                <div class="top-content clearfix">
                    <div class="title-box">
                        {{-- <div class="top-text">Done Case</div> --}}
                        <div class="sec-title">
                            <h1>Our Products</h1>
                        </div>
                        <div class="text">At Aqua Plast Industry, we deliver high-quality sanitary and plumbing products designed with precision and built for durability — trusted for every home and building</div>
                    </div>
                    <div class="filters">
                        <ul class="filter-tabs filter-btns centred clearfix">
                            @foreach ($category as $cat)
                                <li class="active filter" data-role="button" data-filter=".all">{{ $cat->name }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="items-container row clearfix">
                    @foreach ($products as $product)
                        <div class="col-lg-3 col-md-4 col-sm-12 masonry-item small-column all chamical oil_gas factory">
                            <div class="project-block-four">
                                <div class="inner-box">
                                    <figure class="image-box">
                                        <img src="{{ $product->images[0]->image }}" alt="">
                                    </figure>
                                    <div class="overlay-box">
                                        <div class="box">
                                            <div class="inner">
                                                <h4><a
                                                        href="{{ route('productShow', $product->id) }}">{{ $product->name }}</a>
                                                </h4>
                                                <div class="btn-box"><a href="{{ route('productShow', $product->id) }}">See
                                                        Detail</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>


    <!-- oilgas-section -->
    <!-- <section class="oilgas-section">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-12 col-sm-12 content-column">
                            <div class="content-box">
                                <div class="top-box">
                                    <h2>Oil & Gas</h2>
                                    <p>Our mission is to be there for you and your order at all times. That’s the only way to ensure that our pumping and production systems can operate without downtime. With us, you’ll never face expensive contractual penalties</p>
                                </div>
                                <figure class="image-box"><img src="images/resource/oil-1.jpg" alt=""></figure>
                                <div class="inner-box wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                                    <h3>The State of Connected Planning</h3>
                                    <div class="text">Global Congress on Petroleum Engineering and Natural Gas Recovery</div>
                                    <div class="btn-box"><a href="#">Read more</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12 inner-column">
                            <div class="inner-box clearfix">
                                <div class="single-item">
                                    <div class="icon-box"><i class="flaticon-idea"></i></div>
                                    <h2>65%</h2>
                                    <div class="text">Growth in turnover over last 2 years</div>
                                </div>
                                <div class="single-item">
                                    <div class="icon-box"><i class="flaticon-pollution"></i></div>
                                    <h2>4,121 MB</h2>
                                    <div class="text">Registered capital</div>
                                </div>
                                <div class="single-item">
                                    <div class="icon-box"><i class="flaticon-repair"></i></div>
                                    <h2>2000+</h2>
                                    <div class="text">Completed work</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->
    <!-- oilgas-section end -->


    <!-- weare-section-two -->
    <section class="weare-section-two">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div class="content-box">
                        <div class="top-content wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="top-text">WHO WE ARE</div>
                            <div class="sec-title">
                                <h1>The future in Oil and Gas production planning</h1>
                            </div>
                            <h2>Exploration and drilling cost planning</h2>
                            <div class="text">In a constantly changing world of geopolitics, country energy
                                diversification, and greener consumer options, companies must prioritize capital efficiency
                            </div>
                        </div>
                        <div class="lower-content wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                    <div class="single-item">
                                        <div class="icon-box"><i class="flaticon-rocket"></i></div>
                                        <h5><a href="#">spiritnow Stories</a></h5>
                                        <div class="text">Petroleum refiners, fuel transport and end-user sales at gas
                                            stations.</div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                    <div class="single-item">
                                        <div class="icon-box"><i class="flaticon-oil"></i></div>
                                        <h5><a href="#">Power in Cooperation</a></h5>
                                        <div class="text">Petroleum refiners, fuel transport and end-user sales at gas
                                            stations.</div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                    <div class="single-item">
                                        <div class="icon-box"><i class="flaticon-factory-machine"></i></div>
                                        <h5><a href="#">Planning Oil and Gas</a></h5>
                                        <div class="text">Petroleum refiners, fuel transport and end-user sales at gas
                                            stations.</div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                    <div class="single-item">
                                        <div class="icon-box"><i class="flaticon-factory-machine"></i></div>
                                        <h5><a href="#">Planning Oil and Gas</a></h5>
                                        <div class="text">Petroleum refiners, fuel transport and end-user sales at gas
                                            stations.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 inner-column">
                    <div class="inner-content wow fadeInRight" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <figure class="image-box"><img src="frontend/images/resource/weare-1.jpg" alt="">
                        </figure>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- weare-section-two end -->



    <!-- growth-section -->
    {{-- <section class="growth-section">
        <div class="image-column" style="background-image: url(frontend/images/background/growth-bg.jpg);"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div class="content-box wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="sec-title">
                            <h1>Sustainability Economic Growth</h1>
                            <p>Sustainable development is about conducting our business to promote economic growth, a
                                healthy environment and vibrant communities, now and into the future</p>
                        </div>
                        <div class="progress-content">
                            <div class="single-progress-box">
                                <h6>Engineering and Technology</h6>
                                <div class="progress" data-value="85">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0"
                                        aria-valuemax="100">
                                        <div class="value-holder"><span class="value"></span>%</div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-progress-box">
                                <h6>Oil and Gas Task</h6>
                                <div class="progress" data-value="95">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0"
                                        aria-valuemax="100">
                                        <div class="value-holder"><span class="value"></span>%</div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-progress-box">
                                <h6>Industrial Specialist</h6>
                                <div class="progress" data-value="80">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0"
                                        aria-valuemax="100">
                                        <div class="value-holder"><span class="value"></span>%</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 inner-column">
                    <div class="inner-content">
                        <div class="inner-box wow fadeInRight" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <h1 class="years">25<span>Years in Field</span></h1>
                            <h3>Our online publication provides readers with a closer look into every aspect of the company.
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- growth-section end -->


    <!-- team-style-two -->
    <section class="team-style-two about-page">
        <div class="container">
            <div class="sec-title">
                <h1>Expertise Team</h1>
                <p>Our experienced staff, combined with our global network, allow us to<br/>provide the support you need
                </p>
            </div>
            <div class="four-item-carousel owl-carousel owl-theme">
                @foreach ($teams as $team)
                <div class="team-block-two">
                    <div class="inner-box">
                        <figure class="image-box"><a href="#"><img src="{{ env('APP_URL') . $team->image }}" alt=""></a></figure>
                        <div class="lower-content">
                            <h4><a href="#">{{ $team->name }}</a></h4>
                            <span class="designation">{{ $team->designation }}</span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- team-style-two end -->


    <!-- testimonial-style-five -->
    <section class="testimonial-style-five about-page centred">
        <div class="container">
            <div class="sec-title">
                <div class="top-text">Client</div>
                <h1>See what our customers say</h1>
            </div>
            <div class="three-column-carousel owl-carousel owl-theme">
                @foreach ($testimoinals as $testimoinal)
                <div class="testimonial-content">
                    <div class="inner-box">
                        <div class="author-info">
                            <figure class="author-thumb"><img src="{{ $testimoinal->image }}" alt=""></figure>
                            <h5>{{ $testimoinal->name }}</h5>
                            <span class="designation">{{ $testimoinal->designation }}</span>
                        </div>
                        <div class="text">{{ $testimoinal->comment }}
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- testimonial-style-five end -->


    <!-- subscribe-section -->
    <section class="subscribe-section about-page bg-color-3">
        <div class="container">
            <div class="inner-box">
                <figure class="icon-box"><img src="frontend/images/icons/paper-plane.png" alt=""></figure>
                <div class="content-box">
                    <h2>Get Subscribed Now!</h2>
                    <div class="text">The latest agopa news, articles, and resources, sent straight to your<br/>inbox
                        every month.
                    </div>
                    <form action="#" method="post" class="subscribe-form">
                        <div class="form-group">
                            <input type="email" name="email" placeholder="Type Your Email" required="">
                            <button type="submit">Subscribe Now</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- subscribe-section end -->
@endsection
