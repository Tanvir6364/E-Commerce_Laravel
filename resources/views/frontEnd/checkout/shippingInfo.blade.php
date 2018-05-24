@extends('frontEnd.master')


@section('title')
    Shipping Info
@endsection

@section('mainContent')
    <div class="row">
            <div class="col-md-8 col-md-offset-3">
                <div class="well col-md-8">
                    Dear,<h5><b>{{Session::get('customerName')}}</b></h5>You have to give us product shipping Information to complete your valuable order. If your billing & shipping information are same then just press on save shipping info button.
                </div>

                        <div class="login-bottom">
                            <h3>Shipping Info</h3>
                            {!! Form::open(['url'=>'newShipping/','method'=>'POST']) !!}
                            <div class="form-group">
                                <h4>Full Name :</h4>
                                <input type="text" name="fullName" class="" value="{{$customerById->firstName.' '.$customerById->lastName}}" onfocus="this.value = '';" onblur="if (this.value == '') {
                                                        this.value = '{{$customerById->firstName.' '.$customerById->lastName}}';
                                                    }" required="">
                            </div>
                            <div class="sign-up">
                                <h4>Email :</h4>
                                <input type="text" name="emailAddress" value="{{$customerById->emailAddress}}"  onfocus="this.value = '';" onblur="if (this.value == '') {
                                                        this.value = '{{$customerById->emailAddress}}';
                                                    }" required="">
                            </div>
                            <div class="sign-up">
                                <h4>Phone Number :</h4>
                                <input type="text" name="phoneNumber" value="{{$customerById->phoneNumber}}" onfocus="this.value = '';" onblur="if (this.value == '') {
                                                        this.value = '{{$customerById->phoneNumber}}';
                                                    }" required="">
                            </div>
                            <div class="sign-up">
                                <h4>Address :</h4>
                                <textarea name="address" value="Type here" rows="8" class="form-control">{{$customerById->address}}</textarea>
                            </div>
                            <br>
                            <div class="sign-up">
                                <input type="submit" value="Save Shipping Info">
                                <h1><br></h1>
                            </div>

                            {!! Form::close() !!}
                        </div>

                        <div class="clearfix"></div>
                    </div>
    </div>



@endsection