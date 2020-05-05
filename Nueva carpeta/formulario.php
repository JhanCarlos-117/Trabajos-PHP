<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="tilos.css">
    <link rel="stylesheet" href="font-awesome.css">
    <link rel="stylesheet" href="flexslider.css">
    <title>REGISTRO</title>
  </head>
  <body>
    <h1>REGISTRARSE</h1>
    <FORM ACTION="pagina2.php" METHOD="post">
      <label for="">Nombres:</label><input type="text" name="nombre"><br>
      <label for="">Apellidos:</label><input type="text" name="apellidos"><br>
      <label for="">Edad:</label><input type="text" name="edad"><br>
      <label for="">Fecha de Nacimiento:</label><input type="date" name="fecha"><br>
      <label for="">Sexo:</label><input type="radio" name="masculino">M
      <input type="radio" name="femenino">F
      <input type="radio" name="otro">Otro <br>
      <label for="">Nacionalidad:</label><input type="text" name="nacionalidad"><br>
      <button class="btn-primary" type="button" name="button">Enviar</button>

      <div class="flexslider">
        <ul class="slides">
        <li>
        <img src="Images/HaloRGame2.jpg" height="350" width="200">
        </li>

        <li>
        <img src="Images/HaloRGame3.jpg" height="350" width="200">
        </li>

        <li>
        <img src="Images/HaloRGame4.jpg" height="350" width="200">
        </li>
        </ul>
      </div>

      <script src="Js/jquery-3.1.0.min.js"></script>
      <script src="Js/jquery.flexslider.js"></script>
      <script src="Js/main.js"></script>
  </body>
</html>
