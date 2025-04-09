
@extends('customer.layouts.master')
@section('title', 'Product Detail')
@section('content')
<div class="page-wraper"> 
    <!-- Preloader -->
	<div id="preloader">
		<div class="spinner"></div>
	</div>
    <!-- Preloader end-->
    
	<!-- Header -->
    <header class="header transparent">
        <div class="main-bar">
            <div class="container">
                <div class="header-content">
                    <div class="left-content">
                        <a href="javascript:void(0);" class="back-btn">
                            <svg width="18" height="18" viewBox="0 0 10 16" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M9.03033 0.46967C9.2966 0.735936 9.3208 1.1526 9.10295 1.44621L9.03033 1.53033L2.561 8L9.03033 14.4697C9.2966 14.7359 9.3208 15.1526 9.10295 15.4462L9.03033 15.5303C8.76406 15.7966 8.3474 15.8208 8.05379 15.6029L7.96967 15.5303L0.96967 8.53033C0.703403 8.26406 0.679197 7.8474 0.897052 7.55379L0.96967 7.46967L7.96967 0.46967C8.26256 0.176777 8.73744 0.176777 9.03033 0.46967Z" fill="#fff"/>
							</svg>
                        </a>
						<h5 class="mb-0 ms-2 text-nowrap">Product Detail</h5>
                    </div>
                    <div class="mid-content">
                    </div>


                    <div class="right-content d-flex align-items-center">
                        <button onclick="toggleLikeProduct('{{$vendor->slug}}' ,{{ $foodItem->id }})"  id="like-btn-{{$foodItem->id}}"  class="item-bookmark icon-2 {{ in_array($foodItem->id, $likes) ? 'active' : ''}} " style="background: none ; outline: none; border: none; cursor: pointer;">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M16.785 2.04751C15.9489 2.04694 15.1209 2.21163 14.3486 2.53212C13.5764 2.85261 12.8751 3.32258 12.285 3.91501L12 4.18501L11.73 3.91501C11.1492 3.2681 10.4424 2.74652 9.65306 2.3822C8.86367 2.01787 8.00824 1.81847 7.13912 1.79618C6.27 1.7739 5.40547 1.9292 4.59845 2.25259C3.79143 2.57599 3.05889 3.06066 2.44566 3.67695C1.83243 4.29325 1.35142 5.02819 1.03206 5.83682C0.712696 6.64544 0.561704 7.51073 0.588323 8.37973C0.614942 9.24873 0.818613 10.1032 1.18687 10.8907C1.55513 11.6783 2.08022 12.3824 2.73002 12.96L12 22.2675L21.3075 12.96C22.2015 12.0677 22.8109 10.9304 23.0589 9.6919C23.3068 8.45338 23.1822 7.16915 22.7006 6.00144C22.2191 4.83373 21.4023 3.83492 20.3534 3.13118C19.3045 2.42744 18.0706 2.05034 16.8075 2.04751H16.785Z" 
                                fill="white"/>
                            </svg>
                        </button>
                    </div>




                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->
	
    <!-- Page Content -->
    <div class="page-content">
        <div class="content-body fb">
            <div class="swiper-btn-center-lr my-0">
                <div class="swiper-container demo-swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="dz-banner-heading">
                                <div class="overlay-black-light">
                                    <img src="{{asset('customer/assets/images/food/pic6.png')}}" class="bnr-img" alt="bg-image">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="dz-banner-heading">
                                <div class="overlay-black-light">
                                    <img src="{{asset('customer/assets/images/food/pic6.png')}}" class="bnr-img" alt="bg-image">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="dz-banner-heading">
                                <div class="overlay-black-light">
                                    <img src="{{asset('customer/assets/images/food/pic6.png')}}" class="bnr-img" alt="bg-image">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="dz-banner-heading">
                                <div class="overlay-black-light">
                                    <img src="{{asset('customer/assets/images/food/pic6.png')}}" class="bnr-img" alt="bg-image">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-btn">
                        <div class="swiper-pagination style-2 flex-1"></div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="company-detail">
                    @include('customer.partial.alert')
                    <div class="detail-content">
                        <div class="flex-1">
                            <h4>{{ $foodItem->name }}
                                <div class="rating" data-foodItem-id="{{ $foodItem->id }}" data-vendor="{{$vendor->slug}}">
                                    <input type="radio" name="rating" id="star1" value="5"  @if($rating==5) checked @endif>
                                    <label for="star1" class="star fa fa-star"></label>
                                    <input type="radio" name="rating" id="star2" value="4"   @if( $rating==4) checked @endif   >
                                    <label for="star2" class="star fa fa-star"></label>
                                    <input type="radio" name="rating" id="star3" value="3"   @if( $rating==3) checked @endif  >
                                    <label for="star3" class="star fa fa-star"></label>
                                    <input type="radio" name="rating" id="star4" value="2"  @if( $rating==2) checked @endif  >
                                    <label for="star4" class="star fa fa-star"></label>
                                    <input type="radio" name="rating" id="star5" value="1"@if( $rating==1) checked @endif >
                                    <label for="star5" class="star fa fa-star"></label>
                                </div>
                             </h4>
                            <p>{{ $foodItem->description}}.</p>
                        </div>
                    </div>
                    <ul class="item-inner">
                        <li>
                            <div class="reviews-info">
                                <i class="fa fa-star"></i>
                                <h6 class="reviews">{{ number_format($foodItem->average_rating, 1) }}</h6>
                            </div>
                        </li>
                        <li>
                            <i class="fa-solid fa-clock"></i>
                            <h6 class="mb-0 ms-2">6-7 Min</h6>
                        </li>
                        <li>
                            <a class="d-flex delivery" href="javascript:void(0);">
                                <i class="fa-solid fa-truck"></i>
                                <h6 class="mb-0 ms-2">FREE DELIVERY</h6>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="item-list-2">
                    <div class="price">
                        <span class="text-style">Price</span>
                        <h3>${{$foodItem->price}} <del>$8.0</del></h3>
                    </div>
                    <form  method="POST" id="cart-form"> 
                        <div class="dz-stepper border-1 col-5">
                            @csrf
                            <input class="stepper" type="text" value="1" name="quantity">
                            <input type="hidden" name="id" value="{{ $foodItem->id }}">
                            <input type="hidden" name="name" value="{{ $foodItem->name }}">
                            <input type="hidden" name="price" value="{{ $foodItem->price }}">
                        </form>
                    </div>
                </div>
                <div class="d-flex align-items-center justify-content-between">
                    <div class="badge badge-danger font-w400 px-3">20% OFF DISCOUNT</div>    
                    <a href="javascript:void(0);" class="btn-link font-16">Apply promo code</a>    
                </div>
                <!-- Comments and Reviews show  -->
                <div class="card text-center mt-5">
                    <div class="card-header">
                        <h5 class="card-title">Comments and Reviews</h5>
                    </div>
                    <div class="card-body">
                        <div class="container pt-0">
                            <ul class="dz-list message-list" id="comments-list">
                                @forelse ($foodItem->ratingsAndComments as $comment)
                                    @if($comment->comment != null)
                                    <li>
                                        <a href="messages-detail.html">
                                            <div class="media media-45 rounded-circle">
                                                <img src="{{asset('customer/assets/images/message/pic1.jpg')}}" alt="image">
                                            </div>
                                            <div class="media-content">
                                                <div>
                                                    <h6 class="name">{{$comment->customer->name}}</h6>
                                                    <p class="my-1">
                                                        <i class="fa-solid fa-check text-primary me-1"></i>
                                                        {{$comment->comment}}
                                                </p>
                                                </div>
                                                <span class="time">{{$comment->created_at->diffForHumans()}}</span>
                                            </div>
                                        </a>
                                    </li>
                                    @endif
                                @empty
                                @endforelse
                            </ul>
                        </div>
                        <div class="input-group mb-3">
                            <textarea class="form-control" name="comment" id="comment" placeholder="Add Comment" rows="4"></textarea>
                        </div>
                         <button  type="submit" data-vendor="{{ $vendor->slug }}" class="btn btn-dark submit-comment" data-id="{{ $foodItem->id }}" id="submit-comment" >Comment</button>
                    </div>
                </div>
                <!-- Comments and Reviews show  -->
            </div>
            <div class="container">
                <button type="submit" id="add-to-cart" data-id="{{ $foodItem->id }}" data-vendor="{{ $vendor->slug }}" class="btn btn-primary text-start w-100 btn-rounded add-to-cart" >
                    <svg class="cart me-4" width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18.1776 17.8443C16.6362 17.8428 15.3854 19.0912 15.3839 20.6326C15.3824 22.1739 16.6308 23.4247 18.1722 23.4262C19.7136 23.4277 20.9643 22.1794 20.9658 20.638C20.9658 20.6371 20.9658 20.6362 20.9658 20.6353C20.9644 19.0955 19.7173 17.8473 18.1776 17.8443Z" fill="white"/>
                        <path d="M23.1278 4.47973C23.061 4.4668 22.9932 4.46023 22.9251 4.46012H5.93181L5.66267 2.65958C5.49499 1.46381 4.47216 0.574129 3.26466 0.573761H1.07655C0.481978 0.573761 0 1.05574 0 1.65031C0 2.24489 0.481978 2.72686 1.07655 2.72686H3.26734C3.40423 2.72586 3.52008 2.82779 3.53648 2.96373L5.19436 14.3267C5.42166 15.7706 6.66363 16.8358 8.12528 16.8405H19.3241C20.7313 16.8423 21.9454 15.8533 22.2281 14.4747L23.9802 5.74121C24.0931 5.15746 23.7115 4.59269 23.1278 4.47973Z" fill="white"/>
                        <path d="M11.3404 20.5158C11.2749 19.0196 10.0401 17.8418 8.54244 17.847C7.0023 17.9092 5.80422 19.2082 5.86645 20.7484C5.92617 22.2262 7.1283 23.4008 8.60704 23.4262H8.67432C10.2142 23.3587 11.4079 22.0557 11.3404 20.5158Z" fill="white"/>
                    </svg>
                    PLACE ORDER
                </button>
            </div>
		</div>
    </div>    
    <!-- Page Content End -->

    <div class="bootstrap-modal">
        <div class="modal fade" id="basicModal">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Success Make Rating</h5>
                        <button class="btn-close" data-bs-dismiss="modal">
                            <i class="fa-solid fa-xmark"></i>
                        </button>
                    </div>
                    <div class="modal-body"></div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-danger light" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>    
