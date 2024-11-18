<?php

    namespace App\Controller;

    use App\Model\
    {

        SalaModel,
        BlocoModel,
        SalaEquipamentoAssocModel

    };

    class SalaController extends Controller
    {

        public static function Form() : void
        {

            $model = new SalaModel();

            if(isset($_GET["id"]))
            {

                $model->List((int) $_GET["id"]);

                $model = $model->data;

            }

            parent::Render("Sala/Form", $model);

        }

        public static function Save() : void
        {

            $model = new SalaModel();

            if((int) $_POST["id"] > 0)
            {

                $model->id = (int) $_POST["id"];

            }

            $model->nome = $_POST["nome"];

            $model->numero = $_POST["numero"];

            $model->descricao = $_POST["descricao"];

            $model->fk_bloco = (int) $_POST["fk_bloco"];

            $model->Save();

            header("Location: /");

        }

        public static function Toggle() : void
        {

            $model = new SalaModel();

            $id = (int) $_GET["id"];

            ((bool) $_GET["ativo"]) ? $model->Remove($id) : $model->Add($id);

            header("Location: /sala/listagem");

        }

        public static function List(string $form = "Listagem") : void
        {

            $model = new SalaModel();

            $model->List();

            if($form === "Listagem")
            {

                $blocos = new BlocoModel();

                $blocos->List();

                parent::Render("Sala/$form", array($model->data, $blocos->data));

            }

            else
            {

                parent::Render("Sala/$form", $model->data);

            }

        }

        public static function Describe() : void
        {

            $model = new SalaModel();

            $model->List((int) $_GET["id"]);

            $bloco = new BlocoModel();

            $bloco->List((int) $model->data->fk_bloco);

            $equipamentos = new SalaEquipamentoAssocModel();

            $equipamentos->List((int) $model->data->id);

            parent::Render("Sala/Descricao", array($model->data, $bloco->data, $equipamentos->data));

        }

    }

?>