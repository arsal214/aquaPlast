@extends('frontend.layouts.app')

@section('template_title')
    Aqua Plast | Products
@endsection

@section('content')


    <!-- shop-banner -->
    <section class="shop-banner">
        <div class="main-slider-carousel owl-carousel owl-theme">
            <div class="slide" style="background-image:url(images/main-slider/slider-10.jpg)">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 col-md-12 col-sm-12 content-column">
                            <div class="content-box">
                                <h1>water jet pumps<br />bare pumps</h1>
                                <div class="text">This Center Lathe Machine supplied by us is highly used for the<br />purpose of producing concentric work. This product is a highly<br />demanded product in the</div>
                                <div class="btn-box"><a href="product-show.blade.php">Add To Cart</a></div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-12 col-sm-12 image-column">
                            <div class="image-box">
                                <figure class="image clearfix"><img src="images/resource/machine-2.png" alt=""></figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide" style="background-image:url(images/main-slider/slider-10.jpg)">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 col-md-12 col-sm-12 content-column">
                            <div class="content-box">
                                <h1>water jet pumps<br />bare pumps</h1>
                                <div class="text">This Center Lathe Machine supplied by us is highly used for the<br />purpose of producing concentric work. This product is a highly<br />demanded product in the</div>
                                <div class="btn-box"><a href="product-show.blade.php">Add To Cart</a></div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-12 col-sm-12 image-column">
                            <div class="image-box">
                                <figure class="image clearfix"><img src="images/resource/machine-2.png" alt=""></figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide" style="background-image:url(images/main-slider/slider-10.jpg)">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 col-md-12 col-sm-12 content-column">
                            <div class="content-box">
                                <h1>water jet pumps<br />bare pumps</h1>
                                <div class="text">This Center Lathe Machine supplied by us is highly used for the<br />purpose of producing concentric work. This product is a highly<br />demanded product in the</div>
                                <div class="btn-box"><a href="product-show.blade.php">Add To Cart</a></div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-12 col-sm-12 image-column">
                            <div class="image-box">
                                <figure class="image clearfix"><img src="images/resource/machine-2.png" alt=""></figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide" style="background-image:url(images/main-slider/slider-10.jpg)">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 col-md-12 col-sm-12 content-column">
                            <div class="content-box">
                                <h1>water jet pumps<br />bare pumps</h1>
                                <div class="text">This Center Lathe Machine supplied by us is highly used for the<br />purpose of producing concentric work. This product is a highly<br />demanded product in the</div>
                                <div class="btn-box"><a href="product-show.blade.php">Add To Cart</a></div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-12 col-sm-12 image-column">
                            <div class="image-box">
                                <figure class="image clearfix"><img src="images/resource/machine-2.png" alt=""></figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- shop-banner end -->


    <!-- shop-style-two -->
    <section class="shop-style-two shop-page-2">
        <div class="container">
            <div class="item-sorting clearfix">
                <div class="result-column pull-left">
                    <h6>Showing 1–9 of 9 results</h6>
                </div>
                <div class="select-column select-box pull-right">
                    <select class="selectmenu">
                        <option selected="selected">New product</option>
                    </select>
                </div>
            </div>
            <div class="upper-box">
                <div class="row">
                    <div class="col-lg-3 col-md-12 col-sm-12 sidebar-side">
                        <div class="shop-sidebar">
                            <div class="search-widget sidebar-widget">
                                <div class="search-box">
                                    <form action="#" method="post">
                                        <div class="form-group">
                                            <input type="search" name="search-field" placeholder="Search" required="">
                                            <button type="submit"><i class="fas fa-search"></i></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="categories-widget sidebar-widget">
                                <h3 class="widget-title">Categories</h3>
                                <ul class="shop-categories">
                                    @foreach($category as $cat)
                                    <li><a href="#">{{$cat->name}}</a></li>
                                    @endforeach
                                </ul>
                            </div>


                            <div class="post-widget sidebar-widget">
                                <h3 class="widget-title">Trend Product</h3>
                                <div class="product-post">

                                    @foreach($trendProducts as $tprouct)
                                    <div class="post">
                                        <figure class="post-thumb"><a href="product-show.blade.php"><img src="{{$tprouct?->images[0]?->image}}" alt=""></a></figure>
                                        <h4><a href="{{route('productShow', $tprouct->id)}}">{{$product->name}}</a></h4>
                                    </div>
                                    @endforeach

                                </div>
                            </div>




                        </div>
                    </div>
                    <div class="col-lg-9 col-md-12 col-sm-12 product-block">
                        <div class="product-block-area centred">
                            <div class="row">

                                @foreach($products as $product )
                                <div class="col-lg-4 col-md-6 col-sm-12 shop-block">
                                    <div class="shop-block-two">
                                        <div class="inner-box">
                                            <div class="image-holder">
                                                <figure class="image-box"><img src="{{$product?->images[0]?->image}}" alt=""></figure>
                                                <ul class="info-list">
                                                    <li><a href="{{route('productShow', $product->id)}}"><i class="fas fa-eye"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="lower-content">
                                                <h4><a href="{{route('productShow', $product->id)}}">{{$product->name}}</a></h4>
                                                <div class="btn-box"><a href="{{route('productShow', $product->id)}}">See Detail</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach



                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- shop-style-two end -->


    <!-- shipping-service -->
    <section class="shipping-service">
        <div class="container">
            <div class="outer-container clearfix">
                <div class="single-item wow zoomIn animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="box">
                            <div class="inner">
                                <div class="icon-box"><i class="fas fa-truck"></i></div>
                                <h4>Free Shipping</h4>
                                <div class="text">Orders over $500.00</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-item wow zoomIn animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="box">
                            <div class="inner">
                                <div class="icon-box"><i class="far fa-thumbs-up"></i></div>
                                <h4>100% Made In US</h4>
                                <div class="text">Respecting natur</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-item wow zoomIn animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="box">
                            <div class="inner">
                                <div class="icon-box"><i class="fas fa-lock"></i></div>
                                <h4>Safety And Quality</h4>
                                <div class="text">Delivery within 3-4<br />business days</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- shipping-service end -->

@endsection


