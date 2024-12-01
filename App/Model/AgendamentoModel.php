<?php

    namespace App\Model;

    use App\DAO\AgendamentoDAO;

    class AgendamentoModel extends Model
    {

        public $id, $data_requisicao, $hora_requisicao, $data_utilizacao, $hora_inicio_utilizacao, $hora_fim_utilizacao;

        public $situacao, $fk_sala, $fk_requisitor, $fk_aprovador;

        public function __construct()
        {

            if(empty($this->id))
            {

                $this->id = 0;

                $timestamp_atual = new \DateTime("now", new \DateTimeZone("America/Sao_Paulo"));

                $this->data_requisicao = $timestamp_atual->format("Y-m-d");

                $this->hora_requisicao = $timestamp_atual->format("H:i:s");

                $this->data_utilizacao = $this->data_requisicao;

                $this->hora_inicio_utilizacao = $this->hora_requisicao;

                $this->hora_fim_utilizacao = $this->hora_requisicao;

                $this->situacao = "Pendente";

                $this->fk_sala = 0;

                $this->fk_requisitor = 0;

                $this->fk_aprovador = 0;

            }
            
        }

        public function Save() : void
        {

            (new AgendamentoDAO())->Insert($this);

        }

        public function Erase(int $id) : void
        {

            (new AgendamentoDAO())->Delete($id);

        }

        public function List(?int $id = null) : void
        {

            $dao = new AgendamentoDAO();

            $this->data = ($id === null) ? $dao->Select() : $dao->Search($id);

            // Caso o retorno do método Search seja False.

            if($id !== null && $this->data === false)
            {

                $this->data = new AgendamentoModel();

            }

        }

    }

?>