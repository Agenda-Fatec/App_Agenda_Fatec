<?php

    namespace App\Model;

    use App\DAO\EquipamentoDAO;

    class EquipamentoModel extends Model
    {

        public $id, $nome, $descricao, $ativo;

        public function __construct()
        {

            if(empty($this->id))
            {

                $this->id = 0;

                $this->nome = "";

                $this->descricao = "Nenhuma descrição.";

                $this->ativo = 1;

            }
            
        }

        public function Save() : bool
        {

            $dao = new EquipamentoDAO();

            $valor_duplicado = false;

            foreach($dao->FindRepetition($this->nome) as $equipamento)
            {

                if($equipamento->id !== $this->id && $equipamento->nome === $this->nome)
                {

                    $valor_duplicado = true;

                    break;

                }

            }

            if(!$valor_duplicado)
            {

                ($this->id === 0) ? $dao->Insert($this) : $dao->Update($this);

            }

            return $valor_duplicado;

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