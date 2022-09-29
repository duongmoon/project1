@extends('master.masterpage')


@section('main')

    <div class="container oorange">
        <h1 class="display-4 text-center font-weight_bold ">Car Index</h1>
        <table class="table">
            <tbody>
            @if(count($car) != 0)
                @php
                    $n=0;
                @endphp
                @foreach($car as $c )
                    @php
                        $c->price = number_format($c->price, 0, ',', '.');
                        $c->price .= "VND";
                        if ($c->quantity == 1){
                            $c->quantity.= " number";
                        }else{
                            $c->quantity .= " numbers";
                        }
                    @endphp
                    @php
                        if($n %3 ==0){
                        echo '<tr>';
                        }
                    @endphp
                    <td class="col-3 pl-5">
                    <div class="ml-5">
                        <img src="{{asset("/storage/images/Car/".$c->image)}}" alt="" height="160" width="300" data-toggle="tooltip" data-html="true" >
                        <p style="font-size: 14px; font-weight: 600">{{$c->carname}}</p>
                        <p style="font-size: 13px; font-weight: 500"><strong>Price:</strong> {{$c->price}}</p>
                            <div class="row">
                                <a type="button" class="btn btn-success btn-sm col-2 m-1" href="{{route('Car.edit',['carid'=>$c->carid])}}"><i class="fas fa-edit"></i></a>
                                <a type="button" class="btn btn-danger btn-sm col-2 m-1" href="{{route('Car.confirm',['carid'=>$c->carid])}}"><i class="fas fa-trash"></i></a>
                                <a type="button" class="btn btn-secondary btn-sm col-2 m-1" href="{{route('Car.show',['carid'=>$c->carid])}}"><i class="fas fa-eye"></i></a>
                            </div>

                    </div>
                    </td>

                    @php
                        if($n%3==2){
                        echo '</tr>';
                        }
                        $n+=1;
                    @endphp
                @endforeach
                    @endif
            </tbody>
        </table>
    </div>

@endsection
@section('script')
@endsection
