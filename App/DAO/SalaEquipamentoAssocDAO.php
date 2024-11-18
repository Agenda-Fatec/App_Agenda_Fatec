<?php

    namespace App\DAO;

    use App\Model\SalaEquipamentoAssocModel;

    class SalaEquipamentoAssocDAO extends DAO
    {

        public function __construct()
        {

            parent::__construct();
            
        }

        public function Select(int $fk_sala) : array
        {

            $sql = "SELECT SEA.fk_equipamento AS 'fk_equipamento', equip.nome AS 'nome', equip.descricao AS 'descricao', SEA.quantidade AS 'quantidade' " .
                   "FROM Sala_Equipamento_Assoc SEA " .
                   "INNER JOIN Equipamento equip ON (equip.id = SEA.fk_equipamento) " .
                   "WHERE SEA.fk_sala = ?";

            $stmt = $this->connection->prepare($sql);

            $stmt->bindValue(1, $fk_sala);

            $stmt->execute();

            return $stmt->fetchAll(DAO::FETCH_CLASS);

        }

        public function Search(int $fk_sala, int $fk_equipamento) : object | false
        {

            $sql = "SELECT SEA.fk_equipamento AS 'fk_equipamento', equip.nome AS 'nome', equip.descricao AS 'descricao', SEA.quantidade AS 'quantidade' " .
                   "FROM Sala_Equipamento_Assoc SEA " .
                   "INNER JOIN Equipamento equip ON (equip.id = SEA.fk_equipamento) " .
                   "WHERE SEA.fk_sala = ? AND SEA.fk_equipamento = ?";

            $stmt = $this->connection->prepare($sql);

            $stmt->bindValue(1, $fk_sala);

            $stmt->bindValue(2, $fk_equipamento);

            $stmt->execute();

            return $stmt->fetchObject();

        }

    }

?>