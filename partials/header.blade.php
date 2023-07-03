<header class="main-header">
    <nav class="navbar navbar-default navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="{!!url('/')!!}">
            <img src="{{theme_asset('img/logo/public.svg')}}" class="img-fluid" style="height: 40px;">
            </a>
            <div class="header-btns">
                @if(user())
                <div class="dropdown user-dropdown">
                    <button class="btn dropdown-toggle" type="button" id="user_dropdown" data-bs-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <span class="user-name mr-10">{{user()->name}}</span>
                        <span class="user-avatar" style="background-image: url({{user()->picture}})"></span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="user_dropdown">
                        <a class="dropdown-item user-info" href="{{guard_url('profile')}}">
                            <span class="user-avatar mr-10"
                                style="background-image: url({{user()->picture}})"></span>
                            <span class="user-ac-info">
                                <h4>{{user()->name}}</h4>
                                <p>View Profile</p>
                            </span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{guard_url('/')}}"><i class="las la-tachometer-alt"></i>Dashboard</a>
                        <a class="dropdown-item" href="#"><i class="las la-ad"></i>Advertisement</a>
                        <a class="dropdown-item" href="#"><i class="lar la-heart"></i>Favourites</a>
                        <!-- <a class="dropdown-item" href="#"><i class="lab la-product-hunt"></i>Projects</a>
                        <a class="dropdown-item" href="#"><i class="las la-user-cog"></i>Account Settings</a> -->
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{guard_url('logout')}}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i
                                class="las la-sign-out-alt"></i>Sign Out</a>

                        <form id="logout-form" action="{{guard_url('logout')}}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </div>
                @else
                <a href="{!!url('client/login')!!}" class="btn btn-login">Sign In</a>
                @endif
            </div>
        </div>
    </nav>


</header>