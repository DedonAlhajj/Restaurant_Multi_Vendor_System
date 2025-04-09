
	
	
@extends('customer.layouts.master')
@section('title', 'My Orders')
@section('content')
  
{{-- @dd($orders) --}}
<div class="page-wraper">
    <!-- Preloader -->
    <div id="preloader">
        <div class="spinner"></div>
    </div>
    <!-- Preloader end-->
    
	<!-- Header -->
    <header class="header">
        <div class="main-bar">
            <div class="container">
                <div class="header-content">
                    <div class="left-content">
                        <a href="javascript:void(0);" class="back-btn">
                            <svg width="18" height="18" viewBox="0 0 10 16" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M9.03033 0.46967C9.2966 0.735936 9.3208 1.1526 9.10295 1.44621L9.03033 1.53033L2.561 8L9.03033 14.4697C9.2966 14.7359 9.3208 15.1526 9.10295 15.4462L9.03033 15.5303C8.76406 15.7966 8.3474 15.8208 8.05379 15.6029L7.96967 15.5303L0.96967 8.53033C0.703403 8.26406 0.679197 7.8474 0.897052 7.55379L0.96967 7.46967L7.96967 0.46967C8.26256 0.176777 8.73744 0.176777 9.03033 0.46967Z" fill="#a19fa8"/>
							</svg>
                        </a>
						<h5 class="mb-0 ms-2 text-nowrap">Your Orders</h5>
                    </div>
                    <div class="mid-content">
                    </div>
                    <div class="right-content">
                        <div class="d-flex align-items-center">
							<a href="javascript:void(0);" class="position-relative me-2 notify-cart" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom1" aria-controls="offcanvasBottom">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M18.1776 17.8443C16.6362 17.8428 15.3854 19.0912 15.3839 20.6326C15.3824 22.1739 16.6308 23.4247 18.1722 23.4262C19.7136 23.4277 20.9643 22.1794 20.9658 20.638C20.9658 20.6371 20.9658 20.6362 20.9658 20.6353C20.9644 19.0955 19.7173 17.8473 18.1776 17.8443Z" fill="#2C406E"/>
									<path d="M23.1278 4.47973C23.061 4.4668 22.9932 4.46023 22.9251 4.46012H5.93181L5.66267 2.65958C5.49499 1.46381 4.47216 0.574129 3.26466 0.573761H1.07655C0.481978 0.573761 0 1.05574 0 1.65031C0 2.24489 0.481978 2.72686 1.07655 2.72686H3.26734C3.40423 2.72586 3.52008 2.82779 3.53648 2.96373L5.19436 14.3267C5.42166 15.7706 6.66363 16.8358 8.12528 16.8405H19.3241C20.7313 16.8423 21.9454 15.8533 22.2281 14.4747L23.9802 5.74121C24.0931 5.15746 23.7115 4.59269 23.1278 4.47973Z" fill="#2C406E"/>
									<path d="M11.3404 20.5158C11.2749 19.0196 10.0401 17.8418 8.54244 17.847C7.0023 17.9092 5.80422 19.2082 5.86645 20.7484C5.92617 22.2262 7.1283 23.4008 8.60704 23.4262H8.67432C10.2142 23.3587 11.4079 22.0557 11.3404 20.5158Z" fill="#2C406E"/>
								</svg>
								<span class="badge badge-danger counter">{{Cart::getContent()->count()}}</span>
							</a> 
							<a href="javascript:void(0);" class="filter" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom2" aria-controls="offcanvasBottom">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M20.0212 3H3.97868C3.57142 3.00032 3.17301 3.11885 2.8318 3.34119C2.49059 3.56353 2.22125 3.88013 2.05647 4.25257C1.89169 4.62501 1.83856 5.03727 1.90352 5.43931C1.96848 5.84136 2.14875 6.21591 2.42243 6.5175L9.37493 14.1638V21.375C9.37499 21.516 9.41478 21.6541 9.48973 21.7734C9.56468 21.8928 9.67175 21.9887 9.79868 22.05C9.90012 22.1 10.0118 22.1257 10.1249 22.125C10.2954 22.1249 10.4607 22.0667 10.5937 21.96L11.9999 20.835L14.3437 18.96C14.4314 18.8898 14.5022 18.8008 14.5509 18.6995C14.5996 18.5982 14.6249 18.4874 14.6249 18.375V14.1638L21.5774 6.5175C21.8511 6.21591 22.0314 5.84136 22.0963 5.43931C22.1613 5.03727 22.1082 4.62501 21.9434 4.25257C21.7786 3.88013 21.5093 3.56353 21.1681 3.34119C20.8269 3.11885 20.4284 3.00032 20.0212 3V3Z" fill="#2C406E"/>
								</svg>
							</a>
						</div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->
	
    <!-- Sidebar -->
    <div class="sidebar">
		<div class="author-box">
			<div class="dz-media">
				<img src="assets/images/author/pic1.png" class="rounded-circle" alt="author-image">
			</div>
			<div class="dz-info">
				<span>Good Morning</span>
				<h5 class="name">Henry Kanwil</h5>
			</div>
		</div>
		<ul class="nav navbar-nav">	
			<li class="nav-label">Main Menu</li>
			<li><a class="nav-link" href="welcome.html">
				<span class="dz-icon">
					<svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000">
					<path d="M13.35 20.13c-.76.69-1.93.69-2.69-.01l-.11-.1C5.3 15.27 1.87 12.16 2 8.28c.06-1.7.93-3.33 2.34-4.29 2.64-1.8 5.9-.96 7.66 1.1 1.76-2.06 5.02-2.91 7.66-1.1 1.41.96 2.28 2.59 2.34 4.29.14 3.88-3.3 6.99-8.55 11.76l-.1.09z"/></svg>
				</span>
				<span>Welcome</span>
			</a></li>
			<li><a class="nav-link" href="index.html">
				<span class="dz-icon">
					<svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000">
						<path d="M10 19v-5h4v5c0 .55.45 1 1 1h3c.55 0 1-.45 1-1v-7h1.7c.46 0 .68-.57.33-.87L12.67 3.6c-.38-.34-.96-.34-1.34 0l-8.36 7.53c-.34.3-.13.87.33.87H5v7c0 .55.45 1 1 1h3c.55 0 1-.45 1-1z"/>
					</svg>
				</span>
				<span>Home</span>
			</a></li>
			<li><a class="nav-link" href="pages.html">
				<span class="dz-icon">
					<svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M12.6 18.06c-.36.28-.87.28-1.23 0l-6.15-4.78c-.36-.28-.86-.28-1.22 0-.51.4-.51 1.17 0 1.57l6.76 5.26c.72.56 1.73.56 2.46 0l6.76-5.26c.51-.4.51-1.17 0-1.57l-.01-.01c-.36-.28-.86-.28-1.22 0l-6.15 4.79zm.63-3.02l6.76-5.26c.51-.4.51-1.18 0-1.58l-6.76-5.26c-.72-.56-1.73-.56-2.46 0L4.01 8.21c-.51.4-.51 1.18 0 1.58l6.76 5.26c.72.56 1.74.56 2.46-.01z"/></svg>
				</span>
				<span>Pages</span>
			</a></li>
			<li><a class="nav-link" href="ui-components.html">
				<span class="dz-icon">
					<svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M4 8h4V4H4v4zm6 12h4v-4h-4v4zm-6 0h4v-4H4v4zm0-6h4v-4H4v4zm6 0h4v-4h-4v4zm6-10v4h4V4h-4zm-6 4h4V4h-4v4zm6 6h4v-4h-4v4zm0 6h4v-4h-4v4z"/></svg>
				</span>
				<span>Components</span>
			</a></li>
			<li><a class="nav-link" href="notification.html">
				<span class="dz-icon">
					<svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M18 16v-5c0-3.07-1.64-5.64-4.5-6.32V4c0-.83-.68-1.5-1.51-1.5S10.5 3.17 10.5 4v.68C7.63 5.36 6 7.92 6 11v5l-1.3 1.29c-.63.63-.19 1.71.7 1.71h13.17c.89 0 1.34-1.08.71-1.71L18 16zm-6.01 6c1.1 0 2-.9 2-2h-4c0 1.1.89 2 2 2zM6.77 4.73c.42-.38.43-1.03.03-1.43-.38-.38-1-.39-1.39-.02C3.7 4.84 2.52 6.96 2.14 9.34c-.09.61.38 1.16 1 1.16.48 0 .9-.35.98-.83.3-1.94 1.26-3.67 2.65-4.94zM18.6 3.28c-.4-.37-1.02-.36-1.4.02-.4.4-.38 1.04.03 1.42 1.38 1.27 2.35 3 2.65 4.94.07.48.49.83.98.83.61 0 1.09-.55.99-1.16-.38-2.37-1.55-4.48-3.25-6.05z"/></svg>
				</span>
				<span>Notification</span>
				<span class="badge badge-circle badge-danger">1</span>
			</a></li>
			<li><a class="nav-link" href="profile.html">
				<span class="dz-icon">
					<svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v1c0 .55.45 1 1 1h14c.55 0 1-.45 1-1v-1c0-2.66-5.33-4-8-4z"/></svg>
				</span>
				<span>Profile</span>
			</a></li>
			<li><a class="nav-link" href="messages.html">
				<span class="dz-icon">
					<svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M20 2H4c-1.1 0-1.99.9-1.99 2L2 22l4-4h14c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zM7 9h10c.55 0 1 .45 1 1s-.45 1-1 1H7c-.55 0-1-.45-1-1s.45-1 1-1zm6 5H7c-.55 0-1-.45-1-1s.45-1 1-1h6c.55 0 1 .45 1 1s-.45 1-1 1zm4-6H7c-.55 0-1-.45-1-1s.45-1 1-1h10c.55 0 1 .45 1 1s-.45 1-1 1z"/></svg>
				</span>
				<span>Chat</span>
				<span class="badge badge-circle badge-info">5</span>
			</a></li>
			<li><a class="nav-link" href="onboading.html">
				<span class="dz-icon">
					<svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><g></g><g><g><path d="M5,5h6c0.55,0,1-0.45,1-1v0c0-0.55-0.45-1-1-1H5C3.9,3,3,3.9,3,5v14c0,1.1,0.9,2,2,2h6c0.55,0,1-0.45,1-1v0 c0-0.55-0.45-1-1-1H5V5z"/><path d="M20.65,11.65l-2.79-2.79C17.54,8.54,17,8.76,17,9.21V11h-7c-0.55,0-1,0.45-1,1v0c0,0.55,0.45,1,1,1h7v1.79 c0,0.45,0.54,0.67,0.85,0.35l2.79-2.79C20.84,12.16,20.84,11.84,20.65,11.65z"/></g></g></svg>
				</span>
				<span>Logout</span>
			</a></li>
            <li class="nav-label">Settings</li>
            <li class="nav-color" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom">
                <a href="javascript:void(0);" class="nav-link">
                    <span class="dz-icon">                        
                        <svg class="color-plate" xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 0 24 24" width="30px" fill="#000000">
							<path d="M12 3c-4.97 0-9 4.03-9 9s4.03 9 9 9c.83 0 1.5-.67 1.5-1.5 0-.39-.15-.74-.39-1.01-.23-.26-.38-.61-.38-.99 0-.83.67-1.5 1.5-1.5H16c2.76 0 5-2.24 5-5 0-4.42-4.03-8-9-8zm-5.5 9c-.83 0-1.5-.67-1.5-1.5S5.67 9 6.5 9 8 9.67 8 10.5 7.33 12 6.5 12zm3-4C8.67 8 8 7.33 8 6.5S8.67 5 9.5 5s1.5.67 1.5 1.5S10.33 8 9.5 8zm5 0c-.83 0-1.5-.67-1.5-1.5S13.67 5 14.5 5s1.5.67 1.5 1.5S15.33 8 14.5 8zm3 4c-.83 0-1.5-.67-1.5-1.5S16.67 9 17.5 9s1.5.67 1.5 1.5-.67 1.5-1.5 1.5z"/>
						</svg>
                    </span>					
                    <span>Highlights</span>					
                </a>
            </li>
            <li>
                <div class="mode">
                    <span class="dz-icon">
                        <svg class="dark" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><g></g><g><g><g><path d="M11.57,2.3c2.38-0.59,4.68-0.27,6.63,0.64c0.35,0.16,0.41,0.64,0.1,0.86C15.7,5.6,14,8.6,14,12s1.7,6.4,4.3,8.2 c0.32,0.22,0.26,0.7-0.09,0.86C16.93,21.66,15.5,22,14,22c-6.05,0-10.85-5.38-9.87-11.6C4.74,6.48,7.72,3.24,11.57,2.3z"/></g></g></g>
						</svg>
                    </span>					
                    <span class="text-dark">Dark Mode</span>
                    <div class="custom-switch">
                        <input type="checkbox" class="switch-input theme-btn" id="toggle-dark-menu">
                        <label class="custom-switch-label" for="toggle-dark-menu"></label>
                    </div>
                </div>
            </li>
		</ul>
		<div class="sidebar-bottom">
			<h6 class="name">Foodia - Food Restaurant</h6>
			<p>App Version 1.0</p>
        </div>
    </div>
    <!-- Sidebar End -->
    
    <!-- Page Content -->
    @if($orders->count() > 0)
	<div class="page-content">
		<div class="container bottom-content"> 
			<div class="serach-area"> 
				<form>
					<div class="mb-3 input-group input-radius">
						<span class="input-group-text">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none">
								<path d="M20.5605 18.4395L16.7528 14.6318C17.5395 13.446 18 12.0262 18 10.5C18 6.3645 14.6355 3 10.5 3C6.3645 3 3 6.3645 3 10.5C3 14.6355 6.3645 18 10.5 18C12.0262 18 13.446 17.5395 14.6318 16.7528L18.4395 20.5605C19.0245 21.1462 19.9755 21.1462 20.5605 20.5605C21.1462 19.9748 21.1462 19.0252 20.5605 18.4395ZM5.25 10.5C5.25 7.605 7.605 5.25 10.5 5.25C13.395 5.25 15.75 7.605 15.75 10.5C15.75 13.395 13.395 15.75 10.5 15.75C7.605 15.75 5.25 13.395 5.25 10.5Z" fill="#B9B9B9"/>
							</svg>
						</span>
                        <input type="text" placeholder="Search beverages or foods" class="form-control main-in ps-0 bs-0">
					</div>
                </form>
                <div class="swiper-btn-center-lr">
                    <div class="swiper-container tag-group my-4 team-swiper-4">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <a href="javascript:void(0);" class="tag-btn">All</a>                                    
                            </div>
                            <div class="swiper-slide">
                                <a href="javascript:void(0);" class="tag-btn active">
                                    <div class="active-status"></div>
                                    On Delivery
                                </a>                                    
                                </div>
                            <div class="swiper-slide">
                                <a href="javascript:void(0);" class="tag-btn">Completed</a>
                            </div>
                            <div class="swiper-slide">
                                <a href="javascript:void(0);" class="tag-btn">Done</a>                                    
                            </div>
                            <div class="swiper-slide">
                                <a href="javascript:void(0);" class="tag-btn">Hourly</a>                                    
                            </div>
                            <div class="swiper-slide">
                                <a href="javascript:void(0);" class="tag-btn">Fulltime</a>                                    
                            </div>
                        </div>
                    </div>					
                </div>
                @foreach ($orders as $order)
                    
                
                <div class="order-status">
                    <h5 class="title mb-2">Order ID #{{$order->id}}</h5>
                    <div class="tag-status">
                        @if( $order->status == 'Completed')
                        <span class="badge text-success style-2">{{$order->status}}</span>
                        @elseif($order->status == 'Rejected')
                        <span class="badge text-danger style-1">{{$order->status}}</span>
                        @else
                        <span class="badge text-warning style-2">{{$order->status}}</span>
                        @endif

                        <a href="tracking-order.html" class="btn-link text-underline">Track Location</a>
                    </div>
                </div>
                
				<div class="item-list style-2 recent-jobs-list">

					<ul>
                        @foreach ($order->orderItems as $item_order)
						<li>
                            <div class="item-content">
                                <div class="item-media media media-60">
                                    <img src="{{asset('customer/assets/images/food/pic3.png')}}" alt="logo">
                                </div>
                                <div class="item-inner">
                                    <div class="item-title-row">
                                        <h6 class="item-title"><a href="{{route('vendor.menu.fooditem', ['vendor_slug'=>$vendor->slug, 'product_id'=>$item_order->foodItem->id])}}">{{$item_order->foodItem->name}}</a></h6>
                                    </div>
                                    <div class="item-footer">
                                        <div class="d-flex align-items-center">
                                            @if( $item_order->discount)
                                            <h6 class="me-3">$ {{$item_order->discount}}</h6>
                                            <del class="off-text"><h6>$ {{$item_order->price}}</h6></del>
                                            @else
                                            <h6 class="me-3">$ {{$item_order->price}}</h6>
                                            @endif
                                        </div>    
                                        <span>{{$item_order->quantity}}x</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        @endforeach

                        <a href="{{route('order.invoice',['vendor_slug'=>$vendor->slug,'order_Id'=>$order->id ])}}" class="btn btn-primary right-icon mb-2" style="right: 50px">View Invoice</a>
                    </ul>
                    <div class="saprater"></div>    
               
				</div>
                @endforeach
				<!-- Job List -->                    
			</div>    
		</div>
	</div>
    @else
    <div class="page-content">
        <div class="container bottom-content text-center mt-auto mb-auto"> 
			Empty Order List
        </div>
    </div>

				
    @endif
    <!-- Page Content End-->
	<!-- Menubar -->
    @include('customer.partial.menubar-area')

	<!-- Menubar -->

	<!-- CART -->
    @include('customer.partial.cart')
	<!-- CART -->
	<!-- FILTER -->
    <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom2">
		<button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close">
			<i class="fa-solid fa-xmark"></i>
		</button>
        <div class="offcanvas-body container">
			<div class="mb-3">
                <h5 class="title my-3">Category</h5>
                <select class="form-control custom-image-select-2 image-select">
					<option data-thumbnail="assets/images/svg/ramen.svg">Ramen</option>
					<option data-thumbnail="assets/images/svg/pizza.svg">pizza</option>
					<option data-thumbnail="assets/images/svg/burger.svg">Burger</option>
					<option data-thumbnail="assets/images/svg/french-fries.svg">French Fries</option>
					<option data-thumbnail="assets/images/svg/food.svg">Fast Food</option>
				</select>
            </div>
			<div class="mb-3">
                <h5 class="title my-3">Cooking Time</h5>
                <div class="short-tag style-2" role="group" aria-label="radio toggle button">
					<div class="clearfix">
						<input type="radio" class="btn-check" name="btnradio" id="btnradio1" checked="">
						<label class="btn-outline-primary tag-btn" for="btnradio1">Under 15 mins</label>
					</div>

					<div class="clearfix">
						<input type="radio" class="btn-check" name="btnradio" id="btnradio2">
						<label class="btn-outline-primary tag-btn" for="btnradio2">Under 30 mins</label>
					</div>
					
					<div class="clearfix">
						<input type="radio" class="btn-check" name="btnradio" id="btnradio3">
						<label class="btn-outline-primary tag-btn" for="btnradio3">Under 45 mins</label>
					</div>
				  
					<div class="clearfix">
						<input type="radio" class="btn-check" name="btnradio" id="btnradio4">
						<label class="btn-outline-primary tag-btn" for="btnradio4">Under 60 mins</label>
					</div>
				</div>
            </div>
			<div class="mb-3">
                <h5 class="title my-3">Suggested Diets</h5>
                <div class="short-tag style-2" role="group" aria-label="radio toggle button">
					<input type="radio" class="btn-check" name="btnradio5" id="btnradio5" checked="">
					<label class="btn-outline-primary tag-btn" for="btnradio5">Vegetable</label>

					<input type="radio" class="btn-check" name="btnradio5" id="btnradio6">
					<label class="btn-outline-primary tag-btn" for="btnradio6">Law Fast</label>

					<input type="radio" class="btn-check" name="btnradio5" id="btnradio7">
					<label class="btn-outline-primary tag-btn" for="btnradio7">Gluten free</label>
				  
					<input type="radio" class="btn-check" name="btnradio5" id="btnradio8">
					<label class="btn-outline-primary tag-btn" for="btnradio8">Law Cafe</label>
					
					<input type="radio" class="btn-check" name="btnradio5" id="btnradio9">
					<label class="btn-outline-primary tag-btn" for="btnradio9">Suger Free</label>
				</div>
            </div>
			<div class="mb-3">
                <h5 class="title my-3">Calories</h5>
                <div class="short-tag style-2" role="group" aria-label="radio toggle button">
					<input type="radio" class="btn-check" name="btnradio6" id="btnradio10" checked="">
					<label class="btn-outline-primary tag-btn" for="btnradio10">55g Kacl</label>

					<input type="radio" class="btn-check" name="btnradio6" id="btnradio11">
					<label class="btn-outline-primary tag-btn" for="btnradio11">65g Kacl</label>

					<input type="radio" class="btn-check" name="btnradio6" id="btnradio12">
					<label class="btn-outline-primary tag-btn" for="btnradio12">70g Kacl</label>
				  
					<input type="radio" class="btn-check" name="btnradio6" id="btnradio13">
					<label class="btn-outline-primary tag-btn" for="btnradio13">80g Kacl</label>
					
				</div>
            </div>
			<div class="mb-3">
                <h5 class="title my-3">Ratings</h5>
                <div class="short-tag style-2" role="group" aria-label="radio toggle button">
					<input type="radio" class="btn-check" name="btnradio7" id="btnradio14" checked="">
					<label class="btn-outline-primary tag-btn" for="btnradio14">
						<i class="fa-solid fa-star"></i>
						4.3
					</label>

					<input type="radio" class="btn-check" name="btnradio7" id="btnradio15">
					<label class="btn-outline-primary tag-btn" for="btnradio15">
						<i class="fa-solid fa-star"></i>
						4.5
					</label>

					<input type="radio" class="btn-check" name="btnradio7" id="btnradio16">
					<label class="btn-outline-primary tag-btn" for="btnradio16">
						<i class="fa-solid fa-star"></i>
						4.7
					</label>
				  
					<input type="radio" class="btn-check" name="btnradio7" id="btnradio17">
					<label class="btn-outline-primary tag-btn" for="btnradio17">
						<i class="fa-solid fa-star"></i>
						5.0
					</label>
				</div>
				<div class="mb-3">
					<h5 class="title my-3">Pricing Table</h5>
					<div class="snap">
						<div id="snap"></div>
					</div>
				</div>
			</div>
        </div>
    </div>
	<!-- FILTER -->
</div>


@push('styles')
<link rel="stylesheet" href="assets/vendor/nouislider/nouislider.min.css">

@endpush

@push('scripts')
<script src="assets/vendor/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js"></script><!-- Swiper -->
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script><!-- Swiper -->
<script src="assets/vendor/nouislider/nouislider.min.js"></script>
<script src="assets/vendor/wnumb/wNumb.js"></script>
<script src="assets/js/noui-slider.init.js"></script>
  
@endpush

@endsection


