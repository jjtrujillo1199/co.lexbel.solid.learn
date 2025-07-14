<?php
namespace PrincipioDIP; 

use PrincipioDIP\interfaces\Guardable;

class GuardarArchivo implements Guardable {
    /**
     * Permite guardar la información en un archivo.
     *
     * @param string $info Información a guardar
     * @return void
     */
    public function guardar(string $info): void {
        file_put_contents('registro.txt', $info . PHP_EOL, FILE_APPEND);
    }
}
