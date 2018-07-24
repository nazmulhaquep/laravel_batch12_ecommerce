@extends('admin.admin_master');

@section('admin_content')

<div class="validation-form">
 	<!---->
  	    
        {!! Form::open(['url' => 'save-category','method'=>'post']) !!}
         	<div class="vali-form">
          <h2>
            <?php
              $message = Session::get('storeCategory');
              if($message){
                echo $message;
                Session::put('storeCategory','');
              }
            ?>
          </h2>
            <div class="col-md-12 form-group">
              <label class="form-control-label">Category Name</label>
              <input type="text" class="form-control" name="categoryName" placeholder="Name" required="">
            </div>
            
            <div class="clearfix"> </div>
            </div>
            
            <div class="col-md-12 form-group">
              <label class="control-label">Category Description</label>
              <textarea name="categoryDescription" class="form-control" placeholder=" Description"></textarea>
            </div>
             <div class="clearfix" style="height:30px;"> </div>

              <div class="col-md-12 form-group2 group-mail">
              <label class="control-label">Publication Status</label>
            <select name="publicationStatus" class="form-control">
            	<option value="1">Publish</option>
            	<option value="0">Unpublish</option>
            </select>
            </div>
             <div class="clearfix"> </div>
          
            <div class="col-md-12 form-group">
              <button type="submit" class="btn btn-primary">Create</button>
              <button type="reset" class="btn btn-default">Reset</button>
            </div>
          <div class="clearfix"> </div>
        {!! Form::close() !!}
    
 	<!---->
 </div>

 @endsection