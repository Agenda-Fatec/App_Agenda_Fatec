<?php

    namespace App\DAO;

    use App\Model\SchedulingModel;

    class SchedulingDAO extends DAO
    {

        public function __construct()
        {

            parent::__construct();
            
        }

        public function Insert(SchedulingModel $model) : bool
        {

            return true;

        }

        public function Update(SchedulingModel $model) : bool
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