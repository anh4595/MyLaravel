<!-- featured category electronic -->
        <div class="category-featured">
            <nav class="navbar nav-menu nav-menu-orange show-brand">
              <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                  <div class="navbar-brand"><a href="#"><img alt="fashion" src="{{url('public/assets/data/electronic.png')}}" />electronic</a></div>
                  <span class="toggle-menu"></span>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse">           
                  <ul class="nav navbar-nav">
                    <li class="active"><a data-toggle="tab" href="#tab-15">Television</a></li>
                    <li><a data-toggle="tab" href="#tab-16">Air Conditional</a></li>
                    <li><a data-toggle="tab" href="#tab-17">ARM</a></li>
                    <li><a data-toggle="tab" href="#tab-18">Theater</a></li>
                  </ul>
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
              <div id="elevator-3" class="floor-elevator">
                    <a href="#elevator-2" class="btn-elevator up fa fa-angle-up"></a>
                    <a href="#elevator-4" class="btn-elevator down fa fa-angle-down"></a>
              </div>
            </nav>
            <div class="category-banner">
                <div class="col-sm-6 banner">
                    <a href="#"><img alt="ads2" class="img-responsive" src="{{url('public/assets/data/ads8.jpg')}}" /></a>
                </div>
                <div class="col-sm-6 banner">
                    <a href="#"><img alt="ads2" class="img-responsive" src="{{url('public/assets/data/ads9.jpg')}}" /></a>
                </div>
           </div>
           <div class="product-featured clearfix">
                <div class="banner-featured">
                    <div class="featured-text"><span>featured</span></div>
                    <div class="banner-img">
                        <a href="#"><img alt="Featurered 1" src="{{url('public/assets/data/f3.jpg')}}" /></a>
                    </div>
                </div>
                <div class="product-featured-content">
                    <div class="product-featured-list">
                        <div class="tab-container autoheight">
                            <!-- tab product -->
                            <?php
                                $list_tele=DB::table('products')->where('category_id',19)->where('status',1)->orderby('id')->skip(0)->take(6)->get();
                            ?>
                            <div class="tab-panel active" id="tab-15">
                                <ul class="product-list owl-carousel"  data-dots="false" data-loop="true" data-nav="true" data-margin = "0" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":4}}'>
                                    @foreach($list_tele as $itemtele)
                                    <li>
                                        <div class="left-block">
                                            <a href="{!! url('chi-tiet-san-pham',[$itemtele->id,$itemtele->metatitle]) !!}"><img class="img-responsive" alt="product" src="{{url('public/assets/data/'.$itemtele->image)}}" /></a>
                                            <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                            </div>
                                            <div class="add-to-cart">
                                                <a title="Add to Cart" href="{!! url('mua-hang',[$itemtele->id,$itemtele->metatitle]) !!}">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="right-block">
                                            <h5 class="product-name"><a href="{!! url('chi-tiet-san-pham',[$itemtele->id,$itemtele->metatitle]) !!}">{!! $itemtele->name !!}</a></h5>
                                            <div class="content_price">
                                                <span class="price product-price">${!! number_format($itemtele->promotionprice,0,",",".") !!}</span>
                                                <span class="price old-price">${!! number_format($itemtele->price,0,",",".") !!}</span>
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
                                $list_aricon=DB::table('products')->where('category_id',21)->where('status',1)->orderby('id')->skip(0)->take(6)->get();
                            ?>
                            <div class="tab-panel" id="tab-16">
                                <ul class="product-list owl-carousel"  data-dots="false" data-loop="true" data-nav = "true" data-margin = "0" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":4}}'>
                                    @foreach($list_aricon as $itemair)
                                    <li>
                                        <div class="left-block">
                                            <a href="{!! url('chi-tiet-san-pham',[$itemair->id,$itemair->metatitle]) !!}"><img class="img-responsive" alt="product" src="{{url('public/assets/data/'.$itemair->image)}}" /></a>
                                            <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                            </div>
                                            <div class="add-to-cart">
                                                <a title="Add to Cart" href="{!! url('mua-hang',[$itemair->id,$itemair->metatitle]) !!}">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="right-block">
                                            <h5 class="product-name"><a href="{!! url('chi-tiet-san-pham',[$itemair->id,$itemair->metatitle]) !!}">{!! $itemair->name !!}</a></h5>
                                            <div class="content_price">
                                                <span class="price product-price">${!! number_format($itemair->price,0,",",".") !!}</span>
                                                <span class="price old-price">${!! number_format($itemair->promotionprice,0,",",".") !!}</span>
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
                                $list_arm=DB::table('products')->where('category_id',20)->where('status',1)->orderby('id')->skip(0)->take(6)->get();
                            ?>
                            <div class="tab-panel" id="tab-17">
                                <ul class="product-list owl-carousel"  data-dots="false" data-loop="true" data-nav="true" data-margin = "0" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":4}}'>
                                    @foreach($list_arm as $itemarm)
                                    <li>
                                        <div class="left-block">
                                            <a href="{!! url('chi-tiet-san-pham',[$itemarm->id,$itemarm->metatitle]) !!}"><img class="img-responsive" alt="product" src="{{url('public/assets/data/p18.jpg')}}" /></a>
                                            <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                            </div>
                                            <div class="add-to-cart">
                                                <a title="Add to Cart" href="{!! url('mua-hang',[$itemarm->id,$itemarm->metatitle]) !!}">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="right-block">
                                            <h5 class="product-name"><a href="{!! url('chi-tiet-san-pham',[$itemarm->id,$itemarm->metatitle]) !!}">{!! $itemarm->name !!}</a></h5>
                                            <div class="content_price">
                                                <span class="price product-price">${!! number_format($itemarm->promotionprice,0,",",".") !!}</span>
                                                <span class="price old-price">${!! number_format($itemarm->price,0,",",".") !!}</span>
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
                                $list_thread=DB::table('products')->where('category_id',22)->where('status',1)->orderby('id')->skip(0)->take(6)->get();
                            ?>
                            <div class="tab-panel" id="tab-18">
                                <ul class="product-list owl-carousel"  data-dots="false" data-loop="true" data-nav = "true" data-margin = "0" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":4}}'>
                                    @foreach($list_thread as $itemthread)
                                    <li>
                                        <div class="left-block">
                                            <a href="{!! url('chi-tiet-san-pham',[$itemthread->id,$itemthread->metatitle]) !!}"><img class="img-responsive" alt="product" src="{{url('public/assets/data/'.$itemthread->image)}}" /></a>
                                            <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                            </div>
                                            <div class="add-to-cart">
                                                <a title="Add to Cart" href="{!! url('mua-hang',[$itemthread->id,$itemthread->metatitle]) !!}">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="right-block">
                                            <h5 class="product-name"><a href="{!! url('chi-tiet-san-pham',[$itemthread->id,$itemthread->metatitle]) !!}">{!! $itemthread->name !!}</a></h5>
                                            <div class="content_price">
                                                <span class="price product-price">${!! number_format($itemthread->promotionprice,0,",",".") !!}</span>
                                                <span class="price old-price">${!! number_format($itemthread->price,0,",",".") !!}</span>
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
        <!-- end featured category electronic-->