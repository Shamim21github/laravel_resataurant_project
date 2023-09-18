@extends('layout.erp.app')
@section('title','Edit Employee')

@section('page')Employee
<!--begin::Content Header-->
<div class="text-center mt-2">
    <h1 class="m-0">Edit Employee</h1>
</div>
<!--end::Content Header-->
<div id="kt_app_content" class="app-content flex-column-fluid">
    <!--begin::Content container-->
    <div id="kt_app_content_container" class="app-container container-xxl">
        <!--begin::Employee-->
        <div class="card card-flush">
            <!--begin::Card header-->
            <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                <!--begin::Card toolbar-->
                <div class="card-toolbar flex-row-fluid  gap-5">
                    <a href="{{url('/employees')}}" class="btn btn-primary">Manage Employee</a>
                </div>
                <!--end::Card toolbar-->
            </div>
            <!--end::Card header-->
            <div class="card-body pt-0">
                <!--begin::form-->
                <form action="{{route('employees.update',$employee)}}" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="row mb-5">
                        <label class="col-md-2 col-form-label required fs-4">Name</label>
                        <div class="col-md-10">
                            <input type="text" name="name" class="form-control" value="{{$employee->name}}">
                        </div>
                    </div>
                    <div class="row mb-5">
                        <label class="col-md-2 col-form-label required fs-4">Mobile</label>
                        <div class="col-md-10">
                            <input type="text" name="mobile" class="form-control" value="{{$employee->mobile}}">
                        </div>
                    </div>
                    <div class="row mb-5">
                        <label class="col-md-2 col-form-label required fs-4">Email</label>
                        <div class="col-md-10">
                            <input type="text" name="email" class="form-control" value="{{$employee->email}}">
                        </div>
                    </div>
                    <!--begin::Card toolbar-->
                    <div class="card-toolbar flex-row-fluid  gap-5">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                    <!--end::Card toolbar-->
                </form>
                <!--end::Form-->
            </div>
            <!-- end::card -->
        </div>
        <!-- end::Employee -->
    </div>
    <!--end::Content container-->
</div>
@endsection