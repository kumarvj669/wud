<div class="col-sm-3">
    <a class="logo" href="login.html"><img src="{{ Url('public/images/logo.png') }}"  alt="#"></a>
    <div class="navigation">
        <h1 class="mobile-menu"><span><i class="fa fa-bars"></i></span>Menu</h1>
        <ul class="nav-sub-menu">
            <li><a href="{{url('home')}}">sales</a></li>
            <li><a href="{{url('poslist')}}">Pos List</a></li>
            <li><a href="{{url('createpo')}}">Add Pos</a></li>
            <li><a href="{{url('changepassword')}}">Change Password</a></li>
            <li><a href="{{url('logout')}}" data-method="post">Logout</a></li>
        </ul>
    </div>
</div>
