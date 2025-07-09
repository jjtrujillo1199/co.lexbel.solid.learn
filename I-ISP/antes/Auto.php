<?php
namespace antesISP; 

use antesISP\interfaces\TransporteAvanzado;

class Auto implements TransporteAvanzado {
    /**
     * Implementa el mñetodo manejar.
     *
     * @return void
     */
    public function manejar() {
        echo "Manejando auto";
    }

    /**
     * Implementa el método volar, pero no es aplicable a los autos.
     *
     * @return void
     */
    public function volar() {
        // No aplica
    }
}
