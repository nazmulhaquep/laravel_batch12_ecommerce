@extends('admin.admin_master');

@section('admin_content')

<div class="validation-form">
 	<!---->
  	    
        {!! Form::open(['url' => 'update-category','method'=>'post']) !!}
         	<div class="vali-form">
          
         	  <div class="col-md-12 form-group">
              <label class="form-control-label">Manufacturer Name</label>
              <input type="text" class="form-control" name="manufacturerName" value="{{$manufacturer_info->manufacturersName}}" required="">
              <input type="hidden" name="manufacturers_id" value="{{$manufacturer_info->manufacturers_id}}" required="">
            </div>
            
            <div class="clearfix"> </div>
            </div>
            
            <div class="col-md-12 form-group">
              <label class="form-control-label">Manufacturer Description</label>
              <textarea name="categoryDescription" class="form-control" required="">{{$manufacturer_info->manufacturersDescription}}</textarea>
            </div>
             <div class="clearfix"> </div>

              <div class="col-md-12 form-group2 group-mail">
              <label class="control-label">Publication Status</label>
            <select name="publicationStatus" class="form-control">
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