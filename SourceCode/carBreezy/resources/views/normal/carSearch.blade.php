@extends('master.clientmasterpage')

@section('main')
    <div class="container oorange">
    <h1 class="display-4 text-center font-weight_bold">Your text :{{$search}}</h1>

        <table class="table table-borderless">
            <tbody>
            @if(count($car1) != 0)
                @php
                    $n=0;
                @endphp
                @foreach($car1 as $c )
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

                    <td class="col-3 pl-5 ml-5">
                        <div>
                            <p>{{$c->carname}}</p>
                            <img src="{{asset("/storage/images/Car/".$c->image)}}" alt="" height="160" width="300" data-toggle="tooltip" data-html="true" >
                            <p>{{$c->price}}</p>
                            <div class="row">
                                <a type="button" class="ml-4 btn btn-warning btn-sm" href="{{route('Client.Cardetail',['carid'=>$c->carid])}}"><i class="fas fa-eye"></i></a>
                                <a type="button" class="ml-1 btn btn-secondary btn-sm"  href="{{route('Client.Order')}}"><i class="fas fa-shopping-cart"></i></a>
                            </div>
                        </div>

                    </td>
                    @php
                        if($n %3 ==2){
                        echo '</tr>';
                        }
                        $n +=1;
                    @endphp
                @endforeach
            @endif
            </tbody>
        </table>
    </div>

@endsection




@section('script')
@endsection
