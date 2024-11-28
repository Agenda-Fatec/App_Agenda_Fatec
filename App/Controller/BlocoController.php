<?php

    namespace App\Controller;

    use App\Model\BlocoModel;

    class BlocoController extends Controller
    {

        public static function Form() : void
        {

            $model = new BlocoModel();

            if(isset($_GET["id"]))
            {

                $model->List((int) $_GET["id"]);

                $model = $model->data;

            }

            parent::Render("Bloco/Form", $model);

        }

        public static function Save() : void
        {

            $model = new BlocoModel();

            if((int) $_POST["id"] > 0)
            {

                $model->id = (int) $_POST["id"];

            }

            $model->nome = $_POST["nome"];

            $model->descricao = $_POST["descricao"];

            $model->Save();

            header("Location: " . ROOT . "/bloco/listagem");

        }

        public static function Toggle() : void
        {

            $model = new BlocoModel();

            $id = (int) $_GET["id"];

            ((bool) $_GET["ativo"]) ? $model->Remove($id) : $model->Add($id);

            header("Location: " . ROOT . "/bloco/listagem");

        }

        public static function List() : void
        {

            $model = new BlocoModel();

            $model->List();

            parent::Render("Bloco/Listagem", $model->data);

        }

    }

?>