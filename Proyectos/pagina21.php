<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>RESULTADO</title>
  </head>
  <body>
    <?php
        echo  $_POST['nombre']."<br>";
        $peso1 = $_POST['peso'];
        $altura = $_POST['altura'];

        $promedio = $peso1/($altura*2);
        echo $promedio."<br>";

        if ($promedio <=18.5) {
          echo "Tiene Bajo Peso";
        }
        else{
          if ($promedio <=24.9) {
            echo  "Usted esta Saludable";
        }
        else {
          if ($promedio <=29.9) {
            echo "Sobrepeso";
          }
          else {
            if ($promedio <= 39.9) {
              echo "Obeso";
            }
            else {
              if ($promedio >=40) {
              echo "Obesidad sebera";
              }
            }
          }
        }
      }

      ?>

  </body>
</html>
