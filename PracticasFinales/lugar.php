<?php
include "include/conexion.php";
include "include/accion3.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <title>Lugares</title>
</head>
<body>
<div class="container m-o content-justify-center px-2">
        
            <h1 class="text-decoration-underline">Lugar</h1>
        </div>
        <form id="registro" action="<?php echo $_SERVER['PHP_SELF'];?>" Method="POST">
      
            <div class="col-sm-6 col-md-6 col-lg-6">
                <input type="text" name="nombrel" class="form-control" placeholder="Nombre Lugar" required>
            </div>
        </div>
        
        <div class="col-sm-6 col-md-6 col-lg-6">
            <textarea name="direci" class="form-control" placeholder="Direccion" required></textarea>
        </div>
        
        <div class="col-sm-6 col-md-6 col-lg-6">
            <input type="tel" name="telef" class="form-control" placeholder="55-55-55-55" required>
        </div>
     
        <div class="col-sm-6 col-md-6 col-lg-6">
            <input type="email" name="correo" class="form-control" placeholder="Email" required>
        </div>
        
        <div class="col-sm-6 col-md-6 col-lg-6">
            <input type="text" name="fb" class="form-control" placeholder="Facebook" required>
        </div>
      
        <div class="col-sm-6 col-md-6 col-lg-6">
            <input type="text" name="horario" class="form-control" placeholder="Hoario" required>
        </div>
      
        <div class="col-sm-6  col-md-6 col-lg-6">
            <input type="submit"  value="registrar" name="botn" class="btn">
        </div>


    </form>
    </div>
</body>
</html>