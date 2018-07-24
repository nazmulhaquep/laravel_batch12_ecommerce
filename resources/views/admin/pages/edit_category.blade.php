@extends('admin.admin_master');

@section('admin_content')

<div class="validation-form">
 	<!---->
  	    
        {!! Form::open(['url' => 'update-category','method'=>'post']) !!}
         	<div class="vali-form">
          
         	  <div class="col-md-12 form-group">
              <label class="form-control-label">Category Name</label>
              <input type="text" name="categoryName" class="form-control" value="{{$category_info->categoryName}}" required="">
              <input type="hidden" name="category_id" value="{{$category_info->category_id}}" required="">
            </div>
            
            <div class="clearfix"> </div>
            </div>
            
            <div class="col-md-12 form-group">
              <label class="form-control-label">Category Description</label>
              <textarea name="categoryDescription" class="form-control" required="">{{$category_info->categoryDescription}}</textarea>
            </div>
             <div class="clearfix"> </div>

              <div class="col-md-12 form-group2 group-mail">
              <label class="control-label">Publication Status</label>
            <select name="publicationStatus"  class="form-control">
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