@extends('admin.shared')
@section('content')
<?php
	$list_count = DB::table('orders')->orderBy('id')->get();
	$count_customer = count($list_count);

	$count_enable = 0;
	$count_disable = 0;
	foreach($list_order as $item)
		if($item->status == 0)
			$count_disable++;
		elseif($item->status == 1)
			$count_enable++;
?>
	<h1><span class = "glyphicon glyphicon-heart addtop" aria-hidden = "true"></span>&nbsp;&nbsp;Thông tin hóa đơn</h1>	
				<div id = "sub-main">
					<div class = "row">
						<div class = "col-xs-12 col-sm-7 col-md-8 col-lg-9">
							<ol class = "breadcrumb">
								<li>Hệ thống</li>
								<li class = "active">Thông tin hóa đơn</li>
							</ol>
						</div>
						<div class = "hidden-xs col-sm-5 col-md-4 col-lg-3 text-right">
							<div class = "timecount" style="text-align:center">
							<?php 
								$timezone = +7;
								echo gmdate("H:i:s | d-m-Y ", time() + 3600*($timezone+date("I"))).'';
							?>
							</div>
						</div>
					</div>
					<div class = "row space-top">
						<div class = "col-xs-12 col-sm-5 col-md-7 col-lg-7"></div>
						<div class = "col-xs-12 col-sm-7 col-md-5 col-lg-5">
							<div class = "input-group text-right">
								<input type = "text" class = "form-control" placeholder = "Bạn cần tìm gì?">
								<span class = "input-group-btn">
									<button class = "btn btn-danger" type = "button">Tìm kiếm</button>
								</span>
							</div>
						</div>
					</div>
					<div class = "row space-top box-total">
						<div class = "col-xs-12 col-sm-8 col-md-7 col-lg-6">
							<span><i>Tổng số khách hàng: </i><strong>{!! $count_customer !!}</strong> |</span>
							<span><i>Có </i><strong>{!! $count_disable !!}</strong> <i>chưa kích hoạt</i></span>
						</div>
					</div>
					<div class = "row margin0 space">
						<div class = "col-xs-12 col-sm-5 col-md-4 col-lg-3 padding0">
							<div class = "form-inline">
								<select class = "form-control">
									<option value="1">Đã kích hoạt</option>
									<option value="0">Chưa kích hoạt</option>
								</select>
								<button type = "submit" class = "btn btn-danger">Lọc</button>
							</div>
						</div>
					</div>
					<div class = "row margin0">
						<div class = "table-responsive quantri">
							<table class = "table table-striped table-bordered">
								<thead>
									<tr>
										<th><input type = "checkbox" value = "" /></th>
										<th>Tên khách hàng</th>
										<th>Địa chỉ</th>
										<th>Sản phẩm</th>
										<th>Số lượng</th>
										<th>Đơn giá</th>
										<th>Ngày đặt hàng</th>
										<th>Tình trạng</th>
										<th>Chức năng</th>
									</tr>
								</thead>
								@foreach($list_order as $item)
									<tr>
										<td><input type = "checkbox" value = "" /></td>
										<td>{!! $item->customername !!}</td>
										<td>{!! $item->customeraddress !!}</td>
                                        <?php
                                            $getDetails=DB::table('orderdetails')->where('order_id',$item->id)->get();
                                        ?>
                                        @foreach($getDetails as $detail)
                                            <?php
                                                $productIten=DB::table('products')->where('id',$detail->product_id)->get();
                                            ?>
                                            @foreach($productIten as $itemproduct)
                                                <td>{!! $itemproduct->name !!}</td>
                                            @endforeach
                                            <td>{!! $detail->quantity !!}</td>
                                            <td>{!! $detail->price !!}</td>
                                        @endforeach
										<td>{!! $item->created_at !!}</td>
										@if($item->status == 0)
											<td>Chưa xử lý<br />
												<a href = "{!! URL::route('admin.order.changeStatus',$item->id) !!}">Đã xử lý</a>												
											</td>
										@elseif( $item->status == 1)
											<td>Đã xử lý</td>
										@endif
										<td>
											<a href = "{!! URL::route('admin.order.getDelete',$item->id) !!}">Xóa</a>
										</td>
									</tr>
								@endforeach
							</table>
						</div>
						<nav>
							<ul class="pagination">
								@if($list_order->currentPage() != 1)
									<li>
										<a href="{!! str_replace('/?','?',$list_order->url($list_order->currentPage() - 1)) !!}" aria-label="Previous">
											<span aria-hidden="true">&laquo;</span>
										</a>
									</li>
									@endif
									@for($i=1;$i<=$list_order->lastPage();$i=$i+1)
									<li class = "{!! ($list_order->currentPage() == $i) ? 'active' : '' !!}">
										<a href="{!! str_replace('/?','?',$list_order->url($i)) !!}">{{ $i }}</a>
									</li>
									@endfor
									@if($list_order->currentPage() != $list_order->lastPage())
									<li>
										<a href="{!! str_replace('/?','?',$list_order->url($list_order->currentPage() + 1)) !!}" aria-label="Next">
											<span aria-hidden="true">&raquo;</span>
										</a>
									</li>
								@endif
							</ul>
						</nav>
					</div>
				</div>
@endsection()