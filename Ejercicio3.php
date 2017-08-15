<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 3</title>
  </head>
  <body>
    <form method="post">
      Horas trabajadas: <br><input name="Ht"  type="number" /></br>
      Tarifa por horas: <br><input name="Th"  type="number" /></br>
      Tasa de impuestos: <br><input name="Ti" type="number" /></br> <br>
      <input name="enviar" type="submit" value="Calcular"/>
    </form>

    <?php
    $Ht= $_POST['Ht'];
    $Th= $_POST['Th'];
    $Ti= $_POST['Ti'];
    $Numeros = array ($Ht,$Th,$Ti);
    $PagoNeto=($Numeros[0]*$Numeros[1])-$Numeros[2];

    echo "<hr> EL pago neto del trabajador es de: $PagoNeto";
    ?>

  </body>
</html>
