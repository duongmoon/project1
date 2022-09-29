
<style>
    .header{
        background-color: black;
        position: relative
    }
    .fa-solid{
        color:  white;
        font-size: 18px;
        position: absolute;
        top: 35%;
        
    }
    .link-nav{
        color: aqua;
    }
</style>
<header class="header">

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="m-2">
                        <a href="{{route('auth.home')}}"><img src="{{asset('/storage/images/logo/'.'car-studio.gif')}}" alt="" height="60" width="90" >
                        </a>
                    </div>
                    <nav class="header__menu mobile-menu col-9">
                        <ul>
                            <li><a class="link-nav" href="{{route('auth.home')}}" >Home</a></li>
                            <li><a class="link-nav" href="{{route('Client.About')}}">About</a></li>
                            <li><a class="link-nav" href="{{route('auth.home')}}#model">Model</a>
                            <li><a class="link-nav" href="{{route('Client.Car')}}">Car</a></li>
                            <li><a class="link-nav" href="{{route('Client.signup')}}">Sign up</a></li>
                        </ul>
                    </nav>
                    <div class="col-1">
                        <div class="m-3">
                            <a href="#" class="search-switch"><i class="fa-solid fa-magnifying-glass"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="search-model">
    <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="search-close-switch">+</div>
        <form class="search-model-form" action="{{route('Client.search')}}" method="get">
            @csrf
            <input type="text" id="search-input" name="search" placeholder="Search here.....">
            <button class="btn au-btn--submit">Submit</button>
        </form>
    </div>
</div>


