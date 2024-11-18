<?php

    namespace App\DAO;

    use App\Model\SalaModel;

    class SalaDAO extends DAO
    {

        public function __construct()
        {

            parent::__construct();
            
        }

        public function Insert(SalaModel $model) : void
        {

            $sql = "INSERT INTO Sala(nome, numero, descricao, fk_bloco) VALUES(?, ?, ?, ?)";

            $stmt = $this->connection->prepare($sql);

            $stmt->bindValue(1, $model->nome);

            $stmt->bindValue(2, $model->numero);

            $stmt->bindValue(3, $model->descricao);

            $stmt->bindValue(4, $model->fk_bloco);

            $stmt->execute();

        }

        public function Update(SalaModel $model) : void
        {

            $sql = "UPDATE Sala SET nome = ?, numero = ?, descricao = ?, fk_bloco = ? WHERE id = ?";

            $stmt = $this->connection->prepare($sql);

            $stmt->bindValue(1, $model->nome);

            $stmt->bindValue(2, $model->numero);

            $stmt->bindValue(3, $model->descricao);

            $stmt->bindValue(4, $model->fk_bloco);

            $stmt->bindValue(5, $model->id);

            $stmt->execute();

        }

        public function Active(int $id) : void
        {

            $sql = "UPDATE Sala SET ativo = true WHERE id = ?";

            $stmt = $this->connection->prepare($sql);

            $stmt->bindValue(1, $id);

            $stmt->execute();

        }

        public function Deactive(int $id) : void
        {

            $sql = "UPDATE Sala SET ativo = false WHERE id = ?";

            $stmt = $this->connection->prepare($sql);

            $stmt->bindValue(1, $id);

            $stmt->execute();

        }

        public function Select() : array
        {

            $sql = "SELECT * FROM Sala ORDER BY id ASC";

            $stmt = $this->connection->prepare($sql);

            $stmt->execute();

            return $stmt->fetchAll(DAO::FETCH_CLASS, "App\Model\SalaModel");

        }

        public function Search(int $id) : object | false
        {

            $sql = "SELECT * FROM Sala WHERE id = ?";

            $stmt = $this->connection->prepare($sql);

            $stmt->bindValue(1, $id);

            $stmt->execute();

            return $stmt->fetchObject("App\Model\SalaModel");

        }

    }

?>