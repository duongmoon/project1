@extends('master.clientmasterpage')

@section('main')
    <div class="container oorange">
        <h1 class="display-4 text-center font-weight_bold ">List of all car </h1>
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
                        $concact=\Illuminate\Support\Facades\Session::has('contact')?1:null;
                    @endphp

                    <td class="col-3 pl-5">
                        <div class="ml-5">
                            <img src="{{asset("/storage/images/Car/".$c->image)}}" alt="" height="160" width="300" data-toggle="tooltip" data-html="true"  >
                            {{-- title="<image width='250px' height='200px' src='{{asset("/storage/images/Car/".$c->image)}}'/>" --}}
                            <p style="font-size: 14px; font-weight: 600">{{$c->carname}}</p>
                            <p style="font-size: 13px; font-weight: 500"><strong>Price:</strong> {{$c->price}}</p>
                            <div class="row">
                                <a type="button" class="btn btn-warning btn-sm ml-4" href="{{route('Client.Cardetail',['carid'=>$c->carid])}}"><i class="fas fa-eye"></i></a>
                                <a type="button" class="ml-1 btn btn-secondary btn-sm"  @if ($concact==1)href="{{route('Client.Order')}}"
                                @else href="{{route("auth.ask")}}"@endif ><i class="fas fa-shopping-cart"></i></a>
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
