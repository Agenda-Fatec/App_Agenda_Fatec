<?php

    namespace App\DAO;

    use App\Model\EquipamentoModel;

    class EquipamentoDAO extends DAO
    {

        public function __construct()
        {

            parent::__construct();
            
        }

        public function Insert(EquipamentoModel $model) : void
        {

            $sql = "INSERT INTO Equipamento(nome, descricao) VALUES(?, ?)";

            $stmt = $this->connection->prepare($sql);

            $stmt->bindValue(1, $model->nome);

            $stmt->bindValue(2, $model->descricao);

            $stmt->execute();

        }

        public function Update(EquipamentoModel $model) : void
        {

            $sql = "UPDATE Equipamento SET nome = ?, descricao = ? WHERE id = ?";

            $stmt = $this->connection->prepare($sql);

            $stmt->bindValue(1, $model->nome);

            $stmt->bindValue(2, $model->descricao);

            $stmt->bindValue(3, $model->id);

            $stmt->execute();

        }

        public function Active(int $id) : void
        {

            $sql = "UPDATE Equipamento SET ativo = true WHERE id = ?";

            $stmt = $this->connection->prepare($sql);

            $stmt->bindValue(1, $id);

            $stmt->execute();

        }

        public function Deactive(int $id) : void
        {

            $sql = "UPDATE Equipamento SET ativo = false WHERE id = ?";

            $stmt = $this->connection->prepare($sql);

            $stmt->bindValue(1, $id);

            $stmt->execute();

        }

        public function Select() : array
        {

            $sql = "SELECT * FROM Equipamento ORDER BY id ASC";

            $stmt = $this->connection->prepare($sql);

            $stmt->execute();

            return $stmt->fetchAll(DAO::FETCH_CLASS, "App\Model\EquipamentoModel");

        }

        public function Search(int $id) : object | false
        {

            $sql = "SELECT * FROM Equipamento WHERE id = ?";

            $stmt = $this->connection->prepare($sql);

            $stmt->bindValue(1, $id);

            $stmt->execute();

            return $stmt->fetchObject("App\Model\EquipamentoModel");

        }

    }

?>