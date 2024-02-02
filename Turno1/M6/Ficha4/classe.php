<?php

class Pessoa{

    private $id, $nome, $morada, $pais, $genero;

    public function __construct($id, $nome, $morada, $pais, $genero){
        $this->id = $id;
        $this->nome = $nome;
        $this->morada = $morada;
        $this->pais = $pais;
        $this->genero = $genero;
    }

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id=$id;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome=$nome;
    }

    public function getMorada(){
        return $this->morada;
    }

    public function setMorada($morada){
        $this->morada=$morada;
    }

    public function getPais(){
        return $this->pais;
    }

    public function setPais($pais){
        $this->pais=$pais;
    }

    public function getGenero(){
        return $this->genero;
    }

    public function setGenero($genero){
        $this->genero=$genero;
    }

    public function __toString(){
        return "Id: ".$this->id."<br>Nome: ".$this->nome."<br>Morada: ".$this->morada."<br>País: ".$this->pais."<br>Género: ".$this->genero;
    }

}

?>