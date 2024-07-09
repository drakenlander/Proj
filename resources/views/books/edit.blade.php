<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Posts</title>
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
    <div class="container h-100 mt-5">
      <div class="row h-100 justify-content-center align-items-center">
        <div class="col-10 col-md-8 col-lg-6">
          <h3>Actualizar Registro de Objeto Perdido</h3>
          <form action="{{ route('books.update', $book->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
              <label for="object">Objeto</label>
              <input type="text" class="form-control" id="object" name="object"
                value="{{ $book->object }}" required>
            </div>
            <br>
            <div class="form-group">
              <label for="description">Descripción</label>
              <textarea class="form-control" id="description" name="description" rows="3" required>{{ $book->description }}</textarea>
            </div>
            <br>
            <div class="form-group">
              <label for="color">Color</label>
              <input type="text" class="form-control" id="color" name="color"
                value="{{ $book->color }}" required>
            </div>
            <br>
            <div class="form-group">
              <label for="location">Ubicación</label>
              <textarea class="form-control" id="location" name="location" rows="3" required>{{ $book->location }}</textarea>
            </div>
            <br>
            <div class="form-group">
              <label for="idcard">Cédula</label>
              <input type="text" class="form-control" id="idcard" name="idcard"
                value="{{ $book->idcard }}" required>
            </div>
            <br>
            <button type="submit" class="btn mt-3 btn-primary">Actualizar Estado de Objeto Perdido</button>
          </form>
        </div>
      </div>
    </div>
</body>
</html>