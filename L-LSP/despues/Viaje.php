<?php
namespace PrincipioLSP;

use PrincipioLSP\interfaces\Movil;

class Viaje {
    /**
     * Iniciar un viaje.
     *
     * @param Movil $transporte Clase que implementa la interfaz Movil
     * @return void
     */
    public function iniciarViaje(Movil $transporte) {
        echo $transporte->mover();
    }
}
