@extends('customer.layouts.masterAuth')
@section('title', 'Login')
@section('content')
<div class="page-wraper">

    <!-- Preloader -->
	<div id="preloader">
		<div class="spinner"></div>
	</div>
    <!-- Preloader end-->

    <!-- Page Content -->
    <div class="page-content">
        <!-- Banner -->
        <div class="banner-wrapper">
            <div class="circle-1"></div>
            <div class="container inner-wrapper">
                <h1 class="dz-title">
                    <a href="{{route('vendor.index', $vendor->slug)}}">{{$vendor->name}}</a>
                </h1>
                <p class="mb-0">Restaurant App</p>
            </div>
        </div>
        <!-- Banner End -->
        <div class="account-box">

            <div class="container">
                @include('customer.partial.alert')

                <div class="account-area">
                    <h3 class="title">Welcome back</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
					<form method="POST" action="{{ route('customer.store' , $vendor->slug) }}">
                        @csrf
						<div class="input-group input-mini mb-3">
							<span class="input-group-text"><i class="fa fa-user"></i></span>
							<input type="text" class="form-control" value="{{old('phone')}}" placeholder="Phone" name="phone" required>
						</div>
						<div class="mb-3 input-group input-mini">
							<span class="input-group-text"><i class="fa fa-lock"></i></span>
							<input type="password" class="form-control dz-password" placeholder="Password" name="password" required>
							<span class="input-group-text show-pass">
								<i class="fa fa-eye-slash"></i>
								<i class="fa fa-eye"></i>
							</span>
						</div>


						<div class="input-group">
                            <button type="submit" class="btn mt-2 btn-primary w-100 btn-rounded">SIGN IN</button>
						</div>
						<div class="d-flex justify-content-between align-items-center">
							<div class="form-check">
								<input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
								<label class="form-check-label" for="flexCheckChecked">
									Keep Sign In
								</label>
							</div>

							<a href="forgot-password.html" class="btn-link">Forgot password?</a>
						</div>
					</form>
                    <div class="text-center mb-auto p-tb20">
                        <a href="{{route('customer.register', $vendor->slug)}}" class="saprate">Don’t have an account?</a>
                    </div>
                </div>
            </div>
        </div>

        
    </div>
    <!-- Page Content End -->

    <!-- Footer -->
    <footer class="footer fixed">
        <div class="container">
            <a href="{{route('customer.register', $vendor->slug)}}" class="btn btn-transparent btn-rounded d-block">CREATE AN ACCOUNT</a>
        </div>
    </footer>
    <!-- Footer End -->

</div>

@endsection
