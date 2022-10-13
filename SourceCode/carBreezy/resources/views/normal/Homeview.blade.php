@extends('master.clientmasterpage')

@section('main')
<!-- Hero Section Begin -->
<section class="hero container">
    <div class="hero__slider owl-carousel">
        <div class="" >
            <img src="{{asset('img/hero/AUDI-R8-V10.jpg')}}" height="470px" alt="">
        </div>
        <div class="">
            <img src="{{asset('img/hero/pexels-adrian-dorobantu.jpg')}}" height="470px" alt="">
        </div>
        <div class="" >
            <img src="{{asset('img/hero/US-sports-car.jpg')}}" height="470px" alt="">
        </div>
    </div>
</section>
<!-- Hero Section End -->


<!-- Categories Section Begin -->
<div class="categories">
    <div class="container">
        <div class="row">

            <div class="categories__slider owl-carousel" id="model">
                @foreach($model as $e)
                <div class="categories__item">
                    <div class="categories__item__icon">
                        <a href="{{route('Car.Model',['modelid'=>$e->modelid])}}"><img src="{{asset("/storage/images/Category/".$e->image)}}" alt="" height="120" /></a>
                        <h5>{{$e->modelname}}</h5>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
{{--<!-- Categories Section End -->--}}
<div class="mt-5 mb-5 p-5" style="background-color: #db17d1">
    <p class="display-4 font-weight-bold text-light text-center">History Of Car-Breezy</p>
    <p class="display-5 font-weight-bold text-light" >My family has a tradition of cars, my grandfather had 50 years in the field of car repair during the war, then passed it on to my father. After many years of researching and repairing, he decided to develop this business by expanding the scale of repairing and selling used cars. In order to keep up with the times, my mind did not allow me to stand still, so I tried to learn more knowledge to develop the family tradition. Thanks to the encouragement of family and friends, I opened my own large-scale auto shop. and from there this website was born.</p>
</div>
@endsection




@section('script')
@endsection
