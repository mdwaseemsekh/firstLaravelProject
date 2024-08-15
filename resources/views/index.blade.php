@extends('layouts.layout')

@section('content')

      @if(session('addStatus'))
      <div class="container alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success!</strong> {{session('addStatus')}}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
        
        @endif
      @if(session('deleteStatus'))
      <div class="container alert alert-success alert-dismissible fade show" role="alert">  
      <strong>Success!</strong> {{session('deleteStatus')}}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
        
        @endif
        
        @if(session('updateStatus'))
        <div class="container alert alert-success alert-dismissible fade show" role="alert">
              <strong>Success!</strong> {{session('updateStatus')}}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
        
        @endif

      
    <!-- form start -->
     <div class="container mt-3">
        <form action="/" method="post">
            @csrf
        <div class="form">
            <div class="card-header">
                <h2>Make Note </h2>
                <hr>

            </div>
            <div class="card-footer">
                <label class="form-control h5" for="title">Note Title :
                <input type="text" name="title" class="form-control"> </label>
                <label class="form-control h5" for="">Note Description :
                    <input type="text" name="description" class="form-control">
                    
                </label>
                <input type="submit" class="btn btn-dark mt-3 w-100" value="Submit">

            </div>

        </div>
        </form>
     </div>
     <hr>
     <div class="old-notes container mt-3 pt-3">
        
        <h4>Previous Notes</h4>
        <hr>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Note Title</th>
                <th scope="col">Note Description</th>
                <th scope="col">Edit/Delete</th>
              </tr>
            </thead>
            <tbody>
                @foreach($notes as $note)
              <tr>
                <th scope="row">{{$note->id}}</th>
                <td>{{$note->title}}</td>
                <td>{{$note->description}}</td>
                <td>
                    <a href="/edit/{{$note->id}}" class="btn btn-primary">Edit</a>
                    <a href="/delete/{{$note->id}}" class="btn btn-danger">Delete</a>
                </td>
              </tr>
              @endforeach
     </div>


     @endsection
     