@extends('admin.shared')
@section('content')
<?php
	$list_credentials = DB::table('credentials')->paginate(20);

	$list_count = DB::table('credentials')->get();
	$count_credential = count($list_count);

	$count_enable = 0;
	$count_disable = 0;
	foreach($list_credentials as $item)
		if($item->status == 0)
			$count_disable++;
		elseif($item->status == 1)
			$count_enable++;
?>
	<h1><span class = "glyphicon glyphicon-gift addtop" aria-hidden = "true"></span>&nbsp;&nbsp;Phân quyền</h1>	
				<div id = "sub-main">
					<div class = "row">
						<div class = "col-xs-12 col-sm-7 col-md-8 col-lg-9">
							<ol class = "breadcrumb">
								<li>Hệ thống</li>
								<li class="active">Phân quyền</li>
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
								<a href = "{!! URL('admin/nguoi-dung/phan-quyen/them-phan-quyen') !!}">Thêm mới</a>
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
							<span><i>Tổng số quyền: </i><strong>{!! $count_credential !!}</strong> |</span>
							<span><i>Có </i><strong>{!! $count_disable !!}</strong> <i> quyền chưa kích hoạt</i></span>
						</div>
					</div>
					<div class = "row margin0 space">
						<div class = "col-xs-12 col-sm-5 col-md-4 col-lg-3 padding0">
							<div class = "form-inline">
								<select class = "form-control">
									<option value="1">Quyền đã kích hoạt</option>
									<option value="0">Quyền chưa kích hoạt</option>
								</select>
								<button type = "submit" class = "btn btn-danger">Lọc</button>
							</div>
						</div>
					</div>
					<div class = "row margin0">
						<div class = "table-responsive table-sanpham">
							<table class = "table table-striped table-bordered">
								<thead>
									<tr>
										<th><input type = "checkbox" value = "" /></th>
                                        <th>Nhóm người dùng</th>
										<th>Quyền</th>
                                        <th>Ngày tạo</th>
										<th>Tình trạng</th>
										<th>Chức năng</th>
									</tr>
								</thead>    
                                @foreach($list_credentials as $item)
                                    <tr>
                                        <td><input type = "checkbox" value = "" /></td>
                                        <td>
                                            <?php
                                                $getNameGroup_byID = DB::table('usergroups')->where("id","LIKE",$item->usergroup_id)->get();
                                            ?>
                                            @foreach($getNameGroup_byID as $itemgroup)
                                                {!! $itemgroup->name !!}
                                            @endforeach
                                        </td>
                                        <td>
                                            <?php
                                                $getNameRole_byID = DB::table('roles')->where("id","LIKE",$item->role_id)->get();
                                            ?>
                                            @foreach($getNameRole_byID as $itemrole)
                                                {!! $itemrole->name !!}
                                            @endforeach
                                        </td>
                                        <td>{!! $item->created_at !!}</td>
                                        @if($item->status == 0)
											<td>Chưa kích hoạt<br />
												<a href = "{!! URL::route('admin.permission.changeStatus',$item->id) !!}">Bật</a>
											</td>
										@elseif( $item->status == 1)
											<td>Đã kích hoạt<br />
												<a href = "{!! URL::route('admin.permission.changeStatus',$item->id) !!}">Tắt</a>
											</td>
										@endif 
                                        <td>
                                            <a href = "{!! URL::route('admin.permission.getDelete',$item->id) !!}">Xóa</a>
                                        </td>
                                    </tr>
                                @endforeach
							</table>
						</div>
						<nav>
							<ul class="pagination">
								@if($list_credentials->currentPage() != 1)
										<li>
											<a href="{!! str_replace('/?','?',$list_credentials->url($list_credentials->currentPage() - 1)) !!}" aria-label="Previous">
												<span aria-hidden="true">&laquo;</span>
											</a>
										</li>
										@endif
										@for($i=1;$i<=$list_credentials->lastPage();$i=$i+1)
										<li class = "{!! ($list_credentials->currentPage() == $i) ? 'active' : '' !!}">
											<a href="{!! str_replace('/?','?',$list_credentials->url($i)) !!}">{{ $i }}</a>
										</li>
										@endfor
										@if($list_credentials->currentPage() != $list_credentials->lastPage())
										<li>
											<a href="{!! str_replace('/?','?',$list_credentials->url($list_credentials->currentPage() + 1)) !!}" aria-label="Next">
												<span aria-hidden="true">&raquo;</span>
											</a>
										</li>
									@endif
							</ul>
						</nav>
					</div>
				</div>
@endsection()