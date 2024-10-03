<?php

    namespace App\DAO;

    use App\Model\RoomModel;

    class RoomDAO extends DAO
    {

        public function __construct()
        {

            parent::__construct();
            
        }

        public function Insert(RoomModel $model) : bool
        {

            return true;

        }

        public function Update(RoomModel $model) : bool
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