<?php

    // Cargo.

    namespace App\Model;

    use App\DAO\PositionDAO;

    class PositionModel extends Model
    {

        public $id, $descricao;

        public function Save() : void
        {

            $dao = new PositionDAO();

            ($this->id == null) ? $dao->Insert($this) : $dao->Update($this);

        }

        public function Remove(int $id) : void
        {

            (new PositionDAO())->Delete($id);

        }

        public function List() : void
        {

            $this->data = (new PositionDAO())->Select();

        }

    }

?>