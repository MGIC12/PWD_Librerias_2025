<?php
// index.php - pagina con botón "Comprar"
?>
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Demo Stripe Checkout - T.P.</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
  <main class="container mt-5 text-center">
    <h1>Demo Stripe (Modo prueba)</h1>
    <!-- Form que crea la sesión en el servidor -->
    <form class="mt-5" action="create_checkout.php" method="POST" >
      <p>Producto de prueba — $10.00 USD</p>
      <button type="submit" class="btn btn-secondary">Pagar $10</button>
      <p class="mt-3">Usa la tarjeta de prueba: <b>4242 4242 4242 4242</b></p>
    </form>
  </main>
</body>
</html>
