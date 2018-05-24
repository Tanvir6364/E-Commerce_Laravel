@extends('frontEnd.master')

@section('title')
    Cart
@endsection

@section('mainContent')
    <hr>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <table class="table table-bordered">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                    <th>Action</th>
                </tr>
                @foreach($cartProducts as $cartProduct)
                <tr>
                    <td>{{$cartProduct->id}}</td>
                    <td>{{$cartProduct->name}}</td>
                    <td>TK. {{$cartProduct->price}}</td>
                    <td>
                        {!! Form::open(['url'=>'updateCart/','method'=>'POST','class'=>'form-inline']) !!}
                            <div class="input-group">
                                <input type="number"min="1" class="form-control" value="{{$cartProduct->qty}}" name="productQuantity">
                                <input type="hidden" value="{{$cartProduct->rowId}}" name="rowId">
                                <span class="input-group-btn">
                                    <button type="submit" class="btn btn-primary">
                                        <span class="glyphicon glyphicon-upload"
                                    </button>
                                </span>
                            </div>
                        {!! Form::close() !!}
                    </td>
                    <td>TK. {{$cartProduct->subtotal}}</td>
                    <td>
                        <a href="{{url('/removeCartProduct/'.$cartProduct->rowId)}}" class="btn btn-danger btn-sm">
                            <span class="glyphicon glyphicon-trash"></span>
                        </a>
                    </td>
                </tr>
                    @endforeach
            </table>
        </div>
    </div>
</div>

    <hr/>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <a href="" class="btn btn-success pull-right">Checkout</a>
                <a href="{{url('/')}}" class="btn btn-success">Continue Shopping</a>
            </div>
        </div>
    </div>

@endsection