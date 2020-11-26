<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animales</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>



    <div class="container">
    <div class="card-deck">
        <?php foreach ($animales as $animal):?>
            <div class="card" style="
    min-width: 261px !important;">
            <img class="card-img-top" src="<?= $animal["foto"] ?>" alt="Card image cap">
                <div class="card-body">
                <h5 class="card-title"><?= $animal["nombre"] ?></h5>
                <p class="card-text">Edad: <?= $animal["edad"] ?></p>
                <p class="card-text">Tipo de animal: <?php 
                switch($animal["tipoanimal"])
                {
                    case '1':
                        echo("Doméstico");
                        break;
                    case '2':
                        echo("Fauna Silvestre");
                        break;
                    default:
                    echo("No tiene");
                    break;
                } ?></p>
                <p class="card-text">Descripción: <?= $animal["descripcion"]?>
                </p>
                <p class="card-text">Última comida: <?= $animal["comida"] ?></p>
                <a href="<?php  echo(base_url("public/animales/eliminar/".$animal["id"])) ?>" class="btn btn-danger">Eliminar</a>
                </div>
            </div>
            <?php endforeach ?>
    </div>
    </div>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>