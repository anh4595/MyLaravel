@extends('admin.shared')
@section('content')
	<h1><span class = "glyphicon glyphicon-pencil addtop" aria-hidden = "true"></span>&nbsp;&nbsp;Phân quyền</h1>	
				<div id = "sub-main">
					<div class = "row">
						<div class = "col-xs-12 col-sm-7 col-md-8 col-lg-9">
							<ol class = "breadcrumb">
								<li>Hệ thống</li>
								<li>Phân quyền</li>
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
									<span class = "glyphicon glyphicon-pencil addtop" aria-hidden = "true">&nbsp;</span>Thông tin phân quyền
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
									<form action="{!! route('admin.role.addpermission') !!}" method="POST">
										<input type="hidden" name="_token" value="{!! csrf_token() !!}" />
			                                <div class = "form-group">
                                                <label>Chọn nhóm người dùng</label>
                                                <select class = "form-control" name="group_id">
                                                    <?php
                                                        $list_groupid=DB::table('usergroups')->where('status',1)->get();
                                                    ?>
                                                    @foreach($list_groupid as $itemgroup)
                                                        <option value="{!! $itemgroup->id !!}">{!! $itemgroup->name !!}</option>
                                                    @endforeach
                                                </select>                    
                                            </div>	
                                            <div class = "form-group">
                                                <label>Chọn quyền</label>
                                                <div class = "panel-body">
                                                    <?php
                                                        $list_role=DB::table('roles')->get();
                                                    ?>
                                                    @foreach($list_role as $itemrole)
                                                        <label><input type = "checkbox" name="role[]" value="{!! $itemrole->id !!}">{!! $itemrole->name !!}</label>
                                                    @endforeach
                                                </div>
                                            </div>	      
										<button type="submit" name="submit" class = "btn btn-danger btn-lg">Thêm mới</button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
@endsection()