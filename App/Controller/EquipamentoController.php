<?php

    namespace App\Controller;

    use App\Model\EquipamentoModel;

    class EquipamentoController extends Controller
    {

        public static function Form() : void
        {

            $model = new EquipamentoModel();

            if(isset($_GET["id"]))
            {

                $model->List((int) $_GET["id"]);

                $model = $model->data;

            }

            parent::Render("Equipamento/Form", $model);

        }

        public static function Save() : void
        {

            $model = new EquipamentoModel();

            if((int) $_POST["id"] > 0)
            {

                $model->id = (int) $_POST["id"];

            }

            $model->nome = $_POST["nome"];

            $model->descricao = $_POST["descricao"];

            $model->Save();

            header("Location: /");

        }

        public static function Toggle() : void
        {

            $model = new EquipamentoModel();

            $id = (int) $_GET["id"];

            ((bool) $_GET["ativo"]) ? $model->Remove($id) : $model->Add($id);

            header("Location: /equipamento/listagem");

        }

        public static function List() : void
        {

            $model = new EquipamentoModel();

            $model->List();

            parent::Render("Equipamento/Listagem", $model->data);

        }

    }

?>