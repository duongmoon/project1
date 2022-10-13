@extends('master.masterpage')

@section('main')
    <div class="row">
        <div class="offset-1 col-5">
            <h1 class="display-6">Are you want to delete that car ?</h1>
            @php
                $car->price = number_format($car->price, 0, ',', '.');
                $car->price .= "VND";
                if ($car->quantity == 1){
                    $car->quantity.= " day";
                }else{
                    $car->quantity .= " days";
                }
            @endphp

            <dl class="row">
                <dt class="col-sm-3">carid</dt>
                <dd class="col-sm-9">{{ $car->carid }}</dd>

                <dt class="col-sm-3">carname</dt>
                <dd class="col-sm-9">{{ $car->carname }}</dd>

                <dt class="col-sm-3">color</dt>
                <dd class="col-sm-9">{{ $car->color }}</dd>

                <dt class="col-sm-3">price</dt>
                <dd class="col-sm-9">{{$car->price }}</dd>

                <dt class="col-sm-3">quantity</dt>
                <dd class="col-sm-9">{{$car->quantity }}</dd>

                <dt class="col-sm-3">image</dt>
                <dd class="col-sm-9">{{$car->image }}</dd>

                <dt class="col-sm-3">size</dt>
                <dd class="col-sm-9">{{$car->size }}</dd>

                <dt class="col-sm-3">modelname</dt>
                <dd class="col-sm-9">{{$model->modelname }}</dd>
            </dl>
        </div>
        <div class="col-6">
            <img src="{{asset("/storage/images/Car/".$car->image)}}" alt="" height="300" width="900" class="mt-5">
        </div>
    </div>
    <form action="{{route('Car.destroy', ['carid' =>$car->carid])}}" method="post">
      @csrf
        <div class="ml-5">
            <input type="hidden" name="carid" value="{{$car->carid}}">
            <button type="submit" class="btn btn-danger ml-5">Delete</button>
            <a href="{{route('Car.index')}}" class="btn btn-info">Cancel</a>
        </div>
    </form>

  </div>

@endsection
