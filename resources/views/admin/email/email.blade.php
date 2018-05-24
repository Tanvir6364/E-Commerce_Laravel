@extends('admin.master')

@section('content')
    <div class="panel-body">
        <a href="{{url('/sendMail')}}" class="btn btn-primary btn-block">Click To Send Mail</a>
    </div>
    @endsection