<!DOCTYPE html>
<html>

<!-- Mirrored from kutethemes.com/demo/kuteshop/html/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 21 Jul 2015 07:31:04 GMT -->
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
            <span class="page-heading-title2">THANH TOÁN</span>
        </h2>
        <!-- ../page heading-->
        <form action="{!! url('thanh-toan') !!}" method="POST">
            <input type="hidden" name="_token" value="{!! csrf_token() !!}" />
            <div class="page-content checkout-page">
                <h3 class="checkout-sep">Thông tin nhận hàng</h3>
                <div class="box-border">
                    <ul>                   
                        <li class="row">                       
                            <div class="col-sm-6">                            
                                <label for="first_name_1" class="required">Họ tên</label>
                                <input class="input form-control" type="text" name="name" value="{!! Auth::guard('customer')->user()->name !!}">
                            </div><!--/ [col] -->
                            <div class="col-sm-6">                     
                                <label for="last_name_1" class="required">Địa chỉ</label>
                                <input class="input form-control" type="text" name="address" value="{!! Auth::guard('customer')->user()->address !!}">
                            </div><!--/ [col] -->
                        </li><!--/ .row -->
                        <li class="row">
                            <div class="col-sm-6">                      
                                <label for="company_name_1">Số điện thoại</label>
                                <input class="input form-control" type="text" name="phone" value="{!! Auth::guard('customer')->user()->phone !!}">
                            </div><!--/ [col] -->
                            <div class="col-sm-6">                            
                                <label for="email_address_1" class="required">Địa chỉ Email</label>
                                <input class="input form-control" type="text" name="email" value="{!! Auth::guard('customer')->user()->email !!}">
                            </div><!--/ [col] -->
                        </li><!--/ .row -->
                    </ul>
                </div>
                <h3 class="checkout-sep">Thông tin giỏ hàng</h3>
                <div class="box-border">
                    <table class="table table-bordered table-responsive cart_summary">
                        <thead>
                        <tr>
                                <th class="cart_product">Sản phẩm</th>
                                <th>Thông tin sản phẩm</th>
                                <th>Tình trạng</th>
                                <th>Giá tiền</th>
                                <th>Số lượng</th>
                                <th>Tổng tiền</th>
                                <th class="action"><i class="fa fa-trash-o"></i></th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($content as $item)
                                <tr>
                                    <td class="cart_product">
                                        <a href="#"><img src="{{url('public/assets/data/'.$item->options->img)}}" alt="Product"></a>
                                    </td>
                                    <td class="cart_description">
                                        <p class="product-name" name="nameproduct"><a href="#">{!! $item->name !!}</a></p>
                                        <input type="hidden" name="productid" value="{!! $item->id !!}" />
                                        <small class="cart_ref" name="code">SKU : #{!! $item->id !!}</small><br>
                                        <small><a href="#" name="size">Size : S</a></small>
                                    </td>
                                    <td class="cart_avail"><span class="label label-success">Trong kho</span></td>
                                    <td class="price"><span>${!! number_format($item->price,0,",",".") !!}</span></td>
                                    <input type="hidden" value="{!! $item->price !!}" name="priceproduct"/>
                                    <td class="qty">
                                        <input name="quantity" data-id="{!! $item->rowId !!}" data-price="{!! $item->price !!}" class="autoupdate form-control input-sm" type="text" value='{!! $item->qty !!}'>
                                    </td>
                                    <td class="price">
                                        <span name="total" id="total_{!! $item->rowId !!}">${!! number_format(($item->price)*($item->qty),0,",",".") !!}</span>
                                    </td>
                                    <td style="text-align: center;">
                                        <a href="{!! url('xoa-san-pham',['id'=>$item->rowId]) !!}"><i class="fa fa-trash" aria-hidden="true"></i></a> 
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="2" rowspan="2"></td>
                            </tr>
                            <tr>
                                <td colspan="3"><strong>Total</strong></td>
                                <td colspan="2" name="subtotal"><strong>${!! $total !!}</strong></td>
                            </tr>
                        </tfoot>    
                    </table>
                    <button class="button pull-right">Thanh toán</button>
                </div>
            </div>
        </form>
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

<!-- Mirrored from kutethemes.com/demo/kuteshop/html/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 21 Jul 2015 07:31:04 GMT -->
</html>