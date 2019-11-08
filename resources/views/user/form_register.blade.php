@extends('layouts.master')
@section('content')
<h1>Register user</h1>
 <form action="{{route('register')}}" method="POST">
 	@csrf
 	<label>Name</label>
 	<input type="text" name="name">
 	<label>Email</label>
 	<input type="text" name="email">
 	<label>Password</label>
 	<input type="password" name="password">
 	<button type="submit">Register</button>
 </form>
@endsection