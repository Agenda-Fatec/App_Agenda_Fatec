<?php

    namespace App\Model;

    use App\DAO\SalaEquipamentoAssocDAO;

    class SalaEquipamentoAssocModel extends Model
    {

        public $quantidade, $fk_sala, $fk_equipamento;

        public function __construct()
        {

            if(empty($this->quantidade))
            {

                $this->quantidade = 0;

                $this->fk_sala = 0;

                $this->fk_equipamento = 0;

            }
            
        }

        public function List(int $fk_sala, ?int $fk_equipamento = null) : void
        {

            $dao = new SalaEquipamentoAssocDAO();

            $this->data = ($fk_equipamento === null) ? $dao->Select($fk_sala) : $dao->Search($fk_sala, $fk_equipamento);

            // Caso o retorno do método Search seja False.

            if($fk_equipamento !== null && $this->data === false)
            {

                $this->data = new SalaEquipamentoAssocModel();

            }

        }

    }

?>