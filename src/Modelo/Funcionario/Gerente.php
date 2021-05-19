<?php


namespace Projeto\Banco\Modelo\Funcionario;
use Projeto\Banco\Modelo\Autenticavel;

class Gerente extends Funcionario implements Autenticavel
{
    function calculaBonificacao():float {
        return $this->getSalario();
    }

    function autenticarOn(string $senha){
        return $senha === '22';
    }
}