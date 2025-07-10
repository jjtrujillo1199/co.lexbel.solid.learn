<?php
namespace PrincipioISP\interfaces; 

interface ManejarInterface {

	/**
	 * Realiza la acción de manejar.
	 * 
	 * @return string
	 */
    public function manejar(): string;
}
