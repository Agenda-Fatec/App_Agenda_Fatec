<?php

    namespace App\Model;

    use App\DAO\EquipamentoDAO;

    class EquipamentoModel extends Model
    {

        public $id = 0, $nome, $descricao, $ativo;

        public function Save() : void
        {

            $dao = new EquipamentoDAO();

            ($this->id === 0) ? $dao->Insert($this) : $dao->Update($this);

        }

        public function Add(int $id) : void
        {

            (new EquipamentoDAO())->Active($id);

        }

        public function Remove(int $id) : void
        {

            (new EquipamentoDAO())->Deactive($id);

        }

        public function List(?int $id = null) : void
        {

            $dao = new EquipamentoDAO();

            $this->data = ($id === null) ? $dao->Select() : $dao->Search($id);

            // Caso o retorno do método Search seja False.

            if($id !== null && $this->data === false)
            {

                $this->data = new BlocoModel();

            }

        }

    }

?>