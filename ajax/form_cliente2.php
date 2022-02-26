<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>ajax</title>

   

    <nav class="navbar navbar-expand-lg navbar-light bg-danger">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">PROYECTO</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Clases de PW
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="producto.html">Operadores aritmeticos</a></li>
                <li><a class="dropdown-item" href="producto.html">Catalogo de productos</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
          </ul>
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>



  </head>
  <body>
  
<div class="container"><br>
<div class="row justify-content-center">
    <div class="col-6 p-5 bg-white shadow-lg rounded">
<form method="post" action="">
    <h3>Trabajando con ajax</h3>
    <div class="form-group">
        <label for="codigo">Codigo</label>
        <input id="codigo" class="form-control" type="text" name="codigo">

    </div>
    
    <div class="form-group">
        <label for="nombre">Nombres</label>
        <input id="nombre" class="form-control" type="text" name="nombre">

        

    <div class="form-group">
        <label for="apellido">Apellidos</label>
        <input id="apellido" class="form-control" type="text" name="apellido">

    </div>

    <div class="form-group">
        <label for="dui">DUI</label>
        <input id="dui" class="form-control" type="text" name="dui">

    </div>

    <div class="form-group">
        <label for="direccion">Direccion</label>
        <input id="direccion" class="form-control" type="text" name="direccion">

    </div>

    <div class="form-group">
        <label for="telefono">Telefono</label>
        <input id="telefono" class="form-control" type="text" name="telefono">

    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input id="email" class="form-control" type="email" name="email">

    </div><br>
   


    <div class="form-group">
  <button class="btn btn-secondary" id="enviar" type="button">Enviar</button>
  </div>
</form>

    </div>
</div>


<div id="Msg"></div>
 </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
   
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript" src="funcion.js"></script>
  </body>
  
</html>