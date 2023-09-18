@extends('layout.erp.app')
@section('title','Warehouse Details')

<style>
    th {
        width: 200px;
    }
    tr:nth-child(odd) {
        background-color: #c6c6c6;
    }
    tr:nth-child(even) {
        background-color: #e5e5e5;
    }
</style>

@section('page')
<!--begin::Content Header-->
<div class="text-center mt-2">
    <h1 class="m-0">Warehouse Details</h1>
</div>
<!--end::Content Header-->
<!--begin::Content-->
<div id="kt_app_content" class="app-content flex-column-fluid">
    <!--begin::Content container-->
    <div id="kt_app_content_container" class="app-container container-xxl">
        <!--begin::Warehouse-->
        <div class="card card-flush">
            <!--begin::Card header-->
            <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                <!--begin::Card toolbar-->
                <div class="card-toolbar flex-row-fluid  gap-5">
                    <a href="{{route('warehouses.index')}}" class="btn btn-primary">All Warehouse</a>
                </div>
                <!--end::Card toolbar-->
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body pt-0">
                <table class="table text-nowrap">
                    <tr>
                        <th style="padding-left: 10px;">ID</th>
                        <td>{{$warehouse->id}}</td>
                    </tr>
                    <tr>
                        <th style="padding-left: 10px;">Name</th>
                        <td>{{$warehouse->name}}</td>
                    </tr>
                    <tr>
                        <th style="padding-left: 10px;">Location</th>
                        <td>{{$warehouse->city}}</td>
                    </tr>
                    <tr>
                        <th style="padding-left: 10px;">Contact</th>
                        <td>{{$warehouse->contact}}</td>
                    </tr>
                </table>
            </div>
            <!--end::Card body-->
        </div>
        <!--end::warehouse-->
    </div>
    <!--end::Content container-->
</div>
<!--end::Content-->
@endsection