@include('customer.partial.menubar-area')
@include('customer.partial.cart')
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
                },
                error: function(xhr) {
                    if(xhr.status == 401)
                    {    

                            $('#info_message').text(xhr.responseJSON.message);
                            $('.alert-info').fadeIn();
                    }

                };
            });
        
    }     
</script>


{{-- Add Product cart with AJAX --}}
<script>
    $(document).ready(function() {
        $('.add-to-cart').click(function(e) {
            console.log('clicked');
            e.preventDefault();
            var form = $('#cart-form');
            var product_id=$(this).data('id');
            var vendor_slug=$(this).data('vendor');
            var url="{{route('cart.add',  ['vendor_slug'=>':vendor_slug'  ,'foodItem'=>':id'])}}";
            url = url.replace(':id', product_id);
            url = url.replace(':vendor_slug', vendor_slug);
            $.ajax({
                url: url,
                method: 'POST',
                data:form.serialize(),
                success: function(response) {
                    $('.alert-success').show();
                    $('#success_message').text(response.success);
                    $('.alert-success').fadeIn();

                    $('#cart-list').append(`
                        <li class="item_${response.product.id}"> 
                            <div class="item-content">
                                <div class="item-media media media-60">
                                    <img src="{{asset('customer/assets/images/food/pic6.png')}}" alt="logo">
                                </div>
                                <div class="item-inner">
                                    <div class="item-title-row">
                                        <h6 class="item-title"><a href="order-list.html">${response.product.name}</a></h6>
                                        <div class="item-subtitle">Coffe, Milk</div>
                                    </div>
                                    <div class="item-footer">
                                        <div class="d-flex align-items-center">
                                            <h6 class="me-3">$ ${response.product.price}</h6>
                                            {{-- <del class="off-text"><h6>$ 8.9</h6></del> --}}
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <div class="dz-stepper border-1 ">
                                                <div class="input-group bootstrap-touchspin bootstrap-touchspin-injected">
                                                    <span class="input-group-btn input-group-prepend">
                                                        <button class="btn btn-primary bootstrap-touchspin-down" type="button">-</button>
                                                    </span>
                                                    <input class="stepper form-control" type="text" value="${response.product.quantity}" name="quantity" onchange="updateCart(this,${response.product.id} , '${vendor_slug}')">
                                                    <span class="input-group-btn input-group-append">
                                                        <button class="btn btn-primary bootstrap-touchspin-up" type="button">+</button>
                                                    </span>
                                                </div>
                                            </div>
                                            </div>
                                    </div>
                                </div>
                                <button class="btn btn-icon btn-icon-end btn-primary btn-remove" onclick="removeItemFromCart( ${response.product.id}, '${vendor_slug}')"   ><i class="fa-solid fa-trash"></i></button>
                            </div>
                        </li>
                    `)
                    $('#count-item-cart').text(response.count);



                },
                error: function(xhr) {
                    $('.alert-info').show();
                    $('#info_message').text(xhr.responseJSON.error);
                    $('.alert-info').fadeIn();
                },

            });
        });

        $('.btn-close').on('click', function() {
            $('.alert-info').fadeOut(); // Hide the alert when the close button is clicked
            $('.alert-success').fadeOut(); // Hide the alert when the close button is clicked
         });
    });
