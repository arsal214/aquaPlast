@extends('frontend.layouts.app')

@section('template_title')
    Aqua Plast | Term Conditions . {{$termConditions->title}}
@endsection

@section('content')
{{-- <section class="page-title blog-page" style="background-image:url({{ env('APP_URL') . $termConditions->image }})"> --}}
    {{-- <div class="container">
        <div class="content-box">
            <h1>{{ $termConditions->title }}</h1>
        </div>
    </div> --}}
{{-- </section> --}}

 <section class="contact-banner centred" style="background-image: url({{ env('APP_URL') . $termConditions->image }});">
            </section>


    <!-- blog-single -->
    <section class="blog-single sidebar-page-container">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 content-side">
                    <div class="blog-single-content">


                        {!! $termConditions->description !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog-single end -->

@endsection
