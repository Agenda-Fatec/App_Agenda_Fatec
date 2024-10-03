<?php

    // Sala.

    namespace App\Model;

    use App\DAO\RoomDAO;

    class RoomModel extends Model
    {

        public $id, $nome, $numero, $observacoes, $fk_bloco;

        public function Save() : void
        {

            $dao = new RoomDAO();

            ($this->id == null) ? $dao->Insert($this) : $dao->Update($this);

        }

        public function Remove(int $id) : void
        {

            (new RoomDAO())->Delete($id);

        }

        public function List() : void
        {

            $this->data = (new RoomDAO())->Select();

        }

    }

?>