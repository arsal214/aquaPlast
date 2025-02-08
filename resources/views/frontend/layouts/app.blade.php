<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <title>@yield('template_title')</title>

    <!-- Stylesheets -->
    <link href="{{asset('frontend/css/style.css')}}" rel="stylesheet">
    <link href=" {{asset('frontend/css/responsive.css')}}" rel="stylesheet">
    <link rel="icon" href="{{adminSettings('admin_app_favicon')}}" type="image/x-icon">

</head>

<!-- page wrapper -->
<body class="boxed_wrapper">


<!-- preloader -->
<div class="preloader"></div>
<!-- preloader -->


@include('frontend.layouts.header')


@yield('content')


@include('frontend.layouts.footer')


<!--Scroll to top-->
<button class="scroll-top scroll-to-target" data-target="html">
    <span class="fa fa-arrow-up"></span>
</button>



<!-- jequery plugins -->
<script src="{{asset('frontend/js/jquery.js')}}"></script>
<script src="{{asset('frontend/js/popper.min.js')}}"></script>
<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>

<script src="{{asset('frontend/js/owl.js')}} "></script>
<script src="{{asset('frontend/js/wow.js')}} "></script>
<script src="{{asset('frontend/js/validation.js')}} "></script>
<script src="{{asset('frontend/js/jquery.fancybox.js')}} "></script>
<script src="{{asset('frontend/js/appear.js')}} "></script>
<script src="{{asset('frontend/js/aos.js')}} "></script>
<script src="{{asset('frontend/js/isotope.js')}} "></script>
<script src="{{asset('frontend/js/jquery.countTo.js')}} "></script>
<script src="{{asset('frontend/js/jquery-ui.js')}} "></script>
<script src="{{asset('frontend/js/jquery.bootstrap-touchspin.js')}} "></script>

<!-- main-js -->
<script src="{{asset('frontend/js/script.js')}}"></script>





</body>
</html>
