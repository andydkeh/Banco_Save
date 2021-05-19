<?php

namespace Projeto\Banco\Service;
use Projeto\Banco\Modelo\Autenticavel;
class Autenticador
{
    public function tentaLogin(Autenticavel $autenticavel, string $senha): void {
        if($autenticavel->autenticarOn($senha)){
            echo "Bem-vindo!!";
        } else {
            echo "Senha incorreta";
        }
    }
}