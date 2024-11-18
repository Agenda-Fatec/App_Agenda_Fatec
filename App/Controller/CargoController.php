<?php

    namespace App\Controller;

    use App\Model\CargoModel;

    class CargoController extends Controller
    {

        public static function Save() : void
        {

            $model = new CargoModel();

            if((int) $_POST["id"] > 0)
            {

                $model->id = (int) $_POST["id"];

            }

            $model->nome = $_POST["nome"];

            $model->Save();

            header("Location: /");

        }

        public static function Add() : void
        {

            (new CargoModel())->Add((int) $_GET["id"]);

            header("Location: /");

        }

        public static function Remove() : void
        {

            (new CargoModel())->Remove((int) $_GET["id"]);

            header("Location: /");

        }

        public static function List() : void
        {

            $model = new CargoModel();

            $model->List();

            parent::Render("Cargo/Listagem", $model->data);

        }

    }

?>