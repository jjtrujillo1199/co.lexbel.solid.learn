<?php
namespace PrincipioISP; 

use PrincipioISP\interfaces\ManejarInterface;

class Auto implements ManejarInterface {
    /**
     * Implementa el método manejar.
     *
     * @return string
     */
    public function manejar(): string {
        return "Manejando auto";
    }
}
