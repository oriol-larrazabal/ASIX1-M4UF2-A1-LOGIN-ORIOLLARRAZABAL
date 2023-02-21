<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>FORMULARIO</title>
</head>
<body>
<h1>FORMULARIO PARA REGISTRAR MASCOTAS</h1>
<form action="./recibir.php" method="POST">
    <input type="text" name="nombre" id="nombre" placeholder="Nombre" required><br>
    <input type="date" name="date" id="date" required><br>
    <select name="" id="">
        <option value="">Seleccione región</option>
        <option value="">Cataluña</option>
        <option value="">Baleares</option>
        <option value="">Ceuta</option>
        <option value="">Melilla</option>
        <option value="">Comunitat Valenciana</option>
        <option value="">Cantabria</option>
        <option value="">Región de Murcia</option>
        <option value="">La Rioja</option>
        <option value="">Madrid</option>
    <button type="submit" value="Enviar Datos">
</form>
    <br>
    <br>
<h1>FORMULARIO PARA REGISTRAR ALUMNOS</h1>
<form action="./recibir.php" method="POST">
<label>NOMBRE</label><br>
<input type="text" name="nombreal" id="nombreal" placeholder="Nombre" required><br>
<label>PRIMER APELLIDO</label><br>
<input type="text" name="apellidoal1" id="apellidoal1" placeholder="Primer Apellido" required><br>
<label>SEGUNDO APELLIDO</label><br>
<input type="text" name="apellidoal2" id="apellidoal2" placeholder="Segundo Apellido" required><br>
<label>DATOS DEL TUTOR</label><br>
<input type="text" name="nombretutor" id="nombretutor" placeholder="Nombre y apellidos del tutor" required><br>
<label>EDAD</label><br>
<input type="dateal" name="dateal" id="dateal" required><br>
<label>ESTUDIOS DE PROCEDENCIA</label><br>
<select name="" id="">
        <option value="">Seleccione estudios de procedencia</option>
        <option value="">ESO</option>
        <option value="">BACHILLERATO</option>
        <option value="">ESTUDIOS DE GRADO MEDIO</option>
        <option value="">ESTUDIOS DE GRADO SUPERIOR</option>
        <option value="">UNIVERSIDAD</option>
        <option value="">MÁSTER</option>
        <option value="">DOCTORADO</option>
    <button type="submit" value="Enviar Datos">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>