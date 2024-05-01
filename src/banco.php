<?php

require_once 'Conta.php';
require_once 'Endereco.php';
require_once 'Pessoa.php';
require_once 'Titular.php';
require_once 'CPF.php';

$endereco = new endereco('Rio de Janeiro', 'Santa Cruz', 'minha rua', '101b');
$pedro = new Titular(new CPF('123.123.123-12'), 'Pedro', $endereco);
$primeiraConta = new Conta($pedro);
$primeiraConta->deposita(500);
$primeiraConta->saca(300);

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;

$polly = new Titular(new CPF('321.321.321-21'), 'Polly', $endereco);
$segundaConta = new Conta($polly);
var_dump($polly);

$outroEndereco = new Endereco('Rio de janeiro', 'Campo Grande', 'Estrada da posse', '22c');
$joao = new Titular(new CPF('151.555.444-99'), 'Joao P', $outroEndereco);
var_dump($joao);

echo Conta::recuperaNumeroDeContas();
