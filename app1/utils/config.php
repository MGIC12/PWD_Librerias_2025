<?php
// Detecta automáticamente el dominio y carpeta base
define('BASE_URL', (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 
    "https" : "http") . "://" . $_SERVER['HTTP_HOST'] . "/PWD_LIBRERIAS_2025/app1/view/");
