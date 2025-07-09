# Principio de Sustitución de Liskov (LSP - Liskov Substitution Principle)

## Concepto
Una subclase debe poder sustituir a su superclase sin romper el comportamiento del sistema, en otras palabras: Los objetos de una subclase deben poder sustituir a los objetos de su clase base sin alterar el comportamiento esperado del programa

## Objetivo
Asegurar que cualquier subclase pueda reemplazar a su clase base sin romper el comportamiento del sistema.
- Si una clase Padre tiene un comportamiento, cualquier subclase debe poder reemplazarla sin romper el sistema.
- Las subclases deben respetar el contrato definido por la clase base.

## Antes
La subclase (`antesLSP\Bicicleta`) de la clase `Transporte` lanza una excepción porque no aplicaba al lógica de negocio del método de su clase padre.

## Reto
Crear la carpeta `despues` y dentro de ella crear los archivos y lógica necesaria para cumplir con el principio de substitución de Liskov, resolviendo:
- Se está asumiendo que todos los transportes tienen motor.
- La bicicleta no tiene motor (para el caso del ejercicio), pero es obligada a implementar un método que no le corresponde.
- Esto genera comportamientos rotos o excepciones inesperadas.
