<?php

    namespace App\DAO;

    use App\Model\PositionModel;

    class PositionDAO extends DAO
    {

        public function __construct()
        {

            parent::__construct();
            
        }

        public function Insert(PositionModel $model) : bool
        {

            return true;

        }

        public function Update(PositionModel $model) : bool
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