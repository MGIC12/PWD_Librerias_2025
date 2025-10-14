<?php
// create_checkout.php - crea la Checkout Session y redirige a Stripe
require 'vendor/autoload.php';

// Cargar las variables del archivo .env
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

// Configurar la clave secreta (SK) desde el .env
\Stripe\Stripe::setApiKey($_ENV['STRIPE_SECRET_KEY']);

try {
    $session = \Stripe\Checkout\Session::create([
        'payment_method_types' => ['card'],
        'mode' => 'payment',
        'line_items' => [[
            'price_data' => [
                'currency' => 'usd',
                'product_data' => [
                    'name' => 'Producto de prueba - T.P.',
                ],
                'unit_amount' => 1000, // en centavos: 1000 = $10.00
            ],
            'quantity' => 1,
        ]],
        'success_url' => (isset($_SERVER['HTTP_HOST']) ? 'http://' . $_SERVER['HTTP_HOST'] : '') . '/proyecto_stripe/success.php?session_id={CHECKOUT_SESSION_ID}',
        'cancel_url' => (isset($_SERVER['HTTP_HOST']) ? 'http://' . $_SERVER['HTTP_HOST'] : '') . '/proyecto_stripe/cancel.php',
    ]);

    // Redirigir al checkout alojado por Stripe
    header("Location: " . $session->url);
    exit;
} catch (Exception $e) {
    echo "Error creando la sesión: " . htmlspecialchars($e->getMessage());
}
