@extends('admin.admin_master')
@section('admin_content')

<?php foreach ($order_info as $row) {


	
} ?>

<div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-header" data-original-title>
			<h2><i class="halflings-icon edit"></i><span class="break"></span>Edit Order Details</h2>
			<div class="box-icon">
				<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
				<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
				<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
			</div>
		</div>
		<div class="box-content">
		<h3 style="color:#2D89EF;"><?php 

		$message = Session::get('message');

		if($message){
			echo $message;
			Session::put('message',null);
		}

		 ?></h3>


		{!! Form::open(['url' => 'update_order','method'=>'post']) !!}
				<fieldset>
					<h2 style="color:green"></h2>

					<div class="control-group hidden-phone">
						<label class="control-label">Customer Name</label>
						<div class="controls">
							<input name="customer_name" class="cleditor" id="textarea2" rows="10" cols="20" value="<?php echo $row->first_name.' '. $row->last_name; ?>">
						
								
							
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="typeahead">Product Name </label>
						<div class="controls">
						<input type="text" name="product_name" value="
						<?php 

						echo $row->product_name;

						?>" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" >
							<input type="hidden" value="<?php echo $row->order_id; ?>" name="order_id" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" >

						</div>
					</div>
					<div class="control-group hidden-phone">
						<label class="control-label"></label>
						<div class="controls">
							<input name="product_quantity" class="cleditor" id="textarea2" rows="10" cols="20" value="<?php echo $row->product_quantity; ?>">
						
								
							
						</div>
					</div>



				
					<div class="control-group hidden-phone">
						<label class="control-label" for="textarea2">Product Price</label>
						<div class="controls">
							<input name="product_price" class="cleditor" id="textarea2" value="<?php echo $row->product_price; ?>" />
						</div>
					</div>

					<div class="control-group hidden-phone">
						<label class="control-label" for="textarea2">Order total</label>
						<div class="controls">
							<input name="order_total" class="cleditor" id="textarea2" value="<?php echo $row->order_total; ?>" />
						</div>
					</div>

					<div class="control-group hidden-phone">
						<label class="control-label" for="textarea2">Order Date</label>
						<div class="controls">
							<input type="date" name="order_date" class="cleditor" id="textarea2" value="<?php echo $row->created_at; ?>" />
						</div>
					</div>

					<div class="form-actions">
						<button type="submit" name="edit_order" class="btn btn-primary">Update Order</button>
						<button type="reset" class="btn">Reset</button>
					</div>
				</fieldset>
		{!! Form::close() !!} 

		</div>
	</div><!--/span-->

</div><!--/row-->
@endsection