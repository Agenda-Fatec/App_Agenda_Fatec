<?php

    namespace App\Controller;

    use App\Model\BlocoModel;

    class BlocoController extends Controller
    {

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

            header("Location: /");

        }

        public static function Add() : void
        {

            (new BlocoModel())->Add((int) $_GET["id"]);

            header("Location: /");

        }

        public static function Remove() : void
        {

            (new BlocoModel())->Remove((int) $_GET["id"]);

            header("Location: /");

        }

        public static function List() : void
        {

            $model = new BlocoModel();

            $model->List();

            parent::Render("Bloco/Listagem", $model->data);

        }

    }

?>