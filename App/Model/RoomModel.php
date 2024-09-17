<?php

    namespace App\Model;

    use App\DAO\RoomDAO;

    class RoomModel extends Model
    {

        public $id, $nome, $numero, $observacoes, $fk_bloco;

    }

?>