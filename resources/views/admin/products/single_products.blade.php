@extends('admin.admin_master')

@section('admin_content')

<div class="agile-tables">
	<table class="table table-hover">
	 
	  <tbody>
	    <tr>
	      <th scope="row">{{$single_product->product_id}}</th>
	      <td>{{$single_product->productName}}</td>
	      <td>{{$single_product->productDescription}}</td>
	      @if($single_product->publicationStatus ==1)
	      <td>Publish</td>
	      @else
	      <td>Unpublish</td>
	      @endif
	      
	    </tr>
	  </tbody>
	</table>
</div>
@endsection