$(document).ready(function() {
  $('.add-to-cart').click(function(e) {
      console.log('clicked');
      e.preventDefault();
      var product_id=$(this).data('id');
      var vendor_slug=$(this).data('vendor');
      var form = $(`#cart-form-${product_id}`);
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