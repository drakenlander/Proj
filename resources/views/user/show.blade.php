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
    .portada {
      background-image: url('https://res-1.cloudinary.com/abroad101/image/upload/c_limit,f_auto,h_800,w_800/v1430905155/Program_12977_ProfilePhoto__97d2.jpg'); /* Reemplaza con la ruta de tu imagen */
      background-size: cover;
      background-position: center;
      height: 60vh; /* Altura ajustada para la portada */
      color: white; /* Color de texto blanco para contraste */
      text-align: center; /* Centrar el contenido */
      display: flex;
      flex-direction: column;
      justify-content: center;
      padding: 20px; /* Espacio interno */
    }
  </style>
</head>
<body style="background-color: #f4f5f7; height:70vh;">
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
        <div class="col ">
          <a class="btn btn-lg " href={{ route('user.show') }}>
          <div class="p-12  align-center align-middle rounded-circle" style="width: 38px; height: 38px; margin: auto 0;">
          <svg xmlns="http://www.w3.org/2000/svg" height="38" width="38" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#ffffff" d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/></svg>          </div>
          </a>
        </div>
        <div class="col ">
          <a class="btn btn-lg " href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
          <div class="p-12  align-center align-middle rounded-circle" style="width: 38px; height: 38px; margin: auto 0;">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#ffffff" d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z"/></svg>          </div>
          </a>
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