# Principio de Responsabilidad Única (SRP - Single Responsability Principle)

## Concepto
Una clase debe tener una sola responsabilidad y una sola razón para cambiar.

## Objetivo
Demostrar cómo una clase debe tener una sola responsabilidad o motivo de cambio.
- Una clase debe tener una sola responsabilidad o propósito.
- Si una clase tiene más de una responsabilidad, está mal diseñada porque cualquier cambio en una de ellas puede afectar a las demás

## Antes
La clase `antesSRP\ServicioRecorrido` se encarga de calcular la ruta **Y** guardar la información, violando el principio SRP.

La clase tiene dos responsabilidades:
- Calcular la ruta.
- Guardar el recorrido.

Cada una tiene una razón distinta para cambiar:
- La forma de calcular la ruta puede cambiar.
- La forma de guardar el recorrido puede cambiar (archivo, base de datos, nube, etc).

Lo anterior viola el principio SRP porque la clase debería cambiar solo por una causa, pero aquí cambiaría por dos razones diferentes

## Reto
Crear la carpeta `despues` y dentro de ella crear los archivos y lógica necesaria para cumplir con el principio de responsabilidad única
