@extends('layout.erp.app')
@section('title','Create Menu')


@section('page')
<!--begin::Content Header-->
<div class="text-center mt-2">
    <h1 class="m-0">Add Menu</h1>
</div>
<!--end::Content Header-->
<div id="kt_app_content" class="app-content flex-column-fluid">
    <!--begin::Content container-->
    <div id="kt_app_content_container" class="app-container container-xxl">
        <!--begin::Menu-->
        <div class="card card-flush">
            <!--begin::Card header-->
            <div class="card-header align-items-center py-3 gap-2 gap-md-5">
                <!--begin::Card toolbar-->
                <div class="card-toolbar flex-row-fluid  gap-5">
                    <a href="{{url('/menus')}}" class="btn btn-primary">Manage Menu</a>
                </div>
                <!--end::Card toolbar-->
            </div>
            <!--end::Card header-->
            <div class="card-body pt-0">
                <!--begin::Form-->
                <form action="{{route('menus.store')}}" method="POST">
                    @method('POST')
                    @csrf
                    <div class="row mb-5">
                        <label class="col-md-2 col-form-label required fs-4">Name</label>
                        <div class="col-md-10">
                            <input type="text" name="name" class="form-control" placeholder="Name">
                        </div>
                    </div>
                    <div class="row mb-5">
                        <label class="col-md-2 col-form-label required fs-4">Price</label>
                        <div class="col-md-10">
                            <input type="text" name="price" class="form-control" placeholder="Price">
                        </div>
                    </div>
                    <div class="row mb-5">
                        <label class="col-md-2 col-form-label required fs-4">Photo</label>
                        <div class="col-md-10">
                            <input type="file" name="photo" class="form-control" placeholder="Photo here">
                        </div>
                    </div>
                    <div class="row mb-5">
                        <label class="col-md-2 col-form-label required fs-4">Category_id</label>
                        <div class="col-md-10">
                            <select class="form-control" name="category_id">
                                @foreach ($categories as $category )
                                    
                               
                                <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
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
        <!-- end::Menu -->
    </div>
    <!--end::Content container-->
</div>
@endsection