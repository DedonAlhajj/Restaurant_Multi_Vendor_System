
@extends('customer.layouts.master')
@section('title', 'Products List')
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
						<h5 class="mb-0 ms-2">Product</h5>
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
								<span class="badge badge-danger counter count-item-cart">{{count(Cart::getcontent())}}</span>
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

    <!-- Page Content -->
	<div class="page-content">
		<div class="container">
            @include('customer.partial.alert')
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
                    <div class="swiper-container mt-4 categorie-swiper">
                        <div class="swiper-wrapper">
                            @foreach ($subcategories as $subcategory) 
                            <div class="swiper-slide">
                                <button href="javascript:void(0);" class="categore-box style-2 primary subcategory-btn" 
                                data-id={{$subcategory->id}} data-vendor={{$vendor->slug}} data-subcategory={{$subcategory->name}}>
                                    <div class="icon-bx">
                                        <svg width="24" height="22" viewBox="0 0 24 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M18.3281 17.3282H11.2969L14.8125 19.9649L18.3281 17.3282Z" fill="#42A7E5"/>
                                            <path d="M1.02026 14.648C0.984375 14.6425 0.948303 14.6365 0.911499 14.6279C0.948486 14.6365 0.984192 14.6427 1.02026 14.648Z" fill="#42A7E5"/>
                                            <path d="M0.517669 10.8394C0.153289 11.5098 0.272673 12.3409 0.812102 12.8803L0.86502 12.9333C0.95877 13.027 1.08713 13.0774 1.21951 13.0722C1.35208 13.0671 1.47623 13.0069 1.56247 12.9063C1.58023 12.8857 1.59708 12.8655 1.61319 12.8465C1.99771 12.3913 2.57797 11.7032 3.56253 11.7032C4.55679 11.7032 5.08212 12.2285 5.46591 12.6123C5.8107 12.9571 5.97952 13.1094 6.37503 13.1094C6.77054 13.1094 6.93954 12.9571 7.28415 12.6123C7.66794 12.2285 8.19327 11.7032 9.18753 11.7032C10.1818 11.7032 10.7071 12.2285 11.0909 12.6123C11.4357 12.9571 11.6045 13.1094 12 13.1094C12.3955 13.1094 12.5645 12.9571 12.9091 12.6123C13.2929 12.2285 13.8183 11.7032 14.8125 11.7032C15.8068 11.7032 16.3321 12.2285 16.7159 12.6123C17.0607 12.9571 17.2295 13.1094 17.625 13.1094C18.0205 13.1094 18.1895 12.9571 18.5341 12.6123C18.9179 12.2285 19.4433 11.7032 20.4375 11.7032C21.4223 11.7032 22.0023 12.3913 22.3869 12.8465C22.4145 12.8791 22.4449 12.9151 22.4766 12.9523C22.546 13.0331 22.6485 13.0777 22.7549 13.0735C22.8615 13.0691 22.96 13.0166 23.0228 12.9303L23.103 12.8206C23.6307 12.0972 23.6715 11.1262 23.2066 10.3608C23.1936 10.3394 23.1806 10.3181 23.1674 10.2969H0.83261C0.726409 10.4688 0.620208 10.651 0.517669 10.8394Z" fill="#42A7E5"/>
                                            <path d="M20.6713 17.3282L15.2342 21.4061C15.1091 21.5002 14.9608 21.5469 14.8125 21.5469H19.0312C21.1705 21.5469 23.2885 20.1701 23.9612 18.2587C24.1208 17.8053 23.7678 17.3282 23.2872 17.3282H20.6713Z" fill="#42A7E5"/>
                                            <path d="M22.1558 15.9219C22.3797 15.5377 22.5163 15.0998 22.5355 14.6284C21.9794 14.5118 21.5696 14.0594 21.3116 13.7536C20.9751 13.3539 20.7526 13.1094 20.4375 13.1094C20.042 13.1094 19.8732 13.2619 19.5284 13.6065C19.1446 13.9903 18.6193 14.5157 17.625 14.5157C16.6307 14.5157 16.1054 13.9903 15.7216 13.6065C15.377 13.2619 15.208 13.1094 14.8125 13.1094C14.417 13.1094 14.2482 13.2619 13.9034 13.6065C13.5196 13.9903 12.9943 14.5157 12 14.5157C11.0057 14.5157 10.4804 13.9903 10.0966 13.6065C9.75201 13.2619 9.58301 13.1094 9.1875 13.1094C8.79199 13.1094 8.62317 13.2619 8.27838 13.6065C7.89459 13.9903 7.36926 14.5157 6.375 14.5157C5.38074 14.5157 4.85541 13.9903 4.47162 13.6065C4.12701 13.2619 3.95801 13.1094 3.5625 13.1094C3.24738 13.1094 3.0249 13.3539 2.68835 13.7536C2.42963 14.0601 2.02478 14.531 1.46631 14.6458C1.4881 15.1106 1.62305 15.5425 1.84424 15.9219H22.1558Z" fill="#42A7E5"/>
                                            <path d="M8.95367 17.3282H0.712828C0.232359 17.3282 -0.120668 17.8053 0.0388165 18.2587C0.711729 20.1701 2.82953 21.5469 4.96875 21.5469H14.8125C14.6642 21.5469 14.5159 21.5002 14.391 21.4061L8.95367 17.3282Z" fill="#42A7E5"/>
                                            <path d="M23.29 8.89064C23.713 8.89064 24.0601 8.51637 23.9911 8.09908C23.2755 3.76846 19.3428 0.453156 14.8124 0.453156H9.18742C4.65704 0.453156 0.724306 3.76846 0.00873078 8.09908C-0.0602998 8.51637 0.286867 8.89064 0.70984 8.89064H23.29ZM16.2187 4.6719C16.607 4.6719 16.9218 4.98666 16.9218 5.37502C16.9218 5.76339 16.607 6.07815 16.2187 6.07815C15.8303 6.07815 15.5155 5.76339 15.5155 5.37502C15.5155 4.98666 15.8303 4.6719 16.2187 4.6719ZM13.4062 3.26565C13.7945 3.26565 14.1093 3.58041 14.1093 3.96877C14.1093 4.35714 13.7945 4.6719 13.4062 4.6719C13.0178 4.6719 12.703 4.35714 12.703 3.96877C12.703 3.58041 13.0178 3.26565 13.4062 3.26565ZM11.9999 6.07815C12.3883 6.07815 12.703 6.3929 12.703 6.78127C12.703 7.16963 12.3883 7.48439 11.9999 7.48439C11.6116 7.48439 11.2968 7.16963 11.2968 6.78127C11.2968 6.3929 11.6116 6.07815 11.9999 6.07815ZM9.18742 3.26565C9.57579 3.26565 9.89055 3.58041 9.89055 3.96877C9.89055 4.35714 9.57579 4.6719 9.18742 4.6719C8.79906 4.6719 8.4843 4.35714 8.4843 3.96877C8.4843 3.58041 8.79906 3.26565 9.18742 3.26565ZM6.37493 4.6719C6.7633 4.6719 7.07805 4.98666 7.07805 5.37502C7.07805 5.76339 6.7633 6.07815 6.37493 6.07815C5.98656 6.07815 5.67181 5.76339 5.67181 5.37502C5.67181 4.98666 5.98656 4.6719 6.37493 4.6719Z" fill="#42A7E5"/>
                                        </svg>
                                    </div>
                                    <span class="title">{{$subcategory->name}}</span>
                                </button>
                            </div>

                            @endforeach
                            {{-- <div class="swiper-slide">
                                <a href="javascript:void(0);" class="categore-box style-2 secondary">
                                    <div class="icon-bx">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M18.7621 9.46073C18.6935 9.11906 18.3934 8.8732 18.0449 8.8732H1.04517C0.696656 8.8732 0.396563 9.11906 0.327984 9.46073C0.110344 10.545 0 11.6676 0 12.7973C0 14.8466 0.349875 16.8033 1.03997 18.6132C1.7047 20.3566 2.67727 21.8953 3.85252 23.0629C3.98953 23.1991 4.17492 23.2755 4.36805 23.2755H14.7219C14.9152 23.2755 15.1005 23.1991 15.2376 23.0629C16.4129 21.8953 17.3854 20.3566 18.0501 18.6131C18.7401 16.8033 19.09 14.8465 19.09 12.7973C19.0901 11.6677 18.9797 10.5451 18.7621 9.46073Z" fill="#FF6B53"/>
                                            <path d="M6.69997 3.17564C6.69997 3.02091 6.73044 2.98046 6.8922 2.79146C7.10877 2.53852 7.436 2.15621 7.436 1.45599C7.436 1.05202 7.10848 0.724503 6.70452 0.724503C6.30055 0.724503 5.97303 1.05202 5.97303 1.45599C5.97303 1.61067 5.94256 1.65113 5.7808 1.84013C5.56423 2.09311 5.237 2.47542 5.237 3.17564C5.237 3.87591 5.56419 4.25822 5.7807 4.51121C5.94247 4.70021 5.97294 4.74075 5.97294 4.89553C5.97294 5.05032 5.94247 5.09082 5.78066 5.27986C5.69872 5.37563 5.59672 5.49483 5.50522 5.64253C5.2925 5.98599 5.39853 6.43683 5.74198 6.64955C5.86194 6.7238 5.99497 6.75924 6.12641 6.75924C6.37128 6.75924 6.61058 6.63628 6.74905 6.41283C6.78134 6.36071 6.83267 6.30066 6.89216 6.23119C7.10867 5.97821 7.43591 5.59589 7.43591 4.89563C7.43591 4.19536 7.10867 3.81305 6.89216 3.56006C6.73044 3.37092 6.69997 3.33042 6.69997 3.17564Z" fill="#FF6B53"/>
                                            <path d="M9.90859 3.17564C9.90859 3.02091 9.93905 2.98046 10.1008 2.79146C10.3174 2.53852 10.6446 2.15621 10.6446 1.45599C10.6446 1.05202 10.3171 0.724503 9.91313 0.724503C9.50916 0.724503 9.18165 1.05202 9.18165 1.45599C9.18165 1.61067 9.15118 1.65113 8.98941 1.84013C8.77285 2.09311 8.44562 2.47542 8.44562 3.17564C8.44562 3.87591 8.77285 4.25822 8.98937 4.51121C9.15113 4.70021 9.1816 4.74075 9.1816 4.89553C9.1816 5.05032 9.15113 5.09082 8.98932 5.27986C8.90738 5.37563 8.80538 5.49483 8.71388 5.64253C8.50116 5.98599 8.6072 6.43683 8.95065 6.64955C9.0706 6.7238 9.20363 6.75924 9.33507 6.75924C9.57995 6.75924 9.8192 6.63628 9.95771 6.41283C9.99001 6.36071 10.0413 6.30066 10.1008 6.23119C10.3173 5.97821 10.6446 5.59589 10.6446 4.89563C10.6446 4.19536 10.3173 3.81305 10.1008 3.56006C9.93905 3.37092 9.90859 3.33042 9.90859 3.17564Z" fill="#FF6B53"/>
                                            <path d="M13.1171 3.17564C13.1171 3.02091 13.1476 2.98046 13.3093 2.79146C13.5259 2.53852 13.8531 2.15621 13.8531 1.45599C13.8531 1.05202 13.5256 0.724503 13.1216 0.724503C12.7177 0.724503 12.3902 1.05202 12.3902 1.45599C12.3902 1.61067 12.3597 1.65113 12.1979 1.84013C11.9814 2.09311 11.6541 2.47542 11.6541 3.17564C11.6541 3.87591 11.9814 4.25822 12.1978 4.51121C12.3596 4.70021 12.3901 4.74075 12.3901 4.89553C12.3901 5.05032 12.3596 5.09082 12.1978 5.27986C12.1159 5.37563 12.0139 5.49483 11.9224 5.64258C11.7097 5.98603 11.8157 6.43688 12.1592 6.64955C12.2791 6.7238 12.4121 6.75924 12.5436 6.75924C12.7884 6.75924 13.0277 6.63624 13.1662 6.41278C13.1985 6.36071 13.2498 6.30066 13.3093 6.23119C13.5258 5.97821 13.853 5.59585 13.853 4.89563C13.853 4.19536 13.5258 3.81305 13.3093 3.56006C13.1476 3.37092 13.1171 3.33042 13.1171 3.17564Z" fill="#FF6B53"/>
                                            <path d="M22.4694 10.7257C21.8535 10.4296 21.1429 10.3487 20.4072 10.4689C20.4683 10.9536 20.5102 11.4429 20.5329 11.9347C21.0723 11.8289 21.5262 11.8956 21.8356 12.0442C22.2945 12.2648 22.5371 12.6739 22.5371 13.227C22.5371 14.4714 21.6479 16.467 19.8745 17.755C19.7412 18.2223 19.5893 18.6826 19.4171 19.1344C19.3249 19.376 19.2274 19.6142 19.1245 19.8486C20.5581 19.2554 21.5662 18.3329 22.2233 17.5411C23.3192 16.2207 24 14.5676 24 13.2269C24 12.1215 23.4278 11.1864 22.4694 10.7257Z" fill="#FF6B53"/>
                                        </svg>
                                    </div>
                                    <span class="title">Drink</span>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="javascript:void(0);" class="categore-box style-2 green">
                                    <div class="icon-bx">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M19.7343 9.1875C19.7343 11.1259 18.1571 12.7031 16.2187 12.7031H7.78122C5.8428 12.7031 4.2656 11.1259 4.2656 9.1875V6.29208L2.11572 7.36721L3.53561 23.0326L6.58099 19.9872L7.57525 20.9815L4.55674 24H19.4432L16.4247 20.9815L17.419 19.9872L20.4643 23.0326L21.8842 7.36721L19.7343 6.29208V9.1875Z" fill="#84CA93"/>
                                            <path d="M5.67188 9.1875C5.67188 10.3507 6.61809 11.2969 7.78125 11.2969V0H5.67188V9.1875Z" fill="#84CA93"/>
                                            <path d="M18.3281 9.1875V0H16.2188V11.2969C17.3819 11.2969 18.3281 10.3507 18.3281 9.1875Z" fill="#84CA93"/>
                                            <path d="M12.7031 4.21875H14.8125V11.2969H12.7031V4.21875Z" fill="#84CA93"/>
                                            <path d="M9.1875 2.8125H11.2969V11.2969H9.1875V2.8125Z" fill="#84CA93"/>
                                        </svg>
                                    </div>
                                    <span class="title">Snack</span>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="javascript:void(0);" class="categore-box style-2 info">
                                    <div class="icon-bx">
                                       <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7.87073 15.4833L8.57788 21.1406H11.2968V15.4499C10.7321 15.3531 10.1928 15.1471 9.71479 14.8372C9.16331 15.1947 8.53082 15.4128 7.87073 15.4833Z" fill="#42A7E5"/>
                                            <path d="M12.7031 15.4499V21.1406H15.4222L16.1294 15.4833C15.4692 15.4128 14.8366 15.1947 14.2852 14.8372C13.8072 15.1471 13.2679 15.3531 12.7031 15.4499Z" fill="#42A7E5"/>
                                            <path d="M5.14452 14.8372C4.51288 15.2467 3.77554 15.4765 3.01086 15.5045L4.02051 19.5435C4.2553 20.4835 5.09713 21.1406 6.0667 21.1406H7.16086L6.4416 15.3866C5.98148 15.2742 5.54104 15.0943 5.14452 14.8372Z" fill="#42A7E5"/>
                                            <path d="M17.5586 15.3865L16.8392 21.1406H17.9333C18.9029 21.1406 19.7447 20.4835 19.9795 19.5428L20.9889 15.5045C20.2243 15.4764 19.4871 15.2467 18.8554 14.8372C18.459 15.0943 18.0186 15.2741 17.5586 15.3865Z" fill="#42A7E5"/>
                                            <path d="M21.1406 8.48438C21.0781 8.48438 21.0196 8.49872 20.9581 8.50275C20.116 5.247 16.3942 2.85938 12 2.85938C7.6058 2.85938 3.88402 5.247 3.04186 8.50275C2.98041 8.49872 2.92186 8.48438 2.85938 8.48438C1.30608 8.48438 0 9.74353 0 11.2969C0 12.8502 1.30608 14.1094 2.85938 14.1094C3.80358 14.1094 4.63444 13.6402 5.14453 12.9264C5.65462 13.6402 6.48548 14.1094 7.42969 14.1094C8.37389 14.1094 9.20475 13.6402 9.71484 12.9264C10.2249 13.6402 11.0558 14.1094 12 14.1094C12.9442 14.1094 13.7751 13.6402 14.2852 12.9264C14.7952 13.6402 15.6261 14.1094 16.5703 14.1094C17.5145 14.1094 18.3454 13.6402 18.8555 12.9264C19.3656 13.6402 20.1964 14.1094 21.1406 14.1094C22.6939 14.1094 24 12.8502 24 11.2969C24 9.74353 22.6939 8.48438 21.1406 8.48438ZM9.7725 7.46813L8.36625 9.5775C8.15433 9.89592 7.72003 9.99042 7.3912 9.7725C7.06781 9.55687 6.98058 9.12089 7.1962 8.79745L8.60245 6.68808C8.81667 6.36469 9.2527 6.27745 9.5775 6.49308C9.90094 6.7087 9.98812 7.14473 9.7725 7.46813ZM12.7031 9.89062C12.7031 10.2793 12.3886 10.5938 12 10.5938C11.6114 10.5938 11.2969 10.2793 11.2969 9.89062V7.07812C11.2969 6.68948 11.6114 6.375 12 6.375C12.3886 6.375 12.7031 6.68948 12.7031 7.07812V9.89062ZM16.6087 9.7725C16.2798 9.99061 15.8456 9.89583 15.6337 9.5775L14.2275 7.46813C14.0118 7.14473 14.0991 6.7087 14.4225 6.49308C14.7465 6.27745 15.1826 6.36469 15.3975 6.68808L16.8038 8.79745C17.0194 9.12089 16.9322 9.55692 16.6087 9.7725Z" fill="#42A7E5"/>
                                        </svg>
                                    </div>
                                    <span class="title">Dissert</span>
                                </a>
                            </div> --}}
                        </div>
                    </div>
                </div>

                <!-- TITLE -->
                <h4 class="title my-4" id="category-title">Expresson & Classic</h4>
                <!-- TITLE -->
				<div class="item-list recent-jobs-list " style="margin-bottom: 50px">
					<ul id="foodItems-list">
                        @forelse ($foodItems as $foodItem )
                        <li>
							<div class="item-content">
								<div class="item-inner">
									<div class="item-title-row">
										<h6 class="item-title"><a href="{{route('vendor.menu.fooditem',['vendor_slug' => $vendor->slug,$foodItem->id])}}">{{$foodItem->name}}</a></h6>
										<div class="item-subtitle">{{$foodItem->description}}</div>
									</div>
                                    <div class="item-footer">
                                        <div class="d-flex align-items-center">
                                            <h6 class="me-3">{{$foodItem->price}}</h6>
                                            {{-- <del class="off-text"><h6>$ 8.9</h6></del> --}}
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <i class="fa-solid fa-star"></i>
                                            <h6>{{ number_format($foodItem->average_rating, 1) }}</h6>
                                        </div>
                                    </div>
								</div>
                                {{-- @dd($foodItem->likes) --}}
                                {{-- @dd($likes) --}}
                                <div class="item-media media media-90"><img src="{{asset('customer/assets/images/food/pic1.png')}}" alt="logo">
                                    <button onclick="toggleLikeProduct('{{$vendor->slug}}' ,{{ $foodItem->id }})"  id="like-btn-{{$foodItem->id}}"  class="item-bookmark icon-2 {{ in_array($foodItem->id, $likes) ? 'active' : ''}} " style="background: none ; outline: none; border: none; cursor: pointer;">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M16.785 2.04751C15.9489 2.04694 15.1209 2.21163 14.3486 2.53212C13.5764 2.85261 12.8751 3.32258 12.285 3.91501L12 4.18501L11.73 3.91501C11.1492 3.2681 10.4424 2.74652 9.65306 2.3822C8.86367 2.01787 8.00824 1.81847 7.13912 1.79618C6.27 1.7739 5.40547 1.9292 4.59845 2.25259C3.79143 2.57599 3.05889 3.06066 2.44566 3.67695C1.83243 4.29325 1.35142 5.02819 1.03206 5.83682C0.712696 6.64544 0.561704 7.51073 0.588323 8.37973C0.614942 9.24873 0.818613 10.1032 1.18687 10.8907C1.55513 11.6783 2.08022 12.3824 2.73002 12.96L12 22.2675L21.3075 12.96C22.2015 12.0677 22.8109 10.9304 23.0589 9.6919C23.3068 8.45338 23.1822 7.16915 22.7006 6.00144C22.2191 4.83373 21.4023 3.83492 20.3534 3.13118C19.3045 2.42744 18.0706 2.05034 16.8075 2.04751H16.785Z" 
                                            fill="{{ in_array($foodItem->id, $likes) ? 'red' : 'white'}}"/>
                                        </svg>
                                    </button>
                                </div>
							</div>
						</li>
                        @empty

                        @endforelse

                    </ul>
                    <div class="saprater"></div>
                    <!-- TITLE -->

				</div>
				<!-- Job List -->
			</div>
		</div>
	</div>

    <!-- Page Content End-->


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
					<option data-thumbnail="{{asset('customer/assets/images/svg/ramen.svg')}}">Ramen</option>
					<option data-thumbnail="{{asset('customer/assets/images/svg/pizza.svg')}}">pizza</option>
					<option data-thumbnail="{{asset('customer/assets/images/svg/burger.svg')}}">Burger</option>
					<option data-thumbnail="{{asset('customer/assets/images/svg/french-fries.svg')}}">French Fries</option>
					<option data-thumbnail="{{asset('customer/assets/images/svg/food.svg')}}">Fast Food</option>
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

