@extends('frontend.layouts.app')

@section('template_title')
    Aqua Plast | Contact
@endsection

@section('content')

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
@if($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <!-- contact-banner Mobile Banner -->
    {{-- <section class="contact-banner centred d-sm-none d-block" style="background-image: url({{ env('APP_URL') . $contact->background_image }});"> --}}
        {{-- <div class="container">
            <div class="content-box">
                <h1>Contact Us</h1>
                <h3>If you have any general enquiries, we'd love to hear from you</h3>
            </div>
        </div> --}}
    {{-- </section> --}}
    {{-- Desktop Banner --}}
     {{-- <section class="contact-banner centred d-none d-sm-block" style="background-image: url({{ env('APP_URL') . $contact->background_image }});">
            </section> --}}


            <section class="contact-banner centred" style="background-image: url({{ env('APP_URL') . $contact->background_image }});">
            </section>
    <!-- contact-banner end -->




    <!-- contact-info-section -->
    <section class="contact-info-section contact-page-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12 info-column">
                    <div class="single-info-box">
                        <div class="icon-box"><i class="flaticon-location"></i></div>
                        <h3>Location</h3>
                        <div class="text">{{ $contact->location }}</div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 info-column">
                    <div class="single-info-box">
                        <div class="icon-box"><i class="flaticon-telephone"></i></div>
                        <h3>Call us on</h3>
                        <div class="text">
                            <a href="tel:{{ $contact->phone }}">{{ $contact->phone }}</a><br />
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 info-column">
                    <div class="single-info-box">
                        <div class="icon-box"><i class="flaticon-envelope"></i></div>
                        <h3>Email</h3>
                        <div class="text">
                            <a href="mailto:{{ $contact->email }}">{{ $contact->email }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact-info-section end -->


    <!-- contact-section -->
    <section class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 form-column">
                    <div class="contact-form-area">
                        <h2>Get In Touch</h2>
                        <form method="post" action="{{ route('support') }}" id="contact-form" class="default-form">
                            @csrf
                            <div class="form-group">
                                <input type="text" name="name" placeholder="Your Name*" required>
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" placeholder="Your Email*" required>
                            </div>
                            <div class="form-group">
                                <input type="text" name="phone" placeholder="Phone number" required>
                            </div>
                            <div class="form-group">
                                <input type="text" name="subject" placeholder="Subject" required>
                            </div>
                            <div class="form-group">
                                <textarea name="message" placeholder="Your Message"></textarea>
                            </div>
                            <div class="form-group message-btn">
                                <button type="submit" class="theme-btn" name="submit-form">Submit a Message</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 map-column">
                    <div class="google-map-area">
                        <div
                            class="google-map"
                            id="contact-google-map"
                            data-map-lat="40.712776"
                            data-map-lng="-74.005974"
                            data-icon-path="{{ asset('frontend/images/icons/map-marker.png') }}"
                            data-map-title="Brooklyn, New York, United Kingdom"
                            data-map-zoom="12"
                            data-markers='{
                                "marker-1": [40.712776, -74.005974, "<h4>Branch Office</h4><p>77/99 New York</p>","images/icons/map-marker.png"]
                            }'>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact-section end -->

@endsection
