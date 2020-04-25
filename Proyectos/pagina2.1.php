<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <title>TOTAL</title>
  </head>
  <body>
    <?php
    $salario = '450000';
    $vendidos1 = $_POST['vendidos'];
    $precio1 = $_POST['precio'];

  $movil = ($vendidos1)*50000 + ($precio1)*5/100;
  $total = ($salario +$movil);
     ?>
     <table class="table" border="2">
       <thead  class="thead-light">
         <td>Nombre Del Trabajador:</td>
         <tr>
           <th><?php echo  $_POST ['nombre']."<br>"; ?></th>
         </tr>
         <td>Autos Vendidos:</td>
                <tr>
                  <th><?php echo $vendidos1."<br>"; ?></th>
                </tr>
                <td>Precio Total De Todos Los Autos:</td>
                <tr>
                  <th><?php echo $precio1."<br>"; ?></th>
                </tr>
                <td>Sueldo Del Trabajador:</td>
                <tr>
                  <th><?php echo $total ?></th>
                </tr>
       </thead>
     </table>
    <a class="btn1" href="trabajo2.php"><input class="btn-primary" type="submit" value="Regresar"></a>
  </body>
</html>
