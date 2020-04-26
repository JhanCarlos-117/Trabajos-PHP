<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <title>RESULTADO</title>
  </head>
  <body>
    <?php
        $peso1 = $_POST['peso'];
        $altura = $_POST['altura'];

        $promedio = $peso1/($altura*2);
      ?>
  </body>
  <table class="table">
    <tbody class="table-dark">
      <td>Nombre:</td>
      <tr>
      </tbody>
        <th><?php   echo  $_POST['nombre']."<br>"; ?></th>
      </tr>
      <tbody class="table-dark">
        <td>Promedio De Grasa Corporal:</td>
      </tbody>
      <tr>
        <th><?php echo $promedio."<br>"; ?></th>
      </tr>
    </tbody>
    <tbody class="table-dark">
      <td>Usted:</td>
    </tbody>
    <tr>
      <th><?php       if ($promedio <=18.5) {
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
          } ?></th>
    </tr>
  </table>
  <a class="btn2" href="Trabajo3.php"><input class="btn-primary" type="submit" value="Regresar"></a>
</html>
