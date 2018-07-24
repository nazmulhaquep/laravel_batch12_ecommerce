@extends('admin.admin_master')

@section('admin_content')

<div class="agile-tables">
	<table class="table table-hover">
	 
	  <tbody>
	    <tr>
	      <th scope="row">{{$single_manufacturer->manufacturers_id}}</th>
	      <td>{{$single_manufacturer->manufacturersName}}</td>
	      <td>{{$single_manufacturer->manufacturersDescription}}</td>
	      @if($single_manufacturer->publicationStatus ==1)
	      <td>Publish</td>
	      @else
	      <td>Unpublish</td>
	      @endif
	      
	    </tr>
	  </tbody>
	</table>
</div>
@endsection