@extends('user/app')

@section('main-content')


<!-- Page Title #4
============================================= -->
<section id="page-title" class="page-title bg-overlay bg-parallax bg-overlay-gradient">
    <div class="bg-section">
        <img src="{{asset('user/assets/images/page-title/11.jpg')}}" alt="Background" />
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="title title-4 text-center">
                    <div class="title--content">
                        <div class="title--subtitle">People love us</div>
                        <div class="title--heading">
                            <h1>Our Guestbook</h1>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <ol class="breadcrumb">
                        <li class="active">Guestbook</li>
                    </ol>
                    <div class="divider--shape-1down"></div>
                </div>
                <!-- .title end -->
            </div>
            <!-- .col-md-12 end -->
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
<!-- #page-title end -->

<!-- banner#2
============================================= -->
<section id="banner2" class="banner banner-2 text-center bg-white">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="banner-img mt-20">
                    <img src="{{asset('user/assets/images/banners/4.jpg')}}" alt="image">
                </div>
            </div>
            <!-- .col-md-3 end -->
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="banner-img">
                    <img src="{{asset('user/assets/images/banners/5.jpg')}}" alt="image">
                </div>
                <!-- .col-md-3 end -->
            </div>
            <!-- .col-md-3 end -->
            <div class="col-xs-12 col-sm-12 col-md-6">
                <div class="heading heading-1 text--center mt-60">
                    <p class="heading--subtitle">Hello dear</p>
                    <h2 class="heading--title">Welcome To Granny</h2>
                    <div class="divider--shape-4"></div>
                    <p class="heading--desc">Granny was the first retaurant to open in Egypt, the resturant was designed with the history in mind we have created a soft industrial dining room, combined with an open kitchen, coffee take out bar and on site coffee roastery.</p>
                </div>
                <!-- .heading end -->
                <div class="signiture--img mt-30">
                    <img src="{{asset('user/assets/images/heading/signiture.png')}}" alt="Signiture img">
                </div>
            </div>
            <!-- .col-md-6 end -->
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
<!-- #banner#2 end -->

<!-- Testimonial #1
============================================= -->
<section id="testimonial1" class="testimonial testimonial-1 bg-overlay bg-overlay-dark bg-parallax pb-90">
    <div class="bg-section">
        <img src="{{asset('user/assets/images/background/1.jpg')}}" alt="Background" />
    </div>

    <div class="container">
        <div class="divider--shape-1up"></div>
        <div class="row clearfix">
            <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
                <div class="heading heading-1 mb-40 text--center">
                    <p class="heading--subtitle">People talk</p>
                    <h2 class="heading--title color-white">Our Guestbook</h2>
                </div>
            </div>
            <!-- .col-md-8 end -->
        </div>
        <!-- .row end -->
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div id="testimonial-carousel" class="carousel carousel-dots carousel-white" data-slide="3" data-autoplay="true" data-nav="false" data-dots="true" data-space="30" data-loop="true" data-speed="800">
                    <!-- Testimonial #1 -->
                    <div class="testimonial-panel">
                        <div class="testimonial--rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <!-- .testimonial-rating end -->
                        <div class="testimonial--body">
                            <p>“ Granny is simply the best. Great Food, nice atmosphere and very reasonable prices. It just doesn't get any better ”</p>
                        </div>
                        <!-- .testimonial-body end -->
                        <div class="testimonial--meta">
                            <div class="testimonial--img">
                                <img src="{{asset('user/assets/images/testimonial/1.png')}}" alt="Testimonial Author">
                            </div>
                            <div class="testimonial--author">
                                <h4>- Todd Stephen</h4>
                            </div>
                        </div>
                        <!-- .testimonial-meta end -->
                    </div>
                    <!-- .testimonial-panel end -->

                    <!-- Testimonial #2 -->
                    <div class="testimonial-panel">
                        <div class="testimonial--rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <!-- .testimonial-rating end -->
                        <div class="testimonial--body">
                            <p>“ We've been to Granny many times over the years. We know what to expect: great food and awesome prices ”</p>
                        </div>
                        <!-- .testimonial-body end -->
                        <div class="testimonial--meta">
                            <div class="testimonial--img">
                                <img src="{{asset('user/assets/images/testimonial/2.png')}}" alt="Testimonial Author">
                            </div>
                            <div class="testimonial--author">
                                <h4>- David Casper</h4>
                            </div>
                        </div>
                        <!-- .testimonial-meta end -->
                    </div>
                    <!-- .testimonial-panel end -->

                    <!-- Testimonial #3 -->
                    <div class="testimonial-panel">
                        <div class="testimonial--rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <!-- .testimonial-rating end -->
                        <div class="testimonial--body">
                            <p>“ The reasonable prices, the great atmosphere are only topped by the delicious food. Keep up the great work ”</p>
                        </div>
                        <!-- .testimonial-body end -->
                        <div class="testimonial--meta">
                            <div class="testimonial--img">
                                <img src="{{asset('user/assets/images/testimonial/3.png')}}" alt="Testimonial Author">
                            </div>
                            <div class="testimonial--author">
                                <h4>- John Arax</h4>
                            </div>
                        </div>
                        <!-- .testimonial-meta end -->
                    </div>
                    <!-- .testimonial-panel end -->

                    <!-- Testimonial #4 -->
                    <div class="testimonial-panel">
                        <div class="testimonial--rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <!-- .testimonial-rating end -->
                        <div class="testimonial--body">
                            <p>“ Granny is simply the best. Great Food, nice atmosphere and very reasonable prices. It just doesn't get any better ”</p>
                        </div>
                        <!-- .testimonial-body end -->
                        <div class="testimonial--meta">
                            <div class="testimonial--img">
                                <img src="{{asset('user/assets/images/testimonial/4.png')}}" alt="Testimonial Author">
                            </div>
                            <div class="testimonial--author">
                                <h4>- Anthony Kevin</h4>
                            </div>
                        </div>
                        <!-- .testimonial-meta end -->
                    </div>
                    <!-- .testimonial-panel end -->

                </div>
            </div>
            <!-- .col-md-12 end -->
        </div>
        <!-- .row end -->
        <div class="divider--shape-1down"></div>
    </div>
    <!-- .container end -->
</section>
<!-- #testimonial1 end -->

<!-- banner#3
============================================= -->
<section id="banner3" class="banner banner-3 text-center bg-white">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6">
                <div class="heading heading-1 text--center mt-40">
                    <p class="heading--subtitle">Start eating better</p>
                    <h2 class="heading--title">Daily New Fresh Menus</h2>
                    <div class="divider--shape-4"></div>
                    <p class="heading--desc">Monkfish, onion, paella rice, garlic & smoked paprika, creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese, with crusty bread for dipping. creamy chesapeake crab dip with artichoke, baked and topped with a hot cheddar cheese. </p>
                    <a class="btn btn--secondary btn--lg mt-40" href="#">Discover Full Menu</a>
                </div>
                <!-- .heading end -->
            </div>
            <!-- .col-md-6 end -->
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="banner-img mt-20">
                    <img src="{{asset('user/assets/images/banners/9.jpg')}}" alt="image">
                </div>
            </div>
            <!-- .col-md-3 end -->
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="banner-img">
                    <img src="{{asset('user/assets/images/banners/10.jpg')}}" alt="image">
                </div>
            </div>
            <!-- .col-md-3 end -->
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
<!-- #banner#3 end -->



@endsection