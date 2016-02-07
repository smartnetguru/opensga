<?php


    /**
     * Class AniversariosTask
     *
     * @property Entidade $Entidade
     */
    class AniversariosTask
    {

        public $uses = ['Entidade'];

        public function execute()
        {
            $dia = date('d');
            $mes = date('m');

            $this->Entidade->contain('User');
            $entidades = $this->Entidade->getAllAniversariantes($dia, $mes);

            debug($entidades);
            foreach ($entidades as $entidade) {
                $this->Entidade->enviaMensagemAniversario($entidade);
            }


        }
    }

?>