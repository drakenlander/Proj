<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Detalles</title>
  <link rel="icon" href="{{ asset('favicon.ico') }}">
</head>
<body style="background-color: #f4f5f7;">
  <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #089cac;">
    <div class="container-fluid">
      <a class="navbar-brand h1" href={{ route('books.index') }} style="color: white; margin: 0; display: inline-block; padding-bottom: 8px;">Herramienta de Gestión de Objetos Perdidos</a>
      <div class="justify-end ">
        <div class="col" style="padding-right: 15px;">
          <a class="btn btn-sm btn-success" href={{ route('books.index') }}>Regresar</a>
        </div>
      </div>
    </div>
  </nav>
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center h-100">
      <div class="col col-lg-6 mb-4 mb-lg-0">
        <div class="card mb-3" style="border-radius: .5rem;">
          <div class="row g-0">
            <div class="col-md-4 gradient-custom text-center"
              style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
              <img src="{{ asset('img/1.jpg') }}" alt="UAM" class="img-fluid my-5" style="width: 100px; border-radius: 50%" />
              <h5>{{ $user->name }}</h5>
              <p>Administrador</p>
              <i class="far fa-edit mb-5"></i>
            </div>
            <div class="col-md-8">
              <div class="card-body p-4">
                <h6>Información</h6>
                <hr class="mt-0 mb-4">
                <div class="row pt-1">
                  <div class="col-6 mb-3">
                    <h6>Email</h6>
                    <p class="text-muted">{{ $user->email }}</p>
                  </div>
                  <div class="col-6 mb-3">
                    <h6>#CIF</h6>
                    <p class="text-muted">{{ $user->cif }}</p>
                  </div>
                </div>
                <h6>Roles</h6>
                <hr class="mt-0 mb-4">
                <div class="row pt-1">
                  <div class="col-6 mb-3">
                    <h6>Oficina de Seguridad</h6>
                    <p class="text-muted">Universidad Americana</p>
                  </div>
                  <div class="col-6 mb-3">
                    <h6>Objetos Perdidos</h6>
                    <p class="text-muted">Departamento</p>
                  </div>
                </div>
                <div class="d-flex justify-content-start">
                  <a href="#!"><i class="fab fa-facebook-f fa-lg me-3"></i></a>
                  <a href="#!"><i class="fab fa-twitter fa-lg me-3"></i></a>
                  <a href="#!"><i class="fab fa-instagram fa-lg"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>