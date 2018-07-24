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
	      <th scope="col">Category Name</th>
	      <th scope="col">Category Description</th>
	      <th scope="col">Publication Status</th>
	      <th scope="col">Action</th>
	    </tr>
	  </thead>
	  <tbody>
	  @foreach($category_names as $vcategory_names)
	    <tr>
	      <th scope="row">
	      {{$vcategory_names->category_id}}</th>
	      <td>{{$vcategory_names->categoryName}}</td>
	      <td>{{$vcategory_names->categoryDescription}}</td>
	      @if($vcategory_names->publicationStatus ==1)
	      <td>Publish</td>
	      @else
	      <td>Unpublish</td>
	      @endif
	      <td><a href="{{url('/view-category/'.$vcategory_names->category_id)}}">View</a> | <a href="{{url('/edit-category/'.$vcategory_names->category_id)}}">Edit</a> | <a href="{{url('/delete-category/'.$vcategory_names->category_id)}}">Delete</a></td>
	      @endforeach
	    </tr>
	  </tbody>
	</table>
</div>
@endsection