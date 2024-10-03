<?php

    // Bloco.

    namespace App\Model;

    use App\DAO\BlockDAO;

    class BlockModel extends Model
    {

        public $id = null;

        public $nome, $observacoes;

        public function Save() : void
        {

            $dao = new BlockDAO();

            ($this->id == null) ? $dao->Insert($this) : $dao->Update($this);

        }

        public function Remove(int $id) : void
        {

            (new BlockDAO())->Delete($id);

        }

        public function List() : void
        {

            $this->data = (new BlockDAO())->Select();

        }

    }

?>