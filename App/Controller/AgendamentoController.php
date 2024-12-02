<?php

    namespace App\Controller;

    use App\Model\
    {

        AgendamentoModel,
        SalaModel,
        UsuarioModel,
        CargoModel

    };

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
                    
                    $salas = new SalaModel();

                    $salas->List();

                    $usuarios = new UsuarioModel();

                    $usuarios->List();

                    $cargos = new CargoModel();

                    $cargos->List();

                    parent::Render("Agendamento/Form", array($salas->data, $usuarios->data, $cargos->data));

                }

            }

            else
            {

                parent::Alert("É preciso estar logado na aplicação para requisitar uma sala! Efetue o login e tente novamente.", "/");

            }

        }

        public static function Save() : void
        {

            $model = new AgendamentoModel();

            /*if((int) $_POST["id"] > 0)
            {

                $model->id = (int) $_POST["id"];

            }*/

            $model->data_utilizacao = $_POST["data_utilizacao"];
            
            $model->hora_inicio_utilizacao = $_POST["hora_inicio_utilizacao"];

            $model->hora_fim_utilizacao = $_POST["hora_fim_utilizacao"];

            $model->fk_sala = (int) $_POST["fk_sala"];

            $model->fk_requisitor = (int) $_SESSION["usuario"]["id"];

            $model->fk_aprovador = (int) $_POST["fk_aprovador"];

            $model->Save();

            header("Location: " . ROUTES . "/salas");

        }

        public static function List() : void
        {

            $model = new AgendamentoModel();

            $model->List();

            if(isset($_GET["json"]) && (bool) $_GET["json"])
            {

                exit(json_encode($model->data));

            }

            else
            {

                $usuarios = new UsuarioModel();

                $usuarios->List();

                $salas = new SalaModel();

                $salas->List();

                parent::Render("Agendamento/Listagem", array($model->data, $usuarios->data, $salas->data));

            }

        }

        public static function Confirm() : void
        {

            if((bool) $_SESSION["usuario"]["administrador"])
            {

                (new AgendamentoModel())->Confirm((int) $_GET["id"], $_GET["situacao"]);

                header("Location: " . ROUTES . "/agendamento/listagem");

            }

            else
            {

                parent::Alert("Ação negada àqueles que não são administradores!", "/");

            }

        }

    }

?>