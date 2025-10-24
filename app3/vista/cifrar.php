<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include 'structure/header.php'; ?>
    <form action="accionCifrar.php" method="post">
        <h1>Cifrado de texto</h1>
        <label for="clave">Clave:</label>
        <input type="text" name="clave" id="clave" required>
        <br><br>
        <label for="texto">Texto a cifrar:</label>
        <textarea name="texto" id="texto" rows="4" cols="50" required></textarea>
        <br><br>
        <input type="submit" value="Encrypt">

    </form>
</body>
</html>