<?php
namespace app\Models;

use DateTime;
class Pessoa{

    private string $nome;

    private string $cpf; 

    private DateTime $dataNascimento;



    public function __construct(string $pNome, string $pCpf, DateTime $pDataNascimento){
        $this->setNome($pNome)  ;
        $this->setCpf($pCpf)  ;
        $this->dataNascimento = $pDataNascimento ;


    }



    public function getNome(): string {
    	return $this->nome;
    }


    public function setNome(string $nome): void {
    	$this->nome = $nome;
    }


    public function getCpf(): string {
    	return $this->cpf;
    }

    private function setCpf(string $cpf): void {
    	$this->cpf = $cpf;
    }




    
    public function getDataNascimento(){
    	return $this->dataNascimento->format('d/m/Y');
    }


    public function exibirIdade(){
        date_default_timezone_set('America/Sao_Paulo');

        $dataAtual = new DateTime(date("Y-m-d"));
        $idade = $this->dataNascimento->diff($dataAtual);
        return $idade->y;
    }

    public function exibirMaiorIdade(){
        $retorno ="";
        if($this->exibirIdade()>=18){
            $retorno = "É maior de idade";
        }
        else{
            $retorno = "É menor de idade";
        }
        return $retorno;
    }




    public function exibirDadosPessoa(){
        $mensagem = "Cliente: " . $this->getNome() . "; " . $this->getDataNascimento() . "; " . $this->getCpf() . "; " . $this->exibiridade() . "; " . $this->exibirMaiorIdade();
        return $mensagem;
    }


}