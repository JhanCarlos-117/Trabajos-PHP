<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>CANTIDAD</title>
  </head>
  <body>
    <?php
        $hospital = $_POST["cantidad"];
        $ginecologia = $_POST['cantidad'];
        $traumatologia = $_POST['cantidad'];
        $pediatria = $_POST['cantidad'];
        $hospita = "Presupuesto del Hospital:";
        $ginecologia2 = "Presupuesto de Ginecologia:";
        $traumatologia2 = "Presupuesto de Traumatologia:";
        $pediatria2 = "Presupuesto de Pediatria Pediatria:";

        $ginecologia1 = ($ginecologia)*40/100;
        $traumatologia1 = ($traumatologia)*30/100;
        $pediatria1 = ($pediatria)*30/100;
        echo $hospita;
        echo $hospital."<br>";
        echo $ginecologia2;
        echo $ginecologia1."<br>";
        echo $traumatologia2;
        echo $traumatologia1."<br>";
        echo $pediatria2;
        echo $pediatria1."<br>";
     ?>
  </body>
</html>
