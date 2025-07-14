<?php
namespace PrincipioDIP\interfaces;

interface Guardable {

    /**
     * Guarda la información de un recorrido.
     *
     * @param string $info Información a guardar
     * @return void
     */
    public function guardar(string $info): void;
}