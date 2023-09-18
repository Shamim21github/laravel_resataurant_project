@extends('layout.erp.app')
@section('title','Manage RawMaterial')

<style>
    tr:nth-child(odd) {
        background-color: lightgray;
    }
</style>

@section('page')
<!--begin::Content Header-->
<div class="text-center mt-2">
    <h1 class="m-0">Manage RawMaterial</h1>
</div>
<!--end::Content Header-->

<!--begin::Content-->
<div id="kt_app_content" class="app-content flex-column-fluid">
    <!--begin::Content container-->
    <div id="kt_app_content_container" class="app-container container-xxl">
        <!--begin::RawMaterial-->
        <div class="card card-flush">
            <!--begin::Card header-->
            <div class="card-header align-items-center py-3 gap-2 gap-md-5">
                <!--begin::Card toolbar-->
                <div class="card-toolbar flex-row-fluid  gap-5">
                    <a href="{{url('/rawmaterials/create')}}" class="btn btn-primary">Add RawMaterial</a>
                </div>
                <!--end::Card toolbar-->
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body pt-0">
                <table class="table align-middle table-striped fs-6 gy-3">
                    <thead>
                        <tr class="text-start text-black-400 fw-bold fs-5 gs-0">
                            <th class="text-center min-w-30px">ID</th>
                            <th class="text-center min-w-100px">Name</th>
                            <th class="text-center min-w-200px">Price</th>
                            <th class="text-center min-w-200px">Measure</th>
                            <th class="text-center min-w-200px">UOM</th>
                            <th class="text-center min-w-70px">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="fw-semibold text-gray-600">
                        @foreach($rawmaterials as $rawmaterial)
                        <tr class="text-hover-primary">
                            <td class="text-center pe-0">{{$rawmaterial->id}}</td>
                            <td class="text-center pe-0">{{$rawmaterial->name}}</td>
                            <td class="text-center pe-0">{{$rawmaterial->price}}</td>
                            <td class="text-center pe-0">{{$rawmaterial->measure}}</td>
                            <td class="text-center pe-0">{{$rawmaterial->uom_name}}</td>
                            <td class="text-center">
                                <form action="{{route('rawmaterials.destroy',$rawmaterial->id)}}" method="post">
                                    <a class='btn btn-primary btn-sm' href="{{route('rawmaterials.show',$rawmaterial->id)}}">View</a>
                                    <a class='btn btn-success btn-sm' href="{{route('rawmaterials.edit',$rawmaterial->id)}}">Edit</a>
                                    @method('DELETE')
                                    @csrf
                                    <input type="submit" class="btn btn-danger btn-sm" name="delete" value="Delete" />
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!--end::Card body-->
        </div>
        <!--end::RawMaterial-->
    </div>
    <!--end::Content container-->
</div>
<!--end::Content-->
@endsection