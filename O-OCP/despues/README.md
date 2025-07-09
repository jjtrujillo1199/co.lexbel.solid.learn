# Principio Abierto/Cerrado (OCP - Open/Closed Principle)

## Concepto
El código debe estar abierto a extensión, pero cerrado a modificación.

## Objetivo
Permitir que el sistema pueda ser extendido sin modificar el código base existente, es decir:
- Se deben poder agregar nuevas funcionalidades sin modificar el código existente.
- Si cada vez que se agrega algo nuevo tienes que modificar la misma clase, estás violando este principio.

## Antes
La clase `antesOCP\CalculadorTarifa` usaba condicionales para calcular la tarifa según el tipo de transporte.

## Después
- Se creó la interfaz `PrincipioOCP\interfaces\Transporte` con la definición del método `calcularTarifa()`, la clase es una abstracción que define la operación, pero no dice cómo calcular la tarifa
- Se crearon las clases `PrincipioOCP\TransporteAuto` y `PrincipioOCP\TransporteBus` que implementan la interfaz Transporte e incluyen su propia lógica para el cálculo de la tarifa, es decir, que saben como calcular su propia tarifa.
- La clase principal `PrincipioOCOP\CalculadorTarifa` ahora no sabe qué tipo de transporte está usando, solo sabe que debe tener el método calcularTarifa para poder calcularla

## Explicación
Podemos añadir fácilmente nuevos medios de transporte sin modificar la clase `PrincipioOCP\CalculadorTarifa`. Si mañana se requiere agregar medio de transporte como moto o bicicleta, simplemente se crea una nueva clase y no se modifica nada del código existente de la clase principal

## Beneficios
- Se pueden agregar nuevos tipos de transporte sin modificar la lógica existente.
- El código debe estar cerrado a modificaciones, pero abierto a extensiones.
- Usar interfaces y polimorfismo permite agregar nuevas funcionalidades sin tocar el código existente.
- Esto hace que el sistema sea fácil de mantener, escalar y adaptar.

### Polimorfismo
Es un concepto clave de la programación orientada a objetos que permite que objetos de diferentes clases respondan de manera diferente a la misma llamada de método. En otras palabras, es la capacidad de tratar objetos de distintas clases como si fueran del mismo tipo, utilizando una interfaz común. Esto se logra mediante la herencia y la sobreescritura de métodos

## Ejemplo de uso
```
use PrincipioOCP\CalculadorTarifa;
use PrincipioOCP\Auto;
use PrincipioOCP\Bus;

$transporteAuto = new Auto();
$transporteBus  = new Bus();
$calculador     = new CalculadorTarifa();

echo $calculador->calcular($transporteAuto, 10); // Imprime 10000
echo $calculador->calcular($transporteBus, 10); // Imprime 6000
```