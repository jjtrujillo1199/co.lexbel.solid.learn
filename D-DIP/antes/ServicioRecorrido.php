<?php
namespace antesDIP; 

class ServicioRecorrido {
    /**
     * Guarda la información de un recorrido.
     *
     * @param string $info Información a guardar
     * @return void
     */
    public function registrar(string $info): void {
        file_put_contents('registro.txt', $info . PHP_EOL, FILE_APPEND);
    }
}
