<?php

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