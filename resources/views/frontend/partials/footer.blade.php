        <!-- main-footer -->
        <footer class="main-footer">
            @if(Request::is('/'))
            <div class="footer-top bg-color-2">
                <div class="auto-container">
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget about-widget">
                                <div class="widget-title">
                                    <h3>موقعنا</h3>
                                </div>

                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3710.2197689597906!2d39.19769001494197!3d21.577342985703815!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x740d236ab452f26d!2zMjHCsDM0JzM4LjQiTiAzOcKwMTEnNTkuNiJF!5e0!3m2!1sen!2ssa!4v1670094031187!5m2!1sen!2ssa" width="300" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget links-widget ml-70">
                                <div class="widget-title">
                                    <h3>القائمة</h3>
                                </div>
                                <div class="widget-content">
                                    <ul class="links-list class">
                                        <li class="uppercase {{ Request::is('/') ? 'underline' : '' }}">
                                            <a href="{{ route('home') }}" class="grey-text text-lighten-3">الرئيسية</a>
                                        </li>
                                        <li class="uppercase {{ Request::is('property*') ? 'underline' : '' }}">
                                            <a href="{{ route('property') }}" class="grey-text text-lighten-3">العقارات</a>
                                        </li>
                    
                                        <li class="uppercase {{ Request::is('PRequests*') ? 'underline' : '' }}">
                                            <a href="{{ route('PropertieRequest') }}" class="grey-text text-lighten-3">طلب عقار</a>
                                        </li>
                    
                                        <li class="uppercase {{ Request::is('PMarketing*') ? 'underline' : '' }}">
                                            <a href="{{ route('PropertiesMarkating') }}" class="grey-text text-lighten-3">تسويق عقار</a>
                                        </li>
                    
                                        <li class="uppercase {{ Request::is('InfoForm*') ? 'underline' : '' }}">
                                            <a href="{{ route('InfoForm') }}" class="grey-text text-lighten-3">حلول تمويلية</a>
                                        </li>

                                        <li class="uppercase {{ Request::is('blog*') ? 'underline' : '' }}">
                                            <a href="{{ route('blog') }}" class="grey-text text-lighten-3">المدونة</a>
                                        </li>
                    
                                        <li class="uppercase {{ Request::is('contact') ? 'underline' : '' }}">
                                            <a href="{{ route('contact') }}" class="grey-text text-lighten-3">تواصل معنا</a>
                                        </li>
                                                        </ul>
                                </div>


                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget post-widget">
                                <div class="widget-title">
                                    <h3>العقارات الأخيرة</h3>
                                </div>
                                <div class="post-inner">
                                    @foreach($footerproperties as $property)
                                    <div class="post">
                                        <figure class="post-thumb"><a href="{{ route('property.show',$property->slug) }}"><img src="{{Storage::url('property/'.$property->image)}}" alt=""></a></figure>
                                        <h5><a href="{{ route('property.show',$property->slug) }}">{{ str_limit($property->title,40) }}</a></h5>
                                        <p>: غرف  {{ $property->bedroom }} دورات المياه: {{ $property->bathroom }} </p>
                                    </div>
                                    @endforeach
                
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget links-widget ml-70">
                                <div class="widget-title">
                                    <h3>التواصل الاجتماعي</h3>
                                </div>
                                <div class="widget-content">
                                    <ul class="links-list class">
                                        <li class="uppercase">
                                            <h5 class="mt-2"><a href="https://www.instagram.com/roshemcompany/" target="_blank"><i class="fab fa-instagram fa-lg"></i> إنستقرام</a></h5>
                                            <h5 class="mt-2"><a href="https://www.twitter.com/roshemcompany/" target="_blank"><i class="fab fa-twitter fa-lg"></i> تويتر</a></h5>
                                            <h5 class="mt-2"><a href="https://www.snapchat.com/add/roshemcompany" target="_blank"><i class="fab fa-snapchat fa-lg"></i> سناب شات</a></h5>

                                            <h5 class="mt-2"><a href="#" target="_blank"><i class="fa fa-phone fa-lg"></i> التواصل:   0531852852 0531853853 </a></h5>

                                        </li>
                                     </ul>
                                </div>
                            </div>
                        </div>




                    </div>
                </div>
            </div>
            @endif
            <div class="footer-bottom">
                <div class="auto-container">
                    <div class="inner-box clearfix">
                        {{-- <figure class="footer-logo"><a href="{{route('home')}}"><img src="{{asset('frontend/images/logo.png')}}" alt=""></a></figure> --}}
                        <div class="copyright pull-left">
                            @if(isset($footersettings[0]) && $footersettings[0]['footer'])
                            {{ $footersettings[0]['footer'] }}
                        @else
                            © 2022 Developer puzzle.
                        @endif
                            </div>
                                    </div>
                </div>
            </div>
        </footer>


        <!-- main-footer end -->

        <!--Scroll to top-->
        <button class="scroll-top scroll-to-target" data-target="html">
            <span class="fal fa-angle-up"></span>
        </button>
    </div>


    <!-- jequery plugins -->
    <script src="{{asset('frontend/js/jquery.js')}}"></script>
    <script src="{{asset('frontend/js/popper.min.js')}}"></script>
    <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('frontend/js/owl.js')}}"></script>
    <script src="{{asset('frontend/js/wow.js')}}"></script>
    <script src="{{asset('frontend/js/validation.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.fancybox.js')}}"></script>
    <script src="{{asset('frontend/js/appear.js')}}"></script>
    <script src="{{asset('frontend/js/scrollbar.js')}}"></script>
    <script src="{{asset('frontend/js/isotope.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('frontend/js/jQuery.style.switcher.min.js')}}"></script>
    <script src="{{asset('frontend/js/jquery-ui.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.paroller.min.js')}}"></script>
    <script src="{{asset('frontend/js/nav-tool.js')}}"></script>

    <!-- main-js -->
    <script src="{{asset('frontend/js/script.js')}}"></script>