<div>
@include('customer.partial.menubar-area')
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
    function toggleLikeProduct(vendor,foodItemId) {
        console.log(vendor,foodItemId);
        var vendor_slug = vendor;
            var foodItem_Id = foodItemId;
            var url = "{{route('food-items.like',[':vendor_slug',':foodItemId'])}}";
            url = url.replace(':vendor_slug',vendor_slug);
            url = url.replace(':foodItemId',foodItem_Id);
            $.ajax({
                url:url,
                type: "POST",
                data: {
                    _token: "{{csrf_token()}}",
                    foodItemId:foodItemId
                },
                success: function(response) {
                    if(response.status == true) {
                        $('#like-'+foodItemId).html(response.count);
                    }
                }
            });
        
        
    }     
</script>



<script>
    $(document).ready(function() {
        $('.subcategory-btn').click(function() {
            var subcategoryId = $(this).data('id');
            var vendor_slug = $(this).data('vendor');
            var subcategory = $(this).data('subcategory');
            var url = "{{route('vendor.categories.products',[':vendor_slug',':subcategoryId'])}}";
            url = url.replace(':vendor_slug',vendor_slug);
            url = url.replace(':subcategoryId',subcategoryId);
            $.ajax({
                url: url,
                type: 'GET',
                success: function(products) {
                    $('#category-title').text(subcategory);
                    $('#foodItems-list').empty(); 
                    if (products.length > 0) {
                        products.forEach(function(product) {
                            var rate=Number(product.average_rating);
                            const url = `{{ route('vendor.menu.fooditem', ['vendor_slug' => '__vendor_slug__', 'product_id' => '__product_id__']) }}` 
                                            .replace('__vendor_slug__', product.vendor_slug)
                                            .replace('__product_id__', product.id);
                            $('#foodItems-list').append(
                                `<li>
                                    <div class="item-content">
                                        <div class="item-inner">
                                            <div class="item-title-row">
                                                <h6 class="item-title"><a href="${url}">${product.name}</a></h6>
                                                <div class="item-subtitle">${product.description}</div>
                                            </div>
                                            <div class="item-footer">
                                                <div class="d-flex align-items-center">
                                                    <h6 class="me-3">${product.price}</h6>
                                                    {{-- <del class="off-text"><h6>$ 8.9</h6></del> --}}
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <i class="fa-solid fa-star"></i>
                                                    <h6>${rate.toFixed(1) }</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-media media media-90">
                                            <button onclick="toggleLikeProduct('${vendor_slug}' ,${product.id})"  id="like-btn-{{$foodItem->id}}"  class="item-bookmark icon-2 ${product.likes.some(function(like) { return like.pivot.customer_id == {{Auth::guard('customer')->id()}}})  ? 'active' : ''}" " style="background: none ; outline: none; border: none; cursor: pointer;">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M16.785 2.04751C15.9489 2.04694 15.1209 2.21163 14.3486 2.53212C13.5764 2.85261 12.8751 3.32258 12.285 3.91501L12 4.18501L11.73 3.91501C11.1492 3.2681 10.4424 2.74652 9.65306 2.3822C8.86367 2.01787 8.00824 1.81847 7.13912 1.79618C6.27 1.7739 5.40547 1.9292 4.59845 2.25259C3.79143 2.57599 3.05889 3.06066 2.44566 3.67695C1.83243 4.29325 1.35142 5.02819 1.03206 5.83682C0.712696 6.64544 0.561704 7.51073 0.588323 8.37973C0.614942 9.24873 0.818613 10.1032 1.18687 10.8907C1.55513 11.6783 2.08022 12.3824 2.73002 12.96L12 22.2675L21.3075 12.96C22.2015 12.0677 22.8109 10.9304 23.0589 9.6919C23.3068 8.45338 23.1822 7.16915 22.7006 6.00144C22.2191 4.83373 21.4023 3.83492 20.3534 3.13118C19.3045 2.42744 18.0706 2.05034 16.8075 2.04751H16.785Z" 
                                                    fill="${product.likes.some(function(like) { return like.pivot.customer_id == {{Auth::guard('customer')->id()}}})  ? 'red' : 'white'}" />
                                                </svg>
                                            </button>
                                            <img src="{{asset('customer/assets/images/food/pic1.png')}}" alt="logo">
                                           
                                        </div>
                                    </div>
                                </li>`
                            );
                        });
                    } else {
                        $('#product-list').append('<p>No products found.</p>');
                    }
                },
                error: function(xhr) {
                    console.error(xhr);
                    alert('An error occurred while fetching products.');
                }
            });
        });
    });
</script>







@push('styles')
<link rel="stylesheet" href="{{asset('customer/assets/vendor/nouislider/nouislider.min.css')}}">
@endpush

@push('scripts')
    <script src="{{asset('customer/assetss/vendor/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
    <script src="{{asset('customer/assetss/vendor/nouislider/nouislider.min.js')}}"></script>
    <script src="{{asset('customer/assetss/vendor/wnumb/wNumb.js')}}"></script>
    <script src="{{asset('customer/assetss/js/noui-slider.init.js')}}"></script>
    <script src="{{asset('customer/assetss/vendor/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js')}}"></script>
    <script>
        $(".stepper").TouchSpin();
    </script>
@endpush




@endsection
