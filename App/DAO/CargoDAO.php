<?php

    namespace App\DAO;

    use App\Model\CargoModel;

    class CargoDAO extends DAO
    {

        public function __construct()
        {

            parent::__construct();
            
        }

        public function Insert(CargoModel $model) : void
        {

            $sql = "INSERT INTO Cargo(nome) VALUES(?)";

            $stmt = $this->connection->prepare($sql);

            $stmt->bindValue(1, $model->nome);

            $stmt->execute();

        }

        public function Update(CargoModel $model) : void
        {

            $sql = "UPDATE Cargo SET nome = ? WHERE id = ?";

            $stmt = $this->connection->prepare($sql);

            $stmt->bindValue(1, $model->nome);

            $stmt->bindValue(2, $model->id);

            $stmt->execute();

        }

        public function Active(int $id) : void
        {

            $sql = "UPDATE Cargo SET ativo = true WHERE id = ?";

            $stmt = $this->connection->prepare($sql);

            $stmt->bindValue(1, $id);

            $stmt->execute();

        }

        public function Deactive(int $id) : void
        {

            $sql = "UPDATE Cargo SET ativo = false WHERE id = ?";

            $stmt = $this->connection->prepare($sql);

            $stmt->bindValue(1, $id);

            $stmt->execute();

        }

        public function Select() : array
        {

            $sql = "SELECT * FROM Cargo WHERE ativo = true";

            $stmt = $this->connection->prepare($sql);

            $stmt->execute();

            return $stmt->fetchAll(DAO::FETCH_CLASS, "App\Model\CargoModel");

        }

        public function Search(int $id) : object | false
        {

            $sql = "SELECT * FROM Cargo WHERE id = ? AND ativo = true";

            $stmt = $this->connection->prepare($sql);

            $stmt->bindValue(1, $id);

            $stmt->execute();

            return $stmt->fetchObject("App\Model\CargoModel");

        }

    }

?>