# Principio de Inversión de Dependencias (DIP - Dependency Inversion Principle)

## Concepto
Depender de abstracciones, no de implementaciones concretas.

## Objetivo
En lugar de que una clase dependa directamente de otra clase concreta o que realice implementaciones de lógica que puede cambiar a futuro, ambas deberían depender de una interfaz o clase abstracta. Esto promueve un mayor desacoplamiento y flexibilidad en el código, facilitando la realización de cambios y la reutilización de componentes

## Antes
La clase `antesDIP\ServicioRecorrido`, es una clase de alto nivel (la lógica de negocio) que escribe directamente en un archivo dentro del método `registrar()`, por lo que la clase depende directamente de la forma en la que se almacena la información, si a futuro se quiere guardar en una BD, memoria o servicio externo, se debe modificar directamente esta clase

## Después
Se creó la interfaz `PrincipioDIP\interfaces\RecorridoRegistrable` la cual es una abstracción. No dice cómo se debe registrar o guardar la información, solo define que se debe poder registrar.
Se creó la clase `PrincipioDIP\RegistradorArchivo` que implementa una forma de guardar información en un archivo
Se creó la clase `PrincipioDIP\RegistradorBD` que implementa una forma de guardar información enla base de datos
Se creó la clase `PrincipioDIP\ServicioRecorrido`, que es la clase de alto nivel porque es la que maneja la lógica de negocio, no sabe ni le importa cómo se registra la información, Solo sabe que alguien más se encargará de eso (por la inyección de la interfaz)

### Qué es una abstracción?
Es la capacidad de representar conceptos complejos de manera simplificada, ocultando detalles innecesarios para facilitar la comprensión y el uso del sistema

## Explicación
Básicamente la clase `PrincipioDIP\ServicioRecorrido` no depende de cómo se implementa el guardado de la información y se puede guardar de manera transparente tanto en un archivo como en una base de datos o en cualquier otro medio (memoria, servicio externo)

## Beneficios
- Flexibilidad para cambiar la forma de registrar sin modificar la lógica de negocio.
- El principio DIP separa la lógica de negocio de los detalles técnicos.
- La clase de alto nivel solo conoce la interfaz (abstracción).
- Las clases concretas se inyectan (pueden cambiarse sin afectar la lógica).

## Ejemplo de uso
Para guardar la información de un recorrido en un archivo (código legacy):
```
$regArchivo = new RegistradorArchivo();
$servicio   = new ServicioRecorrido($regArchivo);
$servicio->ejecutar('Recorrido Bogotá - Medellín');
```

Para guardar la información de un recorrido en la BD (código legacy):
```
$regBD    = new RegistradorBD();
$servicio = new ServicioRecorrido($regBD);
$servicio->ejecutar('Recorrido Bogotá - Medellín');
```

**BONUS TRACK - LARAVEL**

Clase fachada como servicio

**Def. clase fachada**: Es una clase que proporciona una interfaz sencilla y estática para acceder a servicios complejos definidos en el contenedor de servicios de la aplicación
```
namespace PrincipioDIP\facades;

use PrincipioDIP\ServicioRecorrido;
use PrincipioDIP\interfaces\RecorridoRegistrable;

class RecorridoFacade {
    protected ServicioRecorrido $servicio;

    public function __construct(RecorridoRegistrable $registrador) {
        $this->servicio = new ServicioRecorrido($registrador);
    }

    public function registrarRecorrido(string $info): void {
        $this->servicio->ejecutar($info);
    }
}
```

OPCIÓN 1: Uso en cualquier clase dentro del proyecto
```
use PrincipioDIP\RegistradorBD;
use PrincipioDIP\RegistradorArchivo;
use PrincipioDIP\facades\RecorridoFacade;
use PrincipioDIP\interfaces\RecorridoRegistrable;

// Mantiene el uso del contendor de la aplicación y Laravel se encarga se resolver las dependencias que deben ser inyectadas
$recorrido = app()->make(RecorridoFacade::class, [
    RecorridoRegistrable::class => new RegistradorBD(),
]);

$recorrido->registrarRecorrido('Recorrido guardado en base de datos');

// Mantiene el uso del contendor de la aplicación y Laravel se encarga se resolver las dependencias que deben ser inyectadas
$recorrido = app()->make(RecorridoFacade::class, [
    RecorridoRegistrable::class => new RegistradorArchivo(),
]);

$recorrido->registrarRecorrido('Recorrido guardado en Archivo');
```

