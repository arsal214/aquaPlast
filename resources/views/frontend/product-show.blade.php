@extends('frontend.layouts.app')

@section('template_title')
    Aqua Plast | Products - {{$product->name}}
@endsection

@section('content')
    <!-- single-shop -->
    <section class="single-shop">
        <div class="container">
            <div class="products-details">
                <div class="row">
                    <div class="col-lg-7 col-md-12 col-sm-12 carousel-column">
                        <div class="carousel-content">
                            <div class="carousel-outer" data-wow-delay="0ms">
                                <ul class="image-carousel owl-carousel owl-theme">

                                    @foreach($product->images as $img)
                                    <li><a href="{{$img->image}}" class="lightbox-image" data-fancybox="gallery"><img src="{{$img->image}}" alt=""></a></li>
                                    @endforeach
                                </ul>

                                {{-- <ul class="thumbs-carousel owl-carousel owl-theme centred">
                                    @foreach($product->images as $img)
                                    <li><img src="{{$img->image}}" alt=""></li>
                                    @endforeach

                                </ul> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12 col-sm-12 content-column">
                        <div class="content-box">
                            <h3 class="product-price">{{$product->name}}</h3>
                            <div class="other-info">
                                <div class="categories-box">
                                    <ul>
                                        <li><h6>Category:</h6>&nbsp;</li>
                                        <li>{{$product?->category?->name}}</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="lower-content">
                                <div class="link-btn"><a href="{{url('/contact')}}">Contact Agent</a></div>
                                <div class="text">
                                    <p>{{$product->short_description}}</p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-info-tabs">
                <div class="product-tab tabs-box">
                    <ul class="tab-btns tab-buttons clearfix">
                        <li class="tab-btn active-btn" data-tab="#tab-1">DESCRIPTION</li>
                    </ul>
                    <div class="tabs-content">
                        <div class="tab active-tab clearfix" id="tab-1">
                            <div class="inner-box">
                                <div class="top-content">
                                    {!! $product->description !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="accordion">
                <h2 class="product-price pb-3" style="text-align: center;">FREQUENTLY ASKED QUESTIONS  (FAQ’s)</h2>
                
                @foreach ($product->faqs as $index => $faq)
                    <div class="card">
                        <div class="card-header" id="heading{{ $index }}">
                            <h5 class="mb-0">
                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapse{{ $index }}" aria-expanded="false" aria-controls="collapse{{ $index }}">
                                    {{ $faq->question }}
                                </button>
                            </h5>
                        </div>
            
                        <div id="collapse{{ $index }}" class="collapse" aria-labelledby="heading{{ $index }}" data-parent="#accordion">
                            <div class="card-body">
                                {{ $faq->answers }}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            

            <div class="latest-product">
                <h2 class="product-price pb-3" style="text-align: center;">Related Product</h2>
                <div class="row">
                    @foreach($relatedProducts as $pro)
                    <div class="col-lg-3 col-md-4 col-sm-12 shop-block">
                        <div class="shop-block-two">
                            
                            <div class="inner-box">
                                <div class="image-holder">
                                    <figure class="image-box"><img src="{{$pro?->images[0]?->image}}" alt=""></figure>
                                    <ul class="info-list">
                                        <li><a href="{{route('productShow', $pro->id)}}"><i class="fas fa-eye"></i></a></li>
                                    </ul>
                                </div>
                                <div class="lower-content">
                                    <h4><a href="{{route('productShow', $pro->id)}}">{{$pro->name}}</a></h4>
                                    <div class="btn-box"><a href="{{route('productShow', $pro->id)}}">See Detail</a></div>
                                </div>
                            </div>
                            

                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- single-shop end -->


    <!-- shipping-service -->
    <section class="shipping-service">
        <div class="container">
            <div class="outer-container clearfix">
                <div class="single-item wow zoomIn animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="box">
                            <div class="inner">
                                <div class="icon-box"><i class="fas fa-truck"></i></div>
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
