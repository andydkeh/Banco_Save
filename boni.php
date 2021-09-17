<?php
 require_once 'autoload.php';

 use Projeto\Banco\Service\ControladorBoni;
 use Projeto\Banco\Modelo\CPF;
 use Projeto\Banco\Modelo\Funcionario\{Funcionario, Gerente, Diretor, Dev};

 $f = new Dev(new CPF('76543287654'), 'Leonardo KING', 1000);
 echo "Salário antes: {$f->getSalario()} <br>";

 //AUMENTO
 $f->sobeNivel();

 //CONTROLADOR BONIFICACOES
 $controlador = new ControladorBoni();
 $controlador->addBoni($f);

 echo "Total de bonificação {$controlador->getTotalBoni()}<br>";
 echo "{$f->getNome()} - Salário depois do aumento: {$f->getSalario()}<br>";
