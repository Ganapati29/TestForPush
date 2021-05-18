@extends('layout')
@section('content')
<h1>Edit restaurant</h1>
<div class="col-sm-6">
<form action="/edit" method="POST">
@csrf
  <div class="form-group">
    <label>Name</label>
    <input type="hidden" name="id" value="{{$data->id}}">
    <input type="text" class="form-control" name="name" value="{{$data->name}}" placeholder="Enter Name">
  </div>
  <div class="form-group">
    <label>Email</label>
    <input type="text" class="form-control" name="email" value="{{$data->email}}" placeholder="Enter Email">
  </div>
  <div class="form-group">
    <label>Address</label>
    <input type="text" class="form-control" name="address" value="{{$data->address}}" placeholder="Enter Address">
  </div>
  
  <button type="submit" class="btn btn-primary">Update</button>
</form>
</div>
@stop