<?php

    namespace App\Model;

    use App\DAO\SalaDAO;

    class SalaModel extends Model
    {

        public $id = 0, $nome, $numero, $descricao, $status_atual, $ativo, $fk_bloco;

        public function Save() : void
        {

            $dao = new SalaDAO();

            ($this->id === 0) ? $dao->Insert($this) : $dao->Update($this);

        }

        public function Add(int $id) : void
        {

            (new SalaDAO())->Active($id);

        }

        public function Remove(int $id) : void
        {

            (new SalaDAO())->Deactive($id);

        }

        public function List(?int $id = null) : void
        {

            $dao = new SalaDAO();

            $this->data = ($id === null) ? $dao->Select() : $dao->Search($id);

            // Caso o retorno do método Search seja False.

            if($id !== null && $this->data === false)
            {

                $this->data = new SalaModel();

            }

        }

    }

?>