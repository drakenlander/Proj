<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Objetos Perdidos</title>
</head>
<body style="background-color: #f4f5f7;">
  <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #089cac;">
    <div class="container-fluid">
      <a class="navbar-brand h1" href={{ route('books.explore') }} style="color: white; margin: 0; display: inline-block; padding-bottom: 7px;">Listado de Objetos Perdidos</a>
      <div class="justify-end ">
        <div class="col" style="padding-right: 15px;">
          <a class="btn btn-sm btn-success" href={{ route('login') }}>Login</a>
        </div>
      </div>
    </div>
  </nav>
  <div class="container mt-5">
    <div class="row">
      @foreach ($books as $book)
        <div class="col-sm" style="margin-bottom: 40px;">
          <div class="card" style="width: 18rem; height: 40rem;">
            <div class="card-body">
              <h5 class="card-title">{{ $book->object }}</h5>
              <p class="card-text">{{ $book->description }}</p>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item"><b>Color: </b>{{ $book->color }}</li>
              <li class="list-group-item"><b>Ubicación: </b>{{ $book->location }}</li>
              <li class="list-group-item"><b>Fecha del Reporte: </b>{{ $book->created_at->format('d/m/Y - g:i A') }}</li>
            </ul>
            <div class="card-body" style="background-image: url('{{ asset($book->image) }}'); background-size: cover; background-repeat: no-repeat;
            background-position: center center; height: 350px;">
            </div>
            <div class="card-footer">
              <div class="row">
                <div class="col-sm">
                  <a href="{{ route('books.show', $book->id) }}"
                  class="btn btn-primary btn-sm">Ver</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</body>
</html>