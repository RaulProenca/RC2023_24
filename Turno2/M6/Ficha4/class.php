<?php

class Pessoa{

    private $id, $nome, $morada, $pais, $genero;
    
    function __construct($id, $nome, $morada, $pais, $genero){
        $this->id = $id;
        $this->nome = $nome;
        $this->morada = $morada;
        $this->pais = $pais;
        $this->genero = $genero;
    }

    function setId($id){
        $this->id = $id;
    }

    function getId(){
        return $this->id;
    }

    function setNome($nome){
        $this->nome = $nome;
    }
    
    function getNome(){
        return $this->nome;
    }

    function setMorada($morada){
        $this->morada = $morada;
    }

    function getMorada(){
        return $this->morada;
    }

    function setPais($pais){
        $this->pais = $pais;
    }

    function getPais(){
        return $this->pais;
    }

    function setGenero($genero){
        $this->genero = $genero;
    }

    function getGenero(){
        return $this->genero;
    }
}