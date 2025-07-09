<?php
namespace PrincipioOCP;

use TransporteInterface;

class TransporteDefault implements TransporteInterface {
	/**
	 * Calcula la tarifa para el medio de transporte por defecto.
	 * 
	 * @param float $distancia Distancia recorrida
	 * @return float
	 */
    public function calcularTarifa(float $distancia): float {
        return $distancia * 800;
    }
}