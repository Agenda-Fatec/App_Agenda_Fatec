<?php

    namespace App\Controller;

    abstract class Controller
    {

        protected static function Render($view, $model = null) : void
        {

            $arquivo = VIEWS . $view . ".php";

            if(file_exists($arquivo))
            {

                include $arquivo;

            }

            else
            {

                exit("Arquivo não encontrado! Solicitação: " . $arquivo);

            }

        }

        protected static function Alert(string $message) : void
        {

            $domain = $_SERVER["HTTP_ORIGIN"];

            exit("<script> alert('$message'); " .
                 "history.pushState(null,null,'$domain/'); " .
                 "window.location.reload(true); </script>");

        }

    }

?>