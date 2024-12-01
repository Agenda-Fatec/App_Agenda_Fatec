<?php

    namespace App\DAO;

    use App\Model\AgendamentoModel;

    class AgendamentoDAO extends DAO
    {

        public function __construct()
        {

            parent::__construct();
            
        }

        public function Insert(AgendamentoModel $model) : void
        {

            $sql = "INSERT INTO Agendamento(data_requisicao, hora_requisicao, data_utilizacao, hora_inicio_utilizacao, " .
                   "hora_fim_utilizacao, situacao, fk_sala, fk_requisitor, fk_aprovador) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?)";

            $stmt = $this->connection->prepare($sql);

            $stmt->bindValue(1, $model->data_requisicao);

            $stmt->bindValue(2, $model->hora_requisicao);

            $stmt->bindValue(3, $model->data_utilizacao);

            $stmt->bindValue(4, $model->hora_inicio_utilizacao);

            $stmt->bindValue(5, $model->hora_fim_utilizacao);

            $stmt->bindValue(6, $model->situacao);

            $stmt->bindValue(7, $model->fk_sala);

            $stmt->bindValue(8, $model->fk_requisitor);

            $stmt->bindValue(9, $model->fk_aprovador);

            $stmt->execute();

        }

        /*public function Update(AgendamentoModel $model) : void
        {

            

        }*/

        public function Delete(int $id) : void
        {

            $sql = "DELETE FROM Agendamento WHERE id = ?";

            $stmt = $this->connection->prepare($sql);

            $stmt->bindValue(1, $id);

            $stmt->execute();

        }

        public function Select() : array
        {

            $sql = "SELECT * FROM Agendamento ORDER BY data_requisicao DESC, hora_requisicao DESC";

            $stmt = $this->connection->prepare($sql);

            $stmt->execute();

            return $stmt->fetchAll(DAO::FETCH_CLASS, "App\Model\AgendamentoModel");

        }

        public function Search(int $id) : object | false
        {

            $sql = "SELECT * FROM Agendamento WHERE id = ?";

            $stmt = $this->connection->prepare($sql);

            $stmt->bindValue(1, $id);

            $stmt->execute();

            return $stmt->fetchObject("App\Model\AgendamentoModel");

        }

    }

?>