<?php

    namespace App\Model;

    use App\DAO\CargoDAO;

    class CargoModel extends Model
    {

        public $id, $nome, $ativo;

        public function __construct()
        {

            if(empty($this->id))
            {

                $this->id = 0;

                $this->nome = "";

                $this->ativo = 1;

            }
            
        }

        public function Save() : bool
        {

            $dao = new CargoDAO();

            $valor_duplicado = false;

            foreach($dao->FindRepetition($this->nome) as $cargo)
            {

                if($cargo->id !== $this->id && $cargo->nome === $this->nome)
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