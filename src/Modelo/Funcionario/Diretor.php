<?php
namespace Projeto\Banco\Modelo\Funcionario;
use Projeto\Banco\Modelo\Autenticavel;

class Diretor extends Funcionario implements Autenticavel
{
    function calculaBonificacao(): float
    {
        return ($this->getSalario() * 2) /100;
    }

    function autenticarOn(string $senha) 
    {
        return $senha === '123456';
    }
}
