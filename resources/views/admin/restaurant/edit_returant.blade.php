@extends('admin.dashboard.master')
@section('title')
    Restaurant
@endsection

@section('content')
@if (count($errors) > 0)
<div class="alert alert-danger">
    <button aria-label="Close" class="close" data-dismiss="alert" type="button">
        <span aria-hidden="true">&times;</span>
    </button>
    <strong>erorr</strong>
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>

        @endforeach
    </ul>
</div>
@endif
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">All Restaurant</h4>
        </div>
       
        <div class="card-body">
            <form method="post" action="{{ route('restaurant.update',$resturant->id) }}" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputEmail4">Name</label>
                    <input type="hidden" name="id" value="{{ $resturant->id }}">
                    <input type="text"name="name" value="{{ $resturant->name }}" class="form-control" id="inputEmail4" placeholder="Retaurant Name">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputPassword4">Whatsapp Number</label>
                    <input type="number" value="{{ $resturant->whatsapp_number }}" class="form-control" name="whatsapp_number" id="inputPassword4" placeholder="whatsapp_number">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputAddress">Address</label>
                  <input type="text"  name="address" value="{{ $resturant->address }}" class="form-control" id="inputAddress" placeholder="1234 Main St">
                </div>
                <div class="form-group">
                  <label for="inputAddress2">phone_number</label>
                  <input type="number" name="phone_number" value="{{ $resturant->phone_number }}" class="form-control" id="inputAddress2" >
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputCity">start hour</label>
                    <select name="start_hour" class="default-select form-control wide mb-3">
                        <option selected>Open this select menu</option>

                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3" >3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                    </select>
                  </div>
                  <div class="form-group col-md-4">
                    <label for="inputState">end hour</label>
                    <select name="end_hour" class="default-select form-control wide mb-3">
                        <option selected>Open this select menu</option>

                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3" >3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                    </select>
                  </div>
                  <div class="form-group col-md-2">
                    <label for="inputZip">logo</label>
          
                        <input type="file"name="logo" class="form-file-input form-control">
                 
                </div>
                  <div class="form-group col-md-2">
                    <label for="inputZip">cover image</label>
          
                        <input type="file" name="cover_image"  class="form-file-input form-control">
                 
                </div>
                  <div class="form-group col-md-2">
                    <label for="inputZip">domin name</label>
          
                        <input type="text"  value="{{ $resturant->slug }}" name="slug" placeholder="enter your domin name"  class="form-file-input form-control">
                 
                </div>
                
              
                <button type="submit" class="btn btn-primary">update Restaurant</button>
              </form>  
        </div>
    </div>
</div>
@endsection