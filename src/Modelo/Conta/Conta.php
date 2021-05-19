<?php
namespace Projeto\Banco\Modelo\Conta;

abstract class Conta
{
    private $titular;
    protected $saldo;
    private static $numContas = 0;

    public function __construct(Titular $titular) //esse negócio já é feito quando new classe é ativado
    {
        $this->titular = $titular;
        $this->saldo = 0;

        Conta::$numContas++;
    }


    public function __destruct() {
        Conta::$numContas--;
    }

    public function Sacar(float $saque): void {
        $tarifa = $saque * 0.5;
        $valoSaque = $saque + $tarifa;
        if($valoSaque > $this->saldo){
            echo "Saque indisponível.";
            return;
        }
        $this->saldo -= $valoSaque;
    }

    public function Depositar(float $deposito): void {
        if($deposito > 0){
            $this->saldo += $deposito;
        }else{
            echo "Deposito inválido.<br>";
        }
    }

    public function getSaldo(): float {
        return $this->saldo;
    }

    public static function getNumContas(): int {
        return Conta::$numContas;
    }

    public function getNome() {
        return $this->titular->getNome();
    }

    function getCpf(): string {
        return $this->titular->getCpf();
    }

    function getEndereco(): string{
        return $this->titular->getEndereco();
    }

    abstract protected function percentual();

}
