<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Final result</title>
  <link rel="stylesheet" href="./Frameworks/bootstrap.min.css">
  <link rel="stylesheet" href="./resources/css/styleCarrusel.css">
</head>
<?php
require_once __DIR__ . '/../control/encrypt.php';
?>
<body class="min-vh-100">
    <?php include 'structure/header.php'; ?>

    <div class="container mt-5 p-4">
        
        <h1 class="mb-4 text-primary">CLAVE GENERADA:</h1>

        <div class="p-4 bg-dark text-white rounded shadow-lg">
            
            <p class="h4 font-monospace text-break mb-0">
                <?php 
                $result = new encrypt();
                echo $result->generarClave(); 
                ?>
            </p>
        </div>
        
        <div class="d-grid gap-2 col-md-6 mx-auto mt-4">
            <button class="btn btn-outline-secondary" onclick="navigator.clipboard.writeText(document.querySelector('.text-break').innerText)">
                Copiar Clave al Portapapeles
            </button>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>