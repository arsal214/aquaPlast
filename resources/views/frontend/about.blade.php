@extends('frontend.layouts.app')

@section('template_title')
    Aqua Plast | About Us
@endsection

@section('content')


    <!-- about-banner -->
    <section class="about-banner"
             style="background-image: url({{ env('APP_URL') . $about->background_image }});">
        <div class="container">
            <div class="content-box">
                <h1>{{ $about->title }}</h1>
            
            </div>
        </div>
    </section>
    <!-- about-banner end -->


    <!-- about-style-five -->
    <section class="about-style-five">
        <div class="container">
            <div class="inner-container">
                <div class="title-box">
                    <div class="top-text">About The Company</div>
                    <h3>{{ $about->short_description }}</h3>
                </div>
                <div class="upper-content">
                    <div class="row">
                        <div class="col-lg-8 col-md-12 col-sm-12 image-column">
                            <figure class="image-box"><img src="images/resource/about-4.jpg" alt=""></figure>
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12 content-column">
                            <div class="content-box wow fadeInRight" data-wow-delay="300ms" data-wow-duration="1500ms">
                                <div class="icon-box"><i class="flaticon-script"></i></div>
                                <h3 class="group-title">Our Story</h3>
                                <p>{{ $about->our_story }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lower-content">
                    <div class="row">
                        <div class="col-lg-5 col-md-12 col-sm-12 left-column">
                            <div class="content-box wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                                <div class="icon-box"><i class="flaticon-action"></i></div>
                                <h3 class="group-title">Our Vision</h3>
                                <p>{{ $about->our_vision }}</p>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-12 col-sm-12 right-column">
                            <div class="content-box">
                                <h3 class="group-title">Our Aim</h3>
                                <div class="text">
                                    <p>{{ $about->our_aim }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about-style-five end -->


    <!-- counter-style-two -->
    <section class="counter-style-two">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div class="content-box wow fadeInLeft" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="top-text">Statistics</div>
                        <h1>Acto Energy<br/>Natural gas-fired power</h1>
                        <div class="text">
                            <p>The United States is home to a thriving renewable energy industry, with globally
                                competitive firms in all technology subsectors, including the wind, solar</p>
                            <p>Renewable Energy: The United States is home to a thriving renewable energy industry</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 inner-column">
                    <div class="inner-box">
                        <div class="bold-text">We build well-designed, tech-ready multifamily homes 40% faster and 20%
                            less expensive
                        </div>
                        <div class="counter-outer">
                            <div class="counter-block-one wow zoomIn" data-wow-delay="500ms" data-wow-duration="1500ms">
                                <div class="text">Factory Result</div>
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="1500" data-stop="20">0</span><span>k</span>
                                </div>
                            </div>
                            <div class="counter-block-one wow zoomIn" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <div class="text">Work history</div>
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="1500"
                                          data-stop="10">0</span><span>k</span><span class="symble">+</span>
                                </div>
                            </div>
                            <div class="counter-block-one wow zoomIn" data-wow-delay="500ms" data-wow-duration="1500ms">
                                <div class="text">ward-winning</div>
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="1500" data-stop="99">0</span><span
                                        class="symble">%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- counter-style-two end -->



    <!-- team-style-two -->
    <section class="team-style-two about-page">
        <div class="container">
            <div class="sec-title">
                <h1>Expertise Team</h1>
                <p>Our experienced staff, combined with our global network, allow us to<br/>provide the support you need
                </p>
            </div>
            <div class="four-item-carousel owl-carousel owl-theme">
                <div class="team-block-two">
                    <div class="inner-box">
                        <figure class="image-box"><a href="#"><img src="{{ asset('frontend/images/resource/team-4.jpg') }}" alt=""></a></figure>
                        <div class="lower-content">
                            <h4><a href="#">Park bo young</a></h4>
                            <span class="designation">Senior Enginer</span>
                        </div>
                    </div>
                </div>
                <div class="team-block-two">
                    <div class="inner-box">
                        <figure class="image-box"><a href="#"><img src="{{ asset('frontend/images/resource/team-5.jpg')}}" alt=""></a></figure>
                        <div class="lower-content">
                            <h4><a href="#">Chan wook</a></h4>
                            <span class="designation">Senior Factory Manager</span>
                        </div>
                    </div>
                </div>
                <div class="team-block-two">
                    <div class="inner-box">
                        <figure class="image-box"><a href="#"><img src="{{ asset('frontend/images/resource/team-6.jpg')}}" alt=""></a></figure>
                        <div class="lower-content">
                            <h4><a href="#">Mahfuz Riad</a></h4>
                            <span class="designation">Senior LOTT</span>
                        </div>
                    </div>
                </div>
                <div class="team-block-two">
                    <div class="inner-box">
                        <figure class="image-box"><a href="#"><img src="{{ asset('frontend/images/resource/team-7.jpg')}}" alt=""></a></figure>
                        <div class="lower-content">
                            <h4><a href="#">Jhon Rook</a></h4>
                            <span class="designation">Junior Enginer</span>
                        </div>
                    </div>
                </div>
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
                <div class="testimonial-content">
                    <div class="inner-box">
                        <div class="author-info">
                            <figure class="author-thumb"><img src="images/resource/testimonial-3.png" alt=""></figure>
                            <h5>Tamim Anj</h5>
                            <span class="designation">Febric Indusrtries CTO</span>
                        </div>
                        <div class="text">"Compared to other design software, Acto has a more intuitive and stable
                            environment."
                        </div>
                    </div>
                </div>
                <div class="testimonial-content">
                    <div class="inner-box">
                        <div class="author-info">
                            <figure class="author-thumb"><img src="images/resource/testimonial-4.png" alt=""></figure>
                            <h5>Anjek Mac</h5>
                            <span class="designation">Ecology Engineer</span>
                        </div>
                        <div class="text">"Compared to other design software, Acto has a more intuitive and stable
                            environment."
                        </div>
                    </div>
                </div>
                <div class="testimonial-content">
                    <div class="inner-box">
                        <div class="author-info">
                            <figure class="author-thumb"><img src="images/resource/testimonial-5.png" alt=""></figure>
                            <h5>Tom Cruse</h5>
                            <span class="designation">CEO</span>
                        </div>
                        <div class="text">"Compared to other design software, Acto has a more intuitive and stable
                            environment."
                        </div>
                    </div>
                </div>
                <div class="testimonial-content">
                    <div class="inner-box">
                        <div class="author-info">
                            <figure class="author-thumb"><img src="images/resource/testimonial-3.png" alt=""></figure>
                            <h5>Tamim Anj</h5>
                            <span class="designation">Febric Indusrtries CTO</span>
                        </div>
                        <div class="text">"Compared to other design software, Acto has a more intuitive and stable
                            environment."
                        </div>
                    </div>
                </div>
                <div class="testimonial-content">
                    <div class="inner-box">
                        <div class="author-info">
                            <figure class="author-thumb"><img src="images/resource/testimonial-4.png" alt=""></figure>
                            <h5>Anjek Mac</h5>
                            <span class="designation">Ecology Engineer</span>
                        </div>
                        <div class="text">"Compared to other design software, Acto has a more intuitive and stable
                            environment."
                        </div>
                    </div>
                </div>
                <div class="testimonial-content">
                    <div class="inner-box">
                        <div class="author-info">
                            <figure class="author-thumb"><img src="images/resource/testimonial-5.png" alt=""></figure>
                            <h5>Tom Cruse</h5>
                            <span class="designation">CEO</span>
                        </div>
                        <div class="text">"Compared to other design software, Acto has a more intuitive and stable
                            environment."
                        </div>
                    </div>
                </div>
                <div class="testimonial-content">
                    <div class="inner-box">
                        <div class="author-info">
                            <figure class="author-thumb"><img src="images/resource/testimonial-3.png" alt=""></figure>
                            <h5>Tamim Anj</h5>
                            <span class="designation">Febric Indusrtries CTO</span>
                        </div>
                        <div class="text">"Compared to other design software, Acto has a more intuitive and stable
                            environment."
                        </div>
                    </div>
                </div>
                <div class="testimonial-content">
                    <div class="inner-box">
                        <div class="author-info">
                            <figure class="author-thumb"><img src="images/resource/testimonial-4.png" alt=""></figure>
                            <h5>Anjek Mac</h5>
                            <span class="designation">Ecology Engineer</span>
                        </div>
                        <div class="text">"Compared to other design software, Acto has a more intuitive and stable
                            environment."
                        </div>
                    </div>
                </div>
                <div class="testimonial-content">
                    <div class="inner-box">
                        <div class="author-info">
                            <figure class="author-thumb"><img src="images/resource/testimonial-5.png" alt=""></figure>
                            <h5>Tom Cruse</h5>
                            <span class="designation">CEO</span>
                        </div>
                        <div class="text">"Compared to other design software, Acto has a more intuitive and stable
                            environment."
                        </div>
                    </div>
                </div>
                <div class="testimonial-content">
                    <div class="inner-box">
                        <div class="author-info">
                            <figure class="author-thumb"><img src="images/resource/testimonial-3.png" alt=""></figure>
                            <h5>Tamim Anj</h5>
                            <span class="designation">Febric Indusrtries CTO</span>
                        </div>
                        <div class="text">"Compared to other design software, Acto has a more intuitive and stable
                            environment."
                        </div>
                    </div>
                </div>
                <div class="testimonial-content">
                    <div class="inner-box">
                        <div class="author-info">
                            <figure class="author-thumb"><img src="images/resource/testimonial-4.png" alt=""></figure>
                            <h5>Anjek Mac</h5>
                            <span class="designation">Ecology Engineer</span>
                        </div>
                        <div class="text">"Compared to other design software, Acto has a more intuitive and stable
                            environment."
                        </div>
                    </div>
                </div>
                <div class="testimonial-content">
                    <div class="inner-box">
                        <div class="author-info">
                            <figure class="author-thumb"><img src="images/resource/testimonial-5.png" alt=""></figure>
                            <h5>Tom Cruse</h5>
                            <span class="designation">CEO</span>
                        </div>
                        <div class="text">"Compared to other design software, Acto has a more intuitive and stable
                            environment."
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonial-style-five end -->


    <!-- subscribe-section -->
    <section class="subscribe-section about-page bg-color-3">
        <div class="container">
            <div class="inner-box">
                <figure class="icon-box"><img src="images/icons/paper-plane.png" alt=""></figure>
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
