<?php


namespace Projeto\Banco\Modelo\Funcionario;


class Dev extends Funcionario
{
    function sobeNivel() {
        $this->aumento($this->getSalario() * 0.75);
    }

    function calculaBonificacao(): float {
        return 500.00;
    }
}