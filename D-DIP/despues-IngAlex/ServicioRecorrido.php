<?php
namespace PrincipioDIP;

use PrincipioDIP\interfaces\RecorridoRegistrable;

class ServicioRecorrido {
    /**
     * Constructor que permite registrar un recorrido.
     *
     * @param RecorridoRegistrable $registrador Instancia de una clase que implemente la interfaz RecorridoRegistrable
     */
    public function __construct(private RecorridoRegistrable $registrador) {}

    public function ejecutar(string $info) {
        $this->registrador->registrar($info);
    }
}
