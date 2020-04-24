<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>TOTAL</title>
  </head>
  <body>
    <?php
    $salario = '450000';
    $vendidos1 = $_POST['vendidos'];
    $precio1 = $_POST['precio'];
  echo  $_POST['nombre']."<br>";
  echo $vendidos1."<br>";
  echo $precio1."<br>";

  $movil = ($vendidos1)*50000 + ($precio1)*5/100;
  $total = ($salario +$movil);
     ?>
     <?php echo $total ?>
  </body>
</html>
