@extends('frontend.layouts.app')

@section('template_title')
    Aqua Plast | Privacy Policy
@endsection

@section('content')
<section class="page-title blog-page" style="background-image:url({{ env('APP_URL') . $privacyPolicy?->image }})">
    
</section>


    <!-- blog-single -->
    <section class="blog-single sidebar-page-container">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 content-side">
                    <div class="blog-single-content">


                        {!! $privacyPolicy?->description !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog-single end -->

@endsection
