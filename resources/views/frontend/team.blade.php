@extends('frontend.layouts.app')

@section('template_title')
    Aqua Plast | Teams
@endsection

@section('content')
    <!-- page-title -->
    <section class="page-title centred" style="background-image: url(images/background/page-title.jpg);">
        <div class="container">
            <div class="content-box">
                <h1>Our Staff</h1>
                <h3>We have small resources but also big dreams and some<br />good ideas</h3>
            </div>
        </div>
    </section>
    <!-- page-title end -->


    <!-- team-style-two -->
    <section class="team-style-two team-page">
        <div class="container">
            <div class="sec-title">
                <h1>Expertise Team</h1>
                <p>Our experienced staff, combined with our global network, allow us to<br />provide the support you need</p>
            </div>
            <div class="row">

                  @foreach ($teams as $team)
                      
                  
                <div class="col-lg-4 col-md-6 col-sm-12 team-block">
                    <div class="team-block-two">
                        <div class="inner-box">
                            <figure class="image-box"><a href="#"><img src="{{ env('APP_URL') . $team->image }}" alt=""></a></figure>
                            <div class="lower-content">
                                <h4><a href="#">{{ $team->name }}</a></h4>
                                <span class="designation">{{ $team->designation }}</span>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>
    <!-- team-style-two end -->



@endsection
