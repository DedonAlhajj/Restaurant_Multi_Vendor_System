@extends('admin.dashboard.master')
@section('title')
    Categories
@endsection

@section('css')
<!--Internal   Notify -->
<link href="{{URL::asset('dashboard/notify/css/notifIt.css')}}" rel="stylesheet"/>
@endsection
@section('content')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">All Restaurant</h4>
               <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
    Add Category
  </button>

            </div>
<div>
    @include('massages_alert')

</div>
            

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-responsive-md">
                        <thead>
                            <tr>
                                <th style="width:50px;">
                                    <div class="custom-control custom-checkbox checkbox-success check-lg me-3">
                                        <input type="checkbox" class="custom-control-input" id="checkAll" required="">
                                        <label class="custom-control-label" for="checkAll"></label>
                                    </div>
                                </th>
                                <th><strong>ROLL NO.</strong></th>
                                <th><strong>NAME</strong></th>
                                <th><strong>createe_at</strong></th>
                                <th><strong> updated_at</strong></th>
                                <th><strong> prosscess</strong></th>
                            
                              
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @foreach ($categories as $category) --}}
                                <tr>
                                    <td>
                                        <div class="custom-control custom-checkbox checkbox-success check-lg me-3">
                                            <input type="checkbox" class="custom-control-input" id="customCheckBox2"
                                                required="">
                                            <label class="custom-control-label" for="customCheckBox2"></label>
                                        </div>
                                    </td>
                                    {{-- <td><strong>{{ $loop->iteration}}</strong></td>
                                  
                                    <td>{{ $category->name }} </td>
                                    <td>{{ $category->created_at }}</td>
                                    <td>{{ $category->updated_at }}</td>
                                  --}}
                                    <td>
                                        <div class="d-flex">
                                            <button   data-bs-toggle="modal"  data-bs-target="#edit_category"
                                                class="btn btn-primary shadow btn-xs sharp me-1"><i
                                                    class="fas fa-pencil-alt"></i></button>
                                                    <button  class="btn shadow btn-xs sharp me-1 btn-danger" data-bs-toggle="modal" data-bs-target="#delete_Category"><i class="fas fa-trash"></i></button>

                                        </div>
                                    </td>
                                </tr>


                                {{-- delete model --}}
                                  @include('admin.categories.edit_category')
                                {{-- end delete model --}}
                                {{-- delete model --}}
                                
                                @include('admin.categories.delete_category')
                                      {{-- end delete model --}}
                            @endforeach
@include('admin.categories.add_category')
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    {{-- ggg --}}
    <!-- Modal -->
{{-- <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
    ggg --}}
@endsection
@section('script')

    <!--Internal  Notify js -->
    <script src="{{URL::asset('dashboard/notify/js/notifIt.js')}}"></script>
    <script src="{{URL::asset('dashboard/notify/js/notifit-custom.js')}}"></script>

@endsection