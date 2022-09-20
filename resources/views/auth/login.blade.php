@extends('frontend.layouts.app')

@section('content')
        <!--Page Title-->
        <section class="page-title-two bg-color-1 centred">
            <div class="pattern-layer">
                <div class="pattern-1" style="background-image: url(assets/images/shape/shape-9.png);"></div>
                <div class="pattern-2" style="background-image: url(assets/images/shape/shape-10.png);"></div>
            </div>
            <div class="auto-container">
                <div class="content-box clearfix">
                    <h1>Sign In</h1>
                    <ul class="bread-crumb clearfix">
                        <li><a href="index.html">Home</a></li>
                        <li>Sign In</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--End Page Title-->


        <!-- ragister-section -->
        <section class="ragister-section centred sec-pad">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-xl-8 col-lg-12 col-md-12 offset-xl-2 big-column">
                        <div class="sec-title">
                            <h5>تسجيل الدخول</h5>
                            <h2>الدخول مع روشم</h2>
                        </div>
                        <div class="tabs-box">
                            <div class="tab-btn-box">
                                <ul class="tab-btns tab-buttons centred clearfix">
                                    <li class="tab-btn active-btn" data-tab="#tab-1">وسيط</li>
                                    <li class="tab-btn" data-tab="#tab-2">عميل</li>
                                </ul>
                            </div>
                            <div class="tabs-content">
                                <div class="tab active-tab" id="tab-1">
                                    <div class="inner-box">
                                        <h4>دخول</h4>
                                        <form method="POST" action="{{ route('login') }}">
                                            @csrf
                                             <div class="form-group">
                                                <label>Agent name</label>
                                                <input type="text" name="name" required="">
                                            </div>
                                            <div class="form-group">
                                                <label>Email address</label>
                                                <input type="email" name="email" required="">
                                            </div>
                                            <div class="form-group">
                                                <label>Password</label>
                                                <input type="password" name="name" required="">
                                            </div>
                                            <div class="form-group message-btn">
                                                <button type="submit" class="theme-btn btn-one">Sign in</button>
                                            </div>
                                        </form>
                                        <div class="othre-text">
                                            <p>Have not any account? <a href="signup.html">Register Now</a></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab" id="tab-2">
                                    <div class="inner-box">
                                        <h4>دخول</h4>
                                        <form method="POST" action="{{ route('login') }}">
                                            @csrf
                                            <div class="form-group">
                                                <label>البريد الإلكتروني</label>
                                                <input id="email" type="email" class="{{ $errors->has('email') ? 'is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                                @if ($errors->has('email'))
                                                    <span class="helper-text" data-error="wrong" data-success="right">
                                                        <strong>{{ $errors->first('email') }}</strong>
                                                    </span>
                                                @endif
                                               </div>
                                            <div class="form-group">
                                                <label>كلمة المرور</label>
                                                <input id="password" type="password" class="{{ $errors->has('password') ? 'is-invalid' : '' }}" name="password" required>

                                                @if ($errors->has('password'))
                                                    <span class="helper-text" data-error="wrong" data-success="right">
                                                        <strong>{{ $errors->first('password') }}</strong>
                                                    </span>
                                                @endif
                                                            </div>
                                            <div class="form-group message-btn">
                                                <button type="submit" class="theme-btn btn-one">تسجيل دخول</button>
                                            </div>
                                        </form>
                                        <div class="othre-text">
                                            <p>ليس لديك حساب?  <a href="{{route('register')}}">سجل الآن</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

@endsection
