<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 5</title>
  </head>
  <body>
    <form method="post">
      Diagonal 1: <br><input name="Diagonal1"  type="number" /></br>
      Diagonal 2: <br><input name="Diagonal2" type="number" /> </br>
      Lados: <br><input name="Lados" type="number" /> </br>
      <input name="enviar" type="submit" value="Calcular"/>
    </form>

    <?php

    $Diagonal1 = $_POST['Diagonal1'];
    $Diagonal2 = $_POST['Diagonal2'];
    $Lados = $_POST['Lados'];

    $Medidas = array ($Diagonal1,$Diagonal2,$Lados);

    $Area = ($Medidas[0]*$Medidas[1])/2;
    $Perimetro = $Medidas[2] + $Medidas[2] + $Medidas[2] + $Medidas[2] ;

    echo "<hr> El area del Deltoide es: $Area";
    echo "<br>";
    echo "<hr> El perimetro del Deltoide es: $Perimetro";

     ?>

  </body>
</html>
