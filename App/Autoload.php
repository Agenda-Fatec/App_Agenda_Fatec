<?php

    /*

        Com a função abaixo não é mais necessário utilizar o INCLUDE ou o REQUIRE
        individualmente em cada nova instância de uma classe, pois este processo
        será automatizado.

    */

    spl_autoload_register(function($classe)
    {

        $arquivo = str_replace("\\", "/", BASEDIR . $classe . ".php");

        if(file_exists($arquivo))
        {

            require $arquivo;

        }

        else
        {

            exit("Arquivo não encontrado! Solicitação: " . $arquivo);

        }

    });

?>