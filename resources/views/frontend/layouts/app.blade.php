<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<meta name="csrf-token" content="{{ csrf_token() }}">

<title>{{ config('app.name', 'Laravel Real Estate') }}</title>

<!-- Fav Icon -->
<link rel="icon" href="{{asset('frontend/images/favicon.png')}}" type="image/x-icon">

<meta property="og:title" content="روشم - Rushm" />
<meta property="og:site_name" content="Rushm" />
<meta property="og:type" content="realestate" />
<meta property="og:image" content="https://f.top4top.io/p_24822gs1y1.png" />

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

<!-- Stylesheets -->
<link href="{{asset('frontend/css/font-awesome-all.css')}}" rel="stylesheet">
<link href="{{asset('frontend/css/flaticon.css')}}" rel="stylesheet">
<link href="{{asset('frontend/css/owl.css')}}" rel="stylesheet">
<link href="{{asset('frontend/css/bootstrap.css')}}" rel="stylesheet">
<link href="{{asset('frontend/css/jquery.fancybox.min.css')}}" rel="stylesheet">
<link href="{{asset('frontend/css/animate.css')}}" rel="stylesheet">
<link href="{{asset('frontend/css/jquery-ui.css')}}" rel="stylesheet">
<link href="{{asset('frontend/css/nice-select.css')}}" rel="stylesheet">
<link href="{{asset('frontend/css/color/theme-color.css')}}" id="jssDefault" rel="stylesheet">
<link href="{{asset('frontend/css/switcher-style.css')}}" rel="stylesheet">
<link href="{{asset('frontend/css/rtl.css')}}" rel="stylesheet">
<link href="{{asset('frontend/css/style.css')}}" rel="stylesheet">
<link href="{{asset('frontend/css/responsive.css')}}" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">

@yield('styles')

</head>


<!-- page wrapper -->
<body>

    <div class="boxed_wrapper rtl">


        <!-- preloader -->
        <div class="loader-wrap">
            <div class="preloader">
                <div class="preloader-close"><i class="far fa-times"></i></div>
                <div id="handle-preloader" class="handle-preloader">
                    <div class="animation-preloader">
                        <div class="spinner"></div>
                        <div class="txt-loading">
                            <span data-text-preloader="m" class="letters-loading">
                                m
                            </span>
                            <span data-text-preloader="h" class="letters-loading">
                                h
                            </span>
                            <span data-text-preloader="s" class="letters-loading">
                                s
                            </span>
                            <span data-text-preloader="u" class="letters-loading">
                                u
                            </span>
                            <span data-text-preloader="r" class="letters-loading">
                                r
                            </span>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
        <!-- preloader end -->
        
                <!-- switcher menu -->
                <div class="switcher">
                    <div class="switch_btn">
                        <button><i class="fas fa-palette"></i></button>
                    </div>
                    <div class="switch_menu">
                        <!-- color changer -->
                        <div class="switcher_container">
                            <ul id="styleOptions" title="switch styling">
                                <li>
                                    <a href="javascript: void(0)" data-theme="green" class="green-color"></a>
                                </li>
                                <li>
                                    <a href="javascript: void(0)" data-theme="pink" class="pink-color"></a>
                                </li>
                                <li>
                                    <a href="javascript: void(0)" data-theme="violet" class="violet-color"></a>
                                </li>
                                <li>
                                    <a href="javascript: void(0)" data-theme="crimson" class="crimson-color"></a>
                                </li>
                                <li>
                                    <a href="javascript: void(0)" data-theme="orange" class="orange-color"></a>
                                </li>
                            </ul>
                        </div> 
                    </div>
                </div>
                <!-- end switcher menu -->

                
        {{-- MAIN NAVIGATION BAR --}}
        @include('frontend.partials.navbar')

        {{-- SLIDER SECTION --}}
        @if(Request::is('/'))
            @include('frontend.partials.slider')
        @endif

        @if(Request::is('/'))
        {{-- SEARCH BAR --}}
        @include('frontend.partials.search')
        @endif

        {{-- MAIN CONTENT --}}
            @yield('content')

        {{-- FOOTER --}}
        @include('frontend.partials.footer')



        <script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
        {!! Toastr::message() !!}
        <script>
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    toastr.error('{{ $error }}','Error',{
                        closeButtor: true,
                        progressBar: true 
                    });
                @endforeach
            @endif
        </script>

        @yield('scripts')

    </body><!-- End of .page_wrapper -->
    </html>
    