<?php
namespace PrincipioLSP;

use PrincipioLSP\interfaces\Movil;

class Auto implements Movil {
    /**
     * Mueve el automovil.
     *
     * @return string
     */
    public function mover(): string {
        return "Conduciendo el auto";
    }
}
