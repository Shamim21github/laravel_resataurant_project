@extends('layout.erp.app')
@section('title','Manage Booking')

@section('style')
<style>
    table {
        width: 100%;
        border-collapse: collapse;
    }

    table,
    td,
    th {
        border: 1px solid lightgray;
    }

    td,
    th {
        padding: 5px;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    .action-wrap {
        display: flex;
        justify-content: space-between;
    }
</style>
@endsection

@section('page')

<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
 
</div>
<div class="content">
    <div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Manage Booking</h3>

            <div class="card-tools">
            @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif
                <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                        <button type="submit" class="btn btn-default">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
        <a class='btn btn-success' href="{{route('bookings.create')}}">Create</a>
            <table class="table table-hover text-nowrap">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                    
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($bookings as $booking)
                    <tr>
                        <td>{{$booking->id}}</td>
                        <td>{{$booking->name}}</td>                       
                        <td>                          
                               
                                <form action="{{route('bookings.destroy',$booking->id)}}" method="post">
                                <a class='btn btn-primary' href="{{route('bookings.show',$booking->id)}}">View</a>
                                <a class='btn btn-success' href="{{route('bookings.edit',$booking->id)}}">Edit</a>
                                    @method('DELETE')
                                    @csrf
                                    <input type="submit" class="btn btn-danger" name="delete" value="Delete"/>
                                </form>
                            
                        </td>
                    </tr>
                    @endforeach
                
                </tbody>
              
            </table>
            {{$bookings->links()}}
        </div>
        <!-- /.card-body -->
    </div>
    </div>
</div>



@endsection