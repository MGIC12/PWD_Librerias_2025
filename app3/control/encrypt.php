<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Defuse\Crypto\Key;
use Defuse\Crypto\Crypto; // Importar la clase Crypto
use Defuse\Crypto\Exception\WrongKeyOrModifiedCiphertextException; // Importar la excepción

class encrypt {

    // Método para generar y devolver la clave (ya lo tienes)
    public function generarClave() {
        $key = Key::createNewRandomKey();
        return $key->saveToAsciiSafeString();
    }
    
    // --- NUEVOS MÉTODOS ---

    /**
     * Encripta un texto dado con la clave proporcionada.
     * @param string $clave La clave AsciiSafe String generada.
     * @param string $texto El texto a encriptar.
     * @return string El texto cifrado.
     */
    public function encriptar($clave, $texto) {
        $key = Key::loadFromAsciiSafeString($clave);
        return Crypto::encrypt($texto, $key);
    }

    /**
     * Desencripta un texto cifrado.
     * @param string $clave La clave AsciiSafe String generada.
     * @param string $textoEncriptado El texto cifrado.
     * @return string El texto original.
     * @throws WrongKeyOrModifiedCiphertextException Si la clave es incorrecta o el texto ha sido manipulado.
     */
    public function desencriptar($clave, $textoEncriptado) {
        $key = Key::loadFromAsciiSafeString($clave);
        // Es CRÍTICO manejar la excepción WrongKeyOrModifiedCiphertextException
        return Crypto::decrypt($textoEncriptado, $key);
    }
}