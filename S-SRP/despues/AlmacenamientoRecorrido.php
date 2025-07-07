<?php
namespace PrincipioSRP;

class AlmacenamientoRecorrido {
    /**
     * Guarda el recorrido.
     *
     * @param string $ruta Ruta
     * @return void
     */
    public function guardar(string $ruta): void {
        file_put_contents('recorridos.txt', $ruta . PHP_EOL, FILE_APPEND);
    }
}
