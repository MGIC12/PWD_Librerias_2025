<?php
// create_checkout.php - crea la Checkout Session y redirige a Stripe
require '../vendor/autoload.php';
include_once '../utils/funciones.php';

$data = data_submitted();
// print_r($data);

$nombreProducto = $data['nombre'] ?? 'Producto de prueba';
$monto = isset($data['monto']) ? (int)$data['monto'] : 1000; // en centavos
$moneda = $data['moneda'] ?? 'usd';

// Cargar las variables del archivo .env
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '../../');
$dotenv->load();

// Configurar la clave secreta (SK) desde el .env
\Stripe\Stripe::setApiKey($_ENV['STRIPE_SECRET_KEY']);

try {
    $session = \Stripe\Checkout\Session::create([
        'payment_method_types' => ['card'],
        'mode' => 'payment',
        'line_items' => [[
            'price_data' => [
                'currency' => $moneda,
                'product_data' => [
                    'name' => $nombreProducto,
                ],
                'unit_amount' => $monto, // en centavos: 1000 = $10.00
            ],
            'quantity' => 1,
        ]],
        'success_url' => (isset($_SERVER['HTTP_HOST']) ? 'http://' . $_SERVER['HTTP_HOST'] : '') . '/PWD_LIBRERIAS_2025/app1/view/success.php?session_id={CHECKOUT_SESSION_ID}',
        'cancel_url'  => (isset($_SERVER['HTTP_HOST']) ? 'http://' . $_SERVER['HTTP_HOST'] : '') . '/PWD_LIBRERIAS_2025/app1/view/cancel.php',
    ]);

    // Redirigir al checkout alojado por Stripe
    header("Location: " . $session->url);
    exit;
} catch (Exception $e) {
    echo "Error creando la sesión: " . htmlspecialchars($e->getMessage());
}
