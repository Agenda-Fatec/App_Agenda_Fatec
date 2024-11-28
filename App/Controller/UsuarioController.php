<?php

    namespace App\Controller;

    use App\Model\
    {

        UsuarioModel,
        CargoModel

    };

    class UsuarioController extends Controller
    {

        public static function Form(string $form = "Login") : void
        {

            $model = null;

            if($form === "Cadastro")
            {

                $model = new CargoModel();

                $model->List();

                $model = $model->data;

            }

            parent::Render("Usuario/$form", $model);

        }

        public static function Save() : void
        {

            if($_POST["senha"] === $_POST["confirmacao_senha"])
            {

                $model = new UsuarioModel();

                if(isset($_POST["id"]) && (int) $_POST["id"] > 0)
                {

                    $model->id = (int) $_POST["id"];

                }

                $model->nome = $_POST["nome"];

                $model->email = $_POST["email"];

                $model->senha = $_POST["senha"];

                $model->fk_cargo = (int) $_POST["fk_cargo"];

                $model->Save();

                header("Location: " . ROUTES . "/");
                
            }

            else
            {

                parent::Alert("Senhas não correspondentes! Faça as alterações necessárias e tente novamente.", "/cadastro");

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

                $_SESSION["usuario"]["administrador"] = $model->data->administrador;

                $_SESSION["usuario"]["nome"] = $model->data->nome;

                $_SESSION["usuario"]["email"] = $model->data->email;

                header("Location: " . ROUTES . "/");

            }

            else
            {

                parent::Alert("Dados inválidos! Certifique-se de que já está cadastrado e tente novamente.", "/login");

            }

        }

        public static function Logout() : void
        {

            $_SESSION = array();

            session_destroy();

            header("Location: " . ROUTES . "/");

        }

        public static function Toggle() : void
        {

            $model = new UsuarioModel();

            $id = (int) $_GET["id"];

            ((bool) $_GET["ativo"]) ? $model->Remove($id) : $model->Add($id);

            header("Location: " . ROUTES . "/usuario/listagem");

        }

        public static function Reclassify() : void
        {

            $model = new UsuarioModel();

            $id = (int) $_GET["id"];

            ((bool) $_GET["administrador"]) ? $model->Reclassify($id, 0) : $model->Reclassify($id, 1);

            header("Location: " . ROUTES . "/usuario/listagem");

        }

        public static function List() : void
        {

            $model = new UsuarioModel();

            $model->List();

            $cargos = new CargoModel();

            $cargos->List();

            parent::Render("Usuario/Listagem", array($model->data, $cargos->data));

        }

    }

?>