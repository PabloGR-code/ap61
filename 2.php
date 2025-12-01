<?php

    class Average {
        private $numero1;
        private $numero2;
        private $numero3;

        public function getNumero1(){
            return $this->numero1;
        }
        public function getNumero2(){
            return $this->numero2;
        }
        public function getNumero3(){
            return $this->numero3;
        }
        public function setNumero1($numero1){
            $this->numero1=$numero1;
        }
        public function setNumero2($numero2){
            $this->numero2=$numero2;
        }
        public function setNumero3($numero3){
            $this->numero3=$numero3;
        }
        public function imprimir_promedio(){
            $promedio=($this->numero1 + $this->numero2 + $this->numero3) /3;
            return "El promedio es: " . $promedio;
        }
        
    }

    $avg= new Average();
    $avg->setNumero1(4);
    $avg->setNumero2(7);
    $avg->setNumero3(10);
    echo $avg->imprimir_promedio();