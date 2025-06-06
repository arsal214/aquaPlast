@extends('frontend.layouts.app')

@section('template_title')
    Aqua Plast | Products
@endsection

@section('content')


    <!-- shop-banner -->
    <section class="shop-banner">
        <div class="main-slider-carousel owl-carousel owl-theme">
            <div class="slide" style="background-image:url({{ asset('images/settings/'.adminSettings('product_page_banner_image')) }});">
                @foreach ($productSliders as $productSlider)
                    
                
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 col-md-12 col-sm-12 content-column">
                            <div class="content-box">
                                <h1>{{ $productSlider->title }}</h1>
                                <div class="text">{{ $productSlider->description }}</div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-12 col-sm-12 image-column">
                            <div class="image-box">
                                <figure class="image clearfix"><img src="{{ env('APP_URL') . $productSlider->image }}" alt=""></figure>
                            </div>
                        </div>
                    </div>
                </div>
               @endforeach

            </div>
            
        
        </div>
    </section>
    <!-- shop-banner end -->


    <!-- shop-style-two -->
    <section class="shop-style-two shop-page-2">
        <div class="container">
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
                                <h3 class="widget-title">Featured Product</h3>
                                <div class="product-post">

                                    @foreach($trendProducts as $tproduct)
                                    <div class="post">
                                        <figure class="post-thumb"><a href="product-show.blade.php"><img src="{{$tproduct?->images[0]?->image}}" alt=""></a></figure>
                                        <h4><a href="{{route('productShow', $tproduct->id)}}">{{$tproduct->name}}</a></h4>
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
                                <div class="col-12 d-flex justify-content-center mt-4">
                                    {{ $products->links('pagination::bootstrap-4') }}
                                </div>


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
                                <div class="icon-box"><i class="fas fa-thumbs-up"></i></div>
                                <h4>Durability & Reliability</h4>
                                {{-- <div class="text">Orders over $500.00</div> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-item wow zoomIn animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="box">
                            <div class="inner">
                                <div class="icon-box"><i class="far fa-thumbs-up"></i></div>
                                <h4>High-Quality & Affordable</h4>
                                {{-- <div class="text">Respecting natur</div> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-item wow zoomIn animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="box">
                            <div class="inner">
                                <div class="icon-box"><i class="fas fa-lock"></i></div>
                                <h4>Tough & Trusted</h4>
                                {{-- <div class="text">Delivery within 3-4<br />business days</div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- shipping-service end -->

@endsection


