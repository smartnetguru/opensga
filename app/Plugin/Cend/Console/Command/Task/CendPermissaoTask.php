<?php

    class CendPermissaoTask extends AppShell
    {

        //@formatter:off
        public $uses = ['User', 'UnidadeOrganica'];

        public $comandos = [];

        public function execute(array $params)
        {

            $this->params = $params;


            $userId = $this->params['userId'];

            if ($this->User->isFuncionario($userId)) {
                $this->funcionarios($userId);
            }
            if ($this->User->isDocente($userId)) {
                $this->docentes($userId);
            }

            foreach ($this->comandos as $comando) {
                $this->out($comando);
                $this->dispatchShell($comando);
            }
        }


        public function docentes()
        {
        }

          public function funcionarios($userId)
        {
            //Pegamos todos funcionarios
            $this->User->Funcionario->contain(['User']);
            $funcionario = $this->User->Funcionario->findByUserId($userId);

                $this->out($funcionario['User']['username']);
                $path = $this->UnidadeOrganica->getPath($funcionario['Funcionario']['unidade_organica_id'],
                    ['id', 'codigo']);
                $unidadesOrganicas = Hash::extract($path, '{n}.UnidadeOrganica.codigo');
                if (in_array('CEND', $unidadesOrganicas)) {
                        $this->comandos[] = "acl deny User.{$funcionario['User']['id']} controllers";
                        $this->comandos[] = "acl grant User.{$funcionario['User']['id']} controllers/Cend";
                        $this->comandos[] = "acl grant User.{$funcionario['User']['id']} controllers/Alunos/autocomplete";
                        $this->comandos[] = "acl grant User.{$funcionario['User']['id']} controllers/Alunos/mostrar_foto";
                        $this->comandos[] = "acl grant User.{$funcionario['User']['id']} controllers/Users/login";
                    } else {
                        $this->comandos[] = "acl deny User.{$funcionario['User']['id']} controllers/Cend";
                }


        }

    }

?>