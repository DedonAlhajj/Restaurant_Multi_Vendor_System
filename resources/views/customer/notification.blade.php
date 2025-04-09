

@extends('customer.layouts.master')
@section('title', 'Notifications')
@section('content')
<div class="page-wraper">
    
    <!-- Preloader -->
    <div id="preloader">
        <div class="spinner"></div>
    </div>
    <!-- Preloader end-->    
    @include('customer.partial.menubar-area')

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
                        <h5 class="mb-0 ms-2 text-nowrap">Notification</h5>
                    </div>
                    <div class="mid-content">
                    </div>
                    <div class="right-content">
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->
    
    <!-- Page content -->
    <div class="page-content bottom-content">
        <div class="container"> 
            <a href="profile.html" class="notification bg-success">
                <div class="notification-content item-list">
                    <div class="item-content">
                        <div class="media media-35">
                            <img src="assets/images/author/pic1.png" alt="image">
                        </div>
                        <div class="item-inner">
                            <h6 class="title">Lily MacDonald</h6>
                            <p class="mb-0">Lorem ipsum dolor sit ameet..</p>
                        </div>
                        <div  class="ms-auto font-10 text-white d-flex align-items-center">
                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6 11C8.76142 11 11 8.76142 11 6C11 3.23858 8.76142 1 6 1C3.23858 1 1 3.23858 1 6C1 8.76142 3.23858 11 6 11Z" stroke="#fff" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M6 3V6L8 7" stroke="#fff" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                            12 min ago
                        </div>
                    </div>
                </div>
            </a>
            <a  href="profile.html" class="notification bg-success">
                <div class="notification-content item-list">
                    <div class="item-content">
                        <div class="media media-35">
                            <img src="assets/images/avatar/1.jpg" alt="image">
                        </div>
                        <div class="item-inner">
                            <h6 class="title">Lily MacDonald</h6>
                            <p class="mb-0">Lorem ipsum dolor sit ameet..</p>
                        </div>
                        <div class="ms-auto font-10 text-white d-flex align-items-center">
                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6 11C8.76142 11 11 8.76142 11 6C11 3.23858 8.76142 1 6 1C3.23858 1 1 3.23858 1 6C1 8.76142 3.23858 11 6 11Z" stroke="#fff" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M6 3V6L8 7" stroke="#fff" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                            12 min ago
                        </div>
                    </div>
                </div>
            </a>
            <a href="profile.html" class="notification">
                <div class="notification-content item-list">
                    <div class="item-content">
                        <div class="media media-35">
                            <img src="assets/images/avatar/2.jpg" alt="image">
                        </div>
                        <div class="item-inner">
                            <h6 class="title">Lily MacDonald</h6>
                            <p class="mb-0">Lorem ipsum dolor sit ameet..</p>
                        </div>
                        <div class="ms-auto font-10 text-dark d-flex align-items-center">
                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6 11C8.76142 11 11 8.76142 11 6C11 3.23858 8.76142 1 6 1C3.23858 1 1 3.23858 1 6C1 8.76142 3.23858 11 6 11Z" stroke="#787878" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M6 3V6L8 7" stroke="#787878" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                            12 min ago
                        </div>
                    </div>
                </div>
            </a>
            <a href="profile.html" class="notification">
                <div class="notification-content item-list">
                    <div class="item-content">
                        <div class="media media-35">
                            <img src="assets/images/avatar/3.jpg" alt="image">
                        </div>
                        <div class="item-inner">
                            <h6 class="title">Lily MacDonald</h6>
                            <p class="mb-0">Lorem ipsum dolor sit ameet..</p>
                        </div>
                        <div class="ms-auto font-10 text-dark d-flex align-items-center">
                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6 11C8.76142 11 11 8.76142 11 6C11 3.23858 8.76142 1 6 1C3.23858 1 1 3.23858 1 6C1 8.76142 3.23858 11 6 11Z" stroke="#787878" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M6 3V6L8 7" stroke="#787878" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                            12 min ago
                        </div>
                    </div>
                </div>
            </a>
            <a href="profile.html" class="notification">
                <div class="notification-content item-list">
                    <div class="item-content">
                        <div class="media media-35">
                            <img src="assets/images/avatar/4.jpg" alt="image">
                        </div>
                        <div class="item-inner">
                            <h6 class="title">Lily MacDonald</h6>
                            <p class="mb-0">Lorem ipsum dolor sit ameet..</p>
                        </div>
                        <div class="ms-auto font-10 text-dark d-flex align-items-center">
                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6 11C8.76142 11 11 8.76142 11 6C11 3.23858 8.76142 1 6 1C3.23858 1 1 3.23858 1 6C1 8.76142 3.23858 11 6 11Z" stroke="#787878" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M6 3V6L8 7" stroke="#787878" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                            12 min ago
                        </div>
                    </div>
                </div>
            </a>
            <a href="profile.html" class="notification">
                <div class="notification-content item-list">
                    <div class="item-content">
                        <div class="media media-35">
                            <img src="assets/images/avatar/5.jpg" alt="image">
                        </div>
                        <div class="item-inner">
                            <h6 class="title">Lily MacDonald</h6>
                            <p class="mb-0">Lorem ipsum dolor sit ameet..</p>
                        </div>
                        <div class="ms-auto font-10 text-dark d-flex align-items-center">
                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6 11C8.76142 11 11 8.76142 11 6C11 3.23858 8.76142 1 6 1C3.23858 1 1 3.23858 1 6C1 8.76142 3.23858 11 6 11Z" stroke="#787878" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M6 3V6L8 7" stroke="#787878" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                            12 min ago
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <!-- Page content End-->
	
	<!-- Menubar -->

	<!-- Menubar -->
	<!-- Theme Color Settings -->
	<div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom">
        <div class="offcanvas-body small">
            <ul class="theme-color-settings">
                <li>
                    <input class="filled-in" id="primary_color_8" name="theme_color" type="radio" value="color-primary" />
					<label for="primary_color_8"></label>
                    <span>Default</span>
                </li>
                <li>
					<input class="filled-in" id="primary_color_2" name="theme_color" type="radio" value="color-green" />
					<label for="primary_color_2"></label>
                    <span>Green</span>
                </li>
                <li>
                    <input class="filled-in" id="primary_color_3" name="theme_color" type="radio" value="color-blue" />
					<label for="primary_color_3"></label>
                    <span>Blue</span>
                </li>
                <li>
                    <input class="filled-in" id="primary_color_4" name="theme_color" type="radio" value="color-pink" />
					<label for="primary_color_4"></label>
                    <span>Pink</span>
                </li>
                <li>
                    <input class="filled-in" id="primary_color_5" name="theme_color" type="radio" value="color-yellow" />
					<label for="primary_color_5"></label>
                    <span>Yellow</span>
                </li>
                <li>
                    <input class="filled-in" id="primary_color_6" name="theme_color" type="radio" value="color-orange" />
					<label for="primary_color_6"></label>
                    <span>Orange</span>
                </li>
                <li>
                    <input class="filled-in" id="primary_color_7" name="theme_color" type="radio" value="color-purple" />
					<label for="primary_color_7"></label>
                    <span>Purple</span>
                </li>
                <li>
					<input class="filled-in" id="primary_color_1" name="theme_color" type="radio" value="color-red" />
					<label for="primary_color_1"></label>
                    <span>Red</span>
                </li>
                <li>
					<input class="filled-in" id="primary_color_9" name="theme_color" type="radio" value="color-lightblue" />
					<label for="primary_color_9"></label>
                    <span>Lightblue</span>
                </li>
                <li>
                    <input class="filled-in" id="primary_color_10" name="theme_color" type="radio" value="color-teal" />
					<label for="primary_color_10"></label>
                    <span>Teal</span>
                </li>
                <li>
                    <input class="filled-in" id="primary_color_11" name="theme_color" type="radio" value="color-lime" />
					<label for="primary_color_11"></label>
                    <span>Lime</span>
                </li>
                <li>
                    <input class="filled-in" id="primary_color_12" name="theme_color" type="radio" value="color-deeporange" />
					<label for="primary_color_12"></label>
                    <span>Deeporange</span>
                </li>
            </ul>
        </div>
    </div>
	<!-- Theme Color Settings End -->
    
</div>
@endsection