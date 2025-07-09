<?php
namespace PrincipioLSP;

use PrincipioLSP\interfaces\Movil;

class Bicicleta implements Movil {
    /**
     * Mueve la bicicleta.
     *
     * @return string
     */
    public function mover(): string {
        return "Pedaleando la bicicleta";
    }
}
