<?php

    namespace App\Controller;

    use App\Model\UsuarioModel;

    class UsuarioController extends Controller
    {

        public static function Form(string $form = "Login") : void
        {

            $model = new UsuarioModel();

            if(isset($_GET["id"]))
            {

                $model->List((int) $_GET["id"]);

                $model = $model->data;

            }

            parent::Render("Usuario/$form", $model);

        }

        public static function Save() : void
        {

            if($_POST["senha"] === $_POST["confirmacao_senha"])
            {

                $model = new UsuarioModel();

                if((int) $_POST["id"] > 0)
                {

                    $model->id = (int) $_POST["id"];

                }

                $model->nome = $_POST["nome"];

                $model->email = $_POST["email"];

                $model->senha = $_POST["senha"];

                $model->fk_cargo = $_POST["fk_cargo"];

                $model->Save();

                header("Location: /");
                
            }

            else
            {

                parent::Alert("Senhas não correspondentes! Faça as alterações necessárias e tente novamente.");

            }

        }

        public static function Login() : void
        {

            $model = new UsuarioModel();

            $model->email = $_POST["email"];

            $model->senha = $_POST["senha"];

            if($model->Login())
            {

                $_SESSION["usuario"]["id"] = $model->data->id;

                $_SESSION["usuario"]["nome"] = $model->data->nome;

                $_SESSION["usuario"]["email"] = $model->data->email;

                header("Location: /");

            }

            else
            {

                parent::Alert("Dados inválidos! Certifique-se de que já está cadastrado e tente novamente.");

            }

        }

        public static function Logout() : void
        {

            session_destroy();

            header("Location: /");

        }

        public static function Add() : void
        {

            (new UsuarioModel())->Add((int) $_GET["id"]);

            header("Location: /");

        }

        public static function Remove() : void
        {

            (new UsuarioModel())->Remove((int) $_GET["id"]);

            header("Location: /");

        }

        public static function List() : void
        {

            $model = new UsuarioModel();

            $model->List();

            parent::Render("Usuario/Listagem", $model);

        }

    }

?>