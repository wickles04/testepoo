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
            throw new \Exception("Valor inválido - ovalor deve ser maior que zero.");
            
        }
        $this->valor = $pValor;
        
    }
    public function getNome(){
        return $this->nome;
    }
    public function getValor(){
        return number_format($this->valor,2);
    }
    public function exibirDadosProduto() : string{
        $mensagem = "produto: " . $this->getNome() . ", Valor (R$): " . $this->getValor() ;
        return $mensagem;
    }
    public function retornarDesconto(){
        $desconto = 0;
        if ($this->valor>= 100 && $this->valor<= 1000){
            $desconto = 0.5;
        }elseif($this->valor>1000 ){
            $desconto = 0.1;
        }

    }
    

}


