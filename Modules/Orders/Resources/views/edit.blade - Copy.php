@extends('layouts.dashboard')
@section('header')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection
@section('content')
    <div class="container-fluid bg card">
        <div class="row">
            <div class="col-sm-12">
                <div class="card-header alert alert-light mt-2">
                    <center>
                        <h4>Order Details of <span><i><u>#ORD-{{ $order->id }}</u></i></span> </h4>
                        <input type="hidden" id="order_id" value="{{$order->id}}">
                    </center>
                </div>
            </div>
            <hr>
        </div>

        <!-- Vendor Details -->
        <div class="row">
            <div class="col-sm-6">
                <div class="container bg card">
                    <table class="table">
                        <tr>
                            <td><strong>Customer Name</strong></td>
                            <td>{{ $order->first_name." ".$order->last_name }}</td>
                        </tr>
                        <tr>
                            <td><strong>Phone Number</strong></td>
                            <td>{{ $order->phone }}</td>
                        </tr>
                        <tr>
                            <td><strong>Address</strong></td>
                            <td>{{ $order->address." ".$order->city.",".$order->country.",".$order->city." ".$order->zipcode }}</td>
                        </tr>

                        <tr>
                            <td><strong>Total</strong></td>
                            <td>{{ $order->total_price }}</td>
                        </tr>
                        <tr>
                            <td><strong>Order Date</strong></td>
                            <td>{{ $order->created_at}}</td>
                        </tr>
                        <tr>
                            <td><strong>Order Time</strong></td>
                            <td>{{ $order->created_at->diffForHumans() }}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="container bg card">
                    <table class="table">
                        <th>
                            <tr>
                                <td>Books  Name</td>
                                <td>Books  Thumbnail</td>
                                <td>Books  Pdf</td>
                                <td>Price</td>
                                {{$order->id}}
                            </tr>
                        </th>
                        @foreach(orderPdfById($order->id) as $book)

                            <tr>
                                <td>{{ bookById($book->book_id)->book_title}}</td>
                                <td><img height="100" width="100" src="{{asset('images/'.$book->thumbnail)}}" /> </td>
                                @if($order->status == '3')
                                <td><a href="{{asset('pdf/'.bookById($book->book_id)->source)}}">{{ bookById($book->book_id)->book_title}} </a></td>
                                @else
                                    <td>Wait For Order Complete</td>
                                @endif

                                <td>{{bookById($book->book_id)->price}}</td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
        @if(Auth::user()->hasRole('Admin'))
        <div class="row mb-2">
            <div class="col-md-3">
                <select name="order_status" id="order_status" class="form-control">
                    <option value="0" @if($order->status == '0') selected @endif>Pending</option>
                    <option value="1" @if($order->status == '1') selected @endif>Processing</option>
                    <option value="2" @if($order->status == '2') selected @endif>On the Way</option>
                    <option value="3" @if($order->status == '3') selected @endif>Deliver Successfully</option>
                    <option value="4" @if($order->status == '4') selected @endif>Cancelled</option>
                </select>
            </div>
            <div class="col-md-2">
                <button type="button" id="status_update" class="btn btn-success">Update</button>
            </div>
        </div>
        @endif
    </div>

@endsection
@section('footer')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        var status = '';
        const baseUrl = window.location.origin;
        $("#status_update").click(function() {
            status = $("#order_status").children(":selected").attr("value");
        });

        $( "#status_update" ).click(function() {
            var order_id = $('#order_id').val();
            var successcallback = function (a) {
                toastr.success('Order Status Updated Successfully !!', "Success !!");
                location.reload();
            }
            var url = baseUrl+"/orders/status_update/"+{{$order->id}}+'/'+status;
            ajaxGetRequest(url, successcallback);
        });
        function ajaxGetRequest(url, successCallback = '', errorCallback = '', datatypes = 'json') {

            $.ajax({
                url: url,
                type: 'Get',
                dataType: datatypes,
                success: function (result) {
                    if (successCallback) {
                        successCallback(result);
                        return;
                    }
                    toastr.success("Updated Successfully!", "Success !!!");
                },
                error: function (a) {
                    if (errorCallback) {
                        errorCallback(a);
                        return;
                    }
                    toastr.error('Updated Not Successfully!');
                }
            });
        }
    </script>
@endsection
