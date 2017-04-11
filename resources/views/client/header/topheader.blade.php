    <div class="top-header">
        <div class="container">
            <div class="nav-top-links">
                <a class="first-item" href="#"><img alt="phone" src="{{url('public/assets/images/phone.png')}}" />00-62-658-658</a>
                <a href="#"><img alt="email" src="{{url('public/assets/images/email.png')}}" />Contact us today!</a>
            </div>       

            <div id="user-info-top" class="user-info pull-right">
                @if(Auth::guard('customer')->check())
                <div class="dropdown">
                    <a class="current-open" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#"><span>{!! Auth::guard('customer')->user()->name !!}</span></a>
                    <ul class="dropdown-menu mega_dropdown" role="menu">
                        <li><a href="{!! url('dang-xuat') !!}">Logout</a></li>
                    </ul>
                </div>
                @else
                <div class="dropdown">
                    <a class="current-open" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#"><span>Tài khoản của bạn</span></a>
                    <ul class="dropdown-menu mega_dropdown" role="menu">
                        <li><a href="{!! url('dang-nhap') !!}">Login</a></li>
                    </ul>
                </div>
                @endif
            </div>
        </div>
    </div>
    <!--/.top-header -->