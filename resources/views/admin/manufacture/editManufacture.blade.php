@extends('admin.master')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h3 class="text-center text-success">{{Session::get('message')}}</h3>
            <div class="well">
                {!! Form::open(['url'=>'manufacture/update','method'=>'POST','class'=>'form-horizontal','name'=>'editManufactureForm']) !!}
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Manufacture Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="manufactureName" value="{{$manufactureById->manufactureName}}">
                        <input type="hidden" class="form-control" name="id" value="{{$manufactureById->id}}">

                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Manufacture Description</label>
                    <div class="col-sm-10">
                        <textarea type="number" class="form-control" name="manufactureDescription" rows="8">{{$manufactureById->manufactureDescription}}</textarea>

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
                        <button type="submit" class="btn btn-success btn-block" name="btn">Update Manufacture Info</button>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>

    <script>
        document.forms['editManufactureForm'].elements['publicationStatus'].value={{$manufactureById->publicationStatus}}
    </script>

@endsection