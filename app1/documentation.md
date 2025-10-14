¿Qué es una librería?
Una librería es un conjunto de código ya hecho que te facilita tareas comunes.
Se puede pensar como un “módulo reutilizable” que otros programadores desarrollaron para que vos no tengas que hacerlo desde cero.
Ejemplo:
stripe-php → te da funciones para crear pagos, clientes, suscripciones, etc.
phpmailer → te da funciones para enviar emails fácilmente.
---
¿Qué es Composer?
Composer es un gestor de dependencias para PHP.
es una herramienta que te permite instalar y administrar librerías externas (código hecho por otros desarrolladores que vos podés reutilizar en tus proyectos).
En vez de programar toda la conexión con la API a mano, usás Composer para instalar la librería oficial de Stripe:
composer require stripe/stripe-php
Composer entonces:
Descarga esa librería y sus dependencias dentro de /vendor.
Crea el archivo composer.json (lista de dependencias del proyecto).
Crea autoload.php, que permite cargar automáticamente todas las clases necesarias.
Resultado:
Podés usar la librería con una sola línea:
require 'vendor/autoload.php';
---
¿Qué es una API?
Una API (Application Programming Interface) es una forma en que dos sistemas se comunican entre sí.
En este caso, la API de Stripe permite que la aplicación PHP pueda:
Crear sesiones de pago,
Guardar clientes,
Consultar transacciones,
Recibir notificaciones de pagos, etc.
💬 el codigo no habla directamente con la API, sino que se usa la librería stripe-php, que se encarga de traducir los comandos PHP en solicitudes HTTPS hacia los servidores de Stripe.
---
El flujo completo del código
C:\xampp\htdocs\proyecto_stripe\
│
├── index.php               ← muestra el botón de pago
├── create_checkout.php     ← crea la sesión de Stripe y redirige al checkout
├── success.php             ← página de éxito (cuando el pago se completa)
├── cancel.php              ← página de cancelación (cuando el usuario cancela)
│
├── composer.json           ← archivo de configuración de Composer
├── composer.lock           ← versiones exactas instaladas
│
├── /vendor/                ← carpeta donde Composer instala las librerías
│   ├── autoload.php        ← carga automática de todas las librerías
│   ├── stripe/stripe-php/  ← librería de Stripe
│   └── composer/           ← archivos internos de Composer
│
└── /src/                   ← (opcional) código propio del proyecto
---
Flujo de trabajo del código paso a paso:

1.El usuario entra a index.php
    Ve un botón “Pagar”.
    Al hacer clic, se dirige a create_checkout.php.
2.create_checkout.php
    Carga Composer con require 'vendor/autoload.php'.
    Configura la clave secreta de Stripe (setApiKey()).
    Llama a la API de Stripe a través de la librería stripe-php para crear una Checkout Session:
        $session = \Stripe\Checkout\Session::create([...]);
    Stripe devuelve una URL segura donde el cliente hará el pago.
    PHP redirige al usuario a esa URL.
3.Stripe Checkout (servidor de Stripe)
    Muestra la interfaz de pago (tarjeta, email, etc.).
    Procesa el pago.
    Cuando termina, Stripe redirige automáticamente a:
        success.php si todo salió bien.
        cancel.php si se canceló el proceso.
4.success.php / cancel.php
    muestra un mensaje dependiendo de que haya sucecido (si la operacion fue exitosa o no).
---
Flujo de trabajo (PHP-API):
Código PHP
   ↓
Librería stripe-php (maneja la comunicación)
   ↓
API de Stripe (recibe clave y datos del pago)
   ↓
Servidores de Stripe (procesan y responden)
   ↓
Respuesta JSON convertida en objetos PHP


