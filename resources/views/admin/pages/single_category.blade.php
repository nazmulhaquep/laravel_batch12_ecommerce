@extends('admin.admin_master')

@section('admin_content')

<div class="agile-tables">
	<table class="table table-hover">
	 
	  <tbody>
	    <tr>
	      <th scope="row">{{$single_category->category_id}}</th>
	      <td>{{$single_category->categoryName}}</td>
	      <td>{{$single_category->categoryDescription}}</td>
	      @if($single_category->publicationStatus ==1)
	      <td>Publish</td>
	      @else
	      <td>Unpublish</td>
	      @endif
	      
	    </tr>
	  </tbody>
	</table>
</div>
@endsection