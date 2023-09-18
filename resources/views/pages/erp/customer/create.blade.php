@extends('layout.erp.app')
@section('title','Create Customer')


@section('page')
<!--begin::Content Header-->
<div class="text-center mt-2">
    <h1 class="m-0">Add Customer</h1>
</div>
<!--end::Content Header-->
<div id="kt_app_content" class="app-content flex-column-fluid">
    <!--begin::Content container-->
    <div id="kt_app_content_container" class="app-container container-xxl">
        <!--begin::Customer-->
        <div class="card card-flush">
            <!--begin::Card header-->
            <div class="card-header align-items-center py-3 gap-2 gap-md-5">
                <!--begin::Card toolbar-->
                <div class="card-toolbar flex-row-fluid  gap-5">
                    <a href="{{url('/customers')}}" class="btn btn-primary">Manage Customer</a>
                </div>
                <!--end::Card toolbar-->
            </div>
            <!--end::Card header-->
            <div class="card-body pt-0">
                <!--begin::Form-->
                <form action="{{route('customers.store')}}" method="POST">
                    @method('POST')
                    @csrf
                    <div class="row mb-5">
                        <label class="col-md-2 col-form-label required fs-4">Name</label>
                        <div class="col-md-10">
                            <input type="text" name="name" class="form-control" placeholder="Name">
                        </div>
                    </div>
                    <div class="row mb-5">
                        <label class="col-md-2 col-form-label required fs-4">Mobile</label>
                        <div class="col-md-10">
                            <input type="text" name="mobile" class="form-control" placeholder="Mobile">
                        </div>
                    </div>
                    <div class="row mb-5">
                        <label class="col-md-2 col-form-label required fs-4">Email</label>
                        <div class="col-md-10">
                            <input type="text" name="email" class="form-control" placeholder="Email">
                        </div>
                    </div>
                    <!--begin::Card toolbar-->
                    <div class="card-toolbar flex-row-fluid  gap-5">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    <!--end::Card toolbar-->
                </form>
                <!--end::Form-->
            </div>
            <!-- end::card -->
        </div>
        <!-- end::Customer -->
    </div>
    <!--end::Content container-->
</div>
@endsection