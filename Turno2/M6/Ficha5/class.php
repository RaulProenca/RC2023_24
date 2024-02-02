<?php

class Rent{

    private $matricula, $ndias, $marca, $segmento, $extras, $total;

    function __construct($matricula, $ndias, $marca, $segmento, $extras, $total){
        $this->matricula = $matricula;
        $this->ndias = $ndias;
        $this->marca = $marca;
        $this->segmento = $segmento;
        $this->extras = $extras;
        $this->total = $total;
    }

    public function setMatricula($matricula){
        $this->matricula = $matricula;
    }

    public function getMatricula(){
        return $this->matricula;
    }

    public function setNdias($ndias){
        $this->ndias = $ndias;
    }

    public function getNdias(){
        return $this->ndias;
    }

    public function setMarca($marca){
        $this->marca = $marca;
    }

    public function getMarca(){
        return $this->marca;
    }

    public function setSegmento($segmento){
        $this->segmento = $segmento;
    }

    public function getSegmento(){
        return $this->segmento;
    }

    public function setExtras($extras){
        $this->extras = $extras;
    }

    public function getExtras(){
        return $this->extras;
    }

    public function setTotal($total){
        $this->total = $total;
    }

    public function getTotal(){
        return $this->total;
    }
    //toString
    public function __toString(){
        return "Matricula: " . $this->matricula . "<br/>" .
        "Nº de dias: " . $this->ndias . "<br/>" .
        "Marca: " . $this->marca . "<br/>" .
        "Segmento: " . $this->segmento . "<br/>" .
        "Extras: " . $this->extras . "<br/>" .
        "Total: " . $this->total . "<br/>";
    }
}



?>