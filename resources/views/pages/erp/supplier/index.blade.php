@extends('layout.erp.app')
@section('title','Manage Supplier')

<style>
    tr:nth-child(odd) {
        background-color: lightgray;
    }
</style>

@section('page')
<!--begin::Content Header-->
<div class="text-center mt-2">
    <h1 class="m-0">Manage Supplier</h1>
</div>
<!--end::Content Header-->

<!--begin::Content-->
<div id="kt_app_content" class="app-content flex-column-fluid">
    <!--begin::Content container-->
    <div id="kt_app_content_container" class="app-container container-xxl">
        <!--begin::Supplier-->
        <div class="card card-flush">
            <!--begin::Card header-->
            <div class="card-header align-items-center py-3 gap-2 gap-md-5">
                <!--begin::Card toolbar-->
                <div class="card-toolbar flex-row-fluid  gap-5">
                    <a href="{{url('/suppliers/create')}}" class="btn btn-primary">Add Supplier</a>
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
                            <th class="text-center min-w-200px">Mobile</th>                       
                            <th class="text-center min-w-200px">Address</th>
                            <th class="text-center min-w-70px">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="fw-semibold text-gray-600">
                        @foreach($suppliers as $supplier)
                        <tr class="text-hover-primary">
                            <td class="text-center pe-0">{{$supplier->id}}</td>
                            <td class="text-center pe-0">{{$supplier->name}}</td>
                            <td class="text-center pe-0">{{$supplier->mobile}}</td>                            
                            <td class="text-center pe-0">{{$supplier->address}}</td>
                            <td class="text-center">
                                <form action="{{route('suppliers.destroy',$supplier->id)}}" method="post">
                                    <a class='btn btn-primary btn-sm' href="{{route('suppliers.show',$supplier->id)}}">View</a>
                                    <a class='btn btn-success btn-sm' href="{{route('suppliers.edit',$supplier->id)}}">Edit</a>
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
        <!--end::Supplier-->
    </div>
    <!--end::Content container-->
</div>
<!--end::Content-->
@endsection