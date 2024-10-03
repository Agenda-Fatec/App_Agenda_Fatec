<?php

    namespace App\DAO;

    use App\Model\EquipmentModel;

    class EquipmentDAO extends DAO
    {

        public function __construct()
        {

            parent::__construct();
            
        }

        public function Insert(EquipmentModel $model) : bool
        {

            return true;

        }

        public function Update(EquipmentModel $model) : bool
        {

            return true;

        }

        public function Delete(int $id) : bool
        {

            return true;

        }

        public function Select() : array
        {

            return array();

        }

    }

?>