        <!-- featured category fashion -->
        <div class="category-featured">
            <nav class="navbar nav-menu nav-menu-red show-brand">
              <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                  <div class="navbar-brand"><a href="#"><img alt="fashion" src="{{url('public/assets/data/fashion.png')}}" />fashion</a></div>
                  <span class="toggle-menu"></span>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse">           
                  <ul class="nav navbar-nav">
                    <li class="active"><a data-toggle="tab" href="#tab-3">Women's</a></li>
                    <li><a data-toggle="tab" href="#tab-4">Men's</a></li>
                    <li><a data-toggle="tab" href="#tab-5">Kid's</a></li>
                    <li><a data-toggle="tab" href="#tab-6">Accessories</a></li>
                  </ul>
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
              <div id="elevator-1" class="floor-elevator">
                    <a href="#" class="btn-elevator up disabled fa fa-angle-up"></a>
                    <a href="#elevator-2" class="btn-elevator down fa fa-angle-down"></a>
              </div>
            </nav>
            <div class="category-banner">
                <div class="col-sm-6 banner">
                    <a href="#"><img alt="ads2" class="img-responsive" src="{{url('public/assets/data/ads2.jpg')}}" /></a>
                </div>
                <div class="col-sm-6 banner">
                    <a href="#"><img alt="ads2" class="img-responsive" src="{{url('public/assets/data/ads3.jpg')}}" /></a>
                </div>
           </div>
           <div class="product-featured clearfix">
                <div class="banner-featured">
                    <div class="featured-text"><span>featured</span></div>
                    <div class="banner-img">
                        <a href="#"><img alt="Featurered 1" src="{{url('public/assets/data/f1.jpg')}}" /></a>
                    </div>
                </div>
                <div class="product-featured-content">
                    <div class="product-featured-list">
                        <div class="tab-container">
                            <?php
                                $list_women=DB::table('products')->where('category_id',9)->where('status',1)->orderby('id')->skip(0)->take(6)->get();
                            ?>
                            <div class="tab-panel active" id="tab-3">
                                <ul class="product-list owl-carousel" data-dots="false" data-loop="true" data-nav = "true" data-margin = "0" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":4}}'>
                                    @foreach($list_women as $item)
                                    <li>
                                        <div class="left-block">
                                            <a href="{!! url('chi-tiet-san-pham',[$item->id,$item->metatitle]) !!}">
                                            <img class="img-responsive" alt="product" src="{{url('public/assets/data/'.$item->image)}}" /></a>
                                            <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                            </div>
                                            <div class="add-to-cart">
                                                <a title="Add to Cart" href="{!! url('mua-hang',[$item->id,$item->metatitle]) !!}">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="right-block">
                                            <h5 class="product-name"><a href="{!! url('chi-tiet-san-pham',[$item->id,$item->metatitle]) !!}">{!! $item->name !!}</a></h5>
                                            <div class="content_price">
                                                <span class="price product-price">${!! number_format($item->promotionprice,0,",",".") !!}</span>
                                                <span class="price old-price">${!! number_format($item->price,0,",",".") !!}</span>
                                            </div>
                                            <div class="product-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </div>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>

                            <?php
                                $list_men=DB::table('products')->where('category_id',10)->where('status',1)->orderby('id')->skip(0)->take(6)->get();
                            ?>
                            <div class="tab-panel" id="tab-4">
                                <ul class="product-list owl-carousel" data-dots="false" data-loop="true" data-nav = "true" data-margin = "0" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":4}}'>
                                    @foreach($list_men as $itemmen)
                                    <li>
                                        <div class="left-block">
                                            <a href="{!! url('chi-tiet-san-pham',[$itemmen->id,$itemmen->metatitle]) !!}">
                                            <img class="img-responsive" alt="product" src="{{url('public/assets/data/'.$itemmen->image)}}" /></a>
                                            <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                            </div>
                                            <div class="add-to-cart">
                                                <a title="Add to Cart" href="{!! url('mua-hang',[$itemmen->id,$itemmen->metatitle]) !!}">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="right-block">
                                            <h5 class="product-name"><a href="{!! url('chi-tiet-san-pham',[$itemmen->id,$itemmen->metatitle]) !!}">{!! $itemmen->name !!}</a></h5>
                                            <div class="content_price">
                                                <span class="price product-price">${!! number_format($itemmen->promotionprice,0,",",".") !!}</span>
                                                <span class="price old-price">${!! number_format($itemmen->price,0,",",".") !!}</span>
                                            </div>
                                            <div class="product-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </div>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>

                            <?php
                                $list_kid=DB::table('products')->where('category_id',13)->where('status',1)->orderby('id')->skip(0)->take(6)->get();
                            ?>
                            <div class="tab-panel" id="tab-5">
                                <ul class="product-list owl-carousel" data-dots="false" data-loop="true" data-nav = "true" data-margin = "0" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":4}}'>
                                    @foreach($list_kid as $itemkid)
                                    <li>
                                        <div class="left-block">
                                            <a href="{!! url('chi-tiet-san-pham',[$itemkid->id,$itemkid->metatitle]) !!}">
                                            <img class="img-responsive" alt="product" src="{{url('public/assets/data/'.$itemkid->image)}}" /></a>
                                            <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                            </div>
                                            <div class="add-to-cart">
                                                <a title="Add to Cart" href="{!! url('mua-hang',[$itemkid->id,$itemkid->metatitle]) !!}">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="right-block">
                                            <h5 class="product-name"><a href="{!! url('chi-tiet-san-pham',[$itemkid->id,$itemkid->metatitle]) !!}">{!! $itemkid->name !!}</a></h5>
                                            <div class="content_price">
                                                <span class="price product-price">${!! number_format($itemkid->promotionprice,0,",",".") !!}</span>
                                                <span class="price old-price">${!! number_format($itemkid->price,0,",",".") !!}</span>
                                            </div>
                                            <div class="product-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </div>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>

                            <?php
                                $list_acce=DB::table('products')->where('category_id',14)->where('status',1)->orderby('id')->skip(0)->take(6)->get();
                            ?>
                            <div class="tab-panel" id="tab-6">
                                <ul class="product-list owl-carousel" data-dots="false" data-loop="true" data-nav = "true" data-margin = "0" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":4}}'>
                                    @foreach($list_acce as $itemacce)
                                    <li>
                                        <div class="left-block">
                                            <a href="{!! url('chi-tiet-san-pham',[$itemacce->id,$itemacce->metatitle]) !!}">
                                            <img class="img-responsive" alt="product" src="{{url('public/assets/data/'.$itemacce->image)}}" /></a>
                                            <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                            </div>
                                            <div class="add-to-cart">
                                                <a title="Add to Cart" href="{!! url('mua-hang',[$itemacce->id,$itemacce->metatitle]) !!}">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="right-block">
                                            <h5 class="product-name"><a href="{!! url('chi-tiet-san-pham',[$itemacce->id,$itemacce->metatitle]) !!}">{!! $itemacce->name !!}</a></h5>
                                            <div class="content_price">
                                                <span class="price product-price">${!! number_format($itemacce->promotionprice,0,",",".") !!}</span>
                                                <span class="price old-price">${!! number_format($itemacce->price,0,",",".") !!}</span>
                                            </div>
                                            <div class="product-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </div>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>

                        </div>
                        
                    </div>
                </div>
           </div>
        </div>
        <!-- end featured category fashion -->