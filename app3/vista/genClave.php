<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Final result</title>
</head>
<?php
require_once __DIR__ . '/../control/encrypt.php';
?>
<body>
    <?php include 'structure/header.php'; ?>
    <h1>Clave generada:</h1>
    <h4>
        <?php 
        $result = new encrypt();
        echo $result->generarClave(); 
        ?>
    </h4>
</body>
</html>