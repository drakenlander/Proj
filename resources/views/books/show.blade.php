<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Detalles</title>
</head>
<body style="background-color: #f4f5f7;">
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #089cac;">
      <div class="container-fluid">
        <a class="navbar-brand h1" href={{ route('books.explore') }}>Listado de Objetos Perdidos</a>
        <div class="justify-end ">
          <div class="col ">
            <a class="btn btn-sm btn-success" href={{ route('books.explore') }}>Regresar</a>
          </div>
        </div>
      </div>
    </nav>
    <div class="container h-100 mt-5">
        <div class="row h-100 justify-content-center align-items-center">
            <h3>{{ $book->object }}</h3>
            <br>
            <br>
            <br>
            <div class="card">
                <div class="card-body">
                    <p class="card-text">{{ $book->description }}</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">{{ $book->color }}</li>
                    <li class="list-group-item">{{ $book->location }}</li>
                    <li class="list-group-item">{{ $book->created_at->format('d/m/Y - g:i A') }}</li>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>