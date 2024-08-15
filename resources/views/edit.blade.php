<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Update : Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container-fluid text-light">
          <a class="navbar-brand text-light" href="#">Navbar</a>
          <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active text-white" aria-current="page" href="#">Home</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

     
      
    <!-- form start -->
     <div class="container mt-3">
        <form action="/edit/{{$note->id}}" method="post">
            @csrf
        <div class="form">
            <div class="card-header">
                <h2>Update Note </h2>
                <hr>

            </div>
            <div class="card-footer">
                <label class="form-control" for="title">Note Title :
                <input type="text" name="title" class="form-control" value="{{$note->title}}"> </label>
                <label class="form-control" for="">Note Description :
                    <input type="text" name="description" value="{{$note->description}}" class="form-control">
                    
                </label>
                <input type="submit" class="btn btn-dark mt-3 w-100" value="Submit">

            </div>

        </div>
        </form>