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
						<form action="{!! route('admin.user.adduser') !!}" method="POST">
							<input type="hidden" name="_token" value="{!! csrf_token() !!}" />
								<div class = "col-xs-12 col-sm-12 col-md-8 col-lg-9">
									<div class = "panel panel-default">
										<div class = "panel-heading">
											<span class = "glyphicon glyphicon-pencil addtop" aria-hidden = "true">&nbsp;</span>Thông tin người dùng
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
												<label>Họ tên</label>
												<input type = "text" class = "form-control" name="name" placeholder = "Nhập họ tên người dùng" value="{!! old('name') !!}">
											</div>
											<div class = "form-group">
												<label>Số điện thoại</label>
												<input type = "text" class = "form-control" name="phone" placeholder = "Nhập số điện thoại" value="{!! old('phone') !!}">
											</div>
                                            <div class = "form-group">
												<label>Email</label>
												<input type = "email" class = "form-control" name="email" placeholder = "Nhập địa chỉ email" value="{!! old('email') !!}">
											</div>
                                            <div class = "form-group">
												<label>Tên đăng nhập</label>
												<input type = "text" class = "form-control" name="username" placeholder = "Tên tài khoản đăng nhập" value="{!! old('username') !!}">
											</div>
                                            <div class = "form-group">
												<label>Mật khẩu</label>
												<input type = "password" class = "form-control" name="password" placeholder = "Nhập mật khẩu đăng nhập" value="{!! old('password') !!}">
											</div>
                                            <div class = "form-group">
												<label>Nhập lại mật khẩu</label>
												<input type = "password" class = "form-control" name="repassword" placeholder = "Nhập lại mật khẩu đăng nhập " value="{!! old('repassword') !!}">
											</div>
											<div class = "form-group">
                                                <label>Chọn danh mục cha</label>
                                                <select class = "form-control" name="group_id">
                                                    <?php
                                                        $list_groupid=DB::table('usergroups')->where('status',1)->get();
                                                    ?>
                                                    @foreach($list_groupid as $item)
                                                        <option value="{!! $item->id !!}">{!! $item->name !!}</option>
                                                    @endforeach
                                                </select>                    
                                            </div>	
										</div>
									</div>
								</div>
								<div class = "col-xs-12 col-sm-12 col-md-4 col-lg-3">
									<div class = "panel panel-default">
										<div class = "panel-heading">
											<span class = "glyphicon glyphicon-ok" aria-hidden = "true">&nbsp;</span>Trạng thái
										</div>
										<div class = "panel-body">
											<div class = "radio">
												<label><input type="radio" name="status" value="1" checked>Kích hoạt tài khoản</label>
											</div>
											<div class = "radio">
												<label><input type="radio" name="status" value="0">Chưa kích hoạt tài khoản</label>
											</div>
											<div class = "form-group">
												<label>Ngày đăng</label>
												<?php 
													$timezone = +7;
													echo '<input type="text"  class = "form-control" value="'.gmdate("d-m-Y", time() + 3600*($timezone+date("I"))).'">';
												?>
											</div>
											<div class = "form-group">
												<label>Người tạo tài khoản</label>
												<input type="text" class = "form-control" name="createby">
											</div>
											<div class = "form-group">
												<label>Người cập nhật tài khoản</label>
												<input type="text" class = "form-control" name="updateby">
											</div>
										</div>
										<div class = "panel-footer">
											<div class = "row margin0">
												<div class = "col-xs-6 col-sm-6 col-md-6 col-lg-6 padding0 text-right">
													<button type="submit" name="submit" class = "btn btn-danger btn-lg">Thêm mới</button>
												</div>
											</div>
										</div>
									</div>

								</div>
						</form>
					</div>
				</div>
@endsection()