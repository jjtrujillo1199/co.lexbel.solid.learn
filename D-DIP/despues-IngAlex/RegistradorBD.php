<?php
namespace PrincipioDIP;

use PrincipioDIP\interfaces\RecorridoRegistrable;

class RegistradorBD implements RecorridoRegistrable {
    /**
     * Guarda la información del recorrido en la base de datos.
     *
     * @param string $info Información a registrar
     * @return void
     */
    public function registrar(string $info): void {
        \ModeloRecorridos::create(['info_recorrido'=> $info]);
    }
}
