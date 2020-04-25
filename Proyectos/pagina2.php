<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>PAGINA 2</title>
  </head>
  <body class="php1">
    <?php
     $nota1 = $_POST ['nota1'];
     $nota2 = $_POST ['nota2'];
     $nota3 = $_POST ['nota3'];
     $examen = $_POST ['examen'];
     $trabajo = $_POST ['trabajo'];

     $resultado =   ($nota1 + $nota2 + $nota3)*35/100 + ($examen)*35/100 + ($trabajo)* 30/100;
     ?>
     <table class="table" border="2">
       <thead class="thead-dark">
         <tr>
           <th class="definitiva"><h1>Definitiva:</h1></th>
         </tr>
       </thead>
       <tbody class="thead-light">
         <tr>
           <th class="definitiva">
             <?php echo ($resultado)/5 ?>
          </th>
         </tr>
       </tbody>
     </table>
     <a  href="trabajo1.php"> <input class="btn-primary" type="submit" value="Regresar"></a>
  </body>
</html>
