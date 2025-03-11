<?php

# Código que se ejecuta inmediatamente 
$x = 2;  
$a = 1/2 + 1/4 + 1/8; 
$b = pow($x, 1/3);  
$c = sqrt($x) / 2;
$d = (3 * $x * $x) / 4; 
$op1 = ($a * $b) / ($c + $d);  

?>

<html>
    <head> 
        <title>Funcion 4</title>
    </head>
    <body>
        <p>Resultado: <?php echo $op1; ?></p>  
        <img src="imagenes_funciones/ejercicio4.png" alt="ejercicio" width="300">
    </body>
</html>
