@extends('layouts.app')
@section('content')
<section class="content-header">
	<h1>Users</h1>
</section>
<!-- Main Content -->
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box box-success">
				<div class="box-header">
					<div class="row">
						<div class="col-xs-6">
							<h3 class="box-title">Users</h3>
						</div>
						<div class="col-xs-6">
							<div class="pull-right">
								<a class="btn btn-success">
									<i class="fa fa-plus"> Add User</i>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="box-body">
					<table class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>User Id</th>
								<th>Name</th>
								<th>Mobile</th>
								<th>Email</th>
								<th>Role</th>
								<th>Verified</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($users as $user) { ?>
								<tr>
									<td><?=$user['id']?></td>
									<td><?=$user['fname'].' '.$user['lname']?></td>
									<td><?=$user['mobile']?></td>
									<td><?=$user['email']?></td>
									<td><?=$user['role_id']?></td>
									<td><?=$user['verified']?></td>
									<td>
										<a href="javascript:void(0);">
					                      <i class="fa fa-eye margn-left-10" style="font-size: 18px;color:blue;"></i>
					                    </a>
					                    <a href="javascript:void(0);">
					                      <i class="fa fa-pencil margn-left-10" style="font-size: 18px;color:green;"></i>
					                    </a>
					                    <a href="javascript:void(0);">
					                      <i class="fa fa-trash margn-left-10" style="font-size: 18px;color:red;"></i>
					                    </a>
										<!-- <a class="btn btn-info"><i class="fa fa-eye"></i></a>
										<a class="btn btn-success"><i class="fa fa-pencil"></i></a>
										<a class="btn btn-danger"><i class="fa fa-trash"></i></a> -->

									</td>
								</tr>
							<?php } ?>
						</tbody>
						<tfoot>
							<th>User Id</th>
							<th>Name</th>
							<th>Mobile</th>
							<th>Email</th>
							<th>Role</th>
							<th>Verified</th>
							<th>Action</th>
						</tfoot>
					</table>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection