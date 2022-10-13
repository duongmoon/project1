@extends('master.masterpage')

@section('main')
        <h1 class="display-4 text-center font-weight_bold">New Model</h1>

        @include('partial.error')

        <form action="{{route('Model.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="modelname" class="font-weight-bold">Modelname</label>
                <input type="text" class="form-control" id="modelname" name="modelname" value="{{old('modelname')?? $model->modelname}}">
            </div>

            <div class="form-group">
                <label for="image" class="font-weight-bold">Image</label>
            </div>
            <input type="file" name="image" id="image" class="mb-3"/>

            <div class="form-group">
                <label for="description" class="font-weight-bold">Description</label>
                <input  type="text" class="form-control" id="description" name="description" value="{{old('description')?? $model->description}}">
            </div>

            <button type="submit" class="btn btn-dark">Submit</button>
            <a href="{{route('Model.index')}}" class="btn btn-secondary">Cancel</a>

        </form>
@endsection
