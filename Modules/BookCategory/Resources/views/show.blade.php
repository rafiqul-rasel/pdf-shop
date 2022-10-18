@extends('layouts.dashboard')
@section('header')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"/>
    <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">
@endsection
@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">book Category</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="post" action="{{route('bookcategory.update',$bookCategory->id)}}">
           @csrf
            @method("put")
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Book Category</label>
                    <input type="text" readonly name="bookcategory" value="{{$bookCategory->name}}" class="form-control" id="exampleInputEmail1" placeholder="Enter Book Category">
                </div>
            </div>
            <!-- /.card-body -->


        </form>
    </div>
@endsection
@section('footer')

@endsection
