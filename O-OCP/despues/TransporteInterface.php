<?php
namespace PrincipioOCP;

interface TransporteInterface {
    /**
	 * Permite calcular una tarifa de acuerdo a la distancia.
	 * 
	 * @param float $distancia Distancia a recorrer
	 * @return float
	 */
    public function calcularTarifa(float $distancia): float;
}