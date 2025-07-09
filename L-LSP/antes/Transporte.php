<?php
namespace antesLSP; 

class Transporte {
    /**
     * Enciende el motor.
     *
     * @return string
     */
    public function encenderMotor(): string {
        return "Motor encendido";
    }
}

class Bicicleta extends Transporte {
    /**
     * Enciende el motor.
     *
     * @return string
     * @throws \Exception Genera una excepción porque la bicicleta no tiene motor
     */
    public function encenderMotor(): string {
        throw new \Exception("Las bicicletas no tienen motor");
    }
}
