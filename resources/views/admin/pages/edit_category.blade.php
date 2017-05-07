@extends('admin.admin_master')
@section('admin_content')

<?php foreach ($show_category as $row) {


	
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


		{!! Form::open(['url' => 'update_category','method'=>'post']) !!}
				<fieldset>
					<h2 style="color:green"></h2>
					<div class="control-group">
						<label class="control-label" for="typeahead">Category Name </label>
						<div class="controls">
						<input type="text" name="category_name" value="
						<?php 

						echo $row->category_name;

						?>" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" >
							<input type="hidden" value="<?php echo $row->category_id; ?>" name="category_id" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" >

						</div>
					</div>



					<div class="control-group hidden-phone">
						<label class="control-label" for="textarea2">Category Description</label>
						<div class="controls">
							<textarea name="category_description"class="cleditor" id="textarea2" rows="3"><?php echo $row->category_description; ?></textarea>
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
						<button type="submit" name="add_category" class="btn btn-primary">Update Category</button>
						<button type="reset" class="btn">Reset</button>
					</div>
				</fieldset>
		{!! Form::close() !!} 

		</div>
	</div><!--/span-->

</div><!--/row-->
@endsection