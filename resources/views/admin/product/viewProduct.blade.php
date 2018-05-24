@extends('admin.master')

@section('content')

    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <h2></h2>
            <div class="panel panel-default">
                <div class="panel-heading">
                    Product View List
                </div>
                <!-- /.panel-heading -->
                <h3 class="text-center text-success">{{Session::get('message')}}</h3>
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <tr>
                            <th>Product Id</th>
                            <td>{{$product->id}}</td>
                        </tr>
                        <tr>
                            <th>Product Name</th>
                            <td>{{$product->productName}}</td>
                        </tr>
                        <tr>
                            <th>Category Name</th>
                            <td>{{$product->categoryName}}</td>
                        </tr>
                        <tr>
                            <th>Manufacture Name</th>
                            <td>{{$product->manufactureName}}</td>
                        </tr>
                        <tr>
                            <th>Product Price</th>
                            <td>{{$product->productPrice}}</td>
                        </tr>
                        <tr>
                            <th>Product Quantity</th>
                            <td>{{$product->productQuantity}}</td>
                        </tr>
                        <tr>
                            <th>Product Short Description</th>
                            <td>{!! $product->productShortDescription !!}</td>
                        </tr>
                        <tr>
                            <th>Product Long Description</th>
                            <td>{!! $product->productLongDescription !!}</td>
                        </tr>
                        <tr>
                            <th>Product Image</th>
                            <th><img src="{{asset($product->productImage)}}" alt="{{$product->productName}}" height="200" width="200"></th>
                        </tr>
                        <tr>
                            <th>Publication Status</th>
                            <td>{{$product->publicationStatus==1?'Published':'Unpublished'}}</td>
                        </tr>
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