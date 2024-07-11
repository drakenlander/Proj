<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Añadir</title>
</head>
<body style="background-color: #f4f5f7;">
  <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #089cac;">
    <div class="container-fluid">
      <a class="navbar-brand h1" href={{ route('books.index') }} style="color: white; margin: 0; display: inline-block; padding-bottom: 7px;">Herramienta de Gestión de Objetos Perdidos</a>
      <div class="justify-end ">
        <div class="col" style="padding-right: 15px;">
          <a class="btn btn-sm btn-success" href={{ route('books.index') }}>Regresar</a>
        </div>
      </div>
    </div>
  </nav>
    <div class="container h-100 mt-5">
      <div class="row h-100 justify-content-center align-items-center">
        <div class="col-10 col-md-8 col-lg-6">
          <h3 style="padding-bottom: 10px;">Añadir un Objeto</h3>
          <form action="{{ route('books.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="object" style="padding-bottom: 5px;"><b>Objeto</b></label>
              <input type="text" class="form-control" id="object" name="object" required>
            </div>
            <br>
            <div class="form-group">
              <label for="image" style="padding-bottom: 5px;"><b>Imagen</b></label>
              <input type="file" class="form-control" id="image" name="image">
            </div>
            <br>
            <div class="form-group">
              <label for="description" style="padding-bottom: 5px;"><b>Descripción</b></label>
              <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
            </div>
            <br>
            <div class="form-group">
              <label for="color" style="padding-bottom: 5px;"><b>Color</b></label>
              <input type="text" class="form-control" id="color" name="color" required>
            </div>
            <br>
            <div class="form-group">
              <label for="location" style="padding-bottom: 5px;"><b>Ubicación</b></label>
              <textarea class="form-control" id="location" name="location" rows="3" required></textarea>
            </div>
            <br>
            <div class="form-group">
              <label for="idcard" style="padding-bottom: 5px;"><b>Cédula</b></label>
              <input type="text" class="form-control" id="idcard" name="idcard" required>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Añadir</button>
          </form>
        </div>
      </div>
    </div>
</body>
</html>