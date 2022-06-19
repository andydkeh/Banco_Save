<?php
namespace Projeto\Banco\Modelo;

class Pessoa
{
    private $nome;
    private $cpf;

    function __construct(string $nome, CPF $cpf) {
        $this->cpf = $cpf;
        $this->nome = $nome;
        $this->validaNome($nome);
    }

    function getNome(): string
    {
        return $this->nome;
    }

    function getCpf(): string
    {
        return $this->cpf->getNumero();
    }

    protected function validaNome($nome)
    {
        if(strlen($nome) < 5)
        {
            echo "Caracteres insuficientes para Titular";
            exit();
        }
    }
}
