@extends('layout')
@section('content')
<h1>Add restaurant page is here</h1>
<div class="col-sm-6">
<form action="add" method="POST">
@csrf
  <div class="form-group">
    <label>Name</label>
    <input type="natext" class="form-control" name="name" placeholder="Enter Name">
  </div>
  <div class="form-group">
    <label>Email</label>
    <input type="text" class="form-control" name="email" placeholder="Enter Email">
  </div>
  <div class="form-group">
    <label>Address</label>
    <input type="text" class="form-control" name="address" placeholder="Enter Address">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@stop