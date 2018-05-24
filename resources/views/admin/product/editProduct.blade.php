@extends('admin.master')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h3 class="text-center text-success">{{Session::get('message')}}</h3>
            <div class="well">
                {!! Form::open(['url'=>'/product/update','method'=>'POST','class'=>'form-horizontal','enctype'=>'multipart/form-data','name'=>'editProductForm']) !!}
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Product Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="productName" value="{{$product->productName}}">
                        <input type="hidden" class="form-control" name="id" value="{{$product->id}}">
                        <span class="text-danger">{{$errors->has('productName') ? $errors->first('productName'):''}}</span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Category Name</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="categoryId">
                            <option>Select Category Name</option>
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->categoryName}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Manufacture Name</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="manufactureId">
                            <option>Select Manufacture Name</option>
                            @foreach($manufactures as $manufacture)
                                <option value="{{$manufacture->id}}">{{$manufacture->manufactureName}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Product Price</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" name="productPrice" value="{{$product->productPrice}}">
                        <span class="text-danger">{{$errors->has('productPrice') ? $errors->first('productPrice'):''}}</span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Product Quantity</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" name="productQuantity" value="{{$product->productQuantity}}">
                        <span class="text-danger">{{$errors->has('productQuantity') ? $errors->first('productQuantity'):''}}</span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Product Short Description</label>
                    <div class="col-sm-10">
                        <textarea type="number" class="form-control" name="productShortDescription" rows="6">{!! $product->productShortDescription !!}</textarea>
                        <span class="text-danger">{{$errors->has('productShortDescription')? $errors->first('productShortDescription'):''}}</span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Product Long Description</label>
                    <div class="col-sm-10">
                        <textarea type="number" class="form-control" name="productLongDescription" rows="10">{!! $product->productLongDescription !!}</textarea>
                        <span class="text-danger">{{$errors->has('productLongDescription')? $errors->first('productLongDescription'):''}}</span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Product Image</label>
                    <div class="col-sm-10">
                        <input type="file" name="productImage" accept="image/* ">
                        <img src="{{asset($product->productImage)}}" alt="{{$product->productName}}" height="100" width="100">
                        <span class="text-danger">{{$errors->has('productImage') ? $errors->first('productImage'):''}}</span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Publication Status</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="publicationStatus">
                            <option>Select Publication Status</option>
                            <option value="1">Published</option>
                            <option value="0">Unpublished</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-success btn-block" name="btn">Update Product Info</button>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>

    <script>
        document.forms['editProductForm'].elements['publicationStatus'].value={{$product->publicationStatus}}
        document.forms['editProductForm'].elements['categoryId'].value={{$product->categoryId}}
        document.forms['editProductForm'].elements['manufactureId'].value={{$product->manufactureId}}
    </script>

@endsection