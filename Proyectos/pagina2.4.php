<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <title>ARTICULO</title>
  </head>
  <body>
    <?php
      $clave = $_POST['clave'];
      $precio = $_POST['precio'];
     ?>
  </body>
  <table class="table">
    <thead class="table-dark">
      <td>Articulo</td>
    </thead>
    <tr>
      <th><?php echo $_POST['articulo']."<br>"; ?></th>
    </tr>
    <thead class="table-dark">
      <td>Clave</td>
    </thead>
    <tr>
      <th><?php echo $clave."<br>";?></th>
    </tr>
    <thead class="table-dark">
      <td>Precio Del Articulo</td>
    </thead>
    <tr>
      <th><?php echo $precio."<br>"; ?></th>
    </tr>
    <thead class="table-dark">
      <td>Descuento</td>
    </thead>
    <tr>
      <th><?php   if ($clave == "1") {
          $clavej =$precio-($precio)*10/100;
                echo $clavej;
        }
        else {
        if ($clave == "2") {
            $r =$precio-($precio)*20/100;
            echo $r;
        }
          }
          ?></th>
    </tr>
  </table>
  <a class="btn1" href="trabajo5.php"><input class="btn-primary" type="submit" value="Regresar"></a>
</html>
