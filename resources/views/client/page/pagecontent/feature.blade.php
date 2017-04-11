        <!-- featured category furniture -->
        <div class="category-featured">
            <nav class="navbar nav-menu nav-menu-blue2 show-brand">
              <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                  <div class="navbar-brand"><a href="#"><img alt="fashion" src="{{url('public/assets/data/furniture.png')}}" />furniture</a></div>
                  <span class="toggle-menu"></span>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse">           
                  <ul class="nav navbar-nav">
                    <li  class="active"><a data-toggle="tab" href="#tab-27">Living Room</a></li>
                    <li><a data-toggle="tab" href="#tab-28">Bedroom</a></li>
                    <li><a data-toggle="tab" href="#tab-29">Kitchen & Dining</a></li>
                    <li><a data-toggle="tab" href="#tab-30">Office</a></li>
                  </ul>
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
              <div id="elevator-5" class="floor-elevator">
                    <a href="#elevator-4" class="btn-elevator up fa fa-angle-up"></a>
                    <a href="#elevator-6" class="btn-elevator down fa fa-angle-down"></a>
              </div>
            </nav>
            <div class="category-banner">
                <div class="col-sm-6 banner">
                    <a href="#"><img alt="ads2" class="img-responsive" src="{{url('public/assets/data/ads12.jpg')}}" /></a>
                </div>
                <div class="col-sm-6 banner">
                    <a href="#"><img alt="ads2" class="img-responsive" src="{{url('public/assets/data/ads13.jpg')}}" /></a>
                </div>
           </div>
           <div class="product-featured clearfix">
                <div class="banner-featured">
                    <div class="featured-text"><span>featured</span></div>
                    <div class="banner-img">
                        <a href="#"><img alt="Featurered 1" src="{{url('public/assets/data/f5.jpg')}}" /></a>
                    </div>
                </div>
                <div class="product-featured-content">
                    <div class="product-featured-list">
                        <div class="tab-container autoheight">
                            <!-- tab product -->
                             <?php
                                $list_living=DB::table('products')->where('category_id',27)->where('status',1)->orderby('id')->skip(0)->take(6)->get();
                            ?>
                            <div class="tab-panel active" id="tab-27">
                                <ul class="product-list owl-carousel" data-dots="false" data-loop="true" data-nav = "true" data-margin = "0" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":4}}'>
                                    @foreach($list_living as $itemliving)
                                    <li>
                                        <div class="left-block">
                                            <a href="{!! url('chi-tiet-san-pham',[$itemliving->id,$itemliving->metatitle]) !!}"><img class="img-responsive" alt="product" src="{{url('public/assets/data/'.$itemliving->image)}}" /></a>
                                            <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                            </div>
                                            <div class="add-to-cart">
                                                <a title="Add to Cart" href="{!! url('mua-hang',[$itemliving->id,$itemliving->metatitle]) !!}">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="right-block">
                                            <h5 class="product-name"><a href="{!! url('chi-tiet-san-pham',[$itemliving->id,$itemliving->metatitle]) !!}">{!! $itemliving->name !!}</a></h5>
                                            <div class="content_price">
                                                <span class="price product-price">${!! number_format($itemliving->promotionprice,0,",",".") !!}</span>
                                                <span class="price old-price">${!! number_format($itemliving->price,0,",",".") !!}</span>
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
                                $list_bed=DB::table('products')->where('category_id',28)->where('status',1)->orderby('id')->skip(0)->take(6)->get();
                            ?>
                            <div class="tab-panel" id="tab-28">
                                <ul class="product-list owl-carousel" data-dots="false" data-loop="true" data-nav = "true" data-margin = "0" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":4}}'>                                    
                                    @foreach($list_bed as $itembed)
                                        <li>
                                        <div class="left-block">
                                            <a href="{!! url('chi-tiet-san-pham',[$itembed->id,$itembed->metatitle]) !!}"><img class="img-responsive" alt="product" src="{{url('public/assets/data/'.$itembed->image)}}" /></a>
                                            <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                            </div>
                                            <div class="add-to-cart">
                                                <a title="Add to Cart" href="{!! url('mua-hang',[$itembed->id,$itembed->metatitle]) !!}">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="right-block">
                                            <h5 class="product-name"><a href="{!! url('chi-tiet-san-pham',[$itembed->id,$itembed->metatitle]) !!}">{!! $itembed->name !!}</a></h5>
                                            <div class="content_price">
                                                <span class="price product-price">${!! number_format($itembed->promotionprice,0,",",".") !!}</span>
                                                <span class="price old-price">${!! number_format($itembed->price,0,",",".") !!}</span>
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
                                $list_chicken=DB::table('products')->where('category_id',29)->where('status',1)->orderby('id')->skip(0)->take(6)->get();
                            ?>
                            <div class="tab-panel" id="tab-29">
                                <ul class="product-list owl-carousel" data-dots="false" data-loop="true" data-nav = "true" data-margin = "0" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":4}}'>
                                    @foreach($list_chicken as $itemchicken)
                                    <li>
                                        <div class="left-block">
                                            <a href="{!! url('chi-tiet-san-pham',[$itemchicken->id,$itemchicken->metatitle]) !!}"><img class="img-responsive" alt="product" src="{{url('public/assets/data/'.$itemchicken->image)}}" /></a>
                                            <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                            </div>
                                            <div class="add-to-cart">
                                                <a title="Add to Cart" href="{!! url('mua-hang',[$itemchicken->id,$itemchicken->metatitle]) !!}">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="right-block">
                                            <h5 class="product-name"><a href="{!! url('chi-tiet-san-pham',[$itemchicken->id,$itemchicken->metatitle]) !!}">{!! $itemchicken->name  !!}</a></h5>
                                            <div class="content_price">
                                                <span class="price product-price">${!! number_format($itemchicken->promotionprice,0,",",".") !!}</span>
                                                <span class="price old-price">${!! number_format($itemchicken->price,0,",",".") !!}</span>
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
                                $list_office=DB::table('products')->where('category_id',30)->where('status',1)->orderby('id')->skip(0)->take(6)->get();
                            ?>
                            <div class="tab-panel" id="tab-30">
                                <ul class="product-list owl-carousel" data-dots="false" data-loop="true" data-nav = "true" data-margin = "0" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":4}}'>
                                    @foreach($list_office as $itemoffice)
                                    <li>
                                        <div class="left-block">
                                            <a href="{!! url('chi-tiet-san-pham',[$itemoffice->id,$itemoffice->metatitle]) !!}"><img class="img-responsive" alt="product" src="{{url('public/assets/data/'.$itemoffice->image)}}" /></a>
                                            <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                            </div>
                                            <div class="add-to-cart">
                                                <a title="Add to Cart" href="{!! url('mua-hang',[$itemoffice->id,$itemoffice->metatitle]) !!}">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="right-block">
                                            <h5 class="product-name"><a href="{!! url('chi-tiet-san-pham',[$itemoffice->id,$itemoffice->metatitle]) !!}">{!! $itemoffice->name !!}</a></h5>
                                            <div class="content_price">
                                                <span class="price product-price">${!! number_format($itemoffice->promotionprice,0,",",".") !!}</span>
                                                <span class="price old-price">${!! number_format($itemoffice->price,0,",",".") !!}</span>
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
        <!-- end featured category furniture-->