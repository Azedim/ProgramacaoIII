<?php

class Calculadora{
    private $valor1;
    private $valor2;

    public function __construct($valor1,$valor2){
        $this->valor1 = $valor1;
        $this->valor2 = $valor2;
    }

    public function soma(){
        $resultado = $this->valor1 + $this->valor2;
        echo $resultado;
    }
    public function subtracao(){
        $resultado = $this->valor1 - $this->valor2;
        echo $resultado;
    }
    public function multiplicacao(){
        $resultado = $this->valor1 * $this->valor2;
        echo $resultado;
    }
    public function divisao(){
        $resultado = $this->valor1 / $this->valor2;
        echo $resultado;
    }

    public function getValor1() {
    	return $this->valor1;
    }
    public function setValor1($valor1) {
    	$this->valor1 = $valor1;
    	return $this->valor1;
    }
    public function getValor2() {
    	return $this->valor2;
    }
    public function setValor2($valor2) {
    	$this->valor2 = $valor2;
    	return $this->valor2;
    }
}    
