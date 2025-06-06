
@extends('frontend.layouts.app')

@section('template_title')
    Aqua Plast | Blogs
@endsection

@section('content')


    <!-- page-title-two -->
    {{-- <section class="page-title blog-page" style="background-image: url({{ asset('images/settings/'.adminSettings('blog_page_banner_image')) }});"> --}}
        {{-- <div class="container">
            <div class="content-box">
                <h1>Our Latest Blogs</h1>
            </div>
        </div> --}}
    {{-- </section> --}}

     <section class="contact-banner centred" style="background-image: url({{ asset('images/settings/'.adminSettings('blog_page_banner_image')) }});">
            </section>
    <!-- page-title-two end -->


    <!-- blog-grid -->
    <section class="blog-grid">
        <div class="container">
            <div class="row">
                @foreach($blogs as $blog)
                <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                    <div class="news-block-two news-block-three wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box"><a href="{{route('blogShow',$blog->id)}}"><img src="{{$blog->image}}" alt=""></a></figure>
                            <div class="lower-content">
                                <h4><a href="{{route('blogShow',$blog->id)}}">{{$blog->title}}</a></h4>
{{--                                <div class="text">Industry processes that can't be easily electrified must cut emissions through efficiency, aggressive innovation</div>--}}
                                <div class="link-btn"><a href="{{route('blogShow',$blog->id)}}">Read More<i class="flaticon-slim-right"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>
    <!-- blog-grid end -->

@endsection
