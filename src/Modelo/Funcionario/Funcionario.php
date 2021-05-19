<?php
namespace Projeto\Banco\Modelo\Funcionario;

use Projeto\Banco\Modelo\Pessoa;
use Projeto\Banco\Modelo\CPF;

abstract class Funcionario extends Pessoa
{
    private $salario;
    private static $numF = 0;

    function __construct(CPF $cpf, string $nome, float $salario){
        parent::__construct($nome, $cpf);
        $this->salario = $salario;
        Funcionario::$numF++;
    }

    function __destruct() {
        Funcionario::$numF--;
    }

    static function getNumF(): int {
        return Funcionario::$numF;
    }

    function setNome(string $nome): void {
        $this->validaNome($nome);
        $this->nome = $nome;
    }

    function aumento(float $valorAumento): void {
        if ($valorAumento < 0){
            echo"Aumeno deve ser positivo";
            return;
        }
        $this->salario += $valorAumento;
    }

    public function getSalario(): float
    {
        return $this->salario;
    }

}