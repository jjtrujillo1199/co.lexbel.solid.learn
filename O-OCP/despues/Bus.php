<?php
namespace PrincipioOCP;

use TransporteInterface;

class Bus implements TransporteInterface {
	/**
	 * Calcula la tarifa para el medio de transporte Bus.
	 * 
	 * @param float $distancia Distancia recorrida
	 * @return float
	 */
    public function calcularTarifa(float $distancia): float {
        return $distancia * 600;
    }
}