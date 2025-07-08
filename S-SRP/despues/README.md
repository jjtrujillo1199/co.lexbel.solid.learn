# Principio de Responsabilidad Única (SRP - Single Responsability Principle)

## Concepto
Una clase debe tener una sola responsabilidad y una sola razón para cambiar.

## Objetivo
Demostrar cómo una clase debe tener una sola responsabilidad o motivo de cambio.
- Una clase debe tener una sola responsabilidad o propósito.
- Si una clase tiene más de una responsabilidad, está mal diseñada porque cualquier cambio en una de ellas puede afectar a las demás

## Antes
La clase `antesSRP\ServicioRecorrido` se encargaba de calcular la ruta **Y** guardar la información, violando el principio SRP.

La clase tenía dos responsabilidades:
- Calcular la ruta.
- Guardar el recorrido.

Cada una tenía una razón distinta para cambiar:
- La forma de calcular la ruta puede cambiar.
- La forma de guardar el recorrido puede cambiar (archivo, base de datos, nube, etc).

Lo anterior violaba el principio SRP porque la clase debería cambiar solo por una causa, pero aquí cambiaría por dos razones diferentes

## Después
Se separaron las responsabilidades en dos clases:
- `PrincipioSRP\CalculadorRuta`: solo calcula la ruta.
- `PrincipioSRP\AlmacenamientoRecorrido`: solo guarda la información del recorrido.

## Explicación
Separar responsabilidades mejora el mantenimiento. Si la forma de guardar cambia (ej. guardar en base de datos), solo la clase `PrincipioSRP\AlmacenamientoRecorrido` se modifica y no debe modificarse la clase principal o de primer nivel.

## Beneficios
- Mantenimiento más simple.
- Cada clase cambia por un único motivo.

## Ejemplo de uso
```
$calculador = new CalculadorRuta();
$ruta = $calculador->calcular('Bogotá', 'Medellín');

$almacenador = new AlmacenamientoRecorrido();
$almacenador->guardar($ruta);
```