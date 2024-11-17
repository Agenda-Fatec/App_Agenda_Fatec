<?php

    namespace App\DAO;

    use App\Model\UsuarioModel;

    class UsuarioDAO extends DAO
    {

        public function __construct()
        {

            parent::__construct();
            
        }

        public function Insert(UsuarioModel $model) : void
        {

            $sql = "INSERT INTO Usuario(nome, email, senha, fk_cargo) VALUES(?, ?, MD5(?), ?)";

            $stmt = $this->connection->prepare($sql);

            $stmt->bindValue(1, $model->nome);

            $stmt->bindValue(2, $model->email);

            $stmt->bindValue(3, $model->senha);

            $stmt->bindValue(4, $model->fk_cargo);

            $stmt->execute();

        }

        public function Login(UsuarioModel $model) : object | false
        {

            $sql = "SELECT * FROM Usuario WHERE email = ? AND senha = MD5(?) AND ativo = true";

            $stmt = $this->connection->prepare($sql);

            $stmt->bindValue(1, $model->email);

            $stmt->bindValue(2, $model->senha);

            $stmt->execute();

            return $stmt->fetchObject("App\Model\UsuarioModel");

        }

        public function Update(UsuarioModel $model) : void
        {

            $sql = "UPDATE Usuario SET nome = ?, email = ?, senha = MD5(?), fk_cargo = ? WHERE id = ?";

            $stmt = $this->connection->prepare($sql);

            $stmt->bindValue(1, $model->nome);

            $stmt->bindValue(2, $model->email);

            $stmt->bindValue(3, $model->senha);

            $stmt->bindValue(4, $model->fk_cargo);

            $stmt->bindValue(5, $model->id);

            $stmt->execute();

        }

        public function Active(int $id) : void
        {

            $sql = "UPDATE Usuario SET ativo = true WHERE id = ?";

            $stmt = $this->connection->prepare($sql);

            $stmt->bindValue(1, $id);

            $stmt->execute();

        }

        public function Deactive(int $id) : void
        {

            $sql = "UPDATE Usuario SET ativo = false WHERE id = ?";

            $stmt = $this->connection->prepare($sql);

            $stmt->bindValue(1, $id);

            $stmt->execute();

        }

        public function Select() : array
        {

            $sql = "SELECT * FROM Usuario WHERE ativo = true";

            $stmt = $this->connection->prepare($sql);

            $stmt->execute();

            return $stmt->fetchAll(DAO::FETCH_CLASS, "App\Model\UsuarioModel");

        }

        public function Search(int $id) : object | false
        {

            $sql = "SELECT * FROM Usuario WHERE id = ? AND ativo = true";

            $stmt = $this->connection->prepare($sql);

            $stmt->bindValue(1, $id);

            $stmt->execute();

            return $stmt->fetchObject("App\Model\UsuarioModel");

        }

    }

?>