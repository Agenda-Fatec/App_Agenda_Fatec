<?php

    namespace App\Model;

    use App\DAO\UserDAO;

    class UserModel extends Model
    {

        public $id, $nome, $ra, $email, $senha, $administrador, $fk_cargo;

    }

?>