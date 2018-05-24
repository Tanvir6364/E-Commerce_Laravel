@extends('admin.master')

@section('content')

    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <h2></h2>
            <div class="panel panel-default">
                <div class="panel-heading">
                    Product List
                </div>
                <!-- /.panel-heading -->
                <h3 class="text-center text-success">{{Session::get('message')}}</h3>
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr>
                            <th>Serial No.</th>
                            <th>Product Name</th>
                            <th>Category Name</th>
                            <th>Manufacture Name</th>
                            <th>Product Price</th>
                            <th>Product Quantity</th>
                            <th>Publication Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $a=1;?>
                        @foreach ($products as $product)
                            <tr class="odd gradeX">
                                <td>{{$a++}}</td>
                                <td>{{$product->productName}}</td>
                                <td>{{$product->categoryName}}</td>
                                <td>{{$product->manufactureName}}</td>
                                <td>BDT.{{$product->productPrice}}</td>
                                <td>{{$product->productQuantity}}</td>
                                @if($product->publicationStatus==1)
                                    <td>Published</td>
                                @else
                                    <td>Unpublished</td>
                                @endif
                                <td>
                                    <a href="{{url('/product/view/'.$product->id)}}" class="btn btn-primary" title="View">
                                        <span class="glyphicon glyphicon-eye-open"></span>
                                    </a>
                                    <a href="{{url('/product/edit/'.$product->id)}}" class="btn btn-success" title="Edit">
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </a>
                                    <a href="{{url('/product/delete/'.$product->id)}}" class="btn btn-danger" title="Delete" onclick="return confirm('Are you sure to DELETE');">
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