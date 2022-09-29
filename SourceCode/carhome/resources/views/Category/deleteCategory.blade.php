@extends('master.masterpage')

@section('main')
    <div class="container">
        <h1 class="display-4 text-center font-weight_bold">Are you sure! You want to delete model?</h1>
        <dl class="row">
            <dt class="col-sm-3">Model id</dt>
            <dd class="col-sm-9">{{ $model->modelid }}</dd>

            <dt class="col-sm-3">Model Name</dt>
            <dd class="col-sm-9">{{ $model->modelname }}</dd>

            <dt class="col-sm-3">image</dt>
            <dd class="col-sm-9"><img src="{{asset("/storage/images/Category/".$model->image)}}" alt="" height="60" width="90"></dd>

            <dt class="col-sm-3">Description</dt>
            <dd class="col-sm-9">{{$model->description }}</dd>

        </dl>

        <form action="{{route('Model.destroy', ['modelid' =>$model->modelid])}}" method="post">
            @csrf
            <input type="hidden" name="modelid" value="{{$model->modelid}}">
            <button type="submit" class="btn btn-danger">Delete</button>
            <a href="{{route('Model.index')}}" class="btn btn-info">Cancel</a>
        </form>
    </div>
@endsection
