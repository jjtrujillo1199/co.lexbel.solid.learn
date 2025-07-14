<?php
namespace PrincipioDIP; 

use PrincipioDIP\interfaces\Guardable;

class GuardarBaseDatos implements Guardable {
    /**
     * Permite guardar la información en la base de datos.
     *
     * @param string $info Información a guardar
     * @return void
     */
    public function guardar(string $info): void {
        echo "Guardando información en la base de datos";
    }
}
