<?php

    namespace App\Model;

    use App\DAO\BlocoDAO;

    class BlocoModel extends Model
    {

        public $id = 0, $nome, $descricao, $ativo;

        public function Save() : void
        {

            $dao = new BlocoDAO();

            ($this->id === 0) ? $dao->Insert($this) : $dao->Update($this);

        }

        public function Add(int $id) : void
        {

            (new BlocoDAO())->Active($id);

        }

        public function Remove(int $id) : void
        {

            (new BlocoDAO())->Deactive($id);

        }

        public function List(?int $id = null) : void
        {

            $dao = new BlocoDAO();

            $this->data = ($id === null) ? $dao->Select() : $dao->Search($id);

            // Caso o retorno do método Search seja False.

            if($id !== null && $this->data === false)
            {

                $this->data = new BlocoModel();

            }

        }

    }

?>