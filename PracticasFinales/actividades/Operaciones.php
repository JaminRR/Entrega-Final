<?php
if(isset($_POST['btnSumar'])){
    $Numero = $_POST['numero1'];
    $numero2 = $_POST['numero2'];
    if(!is_numeric($Numero)){
        echo "El valor asignado no es un valor numerico";
    }
    else if(!is_numeric($numero2)){
        echo "El valor asignado no es un valor numerico";
    }
    else{
        $resultado = $Numero + $numero2;
        echo "El resultado de la suma es: ".$resultado;
    }
}
?>
<!DOCTYPE html>
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE-edge">
 <meta name="viewport" content="width-device-width, initial-scale-1.0">
 <title>Operaciones</title>
   </head>
<body>
 <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
      <input type="text" name="numero1" placeholder="Escribe un numero" required>
      <input type="text" name="numero2" placeholder="Escribe un numero" required>
      <input type="submit" value="Sumar" name="btnSumar">
</form>
</body>
</html>
