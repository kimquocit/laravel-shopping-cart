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
<form action="{{ route('product.add') }}" method="post">
{{ csrf_field() }}
	<div class="form-group">
	<label for="tit">Title:</label>
		<input type="text" class="form-control" id="tit" name="title">
	</div>
	<div class="form-group">
		<label for="img">Image:</label>
		<input type="text" class="form-control" id="img" name="image">
	</div>
	<div class="form-group">
		<label for="des">Description:</label>
		<input type="text" class="form-control" id="des" name="description">
	</div>
	<div class="form-group">
		<label for="pri">Price:</label>
		<input type="number" class="form-control" id="pri" name="price">
	</div>
	<div class="form-group">
		<input type="submit" class="btn btn-primary" value="Submit">
	</div>


</form>
@endsection