@extends('customer.layouts.master')
@section('content')
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
                        <h5 class="mb-0 ms-2 text-nowrap">Not Found</h5>
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
	
    <!-- Error Start -->
	<div class="content-body">
		<div class="container">
			<div class="error-page">
				<div class="icon-bx">
					<svg height="120" viewBox="0 -26 511.82388 511" width="120" xmlns="http://www.w3.org/2000/svg"><path d="m439.210938 459.449219h-366.609376c-25.160156 0-48.53125-13.027344-61.757812-34.433594-13.230469-21.402344-14.433594-48.128906-3.179688-70.636719l183.304688-313.832031c12.300781-24.59375 37.4375-40.132813 64.9375-40.132813s52.636719 15.539063 64.9375 40.132813l183.304688 313.832031c11.253906 22.507813 10.050781 49.234375-3.179688 70.636719-13.226562 21.40625-36.59375 34.433594-61.757812 34.433594zm0 0" fill="#f0c419"></path><path d="m439.253906 459.449219h-183.347656v-459.035157c27.566406-.171874 52.804688 15.429688 64.972656 40.167969l183.257813 313.820313c11.269531 22.492187 10.082031 49.21875-3.136719 70.621094-13.222656 21.40625-36.585938 34.433593-61.746094 34.425781zm0 0" fill="#f29c1f" class=""></path><path d="m291.21875 380c0 19.503906-15.8125 35.3125-35.3125 35.3125s-35.308594-15.808594-35.308594-35.3125c0-19.5 15.808594-35.308594 35.308594-35.308594s35.3125 15.808594 35.3125 35.308594zm0 0" fill="#35495e"></path><path d="m291.21875 380c0 9.367188-3.71875 18.347656-10.339844 24.972656-6.625 6.621094-15.605468 10.339844-24.972656 10.339844v-70.621094c9.367188-.003906 18.347656 3.714844 24.972656 10.339844 6.621094 6.621094 10.339844 15.605469 10.339844 24.96875zm0 0" fill="#2c3e50"></path><path d="m255.90625 71.035156c19.5 0 35.3125 15.808594 35.3125 35.3125v167.722656c0 19.5-15.8125 35.308594-35.3125 35.308594s-35.308594-15.808594-35.308594-35.308594v-167.722656c0-19.503906 15.808594-35.3125 35.308594-35.3125zm0 0" fill="#35495e"></path><path d="m291.21875 106.347656v167.722656c0 9.367188-3.71875 18.347657-10.339844 24.96875-6.625 6.625-15.605468 10.34375-24.972656 10.339844v-238.34375c9.367188-.011718 18.359375 3.703125 24.984375 10.328125 6.621094 6.625 10.339844 15.613281 10.328125 24.984375zm0 0" fill="#2c3e50"></path></svg>
				</div>
				<div class="clearfix">
					<h2 class="title text-primary">Sorry</h2>
					<p>Requested content not found.</p>
				</div>
			</div>
		</div>
	</div>
    <!-- Error End -->
    
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