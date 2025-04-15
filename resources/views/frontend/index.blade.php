
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
                <div class="container">
                    <div class="content-box">
                        <h1>{{  $slider->title }}</h1>
                        <h3>{{ $slider->description }}</h3>
                    </div>
                </div>
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
                        <div class="top-text">Done Case</div>
                        <div class="sec-title"><h1>Our Products</h1></div>
                        <div class="text">Our experienced staff, combined with our global network, allow us to provide the support you need</div>
                    </div>
                    <div class="filters">
                        <ul class="filter-tabs filter-btns centred clearfix">
                            @foreach($category as $cat)
                            <li class="active filter" data-role="button" data-filter=".all">{{$cat->name}}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="items-container row clearfix">
                    @foreach($products as $product)
                    <div class="col-lg-3 col-md-4 col-sm-12 masonry-item small-column all chamical oil_gas factory">
                        <div class="project-block-four">
                            <div class="inner-box">
                                <figure class="image-box">
                                    <img src="{{$product->images[0]->image}}" alt="">
                                </figure>
                                <div class="overlay-box">
                                    <div class="box">
                                        <div class="inner">
                                            <h4><a href="{{route('productShow', $product->id)}}">{{$product->name}}</a></h4>
                                            <div class="btn-box"><a href="{{route('productShow', $product->id)}}">See Detail</a></div>
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
    <section class="weare-section-two" >
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div class="content-box">
                        <div class="top-content wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="top-text">WHO WE ARE</div>
                            <div class="sec-title"><h1>The future in Oil and Gas production planning</h1></div>
                            <h2>Exploration and drilling cost planning</h2>
                            <div class="text">In a constantly changing world of geopolitics, country energy diversification, and greener consumer options, companies must prioritize capital efficiency</div>
                        </div>
                        <div class="lower-content wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                    <div class="single-item">
                                        <div class="icon-box"><i class="flaticon-rocket"></i></div>
                                        <h5><a href="#">spiritnow Stories</a></h5>
                                        <div class="text">Petroleum refiners, fuel transport and end-user sales at gas stations.</div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                    <div class="single-item">
                                        <div class="icon-box"><i class="flaticon-oil"></i></div>
                                        <h5><a href="#">Power in Cooperation</a></h5>
                                        <div class="text">Petroleum refiners, fuel transport and end-user sales at gas stations.</div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                    <div class="single-item">
                                        <div class="icon-box"><i class="flaticon-factory-machine"></i></div>
                                        <h5><a href="#">Planning Oil and Gas</a></h5>
                                        <div class="text">Petroleum refiners, fuel transport and end-user sales at gas stations.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 inner-column">
                    <div class="inner-content wow fadeInRight" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <figure class="image-box"><img src="images/resource/weare-1.jpg" alt=""></figure>
                        <div class="inner-box">
                            <div class="link-btn"><a href="#"><i class="flaticon-slim-right"></i></a></div>
                            <div class="text-content">
                                <h2>The safe choice for your supply needs Oil & Gas</h2>
                                <div class="text">Analyze overall plant capacity by planning for incoming supply and market demand</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- weare-section-two end -->



    <!-- growth-section -->
    <section class="growth-section">
        <div class="image-column" style="background-image: url(images/background/growth-bg.jpg);"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div class="content-box wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="sec-title">
                            <h1>Sustainability Economic Growth</h1>
                            <p>Sustainable development is about conducting our business to promote economic growth, a healthy environment and vibrant communities, now and into the future</p>
                        </div>
                        <div class="progress-content">
                            <div class="single-progress-box">
                                <h6>Engineering and Technology</h6>
                                <div class="progress" data-value="85">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                        <div class="value-holder"><span class="value"></span>%</div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-progress-box">
                                <h6>Oil and Gas Task</h6>
                                <div class="progress" data-value="95">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
                                        <div class="value-holder"><span class="value"></span>%</div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-progress-box">
                                <h6>Industrial Specialist</h6>
                                <div class="progress" data-value="80">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
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
                            <h3>Our online publication provides readers with a closer look into every aspect of the company.</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- growth-section end -->


    <!-- testimonial-style-three -->
    <section class="testimonial-style-three centred">
        <div class="container">
            <div class="title-box">
                <div class="top-text">Testimonial</div>
                <div class="sec-title">
                    <h1>What people say about us</h1>
                    <p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print<br />graphic or web designs. The passage is attributed to an unknown</p>
                </div>
            </div>
            <div class="two-column-carousel owl-carousel owl-theme">
                <div class="testimonial-content">
                    <div class="inner-box">
                        <div class="text">"Compared to other design software, Acto has a more intuitive and stable environment."</div>
                        <div class="author-info">
                            <figure class="author-thumb"><img src="images/resource/testimonial-1.png" alt=""></figure>
                            <h5>Tamim Anj</h5>
                            <span class="designation">Systems Engineer</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-content">
                    <div class="inner-box">
                        <div class="text">"Compared to other design software, Acto has a more intuitive and stable environment."</div>
                        <div class="author-info">
                            <figure class="author-thumb"><img src="images/resource/testimonial-2.png" alt=""></figure>
                            <h5>Mahfuz Riad</h5>
                            <span class="designation">Engineering and Technology</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonial-style-three end -->


    <!-- team-style-three -->
    <section class="team-style-three">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 team-block">
                    <div class="team-block-three wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box"><a href="#"><img src="images/resource/team-8.jpg" alt=""></a></figure>
                            <div class="content-box">
                                <h4><a href="#">Park bo young</a></h4>
                                <span class="designation">Senior Enginer</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 team-block">
                    <div class="team-block-three wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box"><a href="#"><img src="images/resource/team-9.jpg" alt=""></a></figure>
                            <div class="content-box">
                                <h4><a href="#">Lee bo young</a></h4>
                                <span class="designation">ECO Senior Enginer</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 team-block">
                    <div class="team-block-three wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box"><a href="#"><img src="images/resource/team-10.jpg" alt=""></a></figure>
                            <div class="content-box">
                                <h4><a href="#">Mahfuz Riad</a></h4>
                                <span class="designation">Senior Enginer</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- team-style-two end -->


    <!-- news-style-three -->
    <section class="news-style-three">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 title-column">
                    <div class="title-box wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="top-text">Some News</div>
                        <h1>News from around the world</h1>
                        <div class="text">Subscribe today to make sure you are update to date on life</div>
                        <div class="link-btn"><a href="#">Discover More Blog</a></div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                    <div class="news-block-two wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <h4><a href="blog-single.blade.php">Leverage multiple forecast methods to determine</a></h4>
                            <div class="post-info">by Mahfuz Riad , on July 19</div>
                            <div class="text">Enterprise Iron’s deep industry experience in operational and technology consulting enables us to identify</div>
                            <div class="link-btn"><a href="blog-single.blade.php">Read More<i class="flaticon-slim-right"></i></a></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                    <div class="news-block-two wow fadeInRight" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <h4><a href="blog-single.blade.php">Plan and adjust projects on the fly</a></h4>
                            <div class="post-info">by Mahfuz Riad , on July 20</div>
                            <div class="text">Factory OS is revolutionizing home construction. We’ve combined pioneering technology with tried</div>
                            <div class="link-btn"><a href="blog-single.blade.php">Read More<i class="flaticon-slim-right"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- news-style-three end -->


    <!-- subscribe-style-two -->
    <section class="subscribe-style-two">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 left-column">
                    <div class="left-content">
                        <h3>Work With Us</h3>
                        <div class="btn-box"><a href="#">View Open Construction</a></div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 right-column">
                    <div class="right-content">
                        <div class="inner-box wow fadeInRight" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="video-box"><a href="https://www.youtube.com/watch?v=nfP5N9Yc72A&amp;t=28s" class="lightbox-image" data-caption=""><i class="fas fa-play"></i></a></div>
                            <h2 class="phone"><a href="tel:{{ $contact->phone }}">{{ $contact->phone }}</a></h2>
                            <div class="text">Make Quick Call for any Kinds of<br />Industries Question</div>
                            <h3>Sign up for updates</h3>
                            <form action="#" method="post" class="subscribe-form">
                                <div class="form-group">
                                    <input type="email" name="email" placeholder="Email Address" required="">
                                    <button type="submit">Subscribe</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- subscribe-style-two end -->
@endsection





