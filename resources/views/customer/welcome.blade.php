@extends('customer.layouts.master')
@section('title', 'Welcome')
@section('content')
    <div class="loader-screen" id="splashscreen">
        <div class="main-screen">
            <!-- <div class="circle-1">                
                <img src="{{asset('customer/assets/images/food1.png')}}" alt="food-image">
            </div> -->
            <div class="circle-2"></div>
            <div class="circle-3"></div>
            <div class="circle-4"></div>
            <div class="circle-5"></div>
            <div class="circle-6"></div>
            <!-- <div class="circle-7">
                <img src="{{asset('customer/assets/images/food2.png')}}" alt="food-image">
            </div> -->
            <div class="brand-logo">
                <div class="logo">
                    <img src="{{asset('customer/assets/images/logo-item/spoon1.svg')}}" alt="spoon-1" class="wow bounceInDown">
                    <img class="wow bounceInUp" src="{{asset('customer/assets/images/logo-item/spoon2.svg')}}" alt="spoon-1">
                </div>
                <h1 class="brand-title text-white mt-3">{{$vendor->name}}</h1>
            </div>
        </div>                                        
    </div>                                        
    <!-- splash-->
    
<div class="page-wraper">
    <!-- Page Content -->
    <div class="page-content page page-onboading">
        <!-- Onboading Start -->
        <div class="started-swiper-box">
            <div class="swiper-container get-started">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="slide-info">
                            <div class="dz-media">
                                <img src="{{asset('customer/assets/images/shop.png')}}" alt="image"/>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slide-info">
                            <div class="dz-media">
                                <img src="{{asset('customer/assets/images/truck.png')}}" alt="image"/>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="swiper-slide">
                        <div class="slide-info">
                            <div class="dz-media">
                                <img src="{{asset('customer/assets/images/stock.svg')}}" alt="image"/>
                            </div>
                        </div>
                    </div> -->
                    <div class="swiper-slide">
                        <div class="slide-info">
                            <div class="dz-media">
                                <img src="{{asset('customer/assets/images/delivery.png')}}" alt="image"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-btn">
                <div class="swiper-pagination style-1 flex-1"></div>
            </div>
            <div class="slide-content">
                <h1 class="brand-title">{{$vendor->name}}</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</p>
            </div>
        </div>
        <!-- Onboading End-->    
    </div>
    <!-- Page Content End-->
    
    <!-- Footer -->
    <footer class="footer border-0">
        <div class="container">
            <a href="{{route('vendor.index', $vendor->slug)}}" class="btn btn-primary btn-rounded d-block">LET'S ROCK</a>
        </div>
    </footer>
    <!-- Footer End-->
</div>   

@push('styles')
<link rel="stylesheet" href="{{asset('customer/assets/vendor/wow/css/libs/animate.css')}}">

@endpush
@push('scripts')
<script src="{{asset('customer/assets/vendor/wow/dist/wow.min.js')}}"></script>
<script src="{{asset('customer/assets/js/dz.carousel.js')}}"></script><!-- Swiper -->
<script>
    new WOW().init();
    
    var wow = new WOW(
    {
      boxClass:     'wow',      // animated element css class (default is wow)
      animateClass: 'animated', // animation css class (default is animated)
      offset:       50,          // distance to the element when triggering the animation (default is 0)
      mobile:       false       // trigger animations on mobile devices (true is default)
    });
    wow.init();	
</script>
@endpush
@endsection