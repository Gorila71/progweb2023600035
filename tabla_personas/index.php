<?php
   

    include_once "Persona.php";

    $lista = [
        new Persona("Fulano", "1969-11-02", "5546546478"),
        new Persona("Fulana", "1979-10-10", "5550552101"),
        new Persona("Fulanito", "1989-12-19", "5521014536"),
        new Persona("Fulanota", "1999-09-26", "5544332211"),
        new Persona("Bryan", "1996-11-10", "5511223344"),
        new Persona("Britani", "1986-08-30", "5546546478"),
        new Persona("Gabriel", "1976-01-29", "5578645465"),
        new Persona("Joel", "1980-05-08", "5500000000"),
        new Persona("Jesus", "1990-04-06", "5520896534"),
        new Persona("Isaac", "1991-02-28", "5510981166"),
    ];
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Lista de personas</title>
<style>
    td {
        background-color: cyan;
    }
</style>
</head>
<body>
    <h1>Lista de personas</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Fecha Nacimiento</th>
                <th>Edad Actual</th>
                <th>Teléfono</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($lista as $p): ?>
                <tr>
                    <td><?php echo $p->getNombre(); ?></td>
                    <td><?php echo $p->getFecNac(); ?></td>
                    <td><?php echo $p->getEdad(); ?> años</td>
                    <td><?php echo $p->getTel(); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
