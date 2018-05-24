@extends('admin.master')

@section('content')

    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <h2></h2>
            <div class="panel panel-default">
                <div class="panel-heading">
                    Manage List
                </div>
                <!-- /.panel-heading -->
                <h3 class="text-center text-success">{{Session::get('message')}}</h3>
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr>
                            <th>Serial No.</th>
                            <th>Order Id</th>
                            <th>Customer Name</th>
                            <th>Total Order (TK.)</th>
                            <th>Order Status</th>
                            <th>Payment Type</th>
                            <th>Payment Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $a=1;?>
                        @foreach ($orders as $order)
                            <tr class="odd gradeX">
                                <td>{{$a++}}</td>
                                <td>{{$order->orderId}}</td>
                                <td>{{$order->firstName.' '.$order->lastName}}</td>
                                <td>{{$order->totalOrder}}</td>
                                <td>{{$order->orderStatus}}</td>
                                <td>{{$order->paymentType}}</td>
                                <td>{{$order->paymentStatus}}</td>

                                <td>
                                    <a href="{{url('')}}" class="btn btn-success btn-sm" title="View Order">
                                        <span class="glyphicon glyphicon-zoom-in"></span>
                                    </a>
                                    <a href="{{url('')}}" class="btn btn-primary btn-sm" title="View Order Invoice">
                                        <span class="glyphicon glyphicon-zoom-out"></span>
                                    </a>
                                    <a href="{{url('')}}" class="btn btn-success btn-sm" title="Download Order Invoice">
                                        <span class="glyphicon glyphicon-download"></span>
                                    </a>
                                    <a href="{{url('')}}" class="btn btn-warning btn-sm" title="Edit Order">
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </a>
                                    <a href="{{url('')}}" class="btn btn-danger btn-sm" title="Delete" onclick="return confirm('Are you sure to DELETE');">
                                        <span class="glyphicon glyphicon-trash"></span>
                                    </a> </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                    <!-- /.table-responsive -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>

@endsection