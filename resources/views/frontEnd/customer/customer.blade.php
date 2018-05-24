@extends('frontEnd.master')


@section('title')
    Checkout
@endsection

@section('mainContent')
   <hr/>
   <div class="container">
       <div class="rows">
           <div class="col-md-6 col-md-offset-3">
               <div class="well">
                   Dear,<h5><b>{{Session::get('customerName')}}</b></h5>
                   Your order successfully post.Well will contact you soon...
               </div>
           </div>
       </div>
   </div>

   <hr/>



@endsection