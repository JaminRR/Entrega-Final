<?php
include "include/conexion.php";
include "include/accion2.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <title>Plantel</title>
</head>
<body>
<div class="container m-o content-justify-center px-2">
       
            <h1 class="text-decoration-underline">Plantel</h1>
        </div>
        <form id="registro" action="<?php echo $_SERVER['PHP_SELF'];?>" Method="POST">
        <div class="row-text-center">
        <div class="col-sm-6 col-md-6 col-lg-6">
                <input type="text" name="noplan" class="form-control" placeholder="Nombre del Plantel" required>
            </div>
        </div>
       
        <div class="col-sm-6 col-md-6 col-lg-6">
            <input type="text" name="clave" class="form-control" placeholder="Clave del Plantel" required>
        </div>
       
        <div class="col-sm-6 col-md-6 col-lg-6">
            <textarea name="direc" class="form-control" placeholder="Direccion" required></textarea>
        </div>
        
        <div class="col-sm-6 col-md-6 col-lg-6">
            <input type="tel" name="telefono" class="form-control" placeholder="55-55-55-55" required>
        </div>
       
        <div class="col-sm-6 col-md-6 col-lg-6">
            <input type="text" name="resp" class="form-control" placeholder="Responsable" required>
        </div>
        
        <div class="col-sm-6 col-md-6 col-lg-6">
            <input type="submit"  value="registrar" name="but" class="btn">
        </div>


    </form>
    </div>
</body>
</html>