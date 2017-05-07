@extends('admin.admin_master')
@section('admin_content')

<?php foreach ($show_brand as $row) {


	
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


		{!! Form::open(['url' => 'update_brand','method'=>'post']) !!}
				<fieldset>
					<h2 style="color:green"></h2>
					<div class="control-group">
						<label class="control-label" for="typeahead">Manufacturer Name </label>
						<div class="controls">
						<input type="text" name="brand_name" value="
						<?php 

						echo $row->brand_name;

						?>" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" >
							<input type="hidden" value="<?php echo $row->brand_id; ?>" name="brand_id" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" >

						</div>
					</div>



					<div class="control-group hidden-phone">
						<label class="control-label" for="textarea2">Manufacturer Description</label>
						<div class="controls">
							<textarea name="brand_description"class="cleditor" id="textarea2" rows="3"><?php echo $row->brand_description; ?></textarea>
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
						<button type="submit" name="add_brand" class="btn btn-primary">Update Manufacturer</button>
						<button type="reset" class="btn">Reset</button>
					</div>
				</fieldset>
		{!! Form::close() !!} 

		</div>
	</div><!--/span-->

</div><!--/row-->
@endsection