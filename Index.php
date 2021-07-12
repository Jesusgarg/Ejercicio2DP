<?php
    $mensaje="";
    if(isset($_POST["i"])&&isset($_POST["f"]))
    {
        $i = $_POST ["i"];
        $f = $_POST ["f"];
        $r = $i/$f;
		$n = $i%$f;
		
		if ($n == 0) {
                    $mensaje='<div class="alert alert-success" role="alert"> 
                                     El  resultado de la división es '.$r.'</br>
                                     El  residuo es '.$n.'</br>
                                </div>';
	}else {
                    $mensaje='<div class="alert alert-danger" role="alert"> 
                                    El  numero '.$i.' no es divisible entre el numero '.$f.'</br>
                               </div>';
            }

        }
?>
<html>
    <head>	        
        <title>Calculo residuo</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"> 
    </head>
    <body>	
        <div class="col d-flex justify-content-center">
            <div class="card" style="width: 500px" >
              <div class="card-header">
                Identificar si un numero es divisible entre otro
              </div>
              <div class="card-body">
                <form action="Index.php" method="post" onsubmit="return validar()"> 
                    Capture el dividendo:<input type="number" class="form-control" name="i" id="n" maxlength="5" size="5" required="" min='1'>
                    Capture el divisor:<input type="number" class="form-control" name="f" id="n" maxlength="5" size="5" required="" min='1'>
                    <input style="margin-top:2px;" type="submit" name="btn_enviar"class="btn btn-primary" value="Calcular">
                </form>
                <?=$mensaje?> 
              </div>
            </div>
        </div>        
    </body>
</html>


