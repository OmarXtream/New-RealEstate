        <!-- main-footer -->
        <footer class="main-footer">
            <div class="footer-top bg-color-2">
                <div class="auto-container">
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget about-widget">
                                <div class="widget-title">
                                    <h3>معلومات عنا</h3>
                                </div>
                                <div class="text">
                                    @if(isset($footersettings[0]) && $footersettings[0]['aboutus'])
                                    <p class="grey-text text-lighten-4">{{ $footersettings[0]['aboutus'] }}</p>
                                    @else
                                    <p class="grey-text text-lighten-4">إن عمارة الأرض من أولى المهام التي كلف بها الله عز وجل الإنسان ونحن في شركة الروابي العقارية جعلنا هذا التكليف تشريفاً لنا أن نكون ممن يعمرون الأرض من خلال كيان عقاري ناجح يدار برؤية اقتصادية وجدوى استثمارية تحقق المعادلات الصعبة للعمل الناجح.</p>
                                    @endif
                                 </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget links-widget ml-70">
                                <div class="widget-title">
                                    <h3>القائمة</h3>
                                </div>
                                <div class="widget-content">
                                    <ul class="links-list class">
                                        <li class="uppercase {{ Request::is('property*') ? 'underline' : '' }}">
                                            <a href="{{ route('property') }}" class="grey-text text-lighten-3">العقارات</a>
                                        </li>
                    
                                        <li class="uppercase {{ Request::is('agents*') ? 'underline' : '' }}">
                                            <a href="{{ route('agents') }}" class="grey-text text-lighten-3">الوكلاء</a>
                                        </li>
                    
                                        <li class="uppercase {{ Request::is('gallery*') ? 'underline' : '' }}">
                                            <a href="{{ route('gallery') }}" class="grey-text text-lighten-3">المعرض</a>
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
                                    <h3>Top News</h3>
                                </div>
                                <div class="post-inner">
                                    <div class="post">
                                        <figure class="post-thumb"><a href="blog-details.html"><img src="assets/images/resource/footer-post-1.jpg" alt=""></a></figure>
                                        <h5><a href="blog-details.html">The Added Value Social Worker</a></h5>
                                        <p>Mar 25, 2020</p>
                                    </div>
                                    <div class="post">
                                        <figure class="post-thumb"><a href="blog-details.html"><img src="assets/images/resource/footer-post-2.jpg" alt=""></a></figure>
                                        <h5><a href="blog-details.html">Ways to Increase Trust</a></h5>
                                        <p>Mar 24, 2020</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget contact-widget">
                                <div class="widget-title">
                                    <h3>Contacts</h3>
                                </div>
                                <div class="widget-content">
                                    <ul class="info-list clearfix">
                                        <li><i class="fas fa-map-marker-alt"></i>Flat 20, Reynolds Neck, North Helenaville, FV77 8WS</li>
                                        <li><i class="fas fa-microphone"></i><a href="tel:23055873407">+2(305) 587-3407</a></li>
                                        <li><i class="fas fa-envelope"></i><a href="mailto:info@example.com">info@example.com</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="auto-container">
                    <div class="inner-box clearfix">
                        <figure class="footer-logo"><a href="index.html"><img src="assets/images/footer-logo.png" alt=""></a></figure>
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
