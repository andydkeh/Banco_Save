<?php

namespace Projeto\Banco\Service;
use Projeto\Banco\Modelo\Funcionario\Funcionario;

class ControladorBoni
{
    private $totalBoni = 0;

    public function addBoni(Funcionario $funcionario) {
        $this->totalBoni += $funcionario->calculaBonificacao();
    }

    public function getTotalBoni(): float
    {
        return $this->totalBoni;
    }
}