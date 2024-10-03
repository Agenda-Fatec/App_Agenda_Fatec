<?php

    // Equipamento.

    namespace App\Model;

    use App\DAO\EquipmentDAO;

    class EquipmentModel extends Model
    {

        public $id, $nome, $observacoes;

        public function Save() : void
        {

            $dao = new EquipmentDAO();

            ($this->id == null) ? $dao->Insert($this) : $dao->Update($this);

        }

        public function Remove(int $id) : void
        {

            (new EquipmentDAO())->Delete($id);

        }

        public function List() : void
        {

            $this->data = (new EquipmentDAO())->Select();

        }

    }

?>