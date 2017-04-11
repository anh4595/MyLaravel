@extends('admin.shared')
@section('content')
	<h1><span class = "glyphicon glyphicon-pencil addtop" aria-hidden = "true"></span>&nbsp;&nbsp;Danh sách quyền</h1>	
				<div id = "sub-main">
					<div class = "row">
						<div class = "col-xs-12 col-sm-7 col-md-8 col-lg-9">
							<ol class = "breadcrumb">
								<li>Hệ thống</li>
								<li>Danh sách quyền</li>
								<li class="active">Thêm mới</li>
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
						<div class = "col-xs-12 col-sm-12 col-md-8 col-lg-9">
							<div class = "panel panel-default">
								<div class = "panel-heading">
									<span class = "glyphicon glyphicon-pencil addtop" aria-hidden = "true">&nbsp;</span>Thông tin quyền
								</div>
								@if(count($errors)>0)
								<div class="alert alert-danger">
									<ul>
										@foreach($errors->all() as $error)
											<li>{!! $error !!}</li>
										@endforeach
									</ul>
								</div>
								@endif
								<div class = "panel-body">
									<form action="{!! route('admin.role.addrole') !!}" method="POST">
										<input type="hidden" name="_token" value="{!! csrf_token() !!}" />
										<div class = "form-group">
											<label>Mã Code</label>
											<input type = "text" class = "form-control" name="id_role" placeholder = "Nhập tên mã code cho quyền">
										</div>
										<div class = "form-group">
											<label>Mô tả</label>
											<input type = "text" class = "form-control" name="name_role" placeholder = "Mô tả ý nghĩa quyền hạn">
										</div>            
										<button type="submit" name="submit" class = "btn btn-danger btn-lg">Thêm mới</button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
@endsection()