<?php
define('Tope', 2022);
define('Meses', 12);
define('Dias', 365);
define('Horas', 24);
$Nacimiento = "2004";
$Mayoria = 18;
$Edad = Tope - $Nacimiento;
$Meses = $Edad * Meses;
$Dias = $Edad * Dias;
$Horas = Dias * Horas * $Edad;
if(is_numeric($Nacimiento) && is_numeric($Mayoria) && is_numeric($Edad) && is_numeric($Meses) && is_numeric($Dias) && is_numeric($Horas)):
   if($Edad >= $Mayoria):
      echo "Eres mayor de edad por que ";
      echo "Tienes: ".$Edad." Años </br>";
      echo "Tienes  ".$Meses." Meses </br>";
      echo "Tienes  ".$Dias." Dias </br>";
      echo "Tienes  ".$Horas." Horas </br>";
 else:
      echo "Eres menor de edad por que ";
      echo "Tienes: ".$Edad." Años </br>";
      echo "Tienes: ".$Meses." Meses </br>";
      echo "Tienes  ".$Dias." Dias </br>";
      echo "Tienes  ".$Horas." Horas </br>";
  endif;
else:
    echo "¿Alguno de los valores asignados a las variables son numericos?";
endif;
/* utilizar las sentencia de flujo if y else en su metodo alternativo, utilizar constantes, variables, operadores aritmeticos, logicos y de relacion
El ejercicio : Calcular la edad con años, meses, dias, horas utilizando un año de nacimiento e indicando si es mayor o menor de edad imprimiendo los datos como años, mese, dias, horas
*/
?>
