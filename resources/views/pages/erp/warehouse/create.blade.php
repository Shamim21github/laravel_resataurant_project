@extends('layout.erp.app')
@section('title','Create Warehouse')


@section('page')
<!--begin::Content Header-->
<div class="text-center mt-2">
    <h1 class="m-0">Add Warehouse</h1>
</div>
<!--end::Content Header-->
<div id="kt_app_content" class="app-content flex-column-fluid">
    <!--begin::Content container-->
    <div id="kt_app_content_container" class="app-container container-xxl">
        <!--begin::Warehouse-->
        <div class="card card-flush">
            <!--begin::Card header-->
            <div class="card-header align-items-center py-3 gap-2 gap-md-5">
                <!--begin::Card toolbar-->
                <div class="card-toolbar flex-row-fluid  gap-5">
                    <a href="{{url('/warehouses')}}" class="btn btn-primary">Manage Warehouse</a>
                </div>
                <!--end::Card toolbar-->
            </div>
            <!--end::Card header-->
            <div class="card-body pt-0">
                <!--begin::Form-->
                <form action="{{route('warehouses.store')}}" method="POST">
                    @method('POST')
                    @csrf
                    <div class="row mb-5">
                        <label class="col-md-2 col-form-label required fs-4">Name</label>
                        <div class="col-md-10">
                            <input type="text" name="name" class="form-control" placeholder="Name">
                        </div>
                    </div>
                    <div class="row mb-5">
                        <label class="col-md-2 col-form-label required fs-4">Location</label>
                        <div class="col-md-10">
                            <input type="text" name="location" class="form-control" placeholder="location">
                        </div>
                    </div>
                    <div class="row mb-5">
                        <label class="col-md-2 col-form-label required fs-4">Contact</label>
                        <div class="col-md-10">
                            <input type="text" name="contact" class="form-control" placeholder="contact">
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
        <!-- end::warehouse -->
    </div>
    <!--end::Content container-->
</div>
@endsection