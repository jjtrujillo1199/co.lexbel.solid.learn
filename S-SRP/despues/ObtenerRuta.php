<?php
namespace PrincipioSRP; 

class ObtenerRuta {
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
}
