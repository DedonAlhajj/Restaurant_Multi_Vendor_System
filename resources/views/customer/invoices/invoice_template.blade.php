@extends('customer.layouts.master')
@section('title', 'Home')
@section('content')

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
          <h5 class="mb-0 ms-2 text-nowrap">Invoice</h5>
                  </div>
                  <div class="mid-content">
                  </div>
                  <div class="right-content">
                  </div>
              </div>
          </div>
      </div>
    </header>
    <div class="container mt-10px mb-10px ">
      <a href="{{ asset('storage/' . $inovice->pdf_path) }}" target="_blank" class="btn btn-primary  btn-download">Download Invoice</a>

    </div>

    <section class="wrapper-invoice">
      <!-- switch mode rtl by adding class rtl on invoice class -->
      <div class="invoice">
        <div class="invoice-information">
          <p><b>Invoice #</b> : {{$invoiceNumber}}</p>
          <p><b>Created Date </b>:{{$order->created_at->format('d F  h:s')}} </p>
        </div>
        <!-- logo brand invoice -->
        <div class="invoice-logo-brand">
          <!-- <h2>Tampsh.</h2> -->
          <img src="{{asset('customer/assets/images/logo.svg')}}" alt="" />
        </div>
        <!-- invoice head -->

        <div class="invoice-head">
          <div class="head client-info">
            <p>{{$restaurant->name}}</p>
            <p>ph:{{$restaurant->phone_number}}</p>
            <p>wh:{{$restaurant->whatsapp_number}}</p>
            <p>Address:{{$restaurant->address}}</p>
            <p>Open:{{$restaurant->operating_hours}} </p>
          </div>
          <div class="head client-data">
           <p>{{$customer->name}}.</p>
            <p>ph: {{$customer->phone}}</p>
          </div>
        </div>
        <!-- invoice body-->
        <div class="invoice-body">
          <table class="table text-center">
            <thead>
              <tr>
                <th>Item Name</th>
                <th>Quantity</th>
                <th>Price</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($items as $order_detail)
                
           
              <tr>
                <td>{{$order_detail->foodItem->name}}</td>
                <td>{{$order_detail->quantity}}</td>
                <td>{{$order_detail->price}}</td>

              </tr>
              @endforeach

            </tbody>
          </table>
          <div class="flex-table">
            <div class="flex-column"></div>
            <div class="flex-column">
              <table class="table-subtotal">
                <tbody>
                  <tr>
                    <td>Subtotal</td>
                    <td>${{$totalPrice}}</td>
                  </tr>
                  <tr>
                    <td>PPN 10%</td>
                    <td>Rp.5.000</td>
                  </tr>
                  <tr>
                    <td>Credit</td>
                    <td>$0</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <!-- invoice total  -->
          <div class="invoice-total-amount">
            <p>Total : ${{$totalPrice + 5}}</p>
          </div>
        </div>
        <!-- invoice footer -->
        <div class="invoice-footer">
          <p>Thankyou, happy shopping again</p>
        </div>
      </div>
    </section>

    @push('styles')
    <link rel="stylesheet" href="{{asset('customer/assets/css/invoice.css')}}" /> 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />
    @endpush
@endsection