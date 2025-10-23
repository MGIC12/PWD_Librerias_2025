<?php
// success.php - página de éxito
$session_id = isset($_GET['session_id']) ? $_GET['session_id'] : '';
include_once 'layouts/header.php';
?>
<div class="container mt-5 text-center">
  <h1>Pago realizado (modo prueba)</h1>
  <p>Session ID: <?php echo htmlspecialchars($session_id); ?></p>
  <p>Revisá el Dashboard de Stripe (Entorno de prueba) para ver la transacción.</p>
  <a class="btn btn-primary" href="index.php">Volver</a>
</div>
<?php
include_once 'layouts/footer.php';
?>
