<?php
namespace PrincipioDIP;

use PrincipioDIP\interfaces\RecorridoRegistrable;

class RegistradorArchivo implements RecorridoRegistrable {
    /**
     * Guarda la información del recorrido en un archivo de texto.
     *
     * @param string $info Información a registrar
     * @return void
     */
    public function registrar(string $info): void {
        file_put_contents('registro.txt', $info . PHP_EOL, FILE_APPEND);
    }
}
