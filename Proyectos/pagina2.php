<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PAGINA 2</title>
  </head>
  <body>
    <?php
     $nota1 = $_POST ['nota1'];
     $nota2 = $_POST ['nota2'];
     $nota3 = $_POST ['nota3'];
     $examen = $_POST ['examen'];
     $trabajo = $_POST ['trabajo'];

     $resultado =   ($nota1 + $nota2 + $nota3)*35/100 + ($examen)*35/100 + ($trabajo)* 30/100;
     ?>
     Definitiva:  <?php echo ($resultado)/5 ?>
  </body>
</html>
