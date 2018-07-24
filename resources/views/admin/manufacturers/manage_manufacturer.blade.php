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
	      <th scope="col">Manufacturer Name</th>
	      <th scope="col">Manufacturer Description</th>
	      <th scope="col">Publication Status</th>
	      <th scope="col">Action</th>
	    </tr>
	  </thead>
	  <tbody>
	  @foreach($all_manufacturer as $vmanufacturer_names)
	    <tr>
	      <th scope="row">
	      {{$vmanufacturer_names->manufacturers_id}}</th>
	      <td>{{$vmanufacturer_names->manufacturersName}}</td>
	      <td>{{$vmanufacturer_names->manufacturersDescription}}</td>
	      @if($vmanufacturer_names->publicationStatus ==1)
	      <td>Publish</td>
	      @else
	      <td>Unpublish</td>
	      @endif
	      <td><a href="{{url('/view-manufacturer/'.$vmanufacturer_names->manufacturers_id)}}">View</a> | <a href="{{url('/edit-manufacturer/'.$vmanufacturer_names->manufacturers_id)}}">Edit</a> | <a href="{{url('/delete-manufacturer/'.$vmanufacturer_names->manufacturers_id)}}">Delete</a></td>
	      @endforeach
	    </tr>
	  </tbody>
	</table>
</div>
@endsection