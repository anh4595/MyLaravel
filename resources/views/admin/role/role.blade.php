@extends('admin.shared')
@section('content')
<?php
	$list_role = DB::table('roles')->paginate(15);
	$list_count = DB::table('roles')->get();
	$count_role = count($list_count);
?>
	<h1><span class = "glyphicon glyphicon-gift addtop" aria-hidden = "true"></span>&nbsp;&nbsp;Danh sách quyền</h1>	
				<div id = "sub-main">
					<div class = "row">
						<div class = "col-xs-12 col-sm-7 col-md-8 col-lg-9">
							<ol class = "breadcrumb">
								<li>Hệ thống</li>
								<li class="active">Danh sách quyền</li>
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
						<div class = "col-xs-12 col-sm-5 col-md-7 col-lg-7">
							<div class = "btn btn-danger btn-lg">
								<a href = "{!! URL('admin/nguoi-dung/phan-quyen/them-quyen') !!}">Thêm mới</a>
							</div>
						</div>
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
							<span><i>Tổng số quyền: </i><strong>{!! $count_role !!}</strong></span>
						</div>
					</div>
					<div class = "row margin0">
						<div class = "table-responsive table-sanpham">
							<table class = "table table-striped table-bordered">
								<thead>
									<tr>
										<th><input type = "checkbox" value = "" /></th>
										<th>Mã quyền</th>
                                        <th>Mô tả</th>
                                        <th>Ngày tạo</th>
										<th>Chức năng</th>
									</tr>
								</thead>    
                                @foreach($list_role as $item)
                                    <tr>
                                        <td><input type = "checkbox" value = "" /></td>
                                        <td>{!! $item->id !!}</td>
                                        <td>{!! $item->name !!}</td>
                                        <td>{!! $item->created_at !!}
                                        <td>
                                        	<a href = "{!! URL::route('admin.role.getDelete',$item->id) !!}">Xóa</a>
                                        </td>
                                    </tr>
                                @endforeach
							</table>
						</div>
						<nav>
							<ul class="pagination">
								@if($list_role->currentPage() != 1)
										<li>
											<a href="{!! str_replace('/?','?',$list_role->url($list_role->currentPage() - 1)) !!}" aria-label="Previous">
												<span aria-hidden="true">&laquo;</span>
											</a>
										</li>
										@endif
										@for($i=1;$i<=$list_role->lastPage();$i=$i+1)
										<li class = "{!! ($list_role->currentPage() == $i) ? 'active' : '' !!}">
											<a href="{!! str_replace('/?','?',$list_role->url($i)) !!}">{{ $i }}</a>
										</li>
										@endfor
										@if($list_role->currentPage() != $list_role->lastPage())
										<li>
											<a href="{!! str_replace('/?','?',$list_role->url($list_role->currentPage() + 1)) !!}" aria-label="Next">
												<span aria-hidden="true">&raquo;</span>
											</a>
										</li>
									@endif
							</ul>
						</nav>
					</div>
				</div>
@endsection()