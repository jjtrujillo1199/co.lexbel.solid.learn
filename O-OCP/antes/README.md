# Principio Abierto/Cerrado (OCP - Open/Closed Principle)

## Concepto
El código debe estar abierto a extensión, pero cerrado a modificación.

## Objetivo
Permitir que el sistema pueda ser extendido sin modificar el código base existente, es decir:
- Se deben poder agregar nuevas funcionalidades sin modificar el código existente.
- Si cada vez que se agrega algo nuevo tienes que modificar la misma clase, estás violando este principio.

## Antes
La clase `antesOCP\CalculadorTarifa` usa condicionales para calcular la tarifa según el tipo de transporte.

## Reto
Crear la carpeta `despues` y dentro de ella crear los archivos y lógica necesaria para cumplir con el principio abieto/cerrado, resolviendo:
- Si quieres agregar otro medio de transporte como moto, bicicleta, camión, etc., debes modificar la clase principal cada vez.
- La clase principal está cerrada a la extensión y abierta a la modificación, lo que es lo contrario al OCP.
- Cada nuevo tipo de transporte rompería el principio porque obliga a modificar el código ya escrito en la clase principal.
