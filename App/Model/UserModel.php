<?php

    // Usuário.

    namespace App\Model;

    use App\DAO\UserDAO;

    class UserModel extends Model
    {

        public $id, $nome, $ra, $email, $senha, $administrador, $fk_cargo;

        public function Save() : void
        {

            $dao = new UserDAO();

            ($this->id == null) ? $dao->Insert($this) : $dao->Update($this);

        }

        public function Remove(int $id) : void
        {

            (new UserDAO())->Delete($id);

        }

        public function List() : void
        {

            $this->data = (new UserDAO())->Select();

        }

    }

?>