        <!-- featured category Digital -->
        <div class="category-featured">
            <nav class="navbar nav-menu nav-menu-blue show-brand">
              <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                  <div class="navbar-brand"><a href="#"><img alt="fashion" src="{{url('public/assets/data/digital.png')}}" />Digital</a></div>
                  <span class="toggle-menu"></span>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse">           
                  <ul class="nav navbar-nav">
                    <li class="active"><a data-toggle="tab" href="#tab-21" >Mobile</a></li>
                    <li><a data-toggle="tab" href="#tab-22">Camera</a></li>
                    <li><a data-toggle="tab" href="#tab-23">Laptop</a></li>
                    <li><a data-toggle="tab" href="#tab-24">Notebook</a></li>
                  </ul>
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
              <div id="elevator-4" class="floor-elevator">
                    <a href="#elevator-3" class="btn-elevator up fa fa-angle-up"></a>
                    <a href="#elevator-5" class="btn-elevator down fa fa-angle-down"></a>
              </div>
            </nav>
            <div class="category-banner">
                <div class="col-sm-6 banner">
                    <a href="#"><img alt="ads2" class="img-responsive" src="{{url('public/assets/data/ads10.jpg')}}" /></a>
                </div>
                <div class="col-sm-6 banner">
                    <a href="#"><img alt="ads2" class="img-responsive" src="{{url('public/assets/data/ads11.jpg')}}" /></a>
                </div>
           </div>
           <div class="product-featured clearfix">
                <div class="banner-featured">
                    <div class="featured-text"><span>featured</span></div>
                    <div class="banner-img">
                        <a href="#"><img alt="Featurered 1" src="{{url('public/assets/data/f4.jpg')}}" /></a>
                    </div>
                </div>
                <div class="product-featured-content">
                    <div class="product-featured-list">
                        <div class="tab-container autoheight">
                            <?php
                                $list_mobile=DB::table('products')->where('category_id',23)->where('status',1)->orderby('id')->skip(0)->take(6)->get();
                            ?>
                            <div class="tab-panel active" id="tab-21">
                                <ul class="product-list owl-carousel"  data-dots="false" data-loop="true" data-nav = "true" data-margin = "0" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":4}}'>
                                    @foreach($list_mobile as $itemmobile)                                    
                                    <li>
                                        <div class="left-block">
                                            <a href="{!! url('chi-tiet-san-pham',[$itemmobile->id,$itemmobile->metatitle]) !!}"><img class="img-responsive" alt="product" src="{{url('public/assets/data/'.$itemmobile->image)}}" /></a>
                                            <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                            </div>
                                            <div class="add-to-cart">
                                                <a title="Add to Cart" href="{!! url('mua-hang',[$itemmobile->id,$itemmobile->metatitle]) !!}">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="right-block">
                                            <h5 class="product-name"><a href="{!! url('chi-tiet-san-pham',[$itemmobile->id,$itemmobile->metatitle]) !!}">{!! $itemmobile->name !!}</a></h5>
                                            <div class="content_price">
                                                <span class="price product-price">${!! number_format($itemmobile->promotionprice,0,",",".") !!}</span>
                                                <span class="price old-price">${!! number_format($itemmobile->price,0,",",".") !!}</span>
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
                                  <!-- tab product -->
                            <?php
                                $list_camera=DB::table('products')->where('category_id',24)->where('status',1)->orderby('id')->skip(0)->take(6)->get();
                            ?>
                            <div class="tab-panel" id="tab-22">
                                <ul class="product-list owl-carousel"  data-dots="false" data-loop="true" data-nav = "true" data-margin = "0" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":4}}'>
                                    @foreach($list_camera as $itemcamera)
                                    <li>
                                        <div class="left-block">
                                            <a href="{!! url('chi-tiet-san-pham',[$itemcamera->id,$itemcamera->metatitle]) !!}"><img class="img-responsive" alt="product" src="{{url('public/assets/data/'.$itemcamera->image)}}" /></a>
                                            <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                            </div>
                                            <div class="add-to-cart">
                                                <a title="Add to Cart" href="{!! url('mua-hang',[$itemcamera->id,$itemcamera->metatitle]) !!}">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="right-block">
                                            <h5 class="product-name"><a href="{!! url('chi-tiet-san-pham',[$itemcamera->id,$itemcamera->metatitle]) !!}">{!! $itemcamera->name !!}</a></h5>
                                            <div class="content_price">
                                                <span class="price product-price">${!! number_format($itemcamera->promotionprice,0,",",".") !!}</span>
                                                <span class="price old-price">${!! number_format($itemcamera->price,0,",",".") !!}</span>
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
                                  <!-- tab product -->
                            <?php
                                $list_laptop=DB::table('products')->where('category_id',25)->where('status',1)->orderby('id')->skip(0)->take(6)->get();
                            ?>
                            <div class="tab-panel" id="tab-23">
                                <ul class="product-list owl-carousel"  data-dots="false" data-loop="true" data-nav = "true" data-margin = "0" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":4}}'>
                                    @foreach($list_laptop as $itemlaptop)
                                    <li>
                                        <div class="left-block">
                                            <a href="{!! url('chi-tiet-san-pham',[$itemlaptop->id,$itemlaptop->metatitle]) !!}"><img class="img-responsive" alt="product" src="{{url('public/assets/data/'.$itemlaptop->image)}}" /></a>
                                            <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                            </div>
                                            <div class="add-to-cart">
                                                <a title="Add to Cart" href="{!! url('mua-hang',[$itemlaptop->id,$itemlaptop->metatitle]) !!}">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="right-block">
                                            <h5 class="product-name"><a href="{!! url('chi-tiet-san-pham',[$itemlaptop->id,$itemlaptop->metatitle]) !!}">{!! $itemlaptop->name !!}</a></h5>
                                            <div class="content_price">
                                                <span class="price product-price">${!! number_format($itemlaptop->promotionprice,0,",",".") !!}</span>
                                                <span class="price old-price">${!! number_format($itemlaptop->price,0,",",".") !!}</span>
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
                                  <!-- tab product -->
                            <?php
                                $list_book=DB::table('products')->where('category_id',26)->where('status',1)->orderby('id')->skip(0)->take(6)->get();
                            ?>
                            <div class="tab-panel" id="tab-24">
                                <ul class="product-list owl-carousel"  data-dots="false" data-loop="true" data-nav = "true" data-margin = "0" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":4}}'>
                                    @foreach($list_laptop as $itembook)
                                    <li>
                                        <div class="left-block">
                                            <a href="{!! url('chi-tiet-san-pham',[$itembook->id,$itembook->metatitle]) !!}"><img class="img-responsive" alt="product" src="{{url('public/assets/data/'.$itembook->image)}}" /></a>
                                            <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                            </div>
                                            <div class="add-to-cart">
                                                <a title="Add to Cart" href="{!! url('mua-hang',[$itembook->id,$itembook->metatitle]) !!}">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="right-block">
                                            <h5 class="product-name"><a href="{!! url('chi-tiet-san-pham',[$itembook->id,$itembook->metatitle]) !!}">{!! $itembook->name !!}</a></h5>
                                            <div class="content_price">
                                                <span class="price product-price">${!! number_format($itembook->promotionprice,0,",",".") !!}</span>
                                                <span class="price old-price">${!! number_format($itembook->price,0,",",".") !!}</span>
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
                <!-- end featured category Digital-->