@extends('layouts.master')
@section('content')
<h1>Edit cat</h1>
<form action="{{route('update-cat', $cat->id)}}" method="POST">
	@csrf
	@method('PUT')
	<label>Name Cat</label>
	<input type="text" name="name" value="{{$cat->name}}">
	<label>Age</label>
	<input type="text" name="age" value="{{$cat->age}}">
	<label>Breed ID</label>
	<input type="text" name="breed_id" value="{{$cat->breed_id}}">
	<button type="submit">Update</button>
	
</form>
@endsection