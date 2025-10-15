<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Defuse\Crypto\Key;

class accionGenClave {

    public function generarClave() {
        $key = Key::createNewRandomKey();
        return $key->saveToAsciiSafeString();
    }
}


/* function generarClave() {
    $key = Key::createNewRandomKey();
    return $key->saveToAsciiSafeString();
}

function encriptar($clave, $texto) {
    $key = Key::loadFromAsciiSafeString($clave);
    return \Defuse\Crypto\Crypto::encrypt($texto, $key);
}

function desencriptar($clave, $textoEncriptado) {
    $key = Key::loadFromAsciiSafeString($clave);
    return \Defuse\Crypto\Crypto::decrypt($textoEncriptado, $key);
}

function probarEncriptacion($texto) {
    $clave = generarClave();
    $textoEncriptado = encriptar($clave, $texto);
    $textoDesencriptado = desencriptar($clave, $textoEncriptado);

    return [
        'clave' => $clave,
        'texto_original' => $texto,
        'texto_encriptado' => $textoEncriptado,
        'texto_desencriptado' => $textoDesencriptado
    ];
}
 */