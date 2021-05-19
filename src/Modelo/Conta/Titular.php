<?php
namespace Projeto\Banco\Modelo\Conta;

use Projeto\Banco\Modelo\Pessoa;
use Projeto\Banco\Modelo\CPF;
use Projeto\Banco\Modelo\Endereco;
use Projeto\Banco\Modelo\Autenticavel;

class Titular extends Pessoa implements Autenticavel
{
    private $endereco;

    function __construct(CPF $cpf, string $nome, Endereco $endereco) {
        parent::__construct($nome, $cpf);
        $this->endereco = $endereco;
    }

    function getEndereco(): Endereco
    {
        return $this->endereco;
    }

    function autenticarOn(string $senha){
        return $senha === 'asd';
    }
}