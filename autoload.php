<?php

spl_autoload_register(function(string $nomeClasse){
    $classe = str_replace('Projeto\\Banco', 'src', $nomeClasse); //vai pegar o noe da classe e depois vai transformar proj/banco  src;
    $classe = str_replace('\\', DIRECTORY_SEPARATOR, $classe);
    $classe .= '.php';

    if(file_exists($classe)){
        require_once $classe;
    }
});