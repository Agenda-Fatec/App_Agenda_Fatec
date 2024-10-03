<?php

    namespace App\DAO;

    use App\Model\RoomEquipmentAssocModel;

    class RoomEquipmentAssocDAO extends DAO
    {

        public function __construct()
        {

            parent::__construct();
            
        }

        public function Insert(RoomEquipmentAssocModel $model) : bool
        {

            return true;

        }

        public function Update(RoomEquipmentAssocModel $model) : bool
        {

            return true;

        }

        public function Delete(int $fk_sala, int $fk_equipamento) : bool
        {

            return true;

        }

        public function Select(int $fk_sala) : array
        {

            // Retorna apenas os equipamentos da sala selecionada, e não de todas as cadastradas no banco de dados.

            return array();

        }

        public function Filter(int $fk_sala, int $fk_equipamento) : ?RoomEquipmentAssocModel
        {

            return new RoomEquipmentAssocModel();

        }

    }

?>