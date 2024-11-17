<?php

    namespace App\Model;

    use App\DAO\AgendamentoDAO;

    class AgendamentoModel extends Model
    {

        public $id, $data_requisicao, $hora_requisicao, $data_utilizacao, $hora_inicio_utilizacao, $hora_fim_utilizacao;

        public $situacao, $fk_sala, $fk_requisitor, $fk_aprovador;

    }

?>