@extends('frontEnd.master')


@section('title')
    Checkout
@endsection

@section('mainContent')
    <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="well">
                Dear,<h5><b>{{Session::get('customerName')}}</b></h5>You have to give us product Payment Information to complete your valuable order.
            </div>
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
            <div class="well">
                <h3 class="well text-success text-center">Payment from here</h3>
            <hr/>
                {!! Form::open(['url'=>'newOrder/','method'=>'POST']) !!}
                <table class="table table-responsive">
                    <tr>
                        <th>Cash On Delivery</th>
                        <td><input type="radio" name="paymentType" value="Cash"></td>
                    </tr>
                    <tr>
                        <th>Paypal</th>
                        <td><input type="radio" name="paymentType" value="Paypal"></td>
                    </tr>
                    <tr>
                        <th>BKash</th>
                        <td><input type="radio" name="paymentType" value="BKash"></td>
                    </tr>
                    <tr>

                        <td colspan="2"> <input type="submit" name="btn" value="Confirm Order" class="btn btn-success btn-block"></td>
                    </tr>
                </table>
                {!! Form::close() !!}
            </div>
                </div>
            </div>


            <div class="clearfix"></div>
        </div>
    </div>
    </div>



@endsection