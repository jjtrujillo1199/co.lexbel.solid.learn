<?
namespace PrincipioDIP\facades;

use PrincipioDIP\ServicioRecorrido;
use PrincipioDIP\interfaces\RecorridoRegistrable;

class RecorridoFacade {
    /**
     * @var ServicioRecorrido
     */
    protected ServicioRecorrido $servicio;

    /**
     * Contructor que inyecta una dependencia de una clase que implemente la interfaz RecorridoRegistrable
     * 
     * Adicionalmente crea una instancia de la clase ServicioRecorrido para poder ejecutar el proceso de guardado
     *
     * @param RecorridoRegistrable $registrador
     */
    public function __construct(RecorridoRegistrable $registrador) {
        $this->servicio = new ServicioRecorrido($registrador);
    }

    /**
     * Ejecuta la acción para registrar un recorrido a traves del servicio instanciado en el constructor.
     *
     * @param string $info
     * @return void
     */
    public function registrarRecorrido(string $info): void {
        $this->servicio->ejecutar($info);
    }
}
