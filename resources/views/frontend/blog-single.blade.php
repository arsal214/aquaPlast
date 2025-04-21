@extends('frontend.layouts.app')

@section('template_title')
    Aqua Plast | Blog Detail . {{$blog->title}}
@endsection

@section('content')
<section class="page-title blog-page">
    <div class="col mx-auto news-block">
        <div class="news-block-two news-block-three wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
            <div class="inner-box">
                <figure class="image-box"><a href="{{route('blogShow',$blog->id)}}"><img src="{{$blog->image}}" alt=""></a></figure>
            </div>
        </div>
    </div>
</section>


    <!-- blog-single -->
    <section class="blog-single sidebar-page-container">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 content-side">
                    <div class="blog-single-content">

                        <div class="container">
                            <div class="content-box">
                                <h1>{{ $blog->title }}</h1>
                            </div>
                        </div>
                        {!! $blog->body !!}

                        <div class="comments-form-area">
                            <h2 class="group-title">Leave Reply</h2>
                            <div class="text">Your email address will not be published. Required fields are marked *</div>
                            <form action="#" method="post" class="comment-form">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <textarea name="message" placeholder="Type Message"></textarea>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="text" name="name" placeholder="Your Name" required>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="email" name="email" placeholder="Your Email" required>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn">
                                        <button type="button">Leave a comment</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog-single end -->

@endsection
