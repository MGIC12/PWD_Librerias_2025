<?php
// index.php - Página principal con productos y botones de pago
include_once 'layouts/header.php';
?>
    <main class="flex-grow-1 mt-4">
    <div class="row g-4">

      <!-- Producto 1 -->
      <div class="col-md-4">
        <div class="card shadow-sm h-100">
          <img src="https://picsum.photos/400/250?random=3" class="card-img-top" alt="Producto 1">
          <div class="card-body text-center">
            <h5 class="card-title">Diseño Web Personalizado</h5>
            <p class="card-text text-muted">Un servicio profesional para crear tu sitio web moderno y optimizado.</p>
            <form action="../Controller/create_checkout.php" method="POST">
              <input type="hidden" name="nombre" value="Diseño Web Personalizado">
              <input type="hidden" name="monto" value="5000"> <!-- monto en USD -->
              <input type="hidden" name="moneda" value="usd">
              <button type="submit" class="btn btn-primary w-100">Pagar $50 USD</button>
            </form>
          </div>
        </div>
      </div>

      <!-- Producto 2 -->
      <div class="col-md-4">
        <div class="card shadow-sm h-100">
          <img src="https://picsum.photos/400/250?random=1" class="card-img-top" alt="Producto 2">
          <div class="card-body text-center">
            <h5 class="card-title">Asesoría en Marketing Digital</h5>
            <p class="card-text text-muted">Optimiza tus redes y estrategias de venta online con expertos.</p>
            <form action="../Controller/create_checkout.php" method="POST">
              <input type="hidden" name="nombre" value="Asesoría en Marketing Digital">
              <input type="hidden" name="monto" value="8000">
              <input type="hidden" name="moneda" value="usd">
              <button type="submit" class="btn btn-primary w-100">Pagar $80 USD</button>
            </form>
          </div>
        </div>
      </div>

      <!-- Producto 3 -->
      <div class="col-md-4">
        <div class="card shadow-sm h-100">
          <img src="https://picsum.photos/400/250?random=2" class="card-img-top" alt="Producto 3">
          <div class="card-body text-center">
            <h5 class="card-title">Curso: Crea tu negocio digital</h5>
            <p class="card-text text-muted">Aprende desde cero cómo construir tu negocio online paso a paso.</p>
            <form action="../Controller/create_checkout.php" method="POST">
              <input type="hidden" name="nombre" value="Curso Negocio Digital">
              <input type="hidden" name="monto" value="12000">
              <input type="hidden" name="moneda" value="usd">
              <button type="submit" class="btn btn-primary w-100">Pagar $120 USD</button>
            </form>
          </div>
        </div>
      </div>

    </div>
  </main>
<?php
include_once 'layouts/footer.php';
?>
