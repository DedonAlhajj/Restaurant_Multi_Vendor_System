<div class="offcanvas offcanvas-bottom rounded-0" tabindex="-1" id="offcanvasBottom1">
  <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close">
      <i class="fa-solid fa-xmark"></i>
  </button>
  <div class="offcanvas-body container fixed">
      <div class="item-list style-2">
          <ul id="cart-list">
            @if(Cart::isEmpty())
            <h3 class="text-center">Your Cart is Empty</h3>
            @else
            @foreach(Cart::getContent() as $item)
              <li class="item_{{$item->id}}"> 
                  <div class="item-content">
                      <div class="item-media media media-60">
                          <img src="{{asset('customer/assets/images/food/pic6.png')}}" alt="logo">
                      </div>
                      <div class="item-inner">
                          <div class="item-title-row">
                              <h6 class="item-title"><a href="order-list.html">{{ $item->name }}</a></h6>
                              <div class="item-subtitle">Coffe, Milk</div>
                          </div>
                          <div class="item-footer">
                              <div class="d-flex align-items-center">
                                  <h6 class="me-3">$ {{ $item->price }}</h6>
                                  {{-- <del class="off-text"><h6>$ 8.9</h6></del> --}}
                              </div>
                              <div class="d-flex align-items-center">
                                  <div class="dz-stepper border-1 ">
                                    
                                      <input class="stepper" type="text" value="{{ $item->quantity }}" name="quantity" onchange="updateCart(this,{{ $item->id }} , '{{ $vendor->slug }}')" >
                                  </div>
                              </div>
                          </div>
                      </div>
                    <button class="btn btn-icon btn-icon-end btn-primary btn-remove" onclick="removeItemFromCart( {{$item->id}},'{{ $vendor->slug}}')"  data-id="{{ $item->id }}" data-slug="{{ $vendor->slug  }}"><i class="fa-solid fa-trash"></i></button>
                  </div>
              </li>
            @endforeach
          </ul>
      </div>
      <div class="view-title">
          <div class="container">
              <ul>
                  {{-- <li>
                      <a href="javascript:void(0);" class="promo-bx">
                          Apply Promotion Code
                          <span>2 Promos</span>
                      </a>
                  </li> --}}
                  <li>
                      <span>Subtotal</span>
                      <span id="cart-subtotal" >$ {{ Cart::getTotal() }}</span>
                  </li>
                  {{-- <li>
                      <span>TAX (2%)</span>
                      <span>-$1.08</span>
                  </li> --}}
                  <li>
                      <h5>Total</h5>
                      <h5 id="cart-total" >$ {{ Cart::getTotal() }}</h5>
                  </li>
              </ul>
              <a href="{{ route('order.confirmation',$vendor->slug ) }}" class="btn btn-primary btn-rounded btn-block flex-1 ms-2">CONFIRM</a>
          </div>
      </div>
      @endif
  </div>
</div>

@push('scripts')
<script src="{{asset('customer/assets/js/jquery.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

{{-- delete item from cart --}}
<script>
    // $(document).ready(function() {
    //     $(".btn-remove_"${$item->id}).click(function(e) {
            // e.preventDefault();
            // var form = $(this).closest("form");
    function removeItemFromCart(item_id,vendor_slug) {
      
            Swal.fire({
                title: 'Are you sure delete this item ?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    console.log(item_id,vendor_slug);
                    var slug= vendor_slug;
                    var id = item_id;
                    var url = "{{ route('cart.remove',':slug') }}"
                    url = url.replace(':slug',slug);
                    $.ajax({
                        type: "POST",
                        url:url ,
                        data: 
                        {
                            "_token": "{{ csrf_token() }}",
                            "id": id
                        },
                        success: function(response) {
                            if (response.success) {
                                Swal.fire(
                                    'Deleted!',
                                    'Your file has been deleted.',
                                   'success'
                                )
                                $(".item_" +id).remove();
                                $("#cart-subtotal").text("$ "+response.subtotal);
                                $("#cart-total").text("$ "+response.subtotal);
                                $(".count-item-cart").text(response.count);
                                if(response.subtotal == 0)
                                {
                                    $(".offcanvas-body").html("<h3 class='text-center'>Your Cart is Empty</h3>");
                                }
                            }
                        },
                        error: function(response) {
                            Swal.fire(
                                'Error!',
                                'Something went wrong.',
                                'error'
                            )
                        }
                    });
                }
            })
        }
        // });
    // });
</script>
{{-- ------------------------------- --}}

{{-- update item from cart --}}

<script>

    function updateCart(element,id , slug) {
        var quantity = $(element).val();
      
        console.log(quantity,slug);
        var url = "{{ route('cart.update',':slug') }}"
        url = url.replace(':slug',slug);
        $.ajax({
            type: "POST",
            url:url ,
            data: 
            {
                "_token": "{{ csrf_token() }}",
                "id": id,
                "quantity": quantity
            },
            success: function(response) {
                if (response.success) {
                    $("#cart-subtotal").text("$ "+response.subtotal);
                    $("#cart-total").text("$ "+response.subtotal);
                }
            },
            error: function(response) {
                Swal.fire(
                    'Error!',
                    'Something went wrong.',
                    'error'
                )
            }
        });
    }
</script>
{{-- ------------------------------------------- --}}
@endpush


