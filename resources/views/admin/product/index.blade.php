@extends('admin.layouts.master')

@section('title')
Dasboard
@endsection

@section('content')
@if(Session::has('success'))
<div class="row">
	<div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
		<div id="charge-message" class="alert alert-success">
			{{ Session::get('success') }}
		</div>
	</div>
</div>
@endif
<table class="table table-striped">
	<thead>
		<tr>
			<th>Name</th>
			<th>Images</th>
			<th>Description</th>
			<th>Price</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		@foreach($products as $product)
		<tr>
			<td>{{ $product->title }}</td>
			<td>{{ $product->imagePath }}</td>
			<td>{{ $product->description }}</td>
			<td>{{ $product->price }}</td>
			<td><a href="{{ route('product.edit', ['id' => $product->id]) }}"><i class="fa fa-pencil" aria-hidden="true"></i></a> / <a href="{{ route('product.delete', ['id' => $product->id]) }}"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
		</tr>
		@endforeach
	</tbody>
</table>
<p><a href="{{ route('product.add')}}" class="btn btn-info" role="button">Add Book</a></p>
@endsection