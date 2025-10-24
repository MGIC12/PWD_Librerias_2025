<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Texto Cifrado | Encryption-PHP</title>
  <link rel="stylesheet" href="./Frameworks/bootstrap.min.css">
  <link rel="stylesheet" href="./resources/css/styleCarrusel.css">

</head>
<body class="min-vh-100">
    <?php include 'structure/header.php'; ?>

    <?php
    include_once "../utils/funciones.php";
    require "../control/encrypt.php";
    $datos = datasubmited();
    $handler = new encrypt();
    // 2. Encriptar
    $textoCifrado = $handler->encriptar($datos["clave"], $datos["texto"]);
    ?>

    <div class="container mt-5 p-4">
        
        <h1 class="mb-4 text-dark">TEXTO CIFRADO:</h1>

        <div class="p-4 bg-dark text-white rounded shadow-lg">
            
            <p class="h4 font-monospace text-break mb-0">
                <?php 
                echo htmlspecialchars($textoCifrado); // Usamos htmlspecialchars para mayor seguridad y evitar problemas con caracteres especiales
                ?>
            </p>
        </div>
        
        <div class="d-grid gap-2 col-md-6 mx-auto mt-4">
            <button class="btn btn-outline-secondary" id="copyButton">
                Copiar Texto Cifrado
            </button>
            <div id="copyAlert" class="alert alert-success mt-2 d-none" role="alert">
                ¡Texto copiado al portapapeles!
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
    <script>
        document.getElementById('copyButton').addEventListener('click', function() {
            const cipherText = document.querySelector('.font-monospace').innerText;
            navigator.clipboard.writeText(cipherText).then(() => {
                const alert = document.getElementById('copyAlert');
                alert.classList.remove('d-none'); // Muestra la alerta
                setTimeout(() => {
                    alert.classList.add('d-none'); // Oculta la alerta después de 2 segundos
                }, 2000);
            }).catch(err => {
                console.error('Error al copiar: ', err);
            });
        });
    </script>
</body>
</html>