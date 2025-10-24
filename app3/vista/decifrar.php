<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desencriptado de Texto</title>
  <link rel="stylesheet" href="./Frameworks/bootstrap.min.css">
  <link rel="stylesheet" href="./resources/css/styleCarrusel.css">
</head>
<body>
    <?php include 'structure/header.php'; ?>

    <div class="container mt-5 p-4">

        <h1 class="mb-4 text-dark">Descifrado de texto</h1>
        
        <form action="accionDescifrar.php" method="post" class="p-4 border rounded shadow-sm bg-white">
            
            <div class="mb-3">
                <label for="clave" class="form-label fs-5">Clave:</label>
                <input type="text" name="clave" id="clave" class="form-control" required placeholder="Ingresa la clave que usaste para cifrar">
            </div>

            <div class="mb-4">
                <label for="texto" class="form-label fs-5">Texto a desencriptar:</label>
                <textarea name="texto" id="texto" rows="6" class="form-control" required placeholder="Pega aquí el texto cifrado..."></textarea>
            </div>

            <button type="submit" class="btn btn-primary btn-lg w-100">
                <i class="bi bi-unlock-fill me-2"></i> Decrypt
            </button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</body>
</html>