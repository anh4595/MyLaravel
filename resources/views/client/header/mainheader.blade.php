 <!-- MAIN HEADER -->
    <div class="container main-header">
        <div class="row">
            <div class="col-xs-12 col-sm-3 logo">
                <a href="{!! URL('/') !!}"><img alt="Kute Shop" src="{{url('public/assets/images/logo.png')}}" /></a>
            </div>
            <div class="col-xs-7 col-sm-7 header-search-box">
                <form action="search" class="form-inline">
                    <div class="form-group form-category" >
                        <input type="text" name="from" >
                     </div>
                    <div class="form-group input-serach">
                        <input type="text" name="to">
                    </div>
                    <button type="submit" name="submit" class="pull-right btn-search"></button>
                </form>
            </div>
            <div id="cart-block" class="col-xs-5 col-sm-2 shopping-cart-box">
            <?php
                $item_cart=Cart::content();
                $count_cartItem=Cart::count();
                $subtotal=Cart::subtotal(0,",",".");
            ?>
                <a class="cart-link" href="{!! url('gio-hang') !!}">
                    <span class="title">Giỏ hàng</span>
                    <span class="total">{!! $count_cartItem !!} Sản phẩm </span>     
                    @if($count_cartItem != 0)   
                        <span class="notify notify-left">{!! $count_cartItem !!}</span>
                    @else
                        <span class="notify notify-left">0</span>
                    @endif
                </a>
                <div class="cart-block">
                    <div class="cart-block-content">
                        <div class="cart-block-list">
                            <ul>
                            @foreach($item_cart as $item)
                                <li class="product-info">
                                    <div class="p-left">
                                        <a href="{!! url('xoa-san-pham',['id'=>$item->rowId]) !!}" class="remove_link"></a>
                                        <a href="#">
                                        <img class="img-responsive" src="{{url('public/assets/data/'.$item->options->img)}}" alt="p10">
                                        </a>
                                    </div>
                                    <div class="p-right">
                                        <p class="p-name">{!! $item->name !!}</p>
                                        <p class="p-rice">Đơn giá: {!! number_format($item->price,0,",",".") !!} VNĐ</p>
                                        <p>Số lượng: {!! $item->qty !!}</p>
                                    </div>
                                </li>
                            @endforeach
                            </ul>
                        </div>
                        <div class="toal-cart">
                            <span>Total</span>
                            <span class="toal-price pull-right">${!! $subtotal !!}</span>
                        </div>
                        <div class="cart-buttons">
                            <a href="{!! url('gio-hang') !!}" class="btn-check-out">Checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    <!-- END MANIN HEADER -->