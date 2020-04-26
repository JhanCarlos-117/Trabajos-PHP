<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <title>CANTIDAD</title>
  </head>
  <body>
    <?php
        $hospital = $_POST["cantidad"];
        $ginecologia = $_POST['cantidad'];
        $traumatologia = $_POST['cantidad'];
        $pediatria = $_POST['cantidad'];

        $ginecologia1 = ($ginecologia)*40/100;
        $traumatologia1 = ($traumatologia)*30/100;
        $pediatria1 = ($pediatria)*30/100;
     ?>
     <table class="table">
       <thead class="table-dark">
         <td>Presupuesto del Hospital:</td>
       </thead>
       <tr>
         <th><?php echo $hospital."<br>";  ?></th>
       </tr>
       <thead class="table-dark">
         <td>Presupuesto de Ginecologia:</td>
       </thead>
       <tr>
         <th><?php   echo $ginecologia1."<br>"; ?></th>
       </tr>
       <thead class="table-dark">
         <td>Presupuesto de Traumatologia:</td>
       </thead>
       <tr>
         <th><?php   echo $traumatologia1."<br>";  ?></th>
       </tr>
       <thead class="table-dark">
         <td>Presupuesto de Pediatria Pediatria:</td>
       </thead>
       <tr>
         <th><?php echo $pediatria1."<br>";  ?></th>
       </tr>
     </table>
  </body>
</html>
