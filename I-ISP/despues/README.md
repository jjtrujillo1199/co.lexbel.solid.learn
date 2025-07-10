# Principio de Segregación de Interfaces (ISP - Interface Segregation Principle)

## Concepto:
Una clase no debe estar obligada a implementar métodos que no necesita, ni debe verse obligado a depender de interfaces que no utiliza.

## Objetivo
Evitar que las clases implementen métodos que no necesitan.
- Las interfaces deben ser específicas y no obligar a las clases a implementar métodos que no necesiten.
- Es mejor tener interfaces pequeñas y enfocadas que una grande y genérica.

## Antes
La interfaz general `antesISP\interfaces\TransporteAvanzado` obliga la implementación de métodos innecesarios, como `volar()` el cual no es aplicable a la clase `antesISP\Auto`.

- La interfaz es grande y mal diseñada.
- Obliga a todas las clases a implementar métodos que no usan.
- El Auto debe implementar volar() aunque no aplique, otros medio de transporte como Moticicleta o Bicicleta o Tren tendría el mismo problema.
- Esto genera excepciones innecesarias y confusión.

## Reto
Crear la carpeta `despues` y dentro de ella crear los archivos y lógica necesaria para cumplir con el principio de segregación de interfaces, con el objetivo de resolver los problemas planteados en el 'Antes'

## Después
- Se separo la lógica o los métodos que implementaba la clase general `TransporteAvanzado` con el fin de que las clases no esten obligadas a implementar funciones que no usen.
- Se creo interfaces `PrincipioISP\interfaces\ManejarInterface` con el método `manejar` la cual tiene un proposito y es que sea implementada en el clase de `Auto`.
- Se creo interfaces `PrincipioISP\interfaces\VolarInterface` con el método `volar` la cual tiene un proposito y es que sea implementada en el clase de `Avion`.

## Explicación
No debemos usar interfaces complejas que declaren múltiples métodos si alguno de ellos puede quedar sin usar. Es mejor tener interfaces pequeñas y dedicadas a un solo proposito que una interfaz que sea demasiado general. Esto también se ajusta al principio de responsabilidad única.

## Beneficios
- Las clases solo dependen de los métodos que usan.
- Las clases tienen un código mas limpio y estructurado.
- Se aplica tambien el principio de responsabilidad unica, y no se obliga a que la clases implementen funciones que no son necesarias.


## Ejemplo de uso
```
use PrincipioISP\Auto;
use PrincipioISP\Avion;

$auto   = new Auto();
$auto->manejar();


$avion  = new Avion();
$avion->volar()
```


