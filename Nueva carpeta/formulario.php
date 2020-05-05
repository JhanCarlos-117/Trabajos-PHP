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
      <label class="lbl" for="">Nombres:</label><br>
      <input type="text" name="nombre"><br>
      <label class="lbl" for="">Apellidos:</label><br>
      <input type="text" name="apellidos"><br>
      <label class="lbl" for="">Edad:</label><br>
      <input type="text" name="edad"><br>
      <label class="lbl" for="">Fecha de Nacimiento:</label><br>
      <input type="date" name="fecha"><br>
      <label class="lbl" for="">Nacionalidad:</label><br>
      <input type="text" name="nacionalidad"><br>
      <label class="lbl" for="">Sexo:</label><input class="sex" type="radio" name="masculino"><label class="m" for="">M</label>
      <input class="sex" type="radio" name="femenino"><label class="m" for="">F</label>
      <input class="sex" type="radio" name="otro"><label class="m" for="">Otro</label> <br>
      <input class="btn-primary" type="submit" name="btn" value="Enviar">

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
