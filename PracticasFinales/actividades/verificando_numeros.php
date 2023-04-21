<?php
// una practica calcule el promedio de 5 notas o calificaciones verificando que los valores sean numericos y posteriormente indicar si esta aprobado
// o reprobado segun el valor asignado por el promedio 
/*if(is_numeric($Calificacion1) && is_numeric($Calificacion2)&& is_numeric($Calificacion3)&& is_numeric($Calificacion4)&& is_numeric($Calificacion5)){
    $promedio = ($Calificacion1+$Calificacion2+$Calificacion3+$Calificacion4+$Calificacion5)/5;
    if($promedio == $Minimo){
        echo "<br><br> Tu promedio es de: ".$promedio." por lo que estas aprobado";
    }
    else{
        echo "<br><br> Tu promedio es de: ".$promedio." por lo tanto estas reprobado";
    }
}
else{
    $mensaje = "Alguno de los valores contenidos en las calificaciones no corresponde a un valor numerico";
    echo $mensaje;
}
*/
$Calificacion1 = 84;
$Calificacion2 = 90;
$Calificacion3 = 71;
$Calificacion4 = 67;
$Calificacion5 = 88;
$Minimo = 70;

if(!is_numeric($Calificacion1)){

    echo "El valor de la Calificacion 1 es: ".$Calificacion1." no es un valor numerico";
}
else if(!is_numeric($Calificacion2)){

    echo "El valor de la Calificacion 2 es: ".$Calificacion2." no es un valor numerico";
}
else if(!is_numeric($Calificacion3)){

    echo "El valor de la Calificacion 3 es: ".$Calificacion3." no es un valor numerico";
}
else if(!is_numeric($Calificacion4)){

    echo "El valor de la Calificacion 4 es: ".$Calificacion4." no es un valor numerico";
}
if(!is_numeric($Calificacion5)){

    echo "El valor de la Calificacion 5 es: ".$Calificacion5." no es un valor numerico";
}
else{
    $promedio = ($Calificacion1 + $Calificacion2 + $Calificacion3 + $Calificacion4 + $Calificacion5)/5;
    if($promedio >= $Minimo){

        echo "El promedio obtenido es de: ".$promedio." por lo tanto estas aprobado";
    }
    else{
        
        echo "El promedio obtenido es de: ".$promedio." por lo tanto estas reprobado";
    }
}
?>