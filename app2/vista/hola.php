<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Final result</title>
</head>
<?php
require_once __DIR__ . '/../control/accionGenClave.php';
?>
<body>
    <h1>This is the final result:</h1>
    <h4>
        <?php 
        $result = new accionGenClave();
        echo $result->generarClave(); 
        ?>
    </h4>
</body>
</html>
