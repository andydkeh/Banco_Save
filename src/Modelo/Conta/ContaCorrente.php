<?php


namespace Projeto\Banco\Modelo\Conta;


class ContaCorrente extends Conta
{
    protected function percentual(){
        return 0.5;
    }

    public function Transferir(Conta &$conta, float $quantia) {
        if($this->saldo < $quantia){
            echo 'Deposito inválido.<br>';
        }else{
            $this->Sacar($quantia);
            $conta->Depositar($quantia);
        }

    }
}