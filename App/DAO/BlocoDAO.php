<?php

    namespace App\DAO;

    use App\Model\BlocoModel;

    class BlocoDAO extends DAO
    {

        public function __construct()
        {

            parent::__construct();
            
        }

        public function Insert(BlocoModel $model) : void
        {

            $sql = "INSERT INTO Bloco(nome, descricao) VALUES(?, ?)";

            $stmt = $this->connection->prepare($sql);

            $stmt->bindValue(1, $model->nome);

            $stmt->bindValue(2, $model->descricao);

            $stmt->execute();

        }

        public function Update(BlocoModel $model) : void
        {

            $sql = "UPDATE Bloco SET nome = ?, descricao = ? WHERE id = ?";

            $stmt = $this->connection->prepare($sql);

            $stmt->bindValue(1, $model->nome);

            $stmt->bindValue(2, $model->descricao);

            $stmt->bindValue(3, $model->id);

            $stmt->execute();

        }

        public function Active(int $id) : void
        {

            $sql = "UPDATE Bloco SET ativo = true WHERE id = ?";

            $stmt = $this->connection->prepare($sql);

            $stmt->bindValue(1, $id);

            $stmt->execute();

        }

        public function Deactive(int $id) : void
        {

            $sql = "UPDATE Bloco SET ativo = false WHERE id = ?";

            $stmt = $this->connection->prepare($sql);

            $stmt->bindValue(1, $id);

            $stmt->execute();

        }

        public function Select() : array
        {

            $sql = "SELECT * FROM Bloco ORDER BY id ASC";

            $stmt = $this->connection->prepare($sql);

            $stmt->execute();

            return $stmt->fetchAll(DAO::FETCH_CLASS, "App\Model\BlocoModel");

        }

        public function Search(int $id) : object | false
        {

            $sql = "SELECT * FROM Bloco WHERE id = ?";

            $stmt = $this->connection->prepare($sql);

            $stmt->bindValue(1, $id);

            $stmt->execute();

            return $stmt->fetchObject("App\Model\BlocoModel");

        }

        public function FindRepetition(string $nome) : array
        {

            $sql = "SELECT * FROM Bloco WHERE nome = ?";

            $stmt = $this->connection->prepare($sql);

            $stmt->bindValue(1, $nome);

            $stmt->execute();

            return $stmt->fetchAll(DAO::FETCH_CLASS, "App\Model\BlocoModel");

        }

    }

?>