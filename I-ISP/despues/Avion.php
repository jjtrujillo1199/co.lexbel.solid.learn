<?php
namespace PrincipioISP; 

use PrincipioISP\interfaces\VolarInterface;

class Avion implements ManejarInterface, VolarInterface {

	/**
     * Implementa el método manejar.
     *
     * @return string
     */
    public function manejar(): string {
        return "Manejando avión";
    }

    /**
     * Implementa el método volar.
     *
     * @return string
     */
    public function volar(): string {
    	return "Volando en avión";
    }
}
