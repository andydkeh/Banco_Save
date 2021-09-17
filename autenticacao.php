<?php

use Projeto\Banco\Modelo\CPF;
use Projeto\Banco\Modelo\Funcionario\Diretor;
use Projeto\Banco\Modelo\Funcionario\Gerente;
use Projeto\Banco\Service\Autenticador;

require_once 'autoload.php';

$autenticador = new Autenticador();
$diretor      = new Diretor(new CPF('12332112332'),'joooo', 1000);

$autenticador->tentaLogin($diretor, '123456');
