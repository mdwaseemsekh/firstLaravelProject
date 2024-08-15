<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD & Auth Project </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
 <style>
    .login-form form input{
    width: 50%;
    align-items: center;
    margin-bottom: .5rem;
}

.note-area form input{
    
    align-items: center;
    margin-bottom: 0.4rem;
}
.note-area form textarea{
    width: 80%;
    height: 20%;
    align-items: center;
    margin-bottom: 0.4rem;
}

.note-area form .add-note-btn{
    width: 7rem;
}
 </style>
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
          @auth
                <!-- The user is authenticated -->
                
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                      <input type="submit" class="btn btn-danger" value="Log Out">
                       </form>
                
            @else
                <!-- The user is not authenticated -->
                <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
                <a href="{{ route('register') }}" class="mx-3 btn btn-danger">Register</a>

            @endauth
        </div>
      </nav>

      @yield('content')

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
     </body>
</html>

