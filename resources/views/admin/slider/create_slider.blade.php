@extends('admin.admin_master');

@section('admin_content')

<div class="validation-form">
 	<!---->
  	    
        {!! Form::open(['url' => 'save-slider','enctype'=>'multipart/form-data', 'method'=>'post']) !!}
         	<div class="">
          <h2>
            <?php
              $message = Session::get('storeCategory');
              if($message){
                echo $message;
                Session::put('storeCategory','');
              }
            ?>
          </h2>

            <div class="col-md-4 form-group1 ">
              <label class="form-control-label">Slider Image</label>
              <input type="file" name="sliderImage">
            </div>

            <div class="col-md-12 form-group">
              <label class="form-control-label">Image Description</label>
              <input type="text" class="form-control" name="image_description" placeholder="Name" required="">
            </div>

            <div class="col-md-4 form-group2 group-mail">
              <label class="form-control-label">Publication Status</label>
            <select name="publication_status" class="form-control">
            	<option value="1">Publish</option>
            	<option value="0">Unpublish</option>
            </select>
            </div>
             <div class="clearfix" style="height:30px;"> </div>
          
            <div class="col-md-12 form-group">
              <button type="submit" class="btn btn-primary">Create</button>
              <button type="reset" class="btn btn-default">Reset</button>
            </div>
          <div class="clearfix"> </div>
        {!! Form::close() !!}
    
 	<!---->
 </div>

 @endsection