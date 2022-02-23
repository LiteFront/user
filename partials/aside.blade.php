<div class="col-lg-3 col-md-5">
    <div class="user-aside-wrap">
        <div class="user-aside-info">
            <span class="user-avatar" style="background-image: url({{user()->picture}})"></span>
            <span class="user-ac-info">
                <h4>{{user()->name}}</h4>
                <p>{{user()->designation}}</p>
            </span>
            <div class="user-aside-menu">
                <a class="nav-link" href="{{guard_url('profile')}}"><i class="las la-user-circle"></i><span>Profile</span></a>
                <a class="nav-link" href="{{guard_url('password')}}"><i class="las la-key"></i><span>Password</span></a>
                <a class="nav-link" href="{{guard_url('logout')}}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="las la-sign-out-alt"></i><span>Logout</span>
                </a>
            </div>
        </div>
        <div class="user-mainnav">
            <br/>
            <ul class="nav-menu">
                <li class="dropdown">
                    <a class="nav-link menu-title link-nav" href="{{guard_url('/')}}"><i
                            class="las la-tachometer-alt"></i><span>Dashboard</span></a>
                </li>
                <li class="dropdown">
                    <a class="nav-link menu-title link-nav" href="{{guard_url('advert/advert')}}"><i
                            class="las la-ad"></i><span>Advertisement</span></a>
                </li>
                <li class="dropdown">
                    <a class="nav-link menu-title link-nav" href="#"><i
                            class="lar la-heart"></i><span>Favourites</span></a>
                </li>
                <li class="dropdown">
                    <a class="nav-link menu-title link-nav" href="#"><i
                            class="las la-inbox"></i><span>Messages</span></a>
                </li>
                <li class="dropdown">
                    <a class="nav-link menu-title link-nav" href="#"><i
                            class="las la-chart-line"></i><span>Views</span></a>
                </li>
                <li class="sidebar-main-title"></li>
            </ul>
        </div>
    </div>
</div>
<form id="logout-form" action="{{guard_url('logout')}}" method="POST" style="display: none;">
@csrf
</form>