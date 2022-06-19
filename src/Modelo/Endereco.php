<?php
namespace Projeto\Banco\Modelo;

class Endereco
{
    private $estado;
    private $cidade;
    private $bairro;
    private $rua;
    private $num;

    function __construct($estado, $cidade, $bairro,$rua, $num){
        $this->estado = $estado;
        $this->cidade = $cidade;
        $this->bairro = $bairro;
        $this->rua = $rua;
        $this->num = $num;
    }

    public function getEstado(): string{
        return $this->estado;
    }

    public function getCidade(): string{
        return $this->cidade;
    }

    public function getBairro(): string{
        return $this->bairro;
    }

    public function getRua(): string{
        return $this->rua;
    }
    
    public function getNum(): string{
        return $this->num;
    }

}
