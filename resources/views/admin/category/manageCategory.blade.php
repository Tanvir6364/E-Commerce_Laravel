@extends('admin.master')

@section('content')

        <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <h2></h2>
            <div class="panel panel-default">
                <div class="panel-heading">
                    Category List
                </div>
                <!-- /.panel-heading -->
                <h3 class="text-center text-success">{{Session::get('message')}}</h3>
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr>
                            <th>Serial No.</th>
                            <th>Category Name</th>
                            <th>Description</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                       <?php $a=1;?>
                        @foreach ($categories as $category)
                        <tr class="odd gradeX">
                            <td>{{$a++}}</td>
                            <td>{{$category->categoryName}}</td>
                            <td>{{$category->categoryDescription}}</td>
                            @if($category->publicationStatus==1)
                            <td>Published</td>
                            @else
                                <td>Unpublished</td>
                            @endif
                            <td><a href="{{url('/category/edit/'.$category->id)}}" class="btn btn-success" title="Edit">
                                    <span class="glyphicon glyphicon-edit"></span>
                                </a>
                                <a href="{{url('/category/delete/'.$category->id)}}" class="btn btn-danger" title="Delete" onclick="return confirm('Are you sure to DELETE');">
                                    <span class="glyphicon glyphicon-trash"></span>
                                </a> </td>
                        </tr>
                            @endforeach

                        </tbody>
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