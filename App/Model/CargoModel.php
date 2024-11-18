<?php

    namespace App\Model;

    use App\DAO\CargoDAO;

    class CargoModel extends Model
    {

        public $id = 0, $nome, $ativo;

        public function Save() : void
        {

            $dao = new CargoDAO();

            ($this->id === 0) ? $dao->Insert($this) : $dao->Update($this);

        }

        public function Add(int $id) : void
        {

            (new CargoDAO())->Active($id);

        }

        public function Remove(int $id) : void
        {

            (new CargoDAO())->Deactive($id);

        }

        public function List(?int $id = null) : void
        {

            $dao = new CargoDAO();

            $this->data = ($id === null) ? $dao->Select() : $dao->Search($id);

            // Caso o retorno do método Search seja False.

            if($id !== null && $this->data === false)
            {

                $this->data = new CargoModel();

            }

        }

    }

?>