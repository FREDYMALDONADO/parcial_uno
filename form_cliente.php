<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Formulario cliente</title>

   

    <nav class="navbar navbar-expand-lg navbar-light bg-danger">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Parcial uno</a>
        
             
      
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
<form method="post" action="recibe_cliente.php">
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
    <button class="btn btn-secondary" type="submit">Enviar</button>
  </div>
</form>

    </div>
</div>



 </div>

   <!-- Option 1: Bootstrap Bundle with Popper -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
-->
  </body>
  
</html>