OPCIÓN 2: Crear un método auxiliar
```
// Este código haría parte de la clase de primer nivel o clase principal en donde se maneje la lógica de negocio
public function crearRecorrido(string $driver): RecorridoFacade {
    return app()->make(\PrincipioDIP\facades\RecorridoFacade::class, [
        \PrincipioDIP\Interfaces\RecorridoRegistrable::class => $driver === 'bd'
            ? new \PrincipioDIP\RegistradorBD()
            : new \PrincipioDIP\RegistradorArchivo(),
    ]);
}

$recorrido = crearRecorrido('archivo');
$recorrido->registrarRecorrido('Recorrido guardado en archivo');

$recorrido = crearRecorrido('bd');
$recorrido->registrarRecorrido('Recorrido guardado en base de datos');
```

OPCIÓN 3: Manera ideal de la implemtación del código. Crear una clase factory, código más limpio

El patrón de diseño Factory, o Método Factory, es un patrón creacional que proporciona una interfaz para crear objetos sin especificar la clase concreta del objeto que se va a crear

```
namespace PrincipioDIP\factories;

use PrincipioDIP\facades\RecorridoFacade;
use PrincipioDIP\RegistradorArchivo;
use PrincipioDIP\RegistradorBD;
use PrincipioDIP\Interfaces\RecorridoRegistrable;

class RecorridoFactory {
    public static function crear(string $tipo = 'archivo'): RecorridoFacade {
        $registrador = match ($tipo) { // Match esta disponible desde PHP 8.0
            'bd'      => new RegistradorBD(),
            'archivo' => new RegistradorArchivo(),
            default   => throw new \InvalidArgumentException("Tipo de recorrido inválido: $tipo"),
        };

        // Mantiene el uso del contendor de la aplicación y Laravel se encarga se resolver las dependencias que deben ser inyectadas
        return app()->make(RecorridoFacade::class, [
            RecorridoRegistrable::class => $registrador
        ]);
    }
}

////////////////////////////////////////////////////////////////////////////////////

// Este código haría parte de la clase de primer nivel o clase principal en donde se maneje la lógica de negocio
use PrincipioDIP\factories\RecorridoFactory;

$recorrido = RecorridoFactory::crear('bd');
$recorrido->registrarRecorrido('Recorrido guardado en base de datos');

$recorrido = RecorridoFactory::crear('archivo');
$recorrido->registrarRecorrido('Recorrido guardado en archivo');
```

### Ventajas de Opción 3
| Ventaja                      | Descripción                                                                                              |
| ---------------------------- | -------------------------------------------------------------------------------------------------------- |
| ✅ Centralización            | La lógica para decidir qué implementación usar está en un solo lugar.                                    |
| ✅ Expansión sencilla        | Si agregas otro registrador (ej. API, cola), solo modificas el factory.                                  |
| ✅ Inversión de dependencias | La clase que usa la fachada `RecorridoFacade` nunca sabe qué implementador se está usando.               |
| ✅ Pruebas más fáciles       | Puedes probar el Factory por separado o simular fácilmente las dependencias.                             |
| ✅ Extensión futura.         | Puedes agregar configuración por archivo .env, usar estrategias dinámicas por usuario, por entorno, etc. |
| Ejemplo:                     | `$recorrido = RecorridoFactory::crear(config('servicios.recorrido_driver', 'archivo'));`                 |


### Recursos útiles:
- [Service Container de Laravel](https://laravel.com/docs/8.x/container)
- [Service Container - Método make()](https://laravel.com/docs/8.x/container#the-make-method)
- [Patrón de diseño - Método Factory](https://refactoring.guru/es/design-patterns/factory-method)