<?php
namespace PrincipioDIP\interfaces;

interface RecorridoRegistrable {
    /**
     * Registra la información de un recorrido sin depender directamente del medio de almacenamiento.
     *
     * @param string $info Información a registrar
     * @return void
     */
    public function registrar(string $info): void;
}
