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
            <form method="post" action="{{ route('sub_categories.update','test') }}" >
                @csrf
                @method('put')
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <input type="hidden" name="sub_category_id" value="">
                    <label for="inputEmail4">Sub category Name</label>
                    <input type="text"name="subCategory_name" value="" class="form-control" id="inputEmail4" placeholder="Retaurant Name">
                  </div>
              
            
                <div class="form-row">
                
                  <div class="form-group col-md-4">
                    <label for="inputState">categories</label>
                    <select name="category_id" class="default-select form-control wide mb-3">
                        {{-- @foreach ($categories as $category )
                        <option {{ $sub_category->category_id==$category->id?'selected':'' }} value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach --}}
                     
                    </select>
                  </div>
                 
                
                
                
              
                <button type="submit" class="btn btn-primary">create Restaurant</button>
              </form>  
        </div>
    </div>
</div>
@endsection