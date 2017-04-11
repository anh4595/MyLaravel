<!-- featured category sports -->
        <div class="category-featured">
            <nav class="navbar nav-menu nav-menu-green show-brand">
              <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                  <div class="navbar-brand"><a href="#"><img alt="fashion" src="{{url('public/assets/data/sports.png')}}" />sports</a></div>
                  <span class="toggle-menu"></span>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse">           
                  <ul class="nav navbar-nav">
                    <li class="active"><a data-toggle="tab" href="#tab-9">Tennis</a></li>
                    <li><a data-toggle="tab" href="#tab-10">Football</a></li>
                    <li><a data-toggle="tab" href="#tab-11">Swimming</a></li>
                    <li><a data-toggle="tab" href="#tab-12">Climbing</a></li>
                  </ul>
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
              <div id="elevator-2" class="floor-elevator">
                    <a href="#elevator-1" class="btn-elevator up fa fa-angle-up"></a>
                    <a href="#elevator-3" class="btn-elevator down fa fa-angle-down"></a>
              </div>
            </nav>
            <div class="category-banner">
                <div class="col-sm-6 banner">
                    <a href="#"><img alt="ads2" class="img-responsive" src="{{url('public/assets/data/ads6.jpg')}}" /></a>
                </div>
                <div class="col-sm-6 banner">
                    <a href="#"><img alt="ads2" class="img-responsive" src="{{url('public/assets/data/ads7.jpg')}}" /></a>
                </div>
           </div>
           <div class="product-featured clearfix">
                <div class="banner-featured">
                    <div class="featured-text"><span>featured</span></div>
                    <div class="banner-img">
                        <a href="#"><img alt="Featurered 1" src="{{url('public/assets/data/f2.jpg')}}" /></a>
                    </div>
                </div>
                <div class="product-featured-content">
                    <div class="product-featured-list">
                        <div class="tab-container autoheight">
                            <!-- tab product -->                            
                            <?php
                                $list_tennics=DB::table('products')->where('category_id',15)->where('status',1)->orderby('id')->skip(0)->take(6)->get();
                            ?>
                            <div class="tab-panel active" id="tab-9">
                                <ul class="product-list owl-carousel" data-dots="false" data-loop="true" data-nav = "true" data-margin = "0" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":4}}'>
                                @foreach($list_tennics as $itemtennic)
                                    <li>
                                        <div class="left-block">
                                            <a href="{!! url('chi-tiet-san-pham',[$itemtennic->id,$itemtennic->metatitle]) !!}"><img class="img-responsive" alt="product" src="{{url('public/assets/data/'.$itemtennic->image)}}" /></a>
                                            <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                            </div>
                                            <div class="add-to-cart">
                                                <a title="Add to Cart" href="{!! url('mua-hang',[$itemtennic->id,$itemtennic->metatitle]) !!}">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="right-block">
                                            <h5 class="product-name"><a href="{!! url('chi-tiet-san-pham',[$itemtennic->id,$itemtennic->metatitle]) !!}">{!! $itemtennic->name !!}</a></h5>
                                            <div class="content_price">
                                                <span class="price product-price">${!! number_format($itemtennic->promotionprice,0,",",".") !!}</span>
                                                <span class="price old-price">${!! number_format($itemtennic->price,0,",",".") !!}</span>
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
                                $list_football=DB::table('products')->where('category_id',16)->where('status',1)->orderby('id')->skip(0)->take(6)->get();
                            ?>
                            <div class="tab-panel" id="tab-10">
                                <ul class="product-list owl-carousel" data-dots="false" data-loop="true" data-nav = "true" data-margin = "0" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":4}}'>
                                @foreach($list_football as $itemfootball)
                                    <li>
                                        <div class="left-block">
                                            <a href="{!! url('chi-tiet-san-pham',[$itemfootball->id,$itemfootball->metatitle]) !!}"><img class="img-responsive" alt="product" src="{{url('public/assets/data/'.$itemfootball->image)}}" /></a>
                                            <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                            </div>
                                            <div class="add-to-cart">
                                                <a title="Add to Cart" href="{!! url('mua-hang',[$itemfootball->id,$itemfootball->metatitle]) !!}">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="right-block">
                                            <h5 class="product-name"><a href="{!! url('chi-tiet-san-pham',[$itemfootball->id,$itemfootball->metatitle]) !!}">{!! $itemfootball->name !!}</a></h5>
                                            <div class="content_price">
                                                <span class="price product-price">${!! number_format($itemfootball->promotionprice,0,",",".") !!}</span>
                                                <span class="price old-price">${!! number_format($itemfootball->price,0,",",".") !!}</span>
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
                                $list_swim=DB::table('products')->where('category_id',17)->where('status',1)->orderby('id')->skip(0)->take(6)->get();
                            ?>
                            <div class="tab-panel" id="tab-11">
                                <ul class="product-list owl-carousel" data-dots="false" data-loop="true" data-nav = "true" data-margin = "0" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":4}}'>
                                @foreach($list_swim as $itemswim)
                                    <li>
                                        <div class="left-block">
                                            <a href="{!! url('chi-tiet-san-pham',[$itemswim->id,$itemswim->metatitle]) !!}"><img class="img-responsive" alt="product" src="{{url('public/assets/data/'.$itemswim->image)}}" /></a>
                                            <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                            </div>
                                            <div class="add-to-cart">
                                                <a title="Add to Cart" href="{!! url('mua-hang',[$itemswim->id,$itemswim->metatitle]) !!}">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="right-block">
                                            <h5 class="product-name"><a href="{!! url('chi-tiet-san-pham',[$itemswim->id,$itemswim->metatitle]) !!}">{!! $itemswim->name !!}</a></h5>
                                            <div class="content_price">
                                                <span class="price product-price">${!! number_format($itemswim->promotionprice,0,",",".") !!}</span>
                                                <span class="price old-price">${!! number_format($itemswim->price,0,",",".") !!}</span>
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
                                $list_climb=DB::table('products')->where('category_id',18)->where('status',1)->orderby('id')->skip(0)->take(6)->get();
                            ?>
                            <div class="tab-panel" id="tab-12">
                                <ul class="product-list owl-carousel" data-dots="false" data-loop="true" data-nav = "true" data-margin = "0" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":4}}'>
                                    @foreach($list_climb as $itemclimb)
                                    <li>
                                        <div class="left-block">
                                            <a href="{!! url('chi-tiet-san-pham',[$itemclimb->id,$itemclimb->metatitle]) !!}"><img class="img-responsive" alt="product" src="{{url('public/assets/data/'.$itemclimb->image)}}" /></a>
                                            <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                            </div>
                                            <div class="add-to-cart">
                                                <a title="Add to Cart" href="{!! url('mua-hang',[$itemclimb->id,$itemclimb->metatitle]) !!}">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="right-block">
                                            <h5 class="product-name"><a href="{!! url('chi-tiet-san-pham',[$itemclimb->id,$itemclimb->metatitle]) !!}">{!! $itemclimb->name !!}</a></h5>
                                            <div class="content_price">
                                                <span class="price product-price">${!! number_format($itemclimb->promotionprice,0,",",".") !!}</span>
                                                <span class="price old-price">${!! number_format($itemclimb->price,0,",",".") !!}</span>
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
        <!-- end featured category sports-->