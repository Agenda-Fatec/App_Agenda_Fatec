<?php

    namespace App\Controller;

    use App\Model\AgendamentoModel;

    class AgendamentoController extends Controller
    {

        public static function Form() : void
        {

            if(count($_SESSION) > 0)
            {

                if((bool) $_SESSION["usuario"]["administrador"])
                {

                    parent::Alert("Não é permitido aos administradores que solicitem salas!", "/");

                }

                else
                {

                    parent::Render("Agendamento/Form");

                }

            }

            else
            {

                parent::Alert("É preciso estar logado na aplicação para requisitar uma sala! Efetue o login e tente novamente.", "/");

            }

        }

    }

?>