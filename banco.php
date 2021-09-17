<!DOCTYPE html>
<link rel="stylesheet" type="text/css" href="style.css">
<?php
require_once 'autoload.php';

use Projeto\Banco\Modelo\Conta\{Titular, Conta, ContaPoupanca, ContaCorrente};
use Projeto\Banco\Modelo\{Endereco, CPF, Funcionario};

//----TESTE CRIAÇÃO DE OBJETOS----
$titular = new Titular(new CPF('12345678901'), 'Angel L', new Endereco('RS', 'PF','sm', 'sm','101'));
$conta1  = new ContaPoupanca($titular);

$titular2 = new Titular(new CPF('45678123465'), 'Guilherme C', new Endereco('RS', 'PF','sm', 'sm','101'));
$conta2   = new ContaCorrente($titular2);

$titular3 = new Titular(new CPF('78912343610'), 'Kita LC', new Endereco('RS', 'PF','sm', 'sm','101'));
$conta3   = new ContaCorrente($titular3);

$titular4 = new Titular(new CPF('09889078965'), 'Dodi LC', new Endereco('RS', 'PF','sm', 'sm','101'));
$conta4   = new ContaPoupanca($titular4);

//-----TRANSFERENCIAS - UTILIZAÇÃO DE MÉTODOS
$conta1->Depositar(100.00);
$conta2->Depositar(1000.000);
$conta3->Depositar(100.00);
$conta3->Sacar(50.00);
$conta2->Transferir($conta1, 500.00);
$conta3->Transferir($conta2, 10.00);
$conta4->Depositar(20000.00);
$conta3->Depositar(100.00);
$conta1->Sacar(10.00);

$contas = [$conta1, $conta2, $conta3, $conta4];

foreach ($contas as $conta){
    echo "<div class='zuzu'>Nome do(a) titular: {$conta->getNome()}<br></div>";
    echo "<div class='zuzu'>CPF do titular: {$conta->getCpf()}<br></div>";
    echo "<div class='zuzu'>Saldo do titular: {$conta->getSaldo()}<br></div>";
    echo "<br>";
}

echo "<div class='am'>Numero de contas criadas: |" . Conta::getNumContas() . "| <br></div>";

?>
</html>