</script>

{{-- end Add Product cart with AJAX --}}

{{-- Add rating with AJAX --}}
<script>
    $(document).ready(function() {
            const stars = document.querySelectorAll('.rating input');
            let starValue = 0; // Default value
            stars.forEach(star => {
            star.addEventListener('change', () => {
                starValue = star.value;
            var productId = {{$foodItem->id}};
            var vendor_slug = '{{$vendor->slug}}';
            var url="{{route('ratings-comments.store' , ['vendor_slug'=>':vendor_slug'  ,'foodItem'=> ':id'])}}";
            url = url.replace(':id', productId);
            url = url.replace(':vendor_slug', vendor_slug);
            $.ajax({
                url: url,
                method: 'POST',
                data: {
                    rating: starValue,
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                    $('#basicModal').modal('show');
                    // $('.bootstrap-modal').show();
                    $('.modal-body').text('Thanks for your rating!');
                },
                error: function(xhr) {

                    if(xhr.status == 401)
                {     $('.alert-info').show();
                        $('#info_message').text(xhr.responseJSON.message);}
                        else{
                            $('.alert-danger').show();
                            $('#error_message').text("An error occurred. Please try again.");
                }                    }
            });
        });

    });
    });
</script>
{{-- end Add rating with AJAX --}}

{{-- Add comment with AJAX --}}
<script>
    $(document).ready(function() {
        $('.submit-comment').click(function(e) {
            e.preventDefault();
            var product_id=$(this).data('id');
            var vendor_slug=$(this).data('vendor');
            var url="{{route('ratings-comments.store' , ['vendor_slug'=>':vendor_slug'  ,'foodItem'=> ':id'])}}";
            url = url.replace(':id', product_id);
            url = url.replace(':vendor_slug', vendor_slug);
            $.ajax({
                url: url,
                method: 'POST',
                data:
                {
                    "_token": "{{ csrf_token() }}",
                    "comment": $('textarea[name="comment"]').val()
                },
                success: function(comment) {
                    document.getElementById('comment').value='';
                    $('#comments-list').append(
                    `<li>
                        <a >
                            <div class="media media-45 rounded-circle">
                                <img src="{{asset('customer/assets/images/message/pic1.jpg')}}" alt="image">
                            </div>
                            <div class="media-content">
                                <div>
                                    <h6 class="name">${comment.customer_name}</h6>
                                    <p class="my-1">
                                        <i class="fa-solid fa-check text-primary me-1"></i>
                                        ${comment.comment}
                                    </p>
                                </div>
                                <span class="time">${comment.create_date}</span>
                            </div>
                        </a>
                    </li>`
                    );
                },
                error: function(xhr) {
                    if(xhr.status == 401)
                    {    
                         
                            // $('.alert-info').show();
                            $('#info_message').text(xhr.responseJSON.message);
                            $('.alert-info').fadeIn();
                        }
                            else{
                                $('.alert-danger').show();
                                $('#error_message').text("An error occurred. Please try again.");
                        }
                    },

            });
        });

        $('.btn-close').on('click', function() {
            $('.alert-info').fadeOut(); // Hide the alert when the close button is clicked
         });
    });
</script>
{{-- end Add comment with AJAX --}}






@endsection