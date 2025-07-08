<?php
namespace PrincipioSRP; 

class GuardarRecorrido {
    /**
     * Guarda el recorrido.
     *
     * @param string $ruta Ruta
     * @return void
     */
    public function __invoke(string $ruta): void {
        file_put_contents('recorridos.txt', $ruta . PHP_EOL, FILE_APPEND);
    }
}
