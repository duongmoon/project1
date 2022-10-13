@extends('master.masterpage')

@section('main')
  <div class="container form_cake">
    <h1 class="display-4 text-center font-weight_bold">Update Car</h1>
    @include('partial.error')

    <form action="{{route('Car.update', ['carid' =>  $car->carid])}}" method="post" enctype="multipart/form-data">
      @csrf
      <input type="hidden" name="carid" value="{{old('carid')?? $car->carid}}">
      <div class="form-group">
        <label for="carname" class="font-weight-bold">Carname</label>
        <input type="text" class="form-control" id="carname" name="carname" value="{{old('carname')?? $car->carname}}">
      </div>

      <div class="form-group">
        <label for="color" class="font-weight-bold">Color</label>
        <input type="text" class="form-control" id="color" name="color" value="{{old('color')?? $car->color}}">
      </div>

      <div class="form-group">
        <label for="price" class="font-weight-bold">Price</label>
        <input type="number" class="form-control" id="price" name="price" value="{{old('price')?? $car->price}}">
      </div>

      <div class="form-group">
        <label for="quantity" class="font-weight-bold">Quantity</label>
        <input type="number" class="form-control" id="quantity" name="quantity" value="{{old('quantity')?? $car->quantity}}">
      </div>

      <div class="form-group">
        <label for="image" class="font-weight-bold">Image</label>
        <input type="file" class="form-control" id="image" name="image" >
          <img src="{{asset("/storage/images/Car/".$car->image)}}" alt="" height="60" width="90" class="mt-1">
      </div>

      <div class="form-group">
        <label for="size" class="font-weight-bold">Size</label>
        <input type="text" class="form-control" id="size" name="size" value="{{old('size')?? $car->size}}">
      </div>
      @php
        $carid =old('model')?? $car->model?? null;
      @endphp
      <div class="form-group">
        <label for="model" class="font-weight-bold">Model</label>
        <select name="model" class="form-control" id="model" required>
          <option value="0">Please select a model car </option>
          @foreach($model as $e)
            <option value="{{ $e->modelid}}"
              {{($carid !=null && $e->modelid==$carid)?'selected':''}}
            >{{ $e->modelname }}</option>
          @endforeach
        </select>
      </div>

      <button type="submit" class="btn btn-dark">Submit</button>
      <a href="{{route('Car.index')}}" class="btn btn-info">Cancel</a>
    </form>
  </div>
@endsection
