<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Posts</title>
  <style>
     .footer {
      background-color: #089cac;
      color: white;
      padding: 20px 0;
      text-align: center;
    }

    .footer a {
      color: white;
      text-decoration: none;
    }
  </style>
</head>
<body style="height:60vh">
   <!-- inicia navbar-->
   <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #089cac;">
    <div class="container-fluid">
      <a class="navbar-brand h1" href={{ route('books.index') }}><h2 class="fs-1 text-light fw-bolder">Uam Lost & Found</h2></a>
      <div class="justify-end row">
        <div class="col ">
          <a class="btn btn-lg" >
          <div class="p-12 bg-light align-center align-middle rounded-circle" style="width: 38px; height: 38px; margin: auto 0;">
            <svg xmlns="http://www.w3.org/2000/svg" height="32" width="28.5" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#008b99" d="M224 0c-17.7 0-32 14.3-32 32V51.2C119 66 64 130.6 64 208v18.8c0 47-17.3 92.4-48.5 127.6l-7.4 8.3c-8.4 9.4-10.4 22.9-5.3 34.4S19.4 416 32 416H416c12.6 0 24-7.4 29.2-18.9s3.1-25-5.3-34.4l-7.4-8.3C401.3 319.2 384 273.9 384 226.8V208c0-77.4-55-142-128-156.8V32c0-17.7-14.3-32-32-32zm45.3 493.3c12-12 18.7-28.3 18.7-45.3H224 160c0 17 6.7 33.3 18.7 45.3s28.3 18.7 45.3 18.7s33.3-6.7 45.3-18.7z"/></svg>         
          </div>
          </a>
        </div>
        <div class="col ">
          <a class="btn btn-lg " href={{ route('books.create') }}>
          <div class="p-12  align-center align-middle rounded-circle" style="width: 38px; height: 38px; margin: auto 0;">
          <svg xmlns="http://www.w3.org/2000/svg" height="38" width="38" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#ffffff" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM232 344V280H168c-13.3 0-24-10.7-24-24s10.7-24 24-24h64V168c0-13.3 10.7-24 24-24s24 10.7 24 24v64h64c13.3 0 24 10.7 24 24s-10.7 24-24 24H280v64c0 13.3-10.7 24-24 24s-24-10.7-24-24z"/></svg>
          </div>
          </a>
        </div>
      </div>
    </div>
  </nav>
   <!-- termina navbar-->
    <div class="container h-100 mt-5" >
      <div class="row h-100 justify-content-center align-items-center">
        <div class="col-10 col-md-8 col-lg-6">
          <h3>Actualizar Descripción de Objeto Perdido</h3>
          <form action="{{ route('books.update', $book->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
              <label for="title">Objeto</label>
              <input type="text" class="form-control" id="title" name="title"
                value="{{ $book->title }}" required>
            </div>
            <div class="form-group">
              <label for="body">Descripción</label>
              <textarea class="form-control" id="body" name="body" rows="3" required>{{ $book->body }}</textarea>
            </div>
            <button type="submit" class="btn mt-3 btn-primary">Actualizar Estado de Objeto Perdido</button>
          </form>
        </div>
      </div>
    </div>
    <footer class="footer" style="padding: 50px 0px; margin-top:100px">
    <div class="container"  style="background-color: #089cac;">
      <div class="row">
        <div class="col-md-4 ">
          <a href="{{ route('books.index') }}"><h2 class="fw-bolder">Uam Lost & Found</h2></a>
        </div>
        <div class="col-md-4">
         <h2 class="fw-semibold">Contactanos</h2>
         <h2 class="">+505 22783800</h2>
        </div>
        <div class="col-md-4">
         
        </div>
      </div>
    </div>
  </footer>
</body>
</html>