@extends('master.masterpage')

@section('main')
    <div class="container" >
        <h1 class="display-4 text-center font-weight_bold">Update Model</h1>
        @include('partial.error')

        <form action="{{route('Model.update', ['modelid' =>  $model->modelid])}}" method="post" enctype="multipart/form-data">
            @csrf

            <input type="hidden" name="modelid" value="{{old('modelid')?? $model->modelid}}">
            <div class="form-group">
                <label for="modelname" class="font-weight-bold">Model name</label>
                <input type="text" class="form-control" id="modelname" name="modelname" value="{{old('modelname')?? $model->modelname}}">
            </div>

            <div class="form-group">
                <label for="image" class="font-weight-bold">Image</label>
            </div>
            <input type="file" name="image" id="image" />
            <img src="{{asset("/storage/images/Category/".$model->image)}}" alt="" height="60" width="90">
            <div class="form-group">
                <label for="description" class="font-weight-bold">Description</label>
                <input type="text" class="form-control" id="description" name="description" value="{{old('description')?? $model->description}}">
            </div>
            <button type="submit" class="btn btn-dark">Submit</button>
            <a href="{{route('Model.index')}}" class="btn btn-info">Cancel</a>
        </form>
    </div>
@endsection
