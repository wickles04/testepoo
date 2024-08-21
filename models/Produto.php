<?php

namespace App\Models;

class Produto{

    //atributos
    private string $nome;
    private float $valor;

    //métodos
    public function __construct(){
        
    }

    public function setNome(string $pNome){
        $this->nome = $pNome;
    }
    public function setValor(float $pValor){
        if($pValor <= 0){
            throw new \Exception();
            
        }
        $this->valor = $pValor;
        
    }
    public function getNome(){
        return $this->nome;
    }
    public function getValor(){
        return $this->valor;
    }

}



