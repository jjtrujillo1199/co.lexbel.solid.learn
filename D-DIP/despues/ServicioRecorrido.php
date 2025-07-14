<?php

namespace PrincipioDIP; 

use PrincipioDIP\interfaces\Guardable;

class ServicioRecorrido {
    private Guardable $guardable;

    public function __construct(Guardable $guardable) {
        $this->guardable = $guardable;
    }

	/**
     * Guarda la información de un recorrido.
     *
     * @param string $info Información a guardar
     * @return void
     */
    public function registrarRecorrido($info): void {
       $this->guardable->guardar($info);
    }
}