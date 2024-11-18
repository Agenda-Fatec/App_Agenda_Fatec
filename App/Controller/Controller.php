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

        protected static function Alert(string $message, $header = "/") : void
        {

            exit("<script> alert('$message'); " .
                 "history.pushState(null, null, '$header'); " .
                 "window.location.reload(true); </script>");

        }

    }

?>