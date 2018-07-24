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
	      <th scope="col">Sub Category Name</th>
	      <th scope="col">Sub Category Description</th>
	      <th scope="col">Publication Status</th>
	      <th scope="col">Action</th>
	    </tr>
	  </thead>
	  <tbody>
	  @foreach($subcategory_names as $vsubcategory_names)
	    <tr>
	      <th scope="row">
	      {{$vsubcategory_names->subcategory_id}}</th>
	      <td>{{$vsubcategory_names->subcategoryName}}</td>
	      <td>{{$vsubcategory_names->subcategoryDescription}}</td>
	      @if($vsubcategory_names->publicationStatus ==1)
	      <td>Publish</td>
	      @else
	      <td>Unpublish</td>
	      @endif
	      <td><a href="{{url('/view-category/'.$vsubcategory_names->subcategory_id)}}">View</a> | <a href="{{url('/edit-category/'.$vsubcategory_names->subcategory_id)}}">Edit</a> | <a href="{{url('/delete-category/'.$vsubcategory_names->subcategory_id)}}">Delete</a></td>
	      @endforeach
	    </tr>
	  </tbody>
	</table>
</div>
@endsection