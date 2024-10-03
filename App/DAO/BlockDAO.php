<?php

    namespace App\DAO;

    use App\Model\BlockModel;

    class BlockDAO extends DAO
    {

        public function __construct()
        {

            parent::__construct();
            
        }

        public function Insert(BlockModel $model) : bool
        {

            return true;

        }

        public function Update(BlockModel $model) : bool
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