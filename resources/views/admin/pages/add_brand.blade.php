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
                         {!! Form::open(['url' => 'save_brand','method'=>'post','class'=>'form-horizontal']) !!}
                             
                            
                           
                              <div class="control-group">
                                  <label class="control-label">Manufacturer Name</label>
                                  <div class="controls">
                                      <input type="text" name ="brand_name" placeholder="brand name" class="input-xxlarge" />
                                     
                                  </div>
                              </div>
                           
                              

                              <div class="control-group">
                                  <label class="control-label">Manufacturer Description</label>
                                  <div class="controls">
                                      <textarea name ="brand_description" class="input-xxlarge" rows="3"></textarea>
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