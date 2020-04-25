<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ARTICULO</title>
  </head>
  <body>
    <?php
      echo $_POST['articulo']."<br>";
      $clave = $_POST['clave'];
      $precio = $_POST['precio'];
      echo $clave."<br>";
      echo $precio."<br>";

      if ($clave == "1") {
        $clavej =$precio-($precio)*10/100;
              echo $clavej;
      }
      else {
      if ($clave == "2") {
          $r =$precio-($precio)*20/100;
          echo $r;
      }
        }
     ?>
  </body>
</html>
