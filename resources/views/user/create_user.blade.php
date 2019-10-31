@extends('layouts.master')
@section('content')
<h1>Create User </h1>
<form action="{{route('store-user')}}" method="POST">
    @csrf
    <label>User Name:</label>
    <input type="text" name="name"/>
    <label>Email :</label>
    <input type="text" name="email"/>
    <label>Password</label>
    <input type="password" name="password">
    <label>Country</label>
    <select name="country_id">
        @foreach($listCountry as $country)
            <option value="{{$country->id}}"> {{$country->name}}</option>
        @endforeach
    </select>
    <button type="submit">Create</button>
</form>
@endsection