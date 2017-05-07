@extends('admin.admin_master')
@section('admin_content')

<?php foreach ($product_info as $row) {


	
} ?>

<div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-header" data-original-title>
			<h2><i class="halflings-icon edit"></i><span class="break"></span>Edit Category</h2>
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


		{!! Form::open(['url' => 'update_product','method'=>'post']) !!}
				<fieldset>
					<h2 style="color:green"></h2>
					<div class="control-group">
						<label class="control-label" for="typeahead">Product Name </label>
						<div class="controls">
						<input type="text" name="product_name" value="
						<?php 

						echo $row->product_name;

						?>" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" >
							<input type="hidden" value="<?php echo $row->product_id; ?>" name="product_id" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" >

						</div>
					</div>
					<div class="control-group hidden-phone">
						<label class="control-label">Product short Description</label>
						<div class="controls">
							<textarea name="product_short_description" class="cleditor" id="textarea2" rows="10" cols="20">
						<?php echo $row->product_short_description; ?>
								
							</textarea>
						</div>
					</div>



					<div class="control-group hidden-phone">
						<label class="control-label">Product Description</label>
						<div class="controls">
							<textarea name="product_long_description" class="cleditor" id="textarea2" rows="10" cols="20">
						<?php echo $row->product_long_description; ?>
								
							</textarea>
						</div>
					</div>
					<div class="control-group hidden-phone">
						<label class="control-label" for="textarea2">Product Old Price</label>
						<div class="controls">
							<input name="product_old_price" class="cleditor" id="textarea2" value="<?php echo $row->product_old_price; ?>" />
						</div>
					</div>

					<div class="control-group hidden-phone">
						<label class="control-label" for="textarea2">Product New Price</label>
						<div class="controls">
							<input name="product_new_price"class="cleditor" id="textarea2" rows="3" value="<?php echo $row->product_new_price; ?>" />
						</div>
					</div>

					<div class="control-group hidden-phone">
						<label class="control-label" for="textarea2">Product Stock</label>
						<div class="controls">
							<input name="product_stock"class="cleditor" id="textarea2" rows="3"
							value="<?php echo $row->product_stock; ?>" />
						</div>
					</div>


					<div class="control-group">
						<label class="control-label" for="selectError">Publication Status</label>
						<div class="controls">
							<select name="publication_status" id="selectError" dat a-rel="chosen">

							
								<option value="1">Published</option>

							
								<option value="0">Unpublished</option>
								

							</select>
						</div>
					</div>
					<div class="form-actions">
						<button type="submit" name="add_product" class="btn btn-primary">Update Product</button>
						<button type="reset" class="btn">Reset</button>
					</div>
				</fieldset>
		{!! Form::close() !!} 

		</div>
	</div><!--/span-->

</div><!--/row-->
@endsection