@extends('admin.admin_master')

@section('admin_content')

<div class="agile-tables">
	<h2 style="color: green;">
		<?php
			$message = Session::get('deleteCategory');
			if($message){
				echo $message;
				Session::put('deleteCategory','');
			}
		?>
	</h2>
	<h2 style="color: green">
         	<?php
         		$message = Session::get('updateCategory');
         		if($message){
         			echo $message;
         			Session::put('updateCategory','');
         		}
         	?>
         		
         	</h2>
	<table class="table table-hover">
	  <thead>
	    <tr>
	      <th scope="col">#</th>
	      <th scope="col">Product Name</th>
	      <th scope="col">Product Description</th>
	      <th scope="col">Publication Status</th>
	      <th scope="col">Action</th>
	    </tr>
	  </thead>
	  <tbody>
	  @foreach($all_product as $vproduct_names)
	    <tr>
	      <th scope="row">
	      {{$vproduct_names->product_id}}</th>
	      <td>{{$vproduct_names->productName}}</td>
	      <td>{{$vproduct_names->productShortdescription}}</td>
	      @if($vproduct_names->publicationStatus ==1)
	      <td>Publish</td>
	      @else
	      <td>Unpublish</td>
	      @endif
	      <td><a href="{{url('/view-product/'.$vproduct_names->product_id)}}">View</a> | <a href="{{url('/edit-product/'.$vproduct_names->product_id)}}">Edit</a> | <a href="{{url('/delete-product/'.$vproduct_names->product_id)}}">Delete</a></td>
	      @endforeach
	    </tr>
	  </tbody>
	</table>
</div>
@endsection