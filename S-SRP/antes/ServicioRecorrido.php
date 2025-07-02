<?php
namespace antesSRP; 

class ServicioRecorrido {
    /**
     * Calcula la ruta
     *
     * @param string $origen Origen
     * @param string $destino Destino
     * @return string
     */
    public function calcularRuta(string $origen, string $destino): string {
        return "Ruta calculada de $origen a $destino";
    }

    /**
     * Guarda el recorrido.
     *
     * @param string $ruta Ruta
     * @return void
     */
    public function guardarRecorrido(string $ruta): void {
        file_put_contents('recorridos.txt', $ruta . PHP_EOL, FILE_APPEND);
    }
}
