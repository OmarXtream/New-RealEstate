@extends('frontend.layouts.app')

@section('content')
        <!-- feature-style-two -->
        <section class="feature-style-two sec-pad">
            <div class="auto-container">
                <div class="sec-title">
                    <h5>Features</h5>
                    <h2>Featured Property</h2>
                </div>
                <div class="three-item-carousel owl-carousel owl-theme owl-dots-none nav-style-one">
                    <div class="feature-block-one">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="frontend/images/feature/feature-1.jpg" alt=""></figure>
                                <div class="batch"><i class="icon-11"></i></div>
                                <span class="category">Featured</span>
                            </div>
                            <div class="lower-content">
                                <div class="author-info clearfix">
                                    <div class="author pull-left">
                                        <figure class="author-thumb"><img src="frontend/images/feature/author-1.jpg" alt=""></figure>
                                        <h6>Michael Bean</h6>
                                    </div>
                                    <div class="buy-btn pull-right"><a href="property-details.html">For Buy</a></div>
                                </div>
                                <div class="title-text"><h4><a href="property-details.html">Villa on Grand Avenue</a></h4></div>
                                <div class="price-box clearfix">
                                    <div class="price-info pull-left">
                                        <h6>Start From</h6>
                                        <h4>$30,000.00</h4>
                                    </div>
                                    <ul class="other-option pull-right clearfix">
                                        <li><a href="property-details.html"><i class="icon-12"></i></a></li>
                                        <li><a href="property-details.html"><i class="icon-13"></i></a></li>
                                    </ul>
                                </div>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing sed.</p>
                                <ul class="more-details clearfix">
                                    <li><i class="icon-14"></i>3 Beds</li>
                                    <li><i class="icon-15"></i>2 Baths</li>
                                    <li><i class="icon-16"></i>600 Sq Ft</li>
                                </ul>
                                <div class="btn-box"><a href="property-details.html" class="theme-btn btn-two">See Details</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="feature-block-one">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="frontend/images/feature/feature-2.jpg" alt=""></figure>
                                <div class="batch"><i class="icon-11"></i></div>
                                <span class="category">Featured</span>
                            </div>
                            <div class="lower-content">
                                <div class="author-info clearfix">
                                    <div class="author pull-left">
                                        <figure class="author-thumb"><img src="frontend/images/feature/author-2.jpg" alt=""></figure>
                                        <h6>Robert Niro</h6>
                                    </div>
                                    <div class="buy-btn pull-right"><a href="apropertygents-details.html">For Rent</a></div>
                                </div>
                                <div class="title-text"><h4><a href="property-details.html">Contemporary Apartment</a></h4></div>
                                <div class="price-box clearfix">
                                    <div class="price-info pull-left">
                                        <h6>Start From</h6>
                                        <h4>$45,000.00</h4>
                                    </div>
                                    <ul class="other-option pull-right clearfix">
                                        <li><a href="property-details.html"><i class="icon-12"></i></a></li>
                                        <li><a href="property-details.html"><i class="icon-13"></i></a></li>
                                    </ul>
                                </div>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing sed.</p>
                                <ul class="more-details clearfix">
                                    <li><i class="icon-14"></i>3 Beds</li>
                                    <li><i class="icon-15"></i>2 Baths</li>
                                    <li><i class="icon-16"></i>600 Sq Ft</li>
                                </ul>
                                <div class="btn-box"><a href="property-details.html" class="theme-btn btn-two">See Details</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="feature-block-one">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="frontend/images/feature/feature-3.jpg" alt=""></figure>
                                <div class="batch"><i class="icon-11"></i></div>
                                <span class="category">Featured</span>
                            </div>
                            <div class="lower-content">
                                <div class="author-info clearfix">
                                    <div class="author pull-left">
                                        <figure class="author-thumb"><img src="frontend/images/feature/author-3.jpg" alt=""></figure>
                                        <h6>Keira Mel</h6>
                                    </div>
                                    <div class="buy-btn pull-right"><a href="property-details.html">Sold Out</a></div>
                                </div>
                                <div class="title-text"><h4><a href="property-details.html">Luxury Villa With Pool</a></h4></div>
                                <div class="price-box clearfix">
                                    <div class="price-info pull-left">
                                        <h6>Start From</h6>
                                        <h4>$63,000.00</h4>
                                    </div>
                                    <ul class="other-option pull-right clearfix">
                                        <li><a href="property-details.html"><i class="icon-12"></i></a></li>
                                        <li><a href="property-details.html"><i class="icon-13"></i></a></li>
                                    </ul>
                                </div>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing sed.</p>
                                <ul class="more-details clearfix">
                                    <li><i class="icon-14"></i>3 Beds</li>
                                    <li><i class="icon-15"></i>2 Baths</li>
                                    <li><i class="icon-16"></i>600 Sq Ft</li>
                                </ul>
                                <div class="btn-box"><a href="property-details.html" class="theme-btn btn-two">See Details</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="more-btn centred"><a href="property-list.html" class="theme-btn btn-one">View All Listing</a></div>
            </div>
        </section>
        <!-- feature-style-two end -->


        <!-- cta-section -->
        <section class="cta-section alternate-2 centred" style="background-image: url(frontend/images/background/cta-1.jpg);">
            <div class="auto-container">
                <div class="inner-box clearfix">
                    <div class="text">
                        <h2>Looking to Buy a New Property or <br />Sell an Existing One?</h2>
                    </div>
                    <div class="btn-box">
                        <a href="property-details.html" class="theme-btn btn-three">Rent Properties</a>
                        <a href="index.html" class="theme-btn btn-one">Buy Properties</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- cta-section end -->


        <!-- deals-style-two -->
        <section class="deals-style-two sec-pad">
            <div class="auto-container">
                <div class="sec-title centred">
                    <h5>Hot Property</h5>
                    <h2>Our Best Deals</h2>
                </div>
                <div class="deals-carousel owl-carousel owl-theme dots-style-one owl-nav-none">
                    <div class="single-item">
                        <div class="row clearfix">
                            <div class="col-lg-6 col-md-6 col-sm-12 deals-block">
                                <div class="image-box">
                                    <figure class="image"><img src="frontend/images/resource/deals-2.jpg" alt=""></figure>
                                    <div class="batch"><i class="icon-11"></i></div>
                                    <span class="category">Featured</span>
                                    <div class="buy-btn"><a href="property-details.html">For Buy</a></div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 deals-block">
                                <div class="deals-block-one">
                                    <div class="inner-box">
                                        <div class="lower-content">
                                            <div class="title-text"><h4><a href="property-details.html">Villa on Grand Avenue</a></h4></div>
                                            <div class="price-box clearfix">
                                                <div class="price-info pull-left">
                                                    <h6>Start From</h6>
                                                    <h4>$30,000.00</h4>
                                                </div>
                                                <div class="author-box pull-right">
                                                    <figure class="author-thumb"> 
                                                        <img src="frontend/images/feature/author-1.jpg" alt="">
                                                        <span>Michael Bean</span>
                                                    </figure>
                                                </div>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing sed eiusm do tempor incididunt labore.</p>
                                            <ul class="more-details clearfix">
                                                <li><i class="icon-14"></i>3 Beds</li>
                                                <li><i class="icon-15"></i>2 Baths</li>
                                                <li><i class="icon-16"></i>600 Sq Ft</li>
                                            </ul>
                                            <div class="other-info-box clearfix">
                                                <div class="btn-box pull-left"><a href="property-details.html" class="theme-btn btn-one">See Details</a></div>
                                                <ul class="other-option pull-right clearfix">
                                                    <li><a href="property-details.html"><i class="icon-12"></i></a></li>
                                                    <li><a href="property-details.html"><i class="icon-13"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-item">
                        <div class="row clearfix">
                            <div class="col-lg-6 col-md-6 col-sm-12 deals-block">
                                <div class="image-box">
                                    <figure class="image"><img src="frontend/images/resource/deals-2.jpg" alt=""></figure>
                                    <div class="batch"><i class="icon-11"></i></div>
                                    <span class="category">Featured</span>
                                    <div class="buy-btn"><a href="property-details.html">For Buy</a></div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 deals-block">
                                <div class="deals-block-one">
                                    <div class="inner-box">
                                        <div class="lower-content">
                                            <div class="title-text"><h4><a href="property-details.html">Luxury Villa With Pool</a></h4></div>
                                            <div class="price-box clearfix">
                                                <div class="price-info pull-left">
                                                    <h6>Start From</h6>
                                                    <h4>$40,000.00</h4>
                                                </div>
                                                <div class="author-box pull-right">
                                                    <figure class="author-thumb"> 
                                                        <img src="frontend/images/feature/author-2.jpg" alt="">
                                                        <span>Robert Niro</span>
                                                    </figure>
                                                </div>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing sed eiusm do tempor incididunt labore.</p>
                                            <ul class="more-details clearfix">
                                                <li><i class="icon-14"></i>3 Beds</li>
                                                <li><i class="icon-15"></i>2 Baths</li>
                                                <li><i class="icon-16"></i>600 Sq Ft</li>
                                            </ul>
                                            <div class="other-info-box clearfix">
                                                <div class="btn-box pull-left"><a href="property-details.html" class="theme-btn btn-one">See Details</a></div>
                                                <ul class="other-option pull-right clearfix">
                                                    <li><a href="property-details.html"><i class="icon-12"></i></a></li>
                                                    <li><a href="property-details.html"><i class="icon-13"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-item">
                        <div class="row clearfix">
                            <div class="col-lg-6 col-md-6 col-sm-12 deals-block">
                                <div class="image-box">
                                    <figure class="image"><img src="frontend/images/resource/deals-2.jpg" alt=""></figure>
                                    <div class="batch"><i class="icon-11"></i></div>
                                    <span class="category">Featured</span>
                                    <div class="buy-btn"><a href="property-details.html">For Buy</a></div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 deals-block">
                                <div class="deals-block-one">
                                    <div class="inner-box">
                                        <div class="lower-content">
                                            <div class="title-text"><h4><a href="property-details.html">Contemporary Apartment</a></h4></div>
                                            <div class="price-box clearfix">
                                                <div class="price-info pull-left">
                                                    <h6>Start From</h6>
                                                    <h4>$50,000.00</h4>
                                                </div>
                                                <div class="author-box pull-right">
                                                    <figure class="author-thumb"> 
                                                        <img src="frontend/images/feature/author-3.jpg" alt="">
                                                        <span>Keira Mel</span>
                                                    </figure>
                                                </div>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing sed eiusm do tempor incididunt labore.</p>
                                            <ul class="more-details clearfix">
                                                <li><i class="icon-14"></i>3 Beds</li>
                                                <li><i class="icon-15"></i>2 Baths</li>
                                                <li><i class="icon-16"></i>600 Sq Ft</li>
                                            </ul>
                                            <div class="other-info-box clearfix">
                                                <div class="btn-box pull-left"><a href="property-details.html" class="theme-btn btn-one">See Details</a></div>
                                                <ul class="other-option pull-right clearfix">
                                                    <li><a href="property-details.html"><i class="icon-12"></i></a></li>
                                                    <li><a href="property-details.html"><i class="icon-13"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-item">
                        <div class="row clearfix">
                            <div class="col-lg-6 col-md-6 col-sm-12 deals-block">
                                <div class="image-box">
                                    <figure class="image"><img src="frontend/images/resource/deals-2.jpg" alt=""></figure>
                                    <div class="batch"><i class="icon-11"></i></div>
                                    <span class="category">Featured</span>
                                    <div class="buy-btn"><a href="property-details.html">For Buy</a></div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 deals-block">
                                <div class="deals-block-one">
                                    <div class="inner-box">
                                        <div class="lower-content">
                                            <div class="title-text"><h4><a href="property-details.html">Villa on Grand Avenue</a></h4></div>
                                            <div class="price-box clearfix">
                                                <div class="price-info pull-left">
                                                    <h6>Start From</h6>
                                                    <h4>$30,000.00</h4>
                                                </div>
                                                <div class="author-box pull-right">
                                                    <figure class="author-thumb"> 
                                                        <img src="frontend/images/feature/author-1.jpg" alt="">
                                                        <span>Michael Bean</span>
                                                    </figure>
                                                </div>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing sed eiusm do tempor incididunt labore.</p>
                                            <ul class="more-details clearfix">
                                                <li><i class="icon-14"></i>3 Beds</li>
                                                <li><i class="icon-15"></i>2 Baths</li>
                                                <li><i class="icon-16"></i>600 Sq Ft</li>
                                            </ul>
                                            <div class="other-info-box clearfix">
                                                <div class="btn-box pull-left"><a href="property-details.html" class="theme-btn btn-one">See Details</a></div>
                                                <ul class="other-option pull-right clearfix">
                                                    <li><a href="property-details.html"><i class="icon-12"></i></a></li>
                                                    <li><a href="property-details.html"><i class="icon-13"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- deals-style-two end -->


        <!-- chooseus-section -->
        <section class="chooseus-section alternate-2 bg-color-1">
            <div class="auto-container">
                <div class="upper-box clearfix">
                    <div class="sec-title">
                        <h5>Why Choose Us?</h5>
                        <h2>Reasons To Choose Us</h2>
                    </div>
                    <div class="btn-box">
                        <a href="categories.html" class="theme-btn btn-one">All Categories</a>
                    </div>
                </div>
                <div class="lower-box">
                    <div class="row clearfix">
                        <div class="col-lg-4 col-md-6 col-sm-12 chooseus-block">
                            <div class="chooseus-block-one">
                                <div class="inner-box">
                                    <div class="icon-box"><i class="icon-19"></i></div>
                                    <h4>Excellent Reputation</h4>
                                    <p>Lorem ipsum dolor sit consectetur sed eiusm tempor.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 chooseus-block">
                            <div class="chooseus-block-one">
                                <div class="inner-box">
                                    <div class="icon-box"><i class="icon-26"></i></div>
                                    <h4>Best Local Agents</h4>
                                    <p>Lorem ipsum dolor sit consectetur sed eiusm tempor.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 chooseus-block">
                            <div class="chooseus-block-one">
                                <div class="inner-box">
                                    <div class="icon-box"><i class="icon-21"></i></div>
                                    <h4>Personalized Service</h4>
                                    <p>Lorem ipsum dolor sit consectetur sed eiusm tempor.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- chooseus-section end -->


        <!-- team-section -->
        <section class="team-section sec-pad centred">
            <div class="auto-container">
                <div class="sec-title">
                    <h5>Our Agents</h5>
                    <h2>Meet Our Excellent Agents</h2>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12 team-block">
                        <div class="team-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box"><img src="frontend/images/team/team-6.jpg" alt=""></figure>
                                <div class="lower-content">
                                    <div class="inner">
                                        <h4><a href="agents-details.html">Jennifer Lawrence</a></h4>
                                        <span class="designation">Senior Agent</span>
                                        <ul class="social-links clearfix">
                                            <li><a href="index.html"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="index.html"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="index.html"><i class="fab fa-google-plus-g"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 team-block">
                        <div class="team-block-one wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box"><img src="frontend/images/team/team-7.jpg" alt=""></figure>
                                <div class="lower-content">
                                    <div class="inner">
                                        <h4><a href="agents-details.html">Benedict Cumberbatch</a></h4>
                                        <span class="designation">Senior Agent</span>
                                        <ul class="social-links clearfix">
                                            <li><a href="index.html"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="index.html"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="index.html"><i class="fab fa-google-plus-g"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 team-block">
                        <div class="team-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box"><img src="frontend/images/team/team-8.jpg" alt=""></figure>
                                <div class="lower-content">
                                    <div class="inner">
                                        <h4><a href="agents-details.html">Elizabeth Winstead</a></h4>
                                        <span class="designation">Senior Agent</span>
                                        <ul class="social-links clearfix">
                                            <li><a href="index.html"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="index.html"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="index.html"><i class="fab fa-google-plus-g"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- team-section end -->


        <!-- testimonial-style-two -->
        <section class="testimonial-style-two" style="background-image: url(frontend/images/background/testimonial-1.jpg);">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-xl-6 col-lg-12 col-md-12 offset-xl-6 inner-column">
                        <div class="single-item-carousel owl-carousel owl-theme dots-style-one owl-nav-none">
                            <div class="testimonial-block-two">
                                <div class="inner-box">
                                    <div class="icon-box"><i class="icon-18"></i></div>
                                    <div class="text">
                                        <h3>“Our goal each day is to ensure that our res- idents’ needs are not only met but exceeded To make that happen we are committed to providing an environment.”</h3>
                                    </div>
                                    <div class="author-info">
                                        <figure class="author-thumb"><img src="frontend/images/resource/testimonial-1.jpg" alt=""></figure>
                                        <h4>Rebeka Dawson</h4>
                                        <span class="designation">Instructor</span>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-block-two">
                                <div class="inner-box">
                                    <div class="icon-box"><i class="icon-18"></i></div>
                                    <div class="text">
                                        <h3>“Our goal each day is to ensure that our res- idents’ needs are not only met but exceeded To make that happen we are committed to providing an environment.”</h3>
                                    </div>
                                    <div class="author-info">
                                        <figure class="author-thumb"><img src="frontend/images/resource/testimonial-2.jpg" alt=""></figure>
                                        <h4>Marc Kenneth</h4>
                                        <span class="designation">Founder CEO</span>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-block-two">
                                <div class="inner-box">
                                    <div class="icon-box"><i class="icon-18"></i></div>
                                    <div class="text">
                                        <h3>“Our goal each day is to ensure that our res- idents’ needs are not only met but exceeded To make that happen we are committed to providing an environment.”</h3>
                                    </div>
                                    <div class="author-info">
                                        <figure class="author-thumb"><img src="frontend/images/resource/testimonial-1.jpg" alt=""></figure>
                                        <h4>Owen Lester</h4>
                                        <span class="designation">Manager</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- testimonial-style-two end -->


        <!-- place-style-two -->
        <section class="place-style-two sec-pad">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                        <div class="content_block_2">
                            <div class="content-box">
                                <div class="sec-title">
                                    <h5>Top Places</h5>
                                    <h2>Most Popular Places</h2>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing do eumod tempor.</p>
                                </div>
                                <ul class="place-list clearfix">
                                    <li><a href="categories.html"><h5>Australia</h5><span>(02)</span></a></li>
                                    <li><a href="categories.html"><h5>Bangladesh</h5><span>(13)</span></a></li>
                                    <li><a href="categories.html"><h5>Belgium</h5><span>(05)</span></a></li>
                                    <li><a href="categories.html"><h5>Brazil</h5><span>(04)</span></a></li>
                                    <li><a href="categories.html"><h5>California</h5><span>(07)</span></a></li>
                                </ul>
                                <div class="btn-box">
                                    <a href="property-list.html" class="theme-btn btn-one">View All Places</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                        <div class="image_block_1">
                            <div class="image-box">
                                <figure class="image image-1 paroller"><img src="frontend/images/resource/place-5.jpg" alt=""></figure>
                                <figure class="image image-2 paroller-2"><img src="frontend/images/resource/place-6.jpg" alt=""></figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- place-style-two end -->


        <!-- clients-section -->
        <section class="clients-section bg-color-1">
            <div class="pattern-layer" style="background-image: url(frontend/images/shape/shape-1.png);"></div>
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-12 col-sm-12 title-column">
                        <div class="sec-title">
                            <h5>Our Pertners</h5>
                            <h2>We’re going to Became Partners for the Long Run.</h2>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12 col-sm-12 inner-column">
                        <div class="clients-logo">
                            <ul class="logo-list clearfix">
                                <li>
                                    <figure class="logo"><a href="index-2.html"><img src="frontend/images/clients/clients-1.png" alt=""></a></figure>
                                </li>
                                <li>
                                    <figure class="logo"><a href="index-2.html"><img src="frontend/images/clients/clients-2.png" alt=""></a></figure>
                                </li>
                                <li>
                                    <figure class="logo"><a href="index-2.html"><img src="frontend/images/clients/clients-3.png" alt=""></a></figure>
                                </li>
                                <li>
                                    <figure class="logo"><a href="index-2.html"><img src="frontend/images/clients/clients-4.png" alt=""></a></figure>
                                </li>
                                <li>
                                    <figure class="logo"><a href="index-2.html"><img src="frontend/images/clients/clients-5.png" alt=""></a></figure>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- clients-section end -->


        <!-- news-section -->
        <section class="news-section sec-pad">
            <div class="auto-container">
                <div class="sec-title centred">
                    <h5>News & Article</h5>
                    <h2>Stay Update With Realshed</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing sed do eiusmod tempor incididunt <br />labore dolore magna aliqua enim.</p>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><a href="blog-details.html"><img src="frontend/images/news/news-1.jpg" alt=""></a></figure>
                                    <span class="category">Featured</span>
                                </div>
                                <div class="lower-content">
                                    <h4><a href="blog-details.html">Including Animation In Your Design System</a></h4>
                                    <ul class="post-info clearfix">
                                        <li class="author-box">
                                            <figure class="author-thumb"><img src="frontend/images/news/author-1.jpg" alt=""></figure>
                                            <h5><a href="blog-details.html">Eva Green</a></h5>
                                        </li>
                                        <li>April 10, 2020</li>
                                    </ul>
                                    <div class="text">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing sed.</p>
                                    </div>
                                    <div class="btn-box">
                                        <a href="blog-details.html" class="theme-btn btn-two">See Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-one wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><a href="blog-details.html"><img src="frontend/images/news/news-2.jpg" alt=""></a></figure>
                                    <span class="category">Featured</span>
                                </div>
                                <div class="lower-content">
                                    <h4><a href="blog-details.html">Taking The Pattern Library To The Next Level</a></h4>
                                    <ul class="post-info clearfix">
                                        <li class="author-box">
                                            <figure class="author-thumb"><img src="frontend/images/news/author-2.jpg" alt=""></figure>
                                            <h5><a href="blog-details.html">George Clooney</a></h5>
                                        </li>
                                        <li>April 09, 2020</li>
                                    </ul>
                                    <div class="text">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing sed.</p>
                                    </div>
                                    <div class="btn-box">
                                        <a href="blog-details.html" class="theme-btn btn-two">See Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><a href="blog-details.html"><img src="frontend/images/news/news-3.jpg" alt=""></a></figure>
                                    <span class="category">Featured</span>
                                </div>
                                <div class="lower-content">
                                    <h4><a href="blog-details.html">How New Font Technologies Will Improve The Web</a></h4>
                                    <ul class="post-info clearfix">
                                        <li class="author-box">
                                            <figure class="author-thumb"><img src="frontend/images/news/author-3.jpg" alt=""></figure>
                                            <h5><a href="blog-details.html">Simon Baker</a></h5>
                                        </li>
                                        <li>April 28, 2020</li>
                                    </ul>
                                    <div class="text">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing sed.</p>
                                    </div>
                                    <div class="btn-box">
                                        <a href="blog-details.html" class="theme-btn btn-two">See Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- news-section end -->


        <!-- subscribe-section -->
        <section class="subscribe-section bg-color-3">
            <div class="pattern-layer" style="background-image: url(frontend/images/shape/shape-2.png);"></div>
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-6 col-sm-12 text-column">
                        <div class="text">
                            <span>Subscribe</span>
                            <h2>Sign Up To Our Newsletter To Get The Latest News And Offers.</h2>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 form-column">
                        <div class="form-inner">
                            <form action="contact.html" method="post" class="subscribe-form">
                                <div class="form-group">
                                    <input type="email" name="email" placeholder="Enter your email" required="">
                                    <button type="submit">Subscribe Now</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- subscribe-section end -->



    {{-- <!-- SERVICE SECTION -->

    <section class="section grey lighten-4 center">
        <div class="container">
            <div class="row">
                <h4 class="section-heading">خـــدماتنا</h4>
            </div>
            <div class="row">
                @foreach($services as $service)
                    <div class="col s12 m4">
                        <div class="card-panel">
                            <i class="material-icons large indigo-text">{{ $service->icon }}</i>
                            <h5>{{ $service->title }}</h5>
                            <p>{{ $service->description }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


    <!-- FEATURED SECTION -->

    <section class="section">
        <div class="container">
            <div class="row">
                <h4 class="section-heading">عـــقارات مميـــــزة</h4>
            </div>
            <div class="row">

                @foreach($properties as $property)
                    <div class="col s12 m4">
                        <div class="card">
                            <div class="card-image">
                                @if(Storage::disk('public')->exists('property/'.$property->image) && $property->image)
                                    <span class="card-image-bg" style="background-image:url({{Storage::url('property/'.$property->image)}});"></span>
                                @else
                                    <span class="card-image-bg"><span>
                                @endif
                                @if($property->featured == 1)
                                    <a class="btn-floating halfway-fab waves-effect waves-light indigo" title="Featured"><i class="small material-icons">star</i></a>
                                @endif
                            </div>
                            <div class="card-content property-content">
                                <a href="{{ route('property.show',$property->slug) }}">
                                    <span class="card-title tooltipped" data-position="bottom" data-tooltip="{{ $property->title }}">{{ str_limit( $property->title, 18 ) }}</span>
                                </a>

                                <div class="address">
                                    <i class="small material-icons left">المدينة</i>
                                    <span>{{ ucfirst($property->city) }}</span>
                                </div>
                                <div class="address">
                                    <i class="small material-icons left">المكان</i>
                                    <span>{{ ucfirst($property->address) }}</span>
                                </div>
                                <div class="address">
                                    <i class="small material-icons left">check_box</i>
                                    <span>{{ ucfirst($property->type) }} for {{ $property->purpose }}</span>
                                </div>

                                <h5>
                                    &dollar;{{ $property->price }}
                                    <div class="right" id="propertyrating-{{$property->id}}"></div>
                                </h5>
                            </div>
                            <div class="card-action property-action">
                                <span class="btn-flat">
                                    <i class="material-icons">check_box</i>
                                    Bedroom: <strong>{{ $property->bedroom}}</strong> 
                                </span>
                                <span class="btn-flat">
                                    <i class="material-icons">check_box</i>
                                    Bathroom: <strong>{{ $property->bathroom}}</strong> 
                                </span>
                                <span class="btn-flat">
                                    <i class="material-icons">check_box</i>
                                    Area: <strong>{{ $property->area}}</strong> Square Feet
                                </span>
                                <span class="btn-flat">
                                    <i class="material-icons">comment</i> 
                                    <strong>{{ $property->comments_count}}</strong>
                                </span>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>


    <!-- TESTIMONIALS SECTION -->

    <section class="section grey lighten-3 center">
        <div class="container">

            <h4 class="section-heading">الشهادات - التوصيات</h4>

            <div class="carousel testimonials">

                @foreach($testimonials as $testimonial)
                    <div class="carousel-item testimonial-item" href="#{{$testimonial->id}}!">
                        <div class="card testimonial-card">
                            <span style="height:20px;display:block;"></span>
                            <div class="card-image testimonial-image">
                                <img src="{{Storage::url('testimonial/'.$testimonial->image)}}">
                            </div>
                            <div class="card-content">
                                <span class="card-title">{{$testimonial->name}}</span>
                                <p>
                                    {{$testimonial->testimonial}}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>

        </div>

    </section>


    <!-- BLOG SECTION -->

    <section class="section center">
        <div class="row">
            <h4 class="section-heading">مدونة حديثة</h4>
        </div>
        <div class="container">
            <div class="row">

                @foreach($posts as $post)
                <div class="col s12 m4">
                    <div class="card">
                        <div class="card-image">
                            @if(Storage::disk('public')->exists('posts/'.$post->image) && $post->image)
                                <span class="card-image-bg" style="background-image:url({{Storage::url('posts/'.$post->image)}});"></span>
                            @endif
                        </div>
                        <div class="card-content">
                            <span class="card-title tooltipped" data-position="bottom" data-tooltip="{{$post->title}}">
                                <a href="{{ route('blog.show',$post->slug) }}">{{ str_limit($post->title,18) }}</a>
                            </span>
                            {!! str_limit($post->body,120) !!}
                        </div>
                        <div class="card-action blog-action">
                            <a href="{{ route('blog.author',$post->user->username) }}" class="btn-flat">
                                <i class="material-icons">المستخدم</i>
                                <span>{{$post->user->name}}</span>
                            </a>
                            @foreach($post->categories as $key => $category)
                                <a href="{{ route('blog.categories',$category->slug) }}" class="btn-flat">
                                    <i class="material-icons">مجلد</i>
                                    <span>{{$category->name}}</span>
                                </a>
                            @endforeach
                            @foreach($post->tags as $key => $tag)
                                <a href="{{ route('blog.tags',$tag->slug) }}" class="btn-flat">
                                    <i class="material-icons">ضع الكلمة المناسبة</i>
                                    <span>{{$tag->name}}</span>
                                </a>
                            @endforeach
                            <a href="#" class="btn-flat disabled">
                                <i class="material-icons">شاهده لاحقاً</i>
                                <span>{{$post->created_at->diffForHumans()}}</span>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>
 --}}
@endsection

@section('scripts')
<script>
    $(function(){
        var js_properties = <?php echo json_encode($properties);?>;
        js_properties.forEach(element => {
            if(element.rating){
                var elmt = element.rating;
                var sum = 0;
                for( var i = 0; i < elmt.length; i++ ){
                    sum += parseFloat( elmt[i].rating ); 
                }
                var avg = sum/elmt.length;
                if(isNaN(avg) == false){
                    $("#propertyrating-"+element.id).rateYo({
                        rating: avg,
                        starWidth: "20px",
                        readOnly: true
                    });
                }else{
                    $("#propertyrating-"+element.id).rateYo({
                        rating: 0,
                        starWidth: "20px",
                        readOnly: true
                    });
                }
            }
        });
    })
</script>
@endsection