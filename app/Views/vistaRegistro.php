<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hogar de Paso</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo(base_url("public/styles/styles.css")) ?>">
</head>
<body>

    <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Hogar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
     </ul>
  </div>
</nav>
       
    </header>

<br>
<br>
<div class="container">
  <form class="mt-5" method="POST" action="<?php echo(base_url("public/animales/registro")) ?>">
  <br>
    <div class="form-group">
      <label for="exampleFormControlInput1">Nombre</label>
      <input type="text" class="form-control" id="nombreanimal" placeholder="Nombre del animal" name="nombre">
    </div>
    <br>

    <div class="form-group">
      <label for="exampleFormControlInput1">Edad</label>
      <input type="number" class="form-control" id="edadanimal" placeholder="Edad del animal" name="edad">
    </div>
    <br>

    <div class="form-group">
      <label for="exampleFormControlSelect1">Tipo de animal </label>
        <select class="form-control" id="exampleFormControlSelect1" name="tipoanimal">
        <option value="1">Doméstico</option>
        <option value="2">Fauna Silvestre</option>
        </select>
    </div>
    <br>

    <div class="form-group">
      <label for="exampleFormControlTextarea1">Descripción</label>
        <textarea class="form-control" id="descripcion" rows="3" name="descripcion"></textarea>
    </div>
    <br>

    <div class="form-group">
      <label for="exampleFormControlInput1">Comida</label>
      <input type="text" class="form-control" id="comidaanimal" placeholder="Última comida dada al animal" name="comida">
    </div>
    <br>

    <div class="form-group">
      <label for="exampleFormControlInput1">Imagen</label>
      <input type="text" class="form-control" id="foto" placeholder="URL Imagen" name="foto">
    </div>
    <br>


    <button type="submit" class="btn btn-success">Registrar</button>
    <br><br>
  </form>
</div>
    
    
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>