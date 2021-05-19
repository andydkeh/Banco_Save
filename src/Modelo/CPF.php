<?php
namespace Projeto\Banco\Modelo;

final class CPF
{
    private $numero;

    function __construct(string $numero) {
        if(strlen($numero) < 11){
        echo "Numero de CPF Inválido";
        exit();
        }
        $this->numero = $numero;
    }

    public function getNumero(): string {
        return $this->numero;
    }
}
