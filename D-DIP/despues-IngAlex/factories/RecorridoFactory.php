<?php
namespace PrincipioDIP\factories;

use PrincipioDIP\facades\RecorridoFacade;
use PrincipioDIP\RegistradorArchivo;
use PrincipioDIP\RegistradorBD;
use PrincipioDIP\Interfaces\RecorridoRegistrable;

class RecorridoFactory {
    /**
     * Permite retorna una instancia de clase que implemente la interfaz RecorridoFacade.
     *
     * @param string $tipo Tipo de almacenamiento
     * @return RecorridoFacade
     */
    public static function crear(string $tipo = 'archivo'): RecorridoFacade {
        $registrador = match ($tipo) { // Match esta disponible desde PHP 8.0
            'bd'      => new RegistradorBD,
            'archivo' => new RegistradorArchivo,
            default   => throw new \InvalidArgumentException("Tipo de alamcenamiento inválido: $tipo"),
        };

        // Mantiene el uso del contendor de la aplicación y Laravel se encarga se resolver las dependencias que deben ser inyectadas
        return app()->make(RecorridoFacade::class, [
            RecorridoRegistrable::class => $registrador
        ]);
    }
}
