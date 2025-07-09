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
