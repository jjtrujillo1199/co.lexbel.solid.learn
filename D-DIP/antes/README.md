# Principio de Inversión de Dependencias (DIP - Dependency Inversion Principle)

## Concepto
Depender de abstracciones, no de implementaciones concretas

## Objetivo
En lugar de que una clase dependa directamente de otra clase concreta o que realice implementaciones de lógica que pueden cambiar a futuro, las dos deberían depender de una interfaz o clase abstracta. Esto promueve un mayor desacoplamiento y flexibilidad en el código, facilitando la realización de cambios y la reutilización de componentes

## Antes
La clase `antesDIP\ServicioRecorrido`, es una clase de alto nivel (la lógica de negocio) que escribe directamente en un archivo dentro del método `registrar()`, por lo que la clase depende directamente de la forma en la que se almacena la información, si a futuro se quiere guardar en una BD, memoria o servicio externo, se debe modificar directamente el código en esta clase

## Reto
Crear la carpeta `despues` y dentro de ella crear los archivos y lógica necesaria para cumplir con el principio de inversión de dependencias, en donde el objetivo es conseguir que la información de un recorrido se pueda guardar en diferentes medios de almacenamiento. Dentro de la nueva carpeta crea también un archivo README en donde se describa la solución implementada

# Despues
- Se creo la interfaz `PrincipioDIP\interfaces\Guardable` la cual define la función donde se va a guardar la información independientemente del tipo de almacenamiento.
- Se creo la clase `PrincipioDIP\GuardarBaseDatos` que implementa la interfaz `Guardable` y tiene la lógica para almacenar la información en base de datos.
- Se creo la clase `PrincipioDIP\GuardarArchivo` que implementa la interfaz `Guardable` y tiene la lógica para almacenar la información en un archivo.
- Tenemos la clase de alto nivel `PrincipioDIP\ServicioRecorrido` que utiliza abstracciones para guardar la información.

## Beneficios
- La clase de alto nivel no depende de la clase de bajo nivel, ambos dependen de las abstracciones.
- El código es flexible y no se genera limitaciones en los cambios futuros.

## Ejemplo de uso
```
use PrincipioDIP\GuardarArchivo;
use PrincipioDIP\ServicioRecorrido;

$guardarArchivo = new GuardarArchivo();

// Inyectar las dependencias a través del constructor
$servicioRecorrido = new ServicioRecorrido($guardarArchivo);

// Guardar la Información
$servicioRecorrido->registrarRecorrido($data);
```
