<?php

require_once 'Conta.php';
require_once 'Titular.php';
require_once 'CPF.php';

$pedro = new Titular(new CPF('123.123.123-12'), 'Pedro');
$primeiraConta = new Conta($pedro);
$primeiraConta->deposita(500);
$primeiraConta->saca(300);

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;

$polly = new Titular(new CPF('321.321.321-21'), 'Polly');
$segundaConta = new Conta($polly);
var_dump($segundaConta);

$outra = new Conta(new Titular(new CPF('555.555.555-88'), 'eodsa'));
var_dump($outra);
echo Conta::recuperaNumeroDeContas();
