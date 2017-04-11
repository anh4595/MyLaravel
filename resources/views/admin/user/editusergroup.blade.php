@extends('admin.shared')
@section('content')
	<h1><span class = "glyphicon glyphicon-pencil addtop" aria-hidden = "true"></span>&nbsp;&nbsp;Người dùng</h1>	
				<div id = "sub-main">
					<div class = "row">
						<div class = "col-xs-12 col-sm-7 col-md-8 col-lg-9">
							<ol class = "breadcrumb">
								<li>Hệ thống</li>
								<li>Bài viết</li>
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
					<div class = "row margin0 space-top">
						<form action="" method="POST">
							<input type="hidden" name="_token" value="{!! csrf_token() !!}" />
								<div class = "col-xs-12 col-sm-12 col-md-8 col-lg-9">
									<div class = "panel panel-default">
										<div class = "panel-heading">
											<span class = "glyphicon glyphicon-pencil addtop" aria-hidden = "true">&nbsp;</span>Thông tin nhóm người dùng
										</div>
										@if(count($errors)>0)
											<div class="alert alert-danger">
												<ul>
													@foreach($errors->all() as $error)
														<li>{!! $error !!}</li>
													@endforeach()
												</ul>
											</div>
										@endif
										<div class = "panel-body">
											<div class = "form-group">
												<label>Tên nhóm người dùng</label>
												<input type = "text" class = "form-control" name="name" placeholder = "Nhập tên nhóm người dùng" value="{!! old('name',isset($usergroup) ? $usergroup['name'] : NULL) !!}">
											</div>
                                            <button type="submit" name="submit" class = "btn btn-danger btn-lg">Cập nhật</button>
										</div>
									</div>
								</div>								
						</form>
					</div>
				</div>
@endsection()