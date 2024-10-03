<?php

    namespace App\DAO;

    use App\Model\UserModel;

    class UserDAO extends DAO
    {

        public function __construct()
        {

            parent::__construct();
            
        }

        public function Insert(UserModel $model) : bool
        {

            return true;

        }

        public function Update(UserModel $model) : bool
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