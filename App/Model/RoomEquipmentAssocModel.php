<?php

    namespace App\Model;

    use App\DAO\RoomEquipmentAssocDAO;

    class RoomEquipmentAssocModel extends Model
    {

        public $quantidade, $fk_sala, $fk_equipamento;

    }

?>