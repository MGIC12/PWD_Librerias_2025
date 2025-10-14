<?php
// success.php - página de éxito
$session_id = isset($_GET['session_id']) ? $_GET['session_id'] : '';
?>
<!doctype html>
<html>
<head><meta charset="utf-8"><title>Pago exitoso</title></head>
<body>
  <h1>Pago realizado (modo prueba)</h1>
  <p>Session ID: <?php echo htmlspecialchars($session_id); ?></p>
  <p>Revisá el Dashboard de Stripe (Entorno de prueba) para ver la transacción.</p>
  <a href="index.php">Volver</a>
</body>
</html>
