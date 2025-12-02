<?php
 
class Matrix {
    private $filas;
    private $columnas;
    private $matriz;
 
    public function __construct($filas, $columnas){
        $this->filas = $filas;
        $this->columnas = $columnas;
 
        $this->matriz = [];
 
        for ($i = 0; $i < $filas; $i++) {
            for ($j = 0; $j < $columnas; $j++) {
                $this->matriz[$i][$j] = "";
            }
        }
    }
 
    public function getFilas() {
        return $this->filas;
    }
 
    public function getColumnas() {
        return $this->columnas;
    }
 
    public function getElem($fil, $col) {
        return $this->matriz[$fil][$col];
    }
 
    public function setRelleno($i, $j, $relleno){
        return ($i < $this->filas && $j < $this->columnas)
            ? $this->matriz[$i][$j] = $relleno
            : "";   
    }
 
    public function rellenar() {
        for ($i = 0; $i < $this->filas; $i++) {
            for ($j = 0; $j < $this->columnas; $j++) {
                $this->matriz[$i][$j] = rand(1,100);
            }
        }
    }
 
    public function mostrarTabla() {
        $aux = "<table border='1px solid'>";
        for ($i = 0; $i < $this->filas; $i++) {
            $aux.= "<tr>";
            for ($j = 0; $j < $this->columnas; $j++) {
                $aux.= "<td>" . $this->matriz[$i][$j] . "</td>";
            }
            $aux.= "</tr>";
        }
        $aux.= "</table><br>";
        echo $aux;
    }
}
 
//PROGRAMA PRINCIPAL
echo "TABLA 1<br>";
$mat1 = new Matrix(3, 4);   
$mat1->rellenar();            
$mat1->setRelleno(1, 2, 0);
echo "Filas: " . $mat1->getFilas() . "<br>";
echo "Columnas: " . $mat1->getColumnas() . "<br>";
$mat1->mostrarTabla();
 
echo "TABLA 2<br>";
$mat2 = new Matrix(3, 4);   
$mat2->rellenar();            
$mat2->setRelleno(1, 2, 0);
echo "Filas: " . $mat2->getFilas() . "<br>";
echo "Columnas: " . $mat2->getColumnas() . "<br>";
$mat2->mostrarTabla();
 
echo "TABLA SUMA<br>";
$suma=sumar($mat1, $mat2);
echo "Filas: " . $mat2->getFilas() . "<br>";
echo "Columnas: " . $mat2->getColumnas() . "<br>";
$suma->mostrarTabla();
 
//Funciones
function sumar($m1, $m2){ //m1 y m2 son dos objetos Matrix
    if ($m1->getFilas()==$m2->getFilas() && $m1->getColumnas()==$m2->getColumnas()){
        $rtdo=new Matrix($m1->getFilas(),$m1->getColumnas());
        for($i=0; $i<$m1->getFilas();$i++){
            for($j=0; $j<$m1->getColumnas();$j++){
             $rtdo->setRelleno($i, $j, $m1->getElem($i,$j)+$m2->getElem($i,$j));
            }
        }
        return $rtdo;
    }
}
 
function multiplicar($m1, $m2){ //m1 y m2 son dos objetos Matrix
    if ($m1->getFilas()==$m2->getColumnas()){
        $rtdo=new Matrix($m1->getFilas(),$m2->getColumnas());
        for($i=0; $i<$m1->getFilas();$i++){
            for($j=0; $j<$m1->getColumnas();$j++){
             $rtdo->setRelleno($i, $j, $m1->getElem($i,$j)+$m2->getElem($i,$j));
            }
        }
        return $rtdo;
    }
}