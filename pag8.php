<?php

# Código que se ejecuta inmediatamente 
$x = 4;  
$a = $x * $x /2 ; 
$b = 1 / pow($x, 1/2);  
$c = 3;
$d = 1/2 *$x * $x * $x ; 
$op1 = sqrt (($a + $b) / ($c + $d)) ;  

?>

<html>
    <head> 
        <title>Funcion 5</title>
    </head>
    <body>
        <p>Resultado: <?php echo $op1; ?></p>  
        <img src="imagenes_funciones/ejercicio5.png" alt="ejercicio" width="300">
    </body>
</html>