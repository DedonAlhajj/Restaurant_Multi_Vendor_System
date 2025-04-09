@extends('customer.layouts.master')
@section('title', 'Payment')
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
						<h5 class="mb-0 ms-2 text-nowrap">Payment</h5>
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
	
    <!-- Page Content -->
	<div class="page-content">
		<div class="container"> 
			@include('customer.partial.alert')

			<div class="title-bar">
				<span class="font-14 title">Select Payment mode</span>
			</div>
			<div class="accordion style-2" id="accordionExample">
				<div class="accordion-item">
					<h2 class="accordion-header" id="headingOne">
						<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
							<i class="fa-solid fa-money-bill me-2"></i>
							Cash on Delivery
						</button>
					</h2>
					<div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
						<div class="accordion-body">
							Carry on your cash payment..
							<br>
							Thanx!
						</div>
					</div>
				</div>
				<div class="accordion-item">
					<h2 class="accordion-header" id="headingTwo">
						<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
							<i class="fa-solid fa-credit-card me-2"></i>
							Credit/Debit Card
						</button>
					</h2>
					<div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
						<div class="accordion-body">
							<small class="font-w600 mb-2">Saved Cards</small>
							<!-- Card Select -->
							<div class="d-flex align-items-center mb-3">
								<button type="button" class="dz-modal-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">Add Card +</button>
								<div class="modal fade" id="exampleModalCenter">
									<div class="modal-dialog modal-dialog-centered" role="document">
										<div class="modal-content">
											<div class="modal-header border-0 pb-0">
												<h5 class="modal-title">ADD CARD</h5>
												<button class="btn-close" data-bs-dismiss="modal">
													<i class="fa-solid fa-xmark"></i>
												</button>
											</div>
											<div class="modal-body">
												<div class="form">
													<div class="form-item">
														<label class="form-label" for="username">Card holder Name</label>
														<input type="text" class="form-control" id="username" autocomplete="off" required>
													</div>
													<div class="form-item">
														<label class="form-label" for="Number">Card Number</label>
														<input type="number" class="form-control" id="Number" autocomplete="off" placeholder="**** **** **** ****" required>
													</div>
													<div class="d-flex align-items-center">		
														<div class="form-item me-2">
															<label class="form-label" for="Number">Expiry Date</label>
															<input type="text" class="form-control" id="Number" autocomplete="off" placeholder="MM / YY" required>
														</div>
														<div class="form-item">
															<label class="form-label" for="Number">Security Code</label>
															<input type="password" class="form-control" id="Number" autocomplete="off" placeholder="..." required>
														</div>
													</div>	
												</div>
												<a href="javascript:void(0);" class="btn btn-primary d-block" data-bs-dismiss="modal">Added</a>
											</div>
										</div>
									</div>
								</div>
								<!-- Card Select -->
								<div class="short-tag style-3" role="group" aria-label="radio toggle button">
									<div class="clearfix">
										<input type="radio" class="btn-check" name="btnradio" id="btnradio1" checked="">
										<label class="btn ms-2 mb-0 tag-btn" for="btnradio1">
											<img src="assets/images/payment/visa.png" alt="">
										</label>
									</div>

									<div class="clearfix">
										<input type="radio" class="btn-check" name="btnradio" id="btnradio2">
										<label class="btn mb-0 tag-btn" for="btnradio2">
											<img src="assets/images/payment/mastercard.png" alt="">
										</label>
									</div>
									
									<div class="clearfix">
										<input type="radio" class="btn-check" name="btnradio" id="btnradio3">
										<label class="btn mb-0 me-0 tag-btn" for="btnradio3">
											<img src="assets/images/payment/discover.png" alt="">
										</label>
									</div>
								</div>
							</div>
							<div class="payment-card">
								<div class="card-media">
									<img src="assets/images/payment/card.png" alt="">
								</div>
								<div class="card-info">
									<div class="clearfix">
										<img class="mb-3" src="assets/images/payment/visa-white.png" alt="">
										<h5 class="card-name">Credit Card</h5>
										<p class="card-number">4532 **** **** ****</p>
									</div>
									<div class="bottom-info">
										<p>04 / 25</p>
										<p>KEVIN HARD</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="accordion-item">
					<h2 class="accordion-header" id="headingThree">
						<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
							<i class="fa-solid fa-money-check me-2"></i>
							Google Pay/Other
							<!-- <i class="fa-solid fa-building-columns me-2"></i> -->
						</button>
					</h2>
					<div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
						<div class="accordion-body pt-0">
							<div class="form">
								<div class="form-item">
									<label class="form-label" for="username">Link via UPI</label>
									<input type="number" class="form-control" id="username" placeholder="Enter your UPI ID" autocomplete="off" required>
								</div>
								<a href="javascrpit:void(0);" class="btn btn-primary btn-block">Continue</a>	
								<div class="d-flex align-items-center mt-3">
									<i class="fa-solid fa-shield me-2"></i>
									<p class="info-line">Your UPI ID Will be encrypted and is 100% safe with us.</p>
								</div>	
							</div>
						</div>
					</div>
				</div>
				<div class="accordion-item">
					<h2 class="accordion-header" id="headingFour">
						<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
							<i class="fa-solid fa-building-columns me-2"></i>
							Netbanking
						</button>
					</h2>
					<div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
						<div class="accordion-body">
							<button class="btn btn-outline-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Netbannking</button>
							<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
								<button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close">
									<i class="fa-solid fa-xmark"></i>
								</button>
								<div class="offcanvas-body">
									<h2 class="dz-title text-dark mb-3">Foodia</h2>
									<div class="form border-bottom">
										<div class="input-group form-item">
											<span class="input-group-text"> 
												<a href="javascript:void(0);">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none">
														<path d="M20.5605 18.4395L16.7528 14.6318C17.5395 13.446 18 12.0262 18 10.5C18 6.3645 14.6355 3 10.5 3C6.3645 3 3 6.3645 3 10.5C3 14.6355 6.3645 18 10.5 18C12.0262 18 13.446 17.5395 14.6318 16.7528L18.4395 20.5605C19.0245 21.1462 19.9755 21.1462 20.5605 20.5605C21.1462 19.9748 21.1462 19.0252 20.5605 18.4395ZM5.25 10.5C5.25 7.605 7.605 5.25 10.5 5.25C13.395 5.25 15.75 7.605 15.75 10.5C15.75 13.395 13.395 15.75 10.5 15.75C7.605 15.75 5.25 13.395 5.25 10.5Z" fill="#B9B9B9"></path>
													</svg>
												</a>
											</span>
											<input type="Search" class="form-control bs-0" id="username" autocomplete="off" required placeholder="Search By Bank Name">
										</div>	
									</div>
									<h5 class="title-bar">All Banks</h5>	
									<ul class="item-list">
										<li class="list">
											<a href="javascript:void(0);">
												Bank Of india
											</a>
										</li>
										<li class="list">
											<a href="javascript:void(0);">
												Bank Of Maharasthra
											</a>
										</li>
										<li class="list">
											<a href="javascript:void(0);">
												Canara Bank
											</a>
										</li>
										<li class="list">
											<a href="javascript:void(0);">
												HDFC Bank
											</a>
										</li>
										<li class="list">
											<a href="javascript:void(0);">
												IDFC Bank
											</a>
										</li>
										<li class="list">
											<a href="javascript:void(0);">
												Catholic Syrian Bank
											</a>
										</li>
										<li class="list">
											<a href="javascript:void(0);">
												Catholic Syrian Bank
											</a>
										</li>
										<li class="list">
											<a href="javascript:void(0);">
												Central Bank of India
											</a>
										</li>
										<li class="list">
											<a href="javascript:void(0);">
												City Union Bank
											</a>
										</li>
										<li class="list">
											<a href="javascript:void(0);">
												Corporation Bank
											</a>
										</li>
										<li class="list">
											<a href="javascript:void(0);">
												Cosmos Bank
											</a>
										</li>
									</ul>
								</div>	
							</div>
						</div>
					</div>
				</div>
				<div class="accordion-item">
					<h2 class="accordion-header" id="headingFive">
						<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
							<i class="fa-solid fa-wallet me-2"></i>
							Wallet
						</button>
					</h2>
					<div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
						<div class="accordion-body pt-0">
							<div class="form">
								<label class="form-label" for="username">Link Your Wallet</label>
									<div class="input-group form-item">
									<span class="input-group-text"> 
										<a href="javascript:void(0);">
											<img src="assets/images/svg/india-flag-icon.svg" alt="">
											91
										</a>
									</span>
									<input type="number" class="form-control bs-0" id="username" autocomplete="off" required>
								</div>
								<a href="javascript:void(0);" class="btn btn-primary btn-block">Continue</a>		
							</div>
						</div>
					</div>
				</div>
			</div>
			<a href="payment-confirm.html" class="btn btn-primary btn-block">Make Payment: $55</a>
			<br>
			<form action="{{route('order.complete',$vendor_slug)}}" class="mt-20" method="POST">
				@csrf
					<input type="text" value="cash-on-delivery" name="order_type" hidden>
					<button type="submit" class="btn btn-success btn-block mt-10">Complete Order Cash On Delivery</button>
			</form>

		</div>
	</div>
    <!-- Page Content End-->
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