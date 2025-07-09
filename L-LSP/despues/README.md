# Principio de Sustitución de Liskov (LSP - Liskov Substitution Principle)

## Concepto
Una subclase debe poder sustituir a su superclase sin romper el comportamiento del sistema, en otras palabras: Los objetos de una subclase deben poder sustituir a los objetos de su clase base sin alterar el comportamiento esperado del programa

## Objetivo
Asegurar que cualquier subclase pueda reemplazar a su clase base sin romper el comportamiento del sistema.
- Si una clase Padre tiene un comportamiento, cualquier subclase debe poder reemplazarla sin romper el sistema.
- Las subclases deben respetar el contrato definido por la clase base.

## Antes
La subclase (`antesLSP\Bicicleta`) de la clase `Transporte` lanza una excepción porque no aplicaba al lógica de negocio del método de su clase padre.

## Después
Se usó una interfaz `PrincipioLSP\Movil` con el método `mover()`, no se asume que todos los transportes tienen motor. Solo se requiere que puedan moverse, y cada clase (ej, `PrincipioLSP\Auto` o `PrincipioLSP\Bicicleta`) implementa su propia lógica en el método mover porque implementan la interfaz, igualmente se creó la clase `PrincipioLSP\Viaje` que centraliza la lógica para el inicio de un viaje independientemente del medio de transporte y sin generar excepciones. El método `iniciarViaje()` solo necesita un objeto que se pueda mover.

## Explicación
Ahora todas las clases pueden reemplazarse sin romper el código. No asumimos que todos los transportes tengan motor.

## Beneficios
- El sistema funciona correctamente con cualquier tipo de transporte.
- Comportamiento coherente sin excepciones inesperadas.

## Ejemplo de uso
```
use PrincipioLSP\Viaje;
use PrincipioLSP\Auto;
use PrincipioLSP\Bicicleta;

$auto       = new Auto();
$bicicleta  = new Bicicleta();
$nuevoViaje = new Viaje();

$nuevoViaje->iniciarViaje($auto);       // Conduciendo el auto
$nuevoViaje->iniciarViaje($bicicleta);  // Pedaleando la bicicleta
```

