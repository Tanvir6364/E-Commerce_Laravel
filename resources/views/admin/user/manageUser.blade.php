@extends('admin.master')

@section('content')

    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <h2></h2>
            <div class="panel panel-default">
                <div class="panel-heading">
                    User List
                </div>
                <!-- /.panel-heading -->
                <h2>Total {{$users->total()}} user</h2>
                <h2>{{$users->count()}} in this page</h2>
                <h3 class="text-center text-success">{{Session::get('message')}}</h3>
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr>
                            <th>Serial No.</th>
                            <th>User Name</th>
                            <th>Address</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $a=1;?>
                        @foreach($users as $user)
                        <tr>
                            <td>{{$a++}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->address}}</td>
                            <td>{{$user->email}}</td>
                            <td><a href="{{url('/category/edit/'.$user->id)}}" class="btn btn-success" title="Edit">
                                    <span class="glyphicon glyphicon-edit"></span>
                                </a>
                                <a href="{{url('/category/delete/'.$user->id)}}" class="btn btn-danger" title="Delete" onclick="return confirm('Are you sure to DELETE');">
                                    <span class="glyphicon glyphicon-trash"></span>
                                </a> </td>

                        </tr>
                            @endforeach
                        </tbody>
                    </table>
                {{$users->links()}}
                    <!-- /.table-responsive -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>

@endsection