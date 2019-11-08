@extends('layouts.master')
@section('content')
<h1>Login</h1>
@if(Session::has('fail'))
 <p style="color: red"> {{Session::get('fail')}}</p>
@endif
<form action="{{route('login-user')}}" method="POST">
	@csrf
	<label>Email</label>
	<input type="text" name="email">
	<label>Password</label>
	<input type="password" name="password">
	<button type="submit">Login</button>
	
</form>
@endsection