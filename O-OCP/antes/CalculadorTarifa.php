<?php
namespace antesOCP; 

class CalculadorTarifa {
    /**
     * Calcula el valor de un recorrido dependiendo del tipo de transporte y distancia a recorrer.
     *
     * @param string $tipo Tipo de transporte
     * @param float $distancia Distancia a recorrer
     * @return float
     */
    public function calcular(string $tipo, float $distancia): float {
        if ($tipo === 'auto') {
            return $distancia * 1000;
        } elseif ($tipo === 'bus') {
            return $distancia * 600;
        }
        return $distancia * 800;
    }
}
