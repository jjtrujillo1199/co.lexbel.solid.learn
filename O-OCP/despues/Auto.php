<?php
namespace PrincipioOCP;

use TransporteInterface;

class Auto implements TransporteInterface {
    /**
	 * Calcula la tarifa para el medio de transporte Auto.
	 * 
	 * @param float $distancia distancia recorrida
	 */
    public function calcularTarifa(float $distancia): float {
        return $distancia * 1000;
    }
}