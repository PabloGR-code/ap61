<?php

    class Empleado {
        private $nombre;
        private $salarioHora;
        private $horasDia;

        public function getNombre(){
            return $this->nombre;
        }
        public function getSalarioHora(){
            return $this->salarioHora;
        }
        public function getHorasDia(){
            return $this->horasDia;
        }
        public function setNombre($nombre){
            $this->nombre=$nombre;
        }
        public function setSalarioHoras($salarioHora){
            $this->salarioHora=$salarioHora;
        }
        public function setHorasDia($horasDia){
            $this->horasDia=$horasDia;
        }
        public function getInfo(){
            return $this->salarioHora * $this->horasDia * 30;
        }
        public function addSal(){
            if ($this->getInfo() < 500){
                $this->salarioHora += 10;
            }
        }
        public function addWork(){
            if($this->horasDia > 6){
                $this->salarioHora +=5;
            }
        }
    }

    $empleado = new Empleado();
    $empleado->setNombre("Pablo");
    $empleado->setSalarioHoras(10);
    $empleado->setHorasDia(7);
    $empleado->addSal();
    $empleado->addWork();
    echo "Empleado: " . $empleado->getNombre() . "<br>";
    echo "Salario final por hora: " . $empleado->getSalarioHora() . "<br>";
    echo "Salario mensual final: " . $empleado->getInfo() . "<br>";