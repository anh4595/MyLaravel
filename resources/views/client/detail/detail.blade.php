<!DOCTYPE html>
<html>

<!-- Mirrored from kutethemes.com/demo/kuteshop/html/detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 21 Jul 2015 07:29:31 GMT -->
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
<body class="product-page">

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.8&appId=338999406310470";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- HEADER -->
<div id="header" class="header">
    @include('client.header.topheader')
    @include('client.header.mainheader')
    @include('client.menu.topmenu')
</div>
<!-- end header -->

<div class="columns-container">
    <div class="container" id="columns">
        <!-- row -->
        <div class="row">
            <!-- Left colunm -->
            <div class="column col-xs-12 col-sm-3" id="left_column">
                <!-- block best sellers -->
                <div class="block left-module">
                    <p class="title_block">BEST SELLERS</p>
                    <div class="block_content">
                        <div class="owl-carousel owl-best-sell" data-loop="true" data-nav = "false" data-margin = "0" data-autoplayTimeout="1000" data-autoplay="true" data-autoplayHoverPause = "true" data-items="1">
                            <ul class="products-block best-sell">
                            <?php
                                $list_sale=DB::table('products')->where('status',1)->where('homeflag',1)->orderby('created_at','DESC')->skip(0)->take(4)->get();
                            ?>
                            @foreach($list_sale as $item)
                                <li>
                                    <div class="products-block-left">
                                        <a href="{!! url('chi-tiet-san-pham',[$item->id,$item->metatitle]) !!}">
                                            <img src="{{url('public/assets/data/'.$item->image)}}" alt="SPECIAL PRODUCTS">
                                        </a>
                                    </div>
                                    <div class="products-block-right">
                                        <p class="product-name">
                                            <a href="{!! url('chi-tiet-san-pham',[$item->id,$item->metatitle]) !!}">{!! $item->name !!}</a>
                                        </p>
                                        <p class="product-price">${!! number_format($item->price,0,",",".") !!}</p>
                                        <p class="product-star">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                        </p>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                            <ul class="products-block best-sell">
                            <?php
                                $list_hot=DB::table('products')->where('status',1)->where('hotflag',1)->orderby('created_at','DESC')->skip(0)->take(4)->get();
                            ?>
                            @foreach($list_hot as $itemhot)
                                <li>
                                    <div class="products-block-left">
                                        <a href="{!! url('chi-tiet-san-pham',[$itemhot->id,$itemhot->metatitle]) !!}">
                                            <img src="{{url('public/assets/data/'.$itemhot->image)}}" alt="SPECIAL PRODUCTS">
                                        </a>
                                    </div>
                                    <div class="products-block-right">
                                        <p class="product-name">
                                            <a href="{!! url('chi-tiet-san-pham',[$itemhot->id,$itemhot->metatitle]) !!}">{!! $itemhot->name !!}</a>
                                        </p>
                                        <p class="product-price">${!! number_format($itemhot->price,0,",",".") !!}</p>
                                        <p class="product-star">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                        </p>
                                    </div>
                                </li>
                            @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- ./block best sellers  -->
                
                <!-- left silide -->
                <div class="col-left-slide left-module">
                    <ul class="owl-carousel owl-style2" data-loop="true" data-nav = "false" data-margin = "0" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-items="1" data-autoplay="true">
                        <li><a href="#"><img src="{{url('public/assets/data/slide-left.jpg')}}" alt="slide-left"></a></li>
                        <li><a href="#"><img src="{{url('public/assets/data/slide-left2.jpg')}}" alt="slide-left"></a></li>
                        <li><a href="#"><img src="{{url('public/assets/data/slide-left3.png')}}" alt="slide-left"></a></li>
                    </ul>
                </div>
                <!--./left silde-->
                <!-- block best sellers -->
                <div class="block left-module">
                    <p class="title_block">ON SALE</p>
                    <div class="block_content product-onsale">
                        <ul class="product-list owl-carousel" data-loop="true" data-nav = "false" data-margin = "0" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-items="1" data-autoplay="true">
                            <?php
                                $list_promotion=DB::table('products')->where('status',1)->where('promotionflag',1)->orderby('created_at','DESC')->skip(0)->take(6)->get();
                            ?>
                            @foreach($list_promotion as $itempro)
                            <li>
                                <div class="product-container">
                                    <div class="left-block">
                                        <a href="{!! url('chi-tiet-san-pham',[$itempro->id,$itempro->metatitle]) !!}">
                                            <img class="img-responsive" alt="product" src="{{url('public/assets/data/'.$itempro->image)}}" />
                                        </a>
                                        <div class="price-percent-reduction2">-30% OFF</div>
                                    </div>
                                    <div class="right-block">
                                        <h5 class="product-name"><a href="{!! url('chi-tiet-san-pham',[$itempro->id,$itempro->metatitle]) !!}">{!! $itempro->name !!}</a></h5>
                                        <div class="product-star">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                        </div>
                                        <div class="content_price">
                                            <span class="price product-price">${!! number_format($itempro->price,0,",",".") !!}</span>
                                            <span class="price old-price">${!! number_format($itempro->promotionprice,0,",",".") !!}</span>
                                        </div>
                                    </div>
                                    <div class="product-bottom">
                                        <a class="btn-add-cart" title="Add to Cart" href="{!! url('mua-hang',[$itempro->id,$itempro->metatitle]) !!}">Add to Cart</a>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                        </ul>
                    </div>
                </div>
                <!-- ./block best sellers  -->
                <!--Shale-->
                <div class="block left-module">
                    <p class="title_block">TAGS</p>
                        <div class="block_content">
                            <div class="tags">
                             <?php                            
                                $list_tag = DB::table('tags')->where('type','product')->get();
                            ?>
                            @foreach($list_tag as $itemtag)
                                <a href="{!! url('danh-sach-san-pham-tag',[$itemtag->id])!!}"><span class="level1">{!! $itemtag->name !!}</span></a>
                            @endforeach
                              <!--   <a href = "{!! url('danh-sach-san-pham',[$item->id,$item->metatitle]) !!}" ><span class="level1">Áo bé gái mới sinh</span></a>
                                <a href = "#" ><span class="level1">Áo cho bé</span></a> -->
                            </div>
                        </div>
                </div>
                <!--./Shale-->
                <!-- left silide -->
                <div class="col-left-slide left-module">
                    <div class="banner-opacity">
                        <a href="#"><img src="{{url('public/assets/data/ads-banner.jpg')}}" alt="ads-banner"></a>
                    </div>
                </div>
                <!--./left silde-->
            </div>
            <!-- ./left colunm -->
            <!-- Center colunm-->
            <div class="center_column col-xs-12 col-sm-9" id="center_column">
                <!-- Product -->
                    <div id="product">
                        <div class="primary-box row">
                            <div class="pb-left-column col-xs-12 col-sm-6">
                                <!-- product-imge-->
                                <div class="product-image">
                                    <div class="product-full">
                                        <img id="product-zoom" src="{{url('public/assets/data/'.$product->image)}}" data-zoom-image="{{url('public/assets/data/'.$product->image)}}"/>
                                    </div>
                                    <div class="product-img-thumb" id="gallery_01">
                                        <ul class="owl-carousel" data-items="3" data-nav="true" data-dots="false" data-margin="20" data-loop="true">
                                        <?php
                                            $list_image = explode(";",$product->moreimage);
                                        ?>
                                        @foreach($list_image as $itemmore)
                                            <li>
                                                <a href="#" data-image="{{url('publicassets/data/'.$itemmore)}}" data-zoom-image="{{url('public/assets/data/'.$itemmore)}}">
                                                    <img id="product-zoom"  src="{{url('public/assets/data/'.$itemmore)}}" /> 
                                                </a>
                                            </li>
                                        @endforeach
                                        </ul>
                                    </div>
                                </div>
                                <!-- product-imge-->
                            </div>
                            <div class="pb-right-column col-xs-12 col-sm-6">
                                <h1 class="product-name">{!! $product->name !!}</h1>
                                <div class="product-comments">
                                    <div class="product-star">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </div>
                                </div>
                                <div class="product-price-group">
                                @if($product->promotionprice!=null)
                                
                                    <span class="price">${!! number_format($product->promotionprice,0,",",".") !!}</span>
                                    <span class="old-price">${!! number_format($product->price,0,",",".") !!}</span>
                                    <span class="discount">-30%</span>
                                
                                @else
                                
                                     <span class="price">${!! number_format($product->price,0,",",".") !!}</span>
                                
                                @endif
                                </div>
                                <div class="info-orther">
                                    <p>Item Code: #{!! $product->id !!}</p>
                                    <p>Availability: <span class="in-stock">In stock</span></p>
                                    <p>Condition: 
                                    @if($product->hotflag == 1 && $product->promotionflag ==1)
                                    Hot, Sale
                                    @elseif($product->promotionflag == 1)
                                        Sale
                                        @elseif($product->hotflag == 1)
                                            Hot
                                    @endif</p>
                                </div>
                                <div class="product-desc">
                                    {!! $product->description !!}
                                </div>
                                <div class="form-option">
                                    <div class="attributes">
                                        <div class="attribute-label">Size:</div>
                                            <div class="attribute-list">
                                                <select>
                                                <?php
                                                    $list_size=explode(",",$product->size)
                                                ?>
                                                @foreach($list_size as $itemsize)
                                                    <option value="$itemsize">{!! $itemsize !!}</option>
                                                @endforeach
                                                </select>
                                            </div>
                                    </div>
                                </div>
                                <?php
                                   $promotionprice=number_format($product->promotionprice,0,",","")*23000;
                                    $price=number_format($product->price,0,",","")*23000
                                ?>
                                <div class="form-action">
                                    <div class="button-group">
                                        <a class="btn-add-cart" href="{!! url('mua-hang',[$product->id,$product->metatitle]) !!}">Add to cart</a>
                                         @if($product->promotionprice!=null)
                                              <a href="https://www.baokim.vn/payment/product/version11?business=programmers95%40gmail.com&id=&order_description=&product_name={!! $product->name !!}&product_price={!!$promotionprice!!}&product_quantity=1&total_amount={!!$promotionprice!!}&url_cancel=&url_detail={!! $product->name !!}&url_success=/ShopRST/">
                                              <img src="http://www.baokim.vn/developers/uploads/baokim_btn/thanhtoan-l.png" alt="Thanh toán an toàn với Bảo Kim !" border="0" title="Thanh toán trực tuyến an toàn dùng tài khoản Ngân hàng (VietcomBank, TechcomBank, Đông Á, VietinBank, Quân Đội, VIB, SHB,... và thẻ Quốc tế (Visa, Master Card...) qua Cổng thanh toán trực tuyến BảoKim.vn" >
                                              </a>
                                         @else
                                              <a href="https://www.baokim.vn/payment/product/version11?business=programmers95%40gmail.com&id=&order_description=&product_name={!! $product->name !!}&product_price={!!$price!!}&product_quantity=1&total_amount={!!$price!!}&url_cancel=&url_detail={!! $product->name !!}&url_success=/ShopRST/">
                                              <img src="http://www.baokim.vn/developers/uploads/baokim_btn/thanhtoan-l.png" alt="Thanh toán an toàn với Bảo Kim !" border="0" title="Thanh toán trực tuyến an toàn dùng tài khoản Ngân hàng (VietcomBank, TechcomBank, Đông Á, VietinBank, Quân Đội, VIB, SHB,... và thẻ Quốc tế (Visa, Master Card...) qua Cổng thanh toán trực tuyến BảoKim.vn" >
                                         @endif
                                        
                                    </div>
                                        
                                    <div class="button-group">
                                        <a class="wishlist" href="#"><i class="fa fa-heart-o"></i>
                                        <br>Wishlist</a>
                                        <a class="compare" href="#"><i class="fa fa-signal"></i>
                                        <br>        
                                        Compare</a>
                                    </div>
                                </div>
                                <div class="form-share">
                                    <div class="sendtofriend-print">
                                        <a href="javascript:print();"><i class="fa fa-print"></i> Print</a>
                                        <a href="#"><i class="fa fa-envelope-o fa-fw"></i>Send to a friend</a>
                                    </div>
                                    <div class="network-share">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- tab product -->
                        <div class="product-tab">
                            <ul class="nav-tab">
                                <li class="active">
                                    <a aria-expanded="false" data-toggle="tab" href="#product-detail">Product Details</a>
                                </li>
                                <li>
                                    <a aria-expanded="true" data-toggle="tab" href="#information">information</a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#reviews">reviews</a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#extra-tabs">Extra Tabs</a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#guarantees">guarantees</a>
                                </li>
                            </ul>
                            <div class="tab-container">
                                <div id="product-detail" class="tab-panel active">
                                    <?php echo html_entity_decode($product->detail)  ?>
                                </div>
                                <div id="information" class="tab-panel">
                                    <table class="table table-bordered">
                                        <tr>
                                            <td width="200">Compositions</td>
                                            <td>Cotton</td>
                                        </tr>
                                        <tr>
                                            <td>Styles</td>
                                            <td>Girly</td>
                                        </tr>
                                        <tr>
                                            <td>Properties</td>
                                            <td>Colorful Dress</td>
                                        </tr>
                                    </table>
                                </div>
                                <div id="reviews" class="tab-panel">
                                    <div class="product-comments-block-tab">
                                        <div class="fb-comments" data-href="http://localhost:81/MyLaravel/chi-tiet-san-pham/{!! $product->id !!}/{!! $product->metatitle !!}" data-numposts="3" width="828"></div>                    
                                    </div>
                                </div>
                                <div id="extra-tabs" class="tab-panel">
                                    <p>Phasellus accumsan cursus velit. Pellentesque egestas, neque sit amet convallis pulvinar, justo nulla eleifend augue, ac auctor orci leo non est. Sed lectus. Sed a libero. Vestibulum eu odio.</p>

                                    <p>Maecenas vestibulum mollis diam. In consectetuer turpis ut velit. Curabitur at lacus ac velit ornare lobortis. Praesent ac sem eget est egestas volutpat. Nam eget dui.</p>

                                    <p>Maecenas nec odio et ante tincidunt tempus. Vestibulum suscipit nulla quis orci. Aenean tellus metus, bibendum sed, posuere ac, mattis non, nunc. Aenean ut eros et nisl sagittis vestibulum. Aliquam eu nunc.</p> 
                                </div>
                                <div id="guarantees" class="tab-panel">
                                    <p>Phasellus accumsan cursus velit. Pellentesque egestas, neque sit amet convallis pulvinar, justo nulla eleifend augue, ac auctor orci leo non est. Sed lectus. Sed a libero. Vestibulum eu odio.</p>

                                    <p>Maecenas vestibulum mollis diam. In consectetuer turpis ut velit. Curabitur at lacus ac velit ornare lobortis. Praesent ac sem eget est egestas volutpat. Nam eget dui.</p>

                                    <p>Maecenas nec odio et ante tincidunt tempus. Vestibulum suscipit nulla quis orci. Aenean tellus metus, bibendum sed, posuere ac, mattis non, nunc. Aenean ut eros et nisl sagittis vestibulum. Aliquam eu nunc.</p> 
                                    <p>Maecenas vestibulum mollis diam. In consectetuer turpis ut velit. Curabitur at lacus ac velit ornare lobortis. Praesent ac sem eget est egestas volutpat. Nam eget dui.</p>
                                </div>
                            </div>
                        </div>
                        <!-- ./tab product -->
                        <!-- box product -->
                        <div class="page-product-box">
                            <h3 class="heading">Related Products</h3>
                            <ul class="product-list owl-carousel" data-dots="false" data-loop="true" data-nav = "true" data-margin = "30" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":3}}'>
                            <?php
                                $list_relate = DB::table('products')->where('status',1)->where('category_id',$product->category_id)->orderby('created_at','DESC')->skip(0)->take(10)->get();
                            ?>
                            @foreach($list_relate as $itemrelate)
                                <li>
                                    <div class="product-container">
                                        <div class="left-block">
                                            <a href="{!! url('chi-tiet-san-pham',[$itemrelate->id,$itemrelate->metatitle]) !!}">
                                                <img class="img-responsive" alt="product" src="{{url('public/assets/data/'.$itemrelate->image)}}" />
                                            </a>
                                            <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                            </div>
                                            <div class="add-to-cart">
                                                <a title="Add to Cart" href="{!! url('mua-hang',[$itemrelate->id,$itemrelate->metatitle]) !!}">Add to Cart</a>

                                            </div>
                                        </div>
                                        <div class="right-block">
                                            <h5 class="product-name"><a href="{!! url('chi-tiet-san-pham',[$itemrelate->id,$itemrelate->metatitle]) !!}">{!! $itemrelate->name !!}</a></h5>
                                            <div class="product-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </div>
                                            <div class="content_price">
                                                <span class="price product-price">${!! number_format($itemrelate->promotionprice,0,",",".") !!}</span>
                                                <span class="price old-price">${!! number_format($itemrelate->price,0,",",".") !!}</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        <!-- ./box product -->
                        <!-- box product -->
                        <div class="page-product-box">
                            <h3 class="heading">You might also like</h3>
                            <ul class="product-list owl-carousel" data-dots="false" data-loop="true" data-nav = "true" data-margin = "30" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":3}}'>
                            <?php
                                $list_like=DB::table('products')->where('status',1)->orderby('quantitysold','DESC')->skip(0)->take(10)->get();
                            ?>
                            @foreach($list_like as $itemlike)
                                <li>
                                    <div class="product-container">
                                        <div class="left-block">
                                            <a href="{!! url('chi-tiet-san-pham',[$itemlike->id,$itemlike->metatitle]) !!}">
                                                <img class="img-responsive" alt="product" src="{{url('public/assets/data/'.$itemlike->image)}}" />
                                            </a>
                                            <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                            </div>
                                            <div class="add-to-cart">
                                                <a title="Add to Cart" href="{!! url('mua-hang',[$itemlike->id,$itemlike->metatitle]) !!}">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="right-block">
                                            <h5 class="product-name"><a href="{!! url('chi-tiet-san-pham',[$itemlike->id,$itemlike->metatitle]) !!}">{!! $itemlike->name !!}</a></h5>
                                            <div class="product-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </div>
                                            <div class="content_price">
                                                <span class="price product-price">${!! number_format($itemlike->promotionprice,0,",",".") !!}</span>
                                                <span class="price old-price">${!! number_format($itemlike->price,0,",",".") !!}</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                            </ul>
                        </div>
                        <!-- ./box product -->
                    </div>
                <!-- Product -->
            </div>
            <!-- ./ Center colunm -->
        </div>
        <!-- ./row-->
    </div>
</div>

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
<script type="text/javascript" src="{{url('public/assets/js/jquery.actual.min.js')}}"></script>
<script type="text/javascript" src="{{url('public/assets/js/theme-script.js')}}"></script>

</body>

<!-- Mirrored from kutethemes.com/demo/kuteshop/html/detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 21 Jul 2015 07:30:46 GMT -->
</html>