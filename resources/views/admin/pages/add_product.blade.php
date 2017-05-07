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
                   Form Layout
                 </h3>
                 <ul class="breadcrumb">
                     <li>
                         <a href="#">Home</a>
                         <span class="divider">/</span>
                     </li>
                     <li>
                         <a href="#">Form Stuff</a>
                         <span class="divider">/</span>
                     </li>
                     <li class="active">
                         Form Layout
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
          <!-- BEGIN PAGE CONTENT-->
          <div class="row-fluid">
              <div class="span12">
                  <!-- BEGIN SAMPLE FORMPORTLET-->
                  <div class="widget green">
                      <div class="widget-title">
                          <h4><i class="icon-reorder"></i> Form Layouts</h4>
                          <span class="tools">
                          <a href="javascript:;" class="icon-chevron-down"></a>
                          <a href="javascript:;" class="icon-remove"></a>
                          </span>
                      </div>
                      <div class="widget-body">

<h3 style="color: green;font-weight: bold"><?php 
    $message = Session::get('message');
    if($message){

    echo $message;
    Session::put('message',null);
}
                
?></h3>
                          <!-- BEGIN FORM-->
  {!! Form::open(['url' => 'save_product','method'=>'post','class'=>'form-horizontal','enctype'=>'multipart/form-data']) !!}
                             
                            
                           
                              <div class="control-group">
                                  <label class="control-label">Product Name</label>
                                  <div class="controls">
                                      <input type="text" name ="product_name" placeholder="Product name" class="input-xxlarge" />
                                     
                                  </div>
                              </div>
                           
                              <div class="control-group">
                             
                                  <label class="control-label">Category Name</label>
                                   <select name="category_id">
                                   <div class="controls">
                                   <option>-- Select category--</option>
                                  <?php foreach ($cat_info as $row) {?>
                                 

                                    <option value="{{$row->category_id}}">{{$row->category_name}}</option>
                                  

                                  <?php  }  ?>
                                  </div>
                                  </select>
                              </div>
                              <div class="control-group">
                             
                                  <label class="control-label">Brand Name</label>
                                   <select name="brand_id">
                                   <div class="controls">
                                   <option>-- Select Brand--</option>
                                  <?php foreach ($brand_info as $row) {?>
                                 

                                    <option value="{{$row->brand_id}}">{{$row->brand_name}}</option>
                                  

                                  <?php  }  ?>
                                  </div>
                                  </select>
                              </div>

                              <div class="control-group">
                                  <label class="control-label">Product short Description</label>
                                  <div class="controls">
                                      <textarea name ="product_short_description" class="input-xxlarge" rows="3"></textarea>
                                  </div>
                              </div>

                              <div class="control-group">
                                  <label class="control-label">Product Long Description</label>
                                  <div class="controls">
                                      <textarea name ="product_long_description" class="input-xxlarge" rows="3"></textarea>
                                  </div>
                              </div>
                              <div class="control-group">
                                  <label class="control-label">Product Image</label>
                                  <div class="controls">
                                      <input type="file" name ="product_image[]" placeholder="Give an image" class="input-xxlarge form-control" /><br>
                                      <input type="file" name ="product_image[]" placeholder="Give an image" class="input-xxlarge form-control" /><br>
                                      <input type="file" name ="product_image[]" placeholder="Give an image" class="input-xxlarge form-control" />
                                      <input type="file" name ="product_image[]" placeholder="Give an image" class="input-xxlarge form-control" />
                                     
                                  </div>
                              </div>
                              <div class="control-group">
                                  <label class="control-label">Product Old Price</label>
                                  <div class="controls">
                                      <input type="text" name ="product_old_price" placeholder="Product Price" class="input-xxlarge" />
                                     
                                  </div>
                              </div>
                               <div class="control-group">
                                  <label class="control-label">Product New Price</label>
                                  <div class="controls">
                                      <input type="text" name ="product_new_price" placeholder="Product Price" class="input-xxlarge" />
                                     
                                  </div>
                              </div>
                              <div class="control-group">
                                  <label class="control-label">Is Featured</label>
                                  <div class="controls">
                                      <input type="checkbox" name ="is_featured" placeholder="" class="input-xxlarge" />
                                     
                                  </div>
                              </div>

                               <div class="control-group">
                                  <label class="control-label">Product Stock</label>
                                  <div class="controls">
                                      <input type="text" name ="product_stock" placeholder="Product stock Amount " class="input-xxlarge" />
                                     
                                  </div>
                              </div>

                              <div class="control-group">
                                  <label class="control-label">Select Publication Status</label>
                                  <div class="controls">
                                      <select name ="publication_status" class="input-large m-wrap" tabindex="1">
                                          <option value="">----Select Status---</option>
                                          <option value="1">Published</option>
                                          <option value="0">Unpublished</option>
                                          
                                      </select>
                                  </div>
                              </div>

                              <div class="form-actions">
                                  <button type="submit" class="btn blue"><i class="icon-ok"></i> Save</button>
                                  <button type="button" class="btn"><i class=" icon-remove"></i> Cancel</button>
                              </div>
                  {!! Form::close() !!} 
                          <!-- END FORM-->
                      </div>
                  </div>
                  <!-- END SAMPLE FORM PORTLET-->
              </div>
          </div>
@endsection