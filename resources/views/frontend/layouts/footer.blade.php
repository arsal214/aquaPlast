<!-- main-footer -->
<footer class="main-footer style-two style-four">
    <div class="container">
        <div class="footer-top">
            <div class="widget-section">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12 footer-column">
                        <div class="logo-widget footer-widget">
                            <figure class="footer-logo"><a href="{{url('/')}}"><img src="{{asset('images/settings/'.adminSettings('admin_app_logo_white'))}}" width="100px" height="100px" alt=""></a></figure>
                            <div class="text">Over 15 years of experience we’ll ensure you always get the best guidance.</div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 footer-column">
                        <div class="links-widget company-widget footer-widget">
                            <h4 class="widget-title">Quick navigation</h4>
                            <div class="widget-content">
                                <ul>
                                    <li><a href="{{ url('/team') }}">Home</a></li>
                                    <li><a href="{{ url('/about') }}">About</a></li>
                                    <li><a href="{{ url('/team') }}">Team</a></li>
                                    <li><a href="{{ url('/blog') }}">Blogs</a></li>
                                    <li><a href="{{ url('contact') }}">Contact</a></li>
                                    <li><a href="{{  url('/term-conditions') }}">Term & Conditions</a></li>
                                    <li><a href="{{ url('privacy-policy') }}">Privacy Policy</a></li>                                    
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 footer-column">
                        <div class="links-widget footer-widget">
                            <h4 class="widget-title">Categorize </h4>
                            <div class="widget-content">
                                <?php
                                use App\Models\Category;

                                $products = Category::latest()->limit(5)->get();
                                ?>
                                <ul>
                                   @foreach ($products as $product)
                                       <li> <a href="#"> {{ $product->name }} </a></li>
                                   @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-lg-3 col-md-6 col-sm-12 footer-column"> --}}
                        {{-- <div class="links-widget footer-widget">
                            <h4 class="widget-title">Industries</h4>
                            <div class="widget-content">
                                <ul>
                                    <li><a href="#">Warehousing and distribution</a></li>
                                    <li><a href="#">Food & Beverage</a></li>
                                    <li><a href="#">Oil & Gas</a></li>
                                    <li><a href="#">Industry Trade</a></li>
                                    <li><a href="#">Power Systems</a></li>
                                    <li><a href="#">Building Management</a></li>
                                </ul>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom clearfix">
            <div class="copyright pull-left">{{adminSettings('admin_footer_text')}}</div>
            <ul class="footer-social pull-right">
                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                <li><a href="#"><i class="fab fa-whatsapp"></i></a></li>
                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>            
                
            </ul>
        </div>
    </div>
</footer>
<!-- main-footer end -->
