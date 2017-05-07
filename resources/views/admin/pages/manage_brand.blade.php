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

<h3 style="color: orangered;font-weight: bold"><?php 
    $message = Session::get('message');
    if($message){

    echo $message;
    Session::put('message',null);
}
                
?></h3>
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
							<th><i class="icon-bullhorn"></i>Brand Id</th>
							<th class="hidden-phone"><i class="icon-question-sign"></i> Brand Name</th>
							<th><i class="icon-bookmark"></i> Brand Description</th>
							<th><i class=" icon-edit"></i> Publication status</th>
							<th></th>
						</tr>
					</thead>
					<tbody>

					<?php foreach ($brand_info as $row): ?>
						<tr>
							<td><a href="#">{{$row->brand_id}}</a></td>
							<td class="hidden-phone">{{$row->brand_name}}</td>
							<td>{{$row->brand_description}} </td>
							<td>

						<?php 

						if($row->publication_status == 1){ ?>
				<span class="label label-success label-mini">Published</span>
<?php

}else{ ?>

	<span class="label label-important label-mini">Unpublished</span>

	<?php }?>

							</span></td>
							<td>

							<?php if($row->publication_status == 1) {?>
								<a href="{{URL::to('unpublish_brand/'.$row->brand_id)}}" title="unpublish"><button class="btn btn-danger"><i class="icon-thumbs-down" aria-hidden="true"></i></button></a>
<?php }else { ?>

<a href="{{URL::to('publish_brand/'.$row->brand_id)}}" title="publish"><button class="btn btn-success"><i class="icon-thumbs-up"></i></button></a>

<?php } ?>
								<a href="{{URL::to('edit_brand/'.$row->brand_id)}}"><button class="btn btn-primary"><i class="icon-pencil"></i></button></a>


								<a href="{{URL::to('delete_brand/'.$row->brand_id)}}"><button class="btn btn-danger"><i class="icon-trash "></i></button></a>
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