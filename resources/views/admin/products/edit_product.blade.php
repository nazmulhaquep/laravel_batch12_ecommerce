@extends('admin.admin_master');

@section('admin_content')

<div class="validation-form">
 	<!---->
  	    
        {!! Form::open(['url' => 'update-product','enctype'=>'multipart/form-data','name'=>'edit.product', 'method'=>'post']) !!}
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
              <input type="text" class="form-control" name="product_name" value="{{$products_info->productName}}" placeholder="Name" required="" />
              <input type="hidden" name="product_id" value="{{$products_info->product_id}}" placeholder="Name" required="" />
            </div>

            <div class="col-md-6 form-group">
              <label class="form-control-label">Product Quantity</label>
              <input type="text" class="form-control" name="product_quantity" value="{{$products_info->productQuantity}}" placeholder="Name" required="">
            </div>

            <div class="col-md-6 form-group">
              <label class="form-control-label">Product Price</label>
              <input type="text" class="form-control" name="product_price" value="{{$products_info->productPrice}}" placeholder="Name" required="">
            </div>

            <div class="col-md-12 form-group">
              <label class="form-control-label">Product Short Description</label>
              <input type="text" class="form-control" name="product_Shortdescription" value="{{$products_info->productShortdescription}}" placeholder="Name" required="">
            </div>

            <div class="col-md-12 form-group">
              <label class="form-control-label">Product Long Description</label>
              <input type="text" class="form-control" name="productLongdescription" value="{{$products_info->productLongdescription}}" placeholder="Name" required="">
            </div>
          <div class="clearfix"> </div>
            <div class="col-md-6 form-group group-mail">
              <label class="form-control-label">Product Category </label>
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
              <label class="control-label">Product Sub Category </label>
            <?php
              $subcategory_name = DB::table('subcategories')
              ->get();

              ?>
            <select name="subcategory_id" class="form-control">

            @foreach($subcategory_name as $vsubcategory_name)
              <option value="{{$vsubcategory_name->subcategory_id}}">{{$vsubcategory_name->subcategoryName}}</option>
              @endforeach
            </select>
            </div>

            <div class="col-md-6 form-group group-mail">
              <label class="control-label">Manufacturer Name</label>
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
            
            <div class="col-md-6 form-group ">
              <label class="form-control-label">Product Image</label>
              <input type="file" name="productImage" value="">
              <img src="{{asset($products_info->productImage)}}" width="50px" height="50px">
            </div>

             <div class="clearfix"> </div>

              <div class="col-md-12 form-group group-mail">
              <label class="control-label">Publication Status</label>
            <select name="publicationStatus" class="form-control">
            	<option value="1">Publish</option>
            	<option value="0">Unpublish</option>
            </select>
            </div>
             <div class="clearfix" style="30px;"> </div>
          
            <div class="col-md-12 form-group">
              <button type="submit" class="btn btn-primary">Create</button>
              <button type="reset" class="btn btn-default">Reset</button>
            </div>
          <div class="clearfix"> </div>
        {!! Form::close() !!}
    
 	<!---->
 </div>
<script type="text/javascript">
  document.forms['edit.product'].elements['publicationStatus'].value='<?php echo $products_info->publicationStatus?>';
  document.forms['edit.product'].elements['category_id'].value='<?php echo $products_info->category_id?>';

  document.forms['edit.product'].elements['subcategory_id'].value='<?php echo $products_info->subcategory_id?>';
  
   document.forms['edit.product'].elements['manufacturer_id'].value='<?php echo $products_info->manufacturer_id?>';
</script>
 @endsection