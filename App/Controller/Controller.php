<?php

    namespace App\Controller;

    abstract class Controller
    {

        protected function Render($view, $model = null) : void
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

    }

?>