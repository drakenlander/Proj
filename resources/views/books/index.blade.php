<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Books</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #089cac;">
    <div class="container-fluid">
      <a class="navbar-brand h1" href={{ route('books.index') }}>Herramienta de Gestión de Objetos Perdidos</a>
      <div class="justify-end ">
        <div class="col ">
          <a class="btn btn-sm btn-success" href={{ route('books.create') }}>Añadir Objeto Perdido</a>
        </div>
      </div>
    </div>
  </nav>
  <div class="container mt-5">
    <div class="row">
      @foreach ($books as $book)
        <div class="col-sm">
          <div class="card" style="width: 18rem;">
          <div class="card-body">
            <h5 class="card-title">{{ $book->object }}</h5>
            <p class="card-text">{{ $book->description }}</p>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">{{ $book->color }}</li>
            <li class="list-group-item">{{ $book->location }}</li>
          </ul>
          <div class="card-footer">
            <div class="row">
              <div class="col-sm">
                <a href="{{ route('books.edit', $book->id) }}"
                class="btn btn-primary btn-sm">Editar</a>
              </div>
              <div class="col-sm" style="text-align: right">
                  <form action="{{ route('books.destroy', $book->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                  </form>
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