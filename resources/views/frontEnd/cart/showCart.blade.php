@extends('frontEnd.master')


@section('title')
    Cart
@endsection

@section('mainContent')
    <!-- banner -->
    <div class="page-head">
        <div class="container">
            <h3>Cart</h3>
        </div>
    </div>
    <!-- //banner -->
    <!-- check out -->
    <div class="checkout">
        <div class="container">
            <h2 style="color: red">{{Session::get('message')}}</h2>
            <h3>My Shopping Bag</h3>
            <div class="table-responsive checkout-right animated wow slideInUp" data-wow-delay=".5s">
                <table class="timetable_sub">
                    <thead>
                    <tr>
                        <th>Action</th>
                        <th>Product Image</th>
                        <th>Product Name</th>
                        <th>Quantity</th>
                        <th>Price</th>
                    </tr>
                    </thead>
                    <?php $sum=0;?>
                    @foreach($cartProducts as $cartProduct)
                        <tr class="rem1">
                            <td class="invert-closeb">
                                <a href="{{url('/removeCartProduct/'.$cartProduct->rowId)}}"
                                   class="btn btn-danger btn-sm">
                                    <span class="glyphicon glyphicon-trash"></span>
                                </a>
                            </td>
                            <td class=""><a href="single.html"><img
                                            src="{{($cartProduct->options->has('image') ? $cartProduct->options->image :'')}}"
                                            alt=" " height="100" width="150" class="img-responsive"/></a></td>
                            <td class="invert">{{$cartProduct->name}}</td>
                            <td class="invert">
                                {!! Form::open(['url'=>'updateCart/','method'=>'POST','class'=>'form-inline']) !!}
                                <div class="input-group">
                                    <input type="number" min="1" class="form-control" value="{{$cartProduct->qty}}"
                                           name="productQuantity">
                                    <input type="hidden" value="{{$cartProduct->rowId}}" name="rowId">
                                    <span class="input-group-btn">
                                    <button type="submit" class="btn btn-primary">
                                        <span class="glyphicon glyphicon-upload"
                                    </button>
                                </span>
                                </div>
                                {!! Form::close() !!}
                            </td>
                            <td class="invert">{{$cartProduct->price}}</td>
                        </tr>
                        <?php $sum+=$cartProduct->subtotal; ?>
                    @endforeach

                </table>
            </div>
            <div class="checkout-left">

                <div class="checkout-left-basket animated wow slideInLeft" data-wow-delay=".5s">
                    <h4>Shopping basket</h4>
                    <ul>
                        @foreach($cartProducts as $cartProduct)
                            <li>{{$cartProduct->name}}<i>-</i> <span>{{$cartProduct->subtotal}}</span></li>
                        @endforeach
                        <hr/>
                        <li>Total <i>-</i> <span>{{ $sum }}</span></li>
                        {{Session::put('totalOrder',$sum)}}
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="checkout-left">
                <div class="checkout-right-basket animated wow slideInRight" data-wow-delay=".5s">
                    <a href="{{url('/')}}"><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>Back To
                        Shopping</a>
                </div>
                <?php $customerId = Session::get('id');
                $shippingId = Session::get('shippingId');
                if($customerId != null && $shippingId != null){
                ?>
                <div class="">
                    <div class="checkout-right-basket animated wow slideInRight" data-wow-delay=".5s">
                        <a href="{{url('/paymentInfo')}}" class="use1">Check Out &nbsp;&nbsp;&nbsp;<span
                                    class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></a>
                    </div>
                </div>
                <?php }elseif($customerId != null && $shippingId == null){ ?>
                <div class="">
                    <div class="checkout-right-basket animated wow slideInRight" data-wow-delay=".5s">
                        <a href="{{url('/shippingInfo')}}" class="use1">Check Out &nbsp;&nbsp;&nbsp;<span
                                    class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></a>
                    </div>
                </div>
                <?php }else{ ?>
                <div class="">
                    <div class="checkout-right-basket animated wow slideInRight" data-wow-delay=".5s">
                        <a href="" class="use1" data-toggle="modal" data-target="#myModal4">Check Out &nbsp;&nbsp;&nbsp;<span
                                    class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></a>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>

    <!-- //check out -->

@endsection