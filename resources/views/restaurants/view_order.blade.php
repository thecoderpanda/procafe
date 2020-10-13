@extends("restaurants.layouts.restaurantslayout")

@section("restaurantcontant")


    <div class="container-fluid mt--6">

        <div class="card">
            <div class="card-header border-0">
                <div class="row">
                    <div class="col-6">
                        <h3 class="mb-0"><smal>Order Id: </smal>{{$order->order_unique_id}}</h3>
                    </div>
                    <div class="col-6 text-right">
                        <a href="javascript:void(0)" id="printButton" class="btn btn-sm btn-primary btn-round btn-icon" data-toggle="tooltip" data-original-title="Print">
                            <span class="btn-inner--icon"><i class="fas fa-print"></i></span>
                            <span class="btn-inner--text">Print</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body" id="printThis">


                <div class="card-body">
                    <!-- Stack the columns on mobile by making one full-width and the other half-width -->
                    <div class="row row-example">
                        <div class="col-6 col-md-8">
                            <span>
                                <i class="text-blue">Customer Details:</i><br>
                                Customer Name: <b>{{$order->customer_name}}</b><br>
                                Phone No: <b>{{$order->customer_phone}}</b>

                            </span></div>
                        <div class="col-6 col-md-4"><span>
                                <i class="text-blue">Order Details:</i><br>
                                 Order Id: <b>{{$order->order_unique_id}}</b><br>
                                Placed: <b>{{date('d-m-Y',strtotime($order->created_at))}}</b><br>
                                Table No: <b>{{$order->table_no}}</b>

                            </span></div>

                    </div>
                    <div class="col"><span>
                                <i class="text-blue">Customer Note:</i><br>
                                 <b>{{$order->comments}}</b><br>


                            </span></div>

                </div>






                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Qty</th>
                                <th>Price</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($orderDetails as $key => $data)
                                <tr>
                                    <th scope="row">{{ $key +1 }}</th>
                                    <td>{{$data->name}}</td>
                                    <td>{{$data->price}}</td>
                                    <td>{{$data->quantity}}</td>
                                    <td class="color-primary">{{$account_info!=NULL?$account_info->currency_symbol:"₹"}} {{$data->quantity * $data->price}}</td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                <br>

                <div class="title" style="float:right">
                    <div class="form-group">
                        <label class="control-label no-margin text-semibold mr-2"><strong>Total:</strong></label>

                        <span>
                                  {{$account_info!=NULL?$account_info->currency_symbol:"₹"}} {{$order->total}}
                                    </span>
                    </div>
                    <div class="form-group">
                        <label class="control-label no-margin text-semibold mr-2"><strong>Order Status:</strong></label>

                        <span class="badge badge-pill badge-primary">
                                        {{$order->status == 1 ? "Order Placed":NULL}}
                            {{$order->status == 2 ? "Order Accepted":NULL}}
                            {{$order->status == 3 ? "Order Rejected":NULL}}
                            {{$order->status == 4 ? "Order Completed":NULL}}

                                    </span>
                    </div>
                </div>




            </div>
        </div>


    </div>








@endsection
