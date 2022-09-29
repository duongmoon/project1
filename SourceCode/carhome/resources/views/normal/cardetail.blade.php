@extends('master.clientmasterpage')

@section('main')
    @php
        $car->price = number_format($car->price, 0, ',', '.');
        $car->price .= "VND";
        if ($car->quantity == 1){
            $car->quantity.= " number";
        }else{
            $car->quantity .= " numbers";
        }
        $n =0;
    @endphp
    <div class="row mb-5 mt-2 bg-light">
        <div class="offset-1 col-3 ml-5">
            <img src="{{asset("/storage/images/Car/".$car->image)}}" alt="" height="300" width="500" >
        </div>
        <div class="ml-5 col-4">
            <p class="font-weight-bold">{{$car->carname}}</p>
            <p>Price: {{$car->price}}</p>
            <p>Quantity: {{$car->quantity}}</p>
            <p>Color: {{$car->color}}</p>
            <p>Size: {{$car->size}}</p>
            <a href="{{asset("/storage/images/Car/".$car->image)}}" class="text-light" target="_blank"> <button class="btn btn-block btn-success col-3 mb-1"><i class="fas fa-expand-arrows-alt"></i></button></a>
            <a href="{{route('Client.Order')}}" class="text-light"><button class="btn btn-block btn-dark col-3"><i class="fas fa-shopping-cart"></i></button></a>
        </div>
        <div class="offset-1 col-2">
            <p class="font-weight-bold bg-warning">May You Like</p>
            @foreach($car1 as $c)
                @if($c->carid == $car->carid)
                    @php
                        continue
                    @endphp
                @endif
                @if($n>=2)
                    @php
                        break
                    @endphp
                @endif
                <p>{{$c->carname}}</p>
                <img src="{{asset("/storage/images/Car/".$c->image)}}" alt="" height="160" width="300" data-toggle="tooltip" data-html="true" >
                <div class="row">
                    <a type="button" class="ml-4 btn btn-warning btn-sm mt-1" href="{{route('Client.Cardetail',['carid'=>$c->carid])}}"><i class="fas fa-eye"></i></a>
                </div>
                @php
                    $n++;
                @endphp
            @endforeach
        </div>
    </div>
@endsection
