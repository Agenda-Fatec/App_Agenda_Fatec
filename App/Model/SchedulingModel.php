<?php

    // Agendamento.

    namespace App\Model;

    use App\DAO\SchedulingDAO;

    class SchedulingModel extends Model
    {

        public $id, $data_requisicao, $hora_requisicao, $data_utilizacao, $hora_inicio_utilizacao, $hora_fim_utilizacao;

        public $situacao, $fk_sala, $fk_requisitor, $fk_aprovador;

        public function Save() : void
        {

            $dao = new SchedulingDAO();

            ($this->id == null) ? $dao->Insert($this) : $dao->Update($this);

        }

        public function Remove(int $id) : void
        {

            (new SchedulingDAO())->Delete($id);

        }

        public function List() : void
        {

            $this->data = (new SchedulingDAO())->Select();

        }

    }

?>