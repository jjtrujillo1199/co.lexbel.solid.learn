<?php
namespace PrincipioOCP;

use TransporteInterface;

class CalculadorTarifa {
	/**
     * Calcula el valor de un recorrido dependiendo del tipo de transporte y distancia a recorrer.
     *
     * @param TransporteInterface $transporte Clase que implementa la interfaz de TransporteInterface
     * @param float $distancia Distancia a recorrer
     * @return float
     */
    public function calcular(TransporteInterface $transporte, float $distancia): float {
        return $transporte->calcularTarifa($distancia);
    }
}