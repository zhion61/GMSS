@extends('layouts.master')
@section('content')
	<div class="container">
		<form method="POST" action="/subjects/store">
		  <div class="form-group">
		    <label for="title">Id</label>
		    <input type="Id" class="form-control" name='Id' placeholder="Id">
		  </div>
		  <div class="form-group">
		    <label for="description">Name</label>
		    <input type="text" class="form-control" name="Name" placeholder="Name">
		  </div>
		  <button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
@endsection