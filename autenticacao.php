<?php

use Projeto\Banco\Modelo\CPF;
use Projeto\Banco\Modelo\Funcionario\Diretor;
use Projeto\Banco\Modelo\Funcionario\Gerente;
use Projeto\Banco\Service\Autenticador;

require_once 'autoload.php';

$i = new Autenticador();
$dir1 = new Diretor(new CPF('12332112332'),'joooo', 1000);

$i->tentaLogin($dir1, '123456');

