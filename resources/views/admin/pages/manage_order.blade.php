@extends('admin.admin_master')
@section('admin_content')

<div class="row-fluid">
	<div class="span12">
		<!-- BEGIN THEME CUSTOMIZER-->
		<div id="theme-change" class="hidden-phone">
			<i class="icon-cogs"></i>
			<span class="settings">
				<span class="text">Theme Color:</span>
				<span class="colors">
					<span class="color-default" data-style="default"></span>
					<span class="color-green" data-style="green"></span>
					<span class="color-gray" data-style="gray"></span>
					<span class="color-purple" data-style="purple"></span>
					<span class="color-red" data-style="red"></span>
				</span>
			</span>
		</div>
		<!-- END THEME CUSTOMIZER-->
		<!-- BEGIN PAGE TITLE & BREADCRUMB-->
		<h3 class="page-title">
			Dynamic Table
		</h3>
		<ul class="breadcrumb">
			<li>
				<a href="#">Home</a>
				<span class="divider">/</span>
			</li>
			<li>
				<a href="#">Data Table</a>
				<span class="divider">/</span>
			</li>
			<li class="active">
				Dynamic Table
			</li>
			<li class="pull-right search-wrap">
				<form action="search_result.html" class="hidden-phone">
					<div class="input-append search-input-area">
						<input class="" id="appendedInputButton" type="text">
						<button class="btn" type="button"><i class="icon-search"></i> </button>
					</div>
				</form>
			</li>
		</ul>
		<!-- END PAGE TITLE & BREADCRUMB-->
	</div>
</div>
<!-- END PAGE HEADER-->
<!-- BEGIN ADVANCED TABLE widget-->
<div class="row-fluid">
	<div class="span12">
		<!-- BEGIN BASIC PORTLET-->
		<div class="widget orange">
			<div class="widget-title">
				<h4><i class="icon-reorder"></i> Advanced Table</h4>
				<span class="tools">
					<a href="javascript:;" class="icon-chevron-down"></a>
					<a href="javascript:;" class="icon-remove"></a>
				</span>
			</div>
			<div class="widget-body">
				<table class="table table-striped table-bordered table-advance table-hover">
					<thead>
						<tr>
							<th><i class="icon-bullhorn"></i>Order Id</th>
							<th class="hidden-phone"><i class="icon-question-sign"></i> Customer Name</th>
							<th class="hidden-phone"><i class="icon-question-sign"></i> Product Name</th>
							<th class="hidden-phone"><i class="icon-question-sign"></i> Product Quantity</th>
							<th><i class="icon-bookmark"></i>Product Price</th>
							<th><i class="icon-bookmark"></i>Order status</th>
							<th><i class="icon-bookmark"></i>Order Total</th>
							
							<th><i class=" icon-edit"></i> Order Date</th>
							<th></th>
						</tr>
					</thead>
					<tbody>

					<?php foreach ($order_info as $row): ?>
						<tr>
							<td><a href="#">{{$row->order_id}}</a></td>
							<td><a href="#">{{$row->first_name}} {{$row->last_name}}</a></td>
							<td>{{$row->product_name}}</td>

							<td>{{$row->product_quantity}} </td>
							<td>{{$row->product_price}} </td>
							<td>{{$row->order_status}} </td>
							<td>{{$row->order_total}} </td>
							<td>{{$row->created_at}} </td>
							<td>

						

								<a href="{{URL::to('edit_order/'.$row->order_id)}}"><button class="btn btn-primary"><i class="icon-pencil"></i></button></a>


								<a href="{{URL::to('delete_order/'.$row->order_id)}}" onclick = "return check_delete();"><button class="btn btn-danger"><i class="icon-trash "></i></button></a>
							</td>
						</tr>
						
					<?php endforeach ?>
						
						
					</tbody>
				</table>
			</div>
		</div>
		<!-- END BASIC PORTLET-->
	</div>
</div>
@endsection