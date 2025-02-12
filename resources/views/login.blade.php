@extends('layouts.layout')

@section('content')

<div class="card container my-5">
<div class="card-head">
    <h2>Login Form</h2>
   
</div>
@if($errors->any())
<div class="alert alert-danger">
@foreach($errors->all() as $error)

    {{ $error}}
    <br>

@endforeach
</div>
@endif

@if(session('loginStatus'))
      <div class="container alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Error!</strong> {{session('loginStatus')}}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

<div class="card-foot container">
 
<form action="{{ route('loginAuth')}}" method="post" >
    @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" name="email" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
    
</div>

@endsection