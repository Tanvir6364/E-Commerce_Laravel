<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content modal-info">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="col-md-12">
                <div class="well">
                    You have to login to complete your valuable order. If you are not registered then please register first.
                </div>
                </div>
                <div class="modal-body modal-spa">
                    <div class="login-grids">
                        <div class="login">
                            <div class="login-bottom">
                                <h3>Sign up for free</h3>
                                {!! Form::open(['url'=>'newCustomer/','method'=>'POST']) !!}
                                    <div class="sign-up">
                                        <h4>First Name :</h4>
                                        <input type="text" name="firstName" value="Type here" onfocus="this.value = '';" onblur="if (this.value == '') {
                                                        this.value = 'Type here';
                                                    }" required="">
                                    </div>
                                    <div class="sign-up">
                                        <h4>Last Name :</h4>
                                        <input type="text" name="lastName" value="Type here" onfocus="this.value = '';" onblur="if (this.value == '') {
                                                        this.value = 'Type here';
                                                    }" required="">
                                    </div>
                                    <div class="sign-up">
                                        <h4>Email :</h4>
                                        <input type="text" name="emailAddress" value="Type here"  onfocus="this.value = '';" onblur="if (this.value == '') {
                                                        this.value = 'Type here';
                                                    }" required="">
                                    </div>
                                    <div class="sign-up">
                                        <h4>Password :</h4>
                                        <input type="password" name="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {
                                                        this.value = 'Password';
                                                    }" required="">

                                    </div>
                                    <div class="sign-up">
                                        <h4>Phone Number :</h4>
                                        <input type="text" name="phoneNumber" value="Type here" onfocus="this.value = '';" onblur="if (this.value == '') {
                                                        this.value = 'Type here';
                                                    }" required="">
                                    </div>
                                    <div class="sign-up">
                                        <h4>Address :</h4>
                                        <textarea name="address" value="Type here" rows="8" class="form-control"></textarea>
                                    </div>
                                    <br>
                                    <div class="sign-up">
                                        <input type="submit" value="REGISTER NOW">
                                    </div>

                                {!! Form::close() !!}
                            </div>
                            <div class="login-right">
                                <h3>Sign in with your account</h3>
                                {!! Form::open(['url'=>'userLogin/','method'=>'POST']) !!}
                                    <div class="sign-in">
                                        <h4>Email :</h4>
                                        <input type="text" name="emailAddress" value="Type here" onfocus="this.value = '';" onblur="if (this.value == '') {
                                                        this.value = 'Type here';
                                                    }" required="">
                                    </div>
                                    <div class="sign-in">
                                        <h4>Password :</h4>
                                        <input type="password" name="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {
                                                        this.value = 'Password';
                                                    }" required="">
                                        <a href="#">Forgot password?</a>
                                    </div>
                                    <div class="single-bottom">
                                        <input type="checkbox" id="brand" value="">
                                        <label for="brand"><span></span>Remember Me.</label>
                                    </div>
                                    <div class="sign-in">
                                        <input type="submit" name="btn" value="SIGNIN">
                                    </div>
                                {!! Form::close() !!}
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <p>By logging in you agree to our <a href="#">Terms and Conditions</a> and <a href="#">Privacy
                                Policy</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
