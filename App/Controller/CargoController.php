<?php

    namespace App\Controller;

    use App\Model\CargoModel;

    class CargoController extends Controller
    {

        public static function Form() : void
        {

            $model = new CargoModel();

            if(isset($_GET["id"]))
            {

                $model->List((int) $_GET["id"]);

                $model = $model->data;

            }

            parent::Render("Cargo/Form", $model);

        }

        public static function Save() : void
        {

            $model = new CargoModel();

            if((int) $_POST["id"] > 0)
            {

                $model->id = (int) $_POST["id"];

            }

            $model->nome = $_POST["nome"];

            if(!$model->Save())
            {

                header("Location: " . ROUTES . "/cargo/listagem");

            }

            else
            {

                parent::Alert("Já existe um cargo de usuário cadastrado com este nome! Troque-o e tente novamente.", "/cargo/listagem");

            }

        }

        public static function Toggle() : void
        {

            $model = new CargoModel();

            $id = (int) $_GET["id"];

            ((bool) $_GET["ativo"]) ? $model->Remove($id) : $model->Add($id);

            header("Location: " . ROUTES . "/cargo/listagem");

        }

        public static function List() : void
        {

            $model = new CargoModel();

            $model->List();

            parent::Render("Cargo/Listagem", $model->data);

        }

    }

?>