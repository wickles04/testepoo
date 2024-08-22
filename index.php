<?php


require __DIR__ . "/models/Produto.php";
require __DIR__ . "/models/Pessoa.php";

use App\Models\{Produto,Pessoa};




// OO - Classes, Objetos, Construtores, Getters and setters, Atributos, Modificadores

$produto1 = new Produto(); //criando o objeto | instanciando a classe 
$produto1-> setNome("Queijo"); 
$produto1-> setValor(20.00); 

$produto2 = new Produto(); //criando o objeto | instanciando a classe 
$produto2-> setNome("Coca Cola"); 
$produto2-> setValor(10.50);





$dataNascimento = new Datetime ('1994-06-25');
$cliente = new Pessoa("Juca","55599988877",$dataNascimento);


    




echo $produto1->exibirDadosProduto()."<br><br>";
echo $produto2->exibirDadosProduto()."<br><br>";
echo $cliente->exibirDadosPessoa()."<br><br>";
echo $cliente->exibiridade()."<br><br>";
echo $cliente->exibirMaiorIdade()."<br><br>";



