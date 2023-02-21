<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>INICIO DE SESIÓN</title>
</head>
<body>
    <div id="inicio">
        <div> 
        <img src="./img/read.png">
        </div>
        <div>
            <form action="recibir2.php" method="POST">
            <input type="text" name="nombre" placeholder="usuario" required>
            <input type="text" name="pwd" placeholder="pwd" required>
            </form>
        </div>
    </div>
</body>