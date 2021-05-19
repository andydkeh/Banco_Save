<?php


namespace Projeto\Banco\Modelo\Conta;


class ContaPoupanca extends Conta
{
    protected function percentual(): float
    {
        return 0.3;
    }
}
