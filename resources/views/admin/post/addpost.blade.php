@extends('admin.shared')
@section('content')
	<h1><span class = "glyphicon glyphicon-pencil addtop" aria-hidden = "true"></span>&nbsp;&nbsp;Bài viết</h1>	
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
						<form action="{!! route('admin.post.addpost') !!}" method="POST">
							<input type="hidden" name="_token" value="{!! csrf_token() !!}" />
								<div class = "col-xs-12 col-sm-12 col-md-8 col-lg-9">
									<div class = "panel panel-default">
										<div class = "panel-heading">
											<span class = "glyphicon glyphicon-pencil addtop" aria-hidden = "true">&nbsp;</span>Thông tin bài viết
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
												<label>Tiêu đề bài viết</label>
												<input type = "text" class = "form-control" name="namepost" placeholder = "Nhập tiêu đề bài viết">
											</div>
											<div class = "form-group">
												<label>Metatitle</label>
												<input type = "text" class = "form-control" name="metatitle" placeholder = "xe oto can cau">
											</div>
											<div class = "form-group">
												<label>Metakeyword</label>
												<input type = "text" class = "form-control" name="metakeyword" placeholder = "xe-o-to-can-cau">
											</div>									
											<div class = "form-group">
												<label>Mô tả nội dung</label>
												<textarea class = "form-control" name="descriptions" rows = "4" ></textarea>
												<script type="text/javascript">ckeditor("descriptions")</script>
											</div>
											<div class = "form-group">
												<label>Nội dung chi tiết</label>
												<textarea class = "form-control" name="detail" rows = "4" ></textarea>
												<script type="text/javascript">ckeditor("detail")</script>
											</div>
											<div class = "form-group">
												<label>Tags</label>
												<div class = "panel-body">
													<?php
														$list_tagpost=DB::table('tags')->where('type','post')->get();
													?>
													@foreach($list_tagpost as $tagpost)
														<label><input type = "checkbox" name="tag[]" value="{!! $tagpost->id !!}">{!! $tagpost->name !!}</label>
													@endforeach
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class = "col-xs-12 col-sm-12 col-md-4 col-lg-3">
									<div class = "panel panel-default">
										<div class = "panel-heading">
											<span class = "glyphicon glyphicon-folder-open" aria-hidden = "true">&nbsp;</span>Danh mục
										</div>
										<div class = "panel-body">
										<?php
											$list_category=DB::table('postcategories')->orderby('id')->get();
										?>
										@foreach($list_category as $item)
											<div class = "checkbox">
												<label><input type = "radio" name="category_id" value="{!! $item->id !!}">{!! $item->name !!}</label>
											</div>
										@endforeach()
										</div>
									</div>
									<div class = "panel panel-default">
										<div class = "panel-heading">
											<span class = "glyphicon glyphicon-picture" aria-hidden = "true">&nbsp;</span>Ảnh đại diện
										</div>
										<div class = "panel-body">
											<div class = "form-group">
												<input type = "file" name="image">
											</div>
										</div>
									</div>
									<div class = "panel panel-default">
										<div class = "panel-heading">
											<span class = "glyphicon glyphicon-ok" aria-hidden = "true">&nbsp;</span>Trạng thái
										</div>
										<div class = "panel-body">
											<div class = "radio">
												<label><input type="radio" name="status" value="1" checked>Hiển thị bài viết</label>
											</div>
											<div class = "radio">
												<label><input type="radio" name="status" value="0">Chưa hiển thị bài viết</label>
											</div>
											<div class = "form-group">
												<label>Ngày đăng</label>
												<?php 
													$timezone = +7;
													echo '<input type="text"  class = "form-control" value="'.gmdate("d-m-Y", time() + 3600*($timezone+date("I"))).'">';
												?>
											</div>
											<div class = "form-group">
												<label>Người đăng</label>
												<input type="text" class = "form-control" name="createby">
											</div>
											<div class = "form-group">
												<label>Người cập nhật</label>
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