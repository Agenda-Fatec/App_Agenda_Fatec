<?php

    namespace App\Controller;

    use App\Model\EquipamentoModel;

    class EquipamentoController extends Controller
    {

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

        public static function Add() : void
        {

            (new EquipamentoModel())->Add((int) $_GET["id"]);

            header("Location: /");

        }

        public static function Remove() : void
        {

            (new EquipamentoModel())->Remove((int) $_GET["id"]);

            header("Location: /");

        }

        public static function List() : void
        {

            $model = new EquipamentoModel();

            $model->List();

            parent::Render("Equipamento/Listagem", $model->data);

        }

    }

?>