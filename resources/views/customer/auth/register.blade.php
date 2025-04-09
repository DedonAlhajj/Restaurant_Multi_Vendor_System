@extends('customer.layouts.masterAuth')
@section('title', 'Register')
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
                    <h3 class="title">Create your account</h3>
                    <p>Lorem ipsum dolor sit amet</p>
					<form class="input-style" method="POST" action="{{ route('customer.register',$vendor->slug) }}">
                        @csrf
						<div class="input-group input-mini mb-3">
							<span class="input-group-text"><i class="fa fa-user"></i></span>
							<input type="text" class="form-control" placeholder="Name" name="name" value="{{ old('name') }}" required>
						</div>
						<div class="mb-3 input-group input-mini">
							<span class="input-group-text"><i class="fa fa-at"></i></span>
							<input type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}" required>
						</div>
                        <div class="mb-3 input-group input-mini">
							<span class="input-group-text"><i class="fa fa-phone"></i></span>
							<input type="text" class="form-control" placeholder="Phone" name="phone" value="{{ old('phone') }}" required>
						</div>
						<div class="mb-3 input-group input-mini">
							<span class="input-group-text"><i class="fa fa-lock"></i></span>
							<input type="password" class="form-control dz-password" id ="password" name="password" required placeholder="Password">
							<span class="input-group-text  " onclick="togglePassword('password')"> 
								{{-- <i class="fa fa-eye-slash"></i> --}}
								<i class="fa fa-eye"></i>
							</span>
						</div>

                        <div class="mb-3 input-group input-mini">
							<span class="input-group-text"><i class="fa fa-lock"></i></span>
							<input type="password" class="form-control dz-password" id = "password_confirmation" placeholder="Re-Password" name="password_confirmation" required>
							<span class="input-group-text"  onclick="togglePassword('password_confirmation')"> 
								{{-- <i class="fa fa-eye-slash"></i> --}}
								<i class="fa fa-eye"></i>
							</span>
						</div>
						<div class="input-group">
							<button type="submit" class="btn mt-2 btn-primary w-100 btn-rounded">SIGN UP</button>
						</div>
						<div class="d-flex justify-content-between align-items-center">
							<div class="form-check">
								<input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
								<label class="form-check-label" for="flexCheckChecked">
									By tapping “Sign Up” you accept our <a href="javascript:void(0);" class="text-primary" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom2" aria-controls="offcanvasBottom">terms</a> and <a href="javascript:void(0);" class="text-primary" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom2" aria-controls="offcanvasBottom">Condition</a>
								</label>
							</div>
						</div>
					</form>  
                    <div class="text-center mb-auto p-tb20">
                        <a href="{{route('customer.login',[$vendor->slug])}}" class="saprate">Already have account?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Content End -->
    
    <!-- Footer -->
    <footer class="footer fixed">
        <div class="container">
            <a href="{{route('customer.login',[$vendor->slug])}}" class="btn btn-transparent btn-rounded d-block">SIGN IN</a>
        </div>
    </footer>
    <!-- Footer End -->

</div>

<script>
    function togglePassword(inputId) {
    var input = document.getElementById(inputId);
    var type = input.getAttribute("type");

    if (type === "password") {
        input.setAttribute("type", "text"); // Show password
    } else {
        input.setAttribute("type", "password"); // Hide password
    }
}
</script>
@endsection