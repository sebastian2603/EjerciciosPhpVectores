<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 4</title>
  </head>
  <body>
    <form method="post">
      Base: <br><input name="Base"  type="number" /></br>
      Altura: <br><input name="Altura"  type="number" /> </br> <br>
      <input name="enviar" type="submit" value="Calcular"/>
    </form>

    <?php

    $Base = $_POST['Base'];
    $Altura = $_POST['Altura'];

    $Medidas = array ($Base,$Altura);

    $Area = ($Medidas[0]*$Medidas[1]);

    echo "<hr> El area del Rectangulo es: $Area";

     ?>

  </body>
</html>
