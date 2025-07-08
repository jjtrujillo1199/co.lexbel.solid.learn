<?php
namespace PrincipioSRP;

class CalculadorRuta {
    /**
     * Calcula la ruta
     *
     * @param string $origen Origen
     * @param string $destino Destino
     * @return string
     */
    public function calcular(string $origen, string $destino): string {
        return "Ruta calculada de $origen a $destino";
    }
}
