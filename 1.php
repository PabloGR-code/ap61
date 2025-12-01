<?php

    class Triangle{
        private $lado1;
        private $lado2;
        private $lado3;

        public function __construct($lado1, $lado2, $lado3){
            $this->lado1=$lado1;
            $this->lado2=$lado2;
            $this->lado3=$lado3;
        }
        public function getLado1(){
            return $this->lado1;
        }
        public function getLado2(){
            return $this->lado2;
        }
        public function getLado3(){
            return $this->lado3;
        }
        public function setLado1(){
            $this->lado1=$lado1;
        }
        public function setLado2(){
            $this->lado2=$lado2;
        }
        public function setLado3(){
            $this->lado3=$lado3;
        }
        public function getPerimetro(){
            return $this->lado1 + $this->lado2 + $this->lado3;
        }
        public function getArea(){
            $area=$this->getPerimetro()/2;
            return $area * ($area - $this->lado1) * ($area - $this->lado2) * ($area - $this->lado3); 
        }
    }

    $triangulo =new Triangle(3,4,5);
    echo "Perimetro: " . $triangulo->getPerimetro() . "<br>";
    echo "Area: " . $triangulo->getArea() . "<br>";