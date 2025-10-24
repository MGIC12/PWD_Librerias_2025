<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../Frameworks/bootstrap.min.css">
    <title>Encryption-PHP | Inicio</title>
</head>
<body class="min-vh-100">
    
    <?php include 'structure/header.php'; ?>

    <div class="container mt-5 p-4">
        
        <h1 class="display-5 text-center mb-5 text-dark">
            🔒 Encryption-PHP: Cifrado Simplificado para Desarrolladores
        </h1>
        
        <div class="row justify-content-center">
            <div class="col-lg-10">
                
                <p class="lead text-muted text-center mb-5">
                    Bienvenido al proyecto que simplifica la integración de funciones criptográficas robustas utilizando la librería **defuse/php-encryption** en cualquier aplicación PHP.
                </p>

                <h2 class="h4 text-primary mb-3">¿Qué es defuse/php-encryption?</h2>
                <p class="mb-4">
                    Esta librería no es solo un script; es una **clase de utilidades** diseñada específicamente para abstraer la complejidad del **cifrado y descifrado de datos**. Su principal objetivo es proporcionar un conjunto de métodos **fácilmente accesibles** y **seguros** para manejar datos sensibles (como contraseñas, tokens o mensajes privados) sin tener que implementar algoritmos criptográficos desde cero.
                </p>
                
                <h2 class="h4 text-primary mb-3 mt-4">Características y Funcionalidades Clave</h2>
                <ul class="list-group list-group-flush mb-4">
                    <li class="list-group-item bg-light">
                        <span class="fw-bold">Generación de Claves Seguras:</span> Permite crear claves de cifrado de alta entropía, esenciales para la seguridad.
                    </li>
                    <li class="list-group-item bg-light">
                        <span class="fw-bold">Cifrado Robusto:</span> Utiliza algoritmos estándar de la industria (como **AES-256**) para asegurar la información.
                    </li>
                    <li class="list-group-item bg-light">
                        <span class="fw-bold">Diseño Orientado al Desarrollador:</span> Ofrece una API clara con funciones sencillas como `encriptar()` y `desencriptar()`, permitiendo su uso inmediato.
                    </li>
                    <li class="list-group-item bg-light">
                        <span class="fw-bold">Integración Sencilla:</span> Diseñada para ser una clase independiente, puedes integrarla fácilmente en cualquier proyecto basado en PHP.
                    </li>
                </ul>

                <h2 class="h4 text-primary mb-3 mt-4">¿Por Qué Usarla?</h2>
                <p class="mb-5">
                    En un mundo donde la seguridad de los datos es primordial, **defuse/php-encryption** te permite centrarte en la lógica de tu aplicación mientras delegas la responsabilidad del cifrado a una herramienta probada. Es la solución ideal para proteger datos de usuario y almacenar configuraciones sensibles.
                </p>
                
                <div class="text-center">
                    <a href="