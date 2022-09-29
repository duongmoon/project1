<!-- MENU SIDEBAR-->
<aside class="menu-sidebar d-none d-lg-block bg-light">
    <div class="logo bg-white">
        <a href="#">
            <img src="{{asset('/storage/images/logo/'.'logoAdmin.gif')}}" alt="" class="mb-1" height="70" width="300" />
        </a>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                <li>
                    <a class="js-arrow" href="#">
                        <i class="fas fa-birthday-cake"></i>Car</a>
                        <ul class="list-unstyled navbar__sub-list js-sub-list">
                            <li>
                                <a href="{{route('Car.index')}}">View Car</a>
                            </li>
                            <li>
                                <a href="{{route('Car.create')}}">New Car</a>
                            </li>
                        </ul>
                </li>
                <li>
                    <a class="js-arrow" href="#">
                        <i class="fas fa-calendar"></i></i>Model</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="{{route('Model.index')}}">View Model</a>
                        </li>
                        <li>
                            <a href="{{route('Model.create')}}">New Model</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{route('admin.index')}}">
                        <i class="far fa-user"></i>View Admin</a>
                </li>
                <li>
                    <a href="{{route('Cus.index')}}">
                        <i class="fas fa-users"></i>View Customer</a>
                </li>
                <li>
                    <a class="js-arrow" href="#">
                        <i class="fas fa-user-circle"></i>{{\Illuminate\Support\Facades\Session::has('username')?
                  \Illuminate\Support\Facades\Session::get('username') : ''}}</a>
                        <ul class="list-unstyled navbar__sub-list js-sub-list">
                            <li>
                                <a href="#"><span class="contact">{{\Illuminate\Support\Facades\Session::has('contact')?
                \Illuminate\Support\Facades\Session::get('contact') : ''}}</span></a>
                            </li>
                            <li>
                                <a href="{{route('auth.signout')}}">
                                    <i class="fas fa-power-off"></i>Logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
 
</aside>

