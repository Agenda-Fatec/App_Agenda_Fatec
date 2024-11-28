<?php

    namespace App\Model;

    use App\DAO\SalaDAO;

    class SalaModel extends Model
    {

        public $id, $nome, $numero, $descricao, $status_atual, $ativo, $fk_bloco;

        public function __construct()
        {

            if(empty($this->id))
            {

                $this->id = 0;

                $this->nome = "";

                $this->numero = 0;

                $this->descricao = "Nenhuma descrição.";

                $this->status_atual = "Disponível";

                $this->ativo = 1;

                $this->fk_bloco = 0;

            }
            
        }

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