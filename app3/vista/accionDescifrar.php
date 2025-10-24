<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include 'structure/header.php'; ?>
</body>
</html><?php
include_once "../utils/funciones.php";

require "../control/encrypt.php";
$datos = datasubmited();
$handler = new encrypt();
// 2. Encriptar
$textoDescifrado = $handler->desencriptar($datos["clave"], $datos["texto"]);

echo $textoDescifrado;