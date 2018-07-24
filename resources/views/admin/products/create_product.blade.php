@extends('admin.admin_master');

@section('admin_content')

<div class="validation-form">
 	<!---->
  	    
        {!! Form::open(['url' => 'save-product','enctype'=>'multipart/form-data', 'method'=>'post']) !!}
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
            <div class="col-md-12 form-group">
              <label class="form-control-label">Product Name</label>
              <input type="text" class="form-control" name="product_name" placeholder="Name" required="">
            </div>

            <div class="col-md-6 form-group2 group-mail">
              <label class="form-control-label">Category Name</label>
            <?php
              $category_name = DB::table('categories')
              ->get();

              ?>
            <select name="category_id" class="form-control">

            @foreach($category_name as $vcategory_name)
              <option value="{{$vcategory_name->category_id}}">{{$vcategory_name->categoryName}}</option>
              @endforeach
            </select>
            </div>

            <div class="col-md-6 form-group group-mail">
              <label class="form-control-label">Sub Category Name</label>
            <?php
              $category_name = DB::table('subcategories')
              ->get();

              ?>
            <select name="subcategory_id" class="form-control">

            @foreach($category_name as $vcategory_name)
              <option value="{{$vcategory_name->subcategory_id}}">{{$vcategory_name->subcategoryName}}</option>
              @endforeach
            </select>
            </div>

            <div class="col-md-6 form-group group-mail">
              <label class="form-control-label">Manufacturer Name</label>
              <?php
                  $manufacturer_name = DB::table('manufacturers')
                  ->get();

              ?>
            <select name="manufacturer_id" class="form-control">
            @foreach($manufacturer_name as $vmanufacturer_name)
              <option value="{{$vmanufacturer_name->manufacturers_id}}">{{$vmanufacturer_name->manufacturersName}} </option>
              @endforeach
            </select>
            </div>

            <div class="col-md-6 form-group">
              <label class="form-control-label">Product Quantity</label>
              <input type="text" class="form-control" name="product_quantity" placeholder="Quantity" required="">
            </div>

            <div class="col-md-12 form-group">
              <label class="form-control-label">Product Price</label>
              <input type="text" class="form-control" name="product_price" placeholder="Price" required="">
            </div>
            
            <div class="clearfix"> </div>
            </div>
            
            <div class="col-md-12 form-group">
              <label class="form-control-label">Product Short Description</label>
              <textarea name="product_shortdescription" id="" class="form-control" placeholder=" Short Description" required=""></textarea>
            </div>

            <div class="col-md-12 form-group1 ">
              <label class="control-label">Product Long Description</label>
              <textarea name="product_Longdescription" id="mytextarea" class="form-control" placeholder=" Long Description" required=""></textarea>
            </div>

            <div class="col-md-4 form-group1 ">
              <label class="form-control-label">Product Image</label>
              <input type="file" name="productImage">
            </div>


              <div class="col-md-4 form-group2 group-mail">
              <label class="form-control-label">Publication Status</label>
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