<?php


require __DIR__ . "/models/Produto.php";
require __DIR__ . "/models/Pessoa.php";

use App\Models\{Produto,Pessoa};

$x = 10;
$y = 1000;
$pessoa1 = new Pessoa("Magali", "1112223344", 18);
$pessoa2 = new Pessoa("Cebolinha", "22233344455",19);

var_dump($pessoa1);
var_dump($pessoa2);
var_dump($x);
var_dump($y);



// OO - Classes, Objetos, Construtores, Getters and setters, Atributos, Modificadores
/*
$produto1 = new Produto(); //criando o objeto | instanciando a classe 
$produto1-> setNome("Queijo"); 
$produto1-> setValor(20.00); 

$produto2 = new Produto(); //criando o objeto | instanciando a classe 
$produto2-> setNome("Coca Cola"); 
$produto2-> setValor(10.50);

try{
    $produto2->setValor(-1000);
}catch(\Throwable $th){
    echo $th->getMessage();
}




$cliente = new Pessoa("Juca","55599988877",41);


    




echo "O valor do produto ". $produto1->getNome() ." é R$" . $produto1->getValor() ."<br>";

echo "O valor do produto ". $produto2->getNome() ." é R$" . $produto2->getValor()."<br>" ;

echo "Pessoa 1: " . $cliente->getNome() ."; ". $cliente->getCpf() ."; ". $cliente->getIdade() ."<br>";

*/








