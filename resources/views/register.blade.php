@extends('layouts.layout')

@section('content')


<!-- form -->
 
<div class="register-form container text-center mt-4 pt-3">
        <h2>Sign Up Form</h2>
       @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
           
        {{$error}}

     <br>
        @endforeach
</ul>

        </div>
    @endif


      <form action="{{route('registerSave')}}" method="post">
        @csrf
        <input type="text"  class="form-control" name="name" placeholder="Enter Username" value="{{old('username')}}" > 
        <input type="email" class="form-control"  name="email" placeholder="Enter Email" value="{{old('email')}}" > 
        <input type="password" class="form-control"  name="password" placeholder="Enter Password" >
        <input type="password" class="form-control"  name="password_confirmation" placeholder="Confirm Password" >
        <input type="submit" class="form-control btn btn-primary"  value="Register">
        <p>Already Registered?</p>
    </form>
    <a href="{{ route('login')}}" class="btn btn-dark">Login</a>
      </div>





@endsection