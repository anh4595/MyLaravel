<!DOCTYPE html>
<html>

<!-- Mirrored from kutethemes.com/demo/kuteshop/html/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 21 Jul 2015 07:31:04 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{url('public/assets/lib/bootstrap/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{url('public/assets/lib/font-awesome/css/font-awesome.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{url('public/assets/lib/select2/css/select2.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{url('public/assets/lib/jquery.bxslider/jquery.bxslider.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{url('public/assets/lib/owl.carousel/owl.carousel.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{url('public/assets/lib/jquery-ui/jquery-ui.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{url('public/assets/lib/fancyBox/jquery.fancybox.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{url('public/assets/css/animate.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{url('public/assets/css/reset.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{url('public/assets/css/style.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{url('public/assets/css/responsive.css')}}" />
    <title>RST-Shop</title>
</head>
<body class="category-page">
<!-- HEADER -->
<div id="header" class="header">
    @include('client.header.topheader')
    @include('client.header.mainheader')
    @include('client.menu.topmenu')
</div>
<!-- end header -->

<!-- page wapper-->
<div class="columns-container">
    <div class="container" id="columns">
        <!-- page heading-->
        <h2 class="page-heading">
            <span class="page-heading-title2">ĐĂNG NHẬP WEBSITE</span>
        </h2>
        <!-- ../page heading-->
        <div class="page-content">
            <div class="row">
                <div class="col-sm-6">
                    <div class="box-authentication">
                    	@if(count($errors)>0)
                            <div class="alert alert-danger">
                                <ul >
                                    @foreach($errors->all() as $error)
                                        <li style="">{!! $error !!}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form role="form" action="{!! url('dang-ky') !!}" method="POST">
                            <input type="hidden" name="_token" value="{!! csrf_token() !!}" />
                            <h3>Tạo mới tài khoản</h3>
                            <p>Bạn vui lòng điền đầy đủ thông tin đăng kí vào mẫu đăng kí bên dưới để tạo mới tài khoản.</p>
                            <label for="name_register">Họ tên</label>
                            <input name="name_register" type="text" class="form-control">
                            <label for="address_register">Địa chỉ</label>
                            <input name="address_register" type="text" class="form-control">
                            <label for="phone_register">Số điện thoại</label>
                            <input name="phone_register" type="phone" class="form-control">
                            <label for="emmail_register">Địa chỉ Email</label>
                            <input name="emmail_register" type="email" class="form-control">
                            <label for="username_register">Tên đăng nhập</label>
                            <input name="username_register" type="text" class="form-control">
                            <label for="pass_register">Mật khẩu</label>
                            <input name="pass_register" type="password" class="form-control">
                            <label for="repass_register">Nhập lại mật khẩu</label>
                            <input name="repass_register" type="password" class="form-control">
                            <button type="submit" name = "submit2" class="button"><i class="fa fa-user"></i> Tạo tài khoản</button>
                        </form>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="box-authentication">
                        <form action="{!! url('dang-nhap') !!}" method="POST">
                            <input type="hidden" name="_token" value="{!! csrf_token() !!}" />
                            <h3>Bạn đã có tài khoản?</h3>
                            <label for="username_login">Tên đăng nhập</label>
                            <input name="username_login" type="text" class="form-control">
                            <label for="password_login">Password</label>
                            <input name="password_login" type="password" class="form-control">
                            <p class="forgot-pass"><a href="#">Quên mật khẩu?</a></p>
                            <button type = "submit" name = "submit" class="button"><i class="fa fa-lock"></i> Đăng nhập</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ./page wapper-->
<!-- Footer -->
<footer id="footer">
     <div class="container">
        @include('client.footer.introducebox')
        @include('client.footer.trademarkbox')
        @include('client.footer.textbox')
        @include('client.footer.menubox')
    </div> 
</footer>

<a href="#" class="scroll_top" title="Scroll to Top" style="display: inline;">Scroll</a>
<!-- Script-->
<script type="text/javascript" src="{{url('public/assets/lib/jquery/jquery-1.11.2.min.js')}}"></script>
<script type="text/javascript" src="{{url('public/assets/lib/bootstrap/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{url('public/assets/lib/select2/js/select2.min.js')}}"></script>
<script type="text/javascript" src="{{url('public/assets/lib/jquery.bxslider/jquery.bxslider.min.js')}}"></script>
<script type="text/javascript" src="{{url('public/assets/lib/owl.carousel/owl.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{url('public/assets/lib/jquery.countdown/jquery.countdown.min.js')}}"></script>
<script type="text/javascript" src="{{url('public/assets/lib/jquery.elevatezoom.js')}}"></script>
<script type="text/javascript" src="{{url('public/assets/lib/jquery-ui/jquery-ui.min.js')}}"></script>
<script type="text/javascript" src="{{url('public/assets/lib/fancyBox/jquery.fancybox.js')}}"></script>
<script src="{{url('public/assets/lib/jquery/myscript.js')}}"></script>
<script type="text/javascript" src="{{url('public/assets/js/jquery.actual.min.js')}}"></script>
<script type="text/javascript" src="{{url('public/assets/js/theme-script.js')}}"></script>
</body>

<!-- Mirrored from kutethemes.com/demo/kuteshop/html/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 21 Jul 2015 07:31:04 GMT -->
</html>