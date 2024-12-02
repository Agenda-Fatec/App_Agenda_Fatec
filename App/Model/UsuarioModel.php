<?php

    namespace App\Model;

    use App\DAO\UsuarioDAO;

    class UsuarioModel extends Model
    {

        public $id, $nome, $email, $senha, $administrador, $ativo, $fk_cargo;

        public function __construct()
        {

            if(empty($this->id))
            {

                $this->id = 0;

                $this->nome = "";

                $this->email = "";

                $this->senha = "";

                $this->administrador = 0;

                $this->ativo = 1;

                $this->fk_cargo = 0;

            }
            
        }

        public function Save() : bool
        {

            $dao = new UsuarioDAO();

            $valor_duplicado = false;

            foreach($dao->FindRepetition($this->email) as $usuario)
            {

                if($usuario->id !== $this->id && $usuario->nome === $this->email)
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

            (new UsuarioDAO())->Active($id);

        }

        public function Remove(int $id) : void
        {

            (new UsuarioDAO())->Deactive($id);

        }

        public function List(?int $id = null) : void
        {

            $dao = new UsuarioDAO();

            $this->data = ($id === null) ? $dao->Select() : $dao->Search($id);

            // Caso o retorno do método Search seja False.

            if($id !== null && $this->data === false)
            {

                $this->data = new UsuarioModel();

            }

        }

        public function Login() : bool
        {

            $dao = new UsuarioDAO();

            $this->data = $dao->Login($this);

            return (gettype($this->data) === "object" && (bool) $this->data->ativo);

        }

        public function Reclassify(int $id, int $condition) : void
        {

            (new UsuarioDAO())->Reclassify($id, $condition);

        }

    }

?>