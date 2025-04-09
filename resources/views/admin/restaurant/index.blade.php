@extends('admin.dashboard.master')
@section('title')
    Restaurant
@endsection

@section('content')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">All Restaurant</h4>
                <a href="{{ route('restaurant.create') }}" class="btn btn-primary">Create Resturant</a>
            </div>

            <div >
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
                                <th><strong>logo</strong></th>
                                <th><strong>Whatsapp Number</strong></th>
                                <th><strong>PhoneNumber</strong></th>
                                <th><strong>Address</strong></th>
                                <th><strong>OperatingHours</strong></th>
                                <th><strong>processes</strong></th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @foreach ($restaurants as $resturant) --}}
                                <tr>
                                    <td>
                                        <div class="custom-control custom-checkbox checkbox-success check-lg me-3">
                                            <input type="checkbox" class="custom-control-input" id="customCheckBox2"
                                                required="">
                                            <label class="custom-control-label" for="customCheckBox2"></label>
                                        </div>
                                    </td>
                                    <td><strong>#</strong></td>
                                    <td>
                                        <div class="d-flex align-items-center"><img
                                                src="{{ asset('attachments/logos/' . 1) }}"
                                                class="rounded-lg me-2" width="24" alt="" /> <span
                                                class="w-space-no">Dr. Jackson</span></div>
                                    </td>
                                    <td> resturant->name  </td>
                                    <td>resturant->whatsapp_number </td>
                                    <td>resturant->phone_number </td>

                                    <td>resturant->address</td>
                                    <td>resturant->operating_hours </td>
                                    <td>
                                        <div class="d-flex">
                                            <a href=""
                                                class="btn btn-primary shadow btn-xs sharp me-1"><i
                                                    class="fas fa-pencil-alt"></i></a>
                                                    <button  class="btn btn-xs btn-danger" data-bs-toggle="modal" data-bs-target="#Deleted{{$resturant->id}}"><i class="fas fa-trash"></i></button>

                                        </div>
                                    </td>
                                </tr>


                                {{-- delete model --}}
                                
                              {{-- @include('admin.restaurant.delete_returant') --}}
                                {{-- end delete model --}}
                            {{-- @endforeach --}}

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
