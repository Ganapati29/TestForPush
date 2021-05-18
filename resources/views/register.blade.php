@extends('layout')
@section('content')
<div>   
    <h1>User Register page</h1>
    <div class="col-sm-6">
        <form method="POST"action="register">
        @csrf
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" name="name" placeholder="Enter Name">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" class="form-control" name="email" placeholder="Enter Email">
            </div>
            
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="password" placeholder="Enter Password">
            </div>
            <div class="form-group">
                <label>Contact </label>
                <input type="text" class="form-control" name="contact" placeholder="Enter Contact">
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
        </form>
    </div>
</div>
@stop