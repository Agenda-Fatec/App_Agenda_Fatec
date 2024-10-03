<?php

    // Associação - Sala X Equipamentos.

    namespace App\Model;

    use App\DAO\RoomEquipmentAssocDAO;

    class RoomEquipmentAssocModel extends Model
    {

        public $quantidade, $fk_sala, $fk_equipamento;

        public function Save() : void
        {

            $dao = new RoomEquipmentAssocDAO();

            if((new RoomEquipmentAssocDAO())->Filter($this->fk_sala, $this->fk_equipamento) == null)
            {

                $dao->Insert($this);

            }

            else
            {

                $dao->Update($this);

            }

        }

        public function Remove(int $fk_sala, int $fk_equipamento) : void
        {

            (new RoomEquipmentAssocDAO())->Delete($fk_sala, $fk_equipamento);

        }

        public function List(int $fk_sala) : void
        {

            $this->data = (new RoomEquipmentAssocDAO())->Select($fk_sala);

        }

    }

?>