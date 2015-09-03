<?php

    /**
     * Model do Funcionario
     *
     * @copyright       Copyright 2010-2011, INFOmoz (Inform�tica-Mo�ambique) (http://infomoz.net)
     * * @link          http://opensga.com OpenSGA  - Sistema de Gestão Académica
     * @author          Elisio Leonardo (elisio.leonardo@gmail.com)
     * @package         opensga
     * @subpackage      opensga.core.controller
     * @since           OpenSGA v 0.10.0.0
     *
     */
    class Funcionario extends AppModel
    {

        var $name = 'Funcionario';
        //The Associations below have been created with all possible keys, those that are not needed can be removed
        var $belongsTo = [
            'Entidade'             => [
                'className'  => 'Entidade',
                'foreignKey' => 'entidade_id',
                'conditions' => '',
                'fields'     => '',
                'order'      => ''
            ],
            'User'                 => [
                'className'  => 'User',
                'foreignKey' => 'user_id',
                'conditions' => '',
                'fields'     => '',
                'order'      => ''
            ],
            'GrauAcademico'        => [
                'className'  => 'GrauAcademico',
                'foreignKey' => 'grau_academico_id',
                'conditions' => '',
                'fields'     => '',
                'order'      => ''
            ],
            'TipoFuncionario'      => [
                'className'  => 'TipoFuncionario',
                'foreignKey' => 'tipo_funcionario_id',
                'conditions' => '',
                'fields'     => '',
                'order'      => ''
            ],
            'UnidadeOrganica'      => [
                'className'  => 'UnidadeOrganica',
                'foreignKey' => 'unidade_organica_id',
                'conditions' => '',
                'fields'     => '',
                'order'      => ''
            ],
            'SuperiorHieraquico'   => [
                'className'  => 'Funcionario',
                'foreignKey' => 'superior_hierarquico',
                'conditions' => '',
                'fields'     => '',
                'order'      => ''
            ],
            'FuncionarioCategoria' => [
                'className'  => 'FuncionarioCategoria',
                'foreignKey' => 'funcionario_categoria_id',
                'conditions' => '',
                'fields'     => '',
                'order'      => ''
            ],


        ];
        public $hasOne = [
            'Docente'
        ];

        public $validate = [
            'entidade_id'         => [
                'entidadeIdNotBlank' => [
                    'rule'    => 'notBlank',
                    'message' => 'Entidade em branco?'
                ],
            ],
            'unidade_organica_id' => [
                'unidadeOrganicaNotBlank' => [
                    'rule'    => 'notBlank',
                    'message' => 'Deve-se Indicar a que unidadeOrganica este funcionario pertence'
                ],
            ],
        ];

        public function cadastraFuncionario(array $data)
        {
            $dataSource = $this->getDataSource();

            $dataSource->begin();

            $data['Entidade']['name'] = $data['Entidade']['nomes'] . ' ' . $data['Entidade']['apelido'];

            $data['User']['name'] = $data['Entidade']['name'];

            $data['User']['username'] = $this->User->geraEmailUem(strtolower($data['Entidade']['apelido']),
                strtolower($data['Entidade']['nomes']));
            $data['User']['codigo'] = $this->geraCodigo();
            $data['User']['password'] = Security::hash('siga12345UEM', 'blowfish');
            $data['User']['group_id'] = 2;

            $this->User->create();
            if ($this->User->save($data)) {
                //die(debug($this->User->id));
                $data['Entidade']['user_id'] = $this->User->id;
                $data['Entidade']['name'] = $data['Entidade']['nomes'] . " " . $data['Entidade']['apelido'];
                if(!empty($data['EntidadeContacto'][1])){
                    $data['Entidade']['email'] = $data['EntidadeContacto'][1];
                } else{
                    $data['Entidade']['email'] = $data['User']['username'];
                    $data['EntidadeContacto'][1] = $data['User']['username'];

                }

                $this->Entidade->create();
                if ($this->Entidade->save($data)) {
                    $data['Funcionario']['user_id'] = $this->User->id;
                    $data['Funcionario']['entidade_id'] = $this->Entidade->id;

                    $this->create();
                    if ($this->save($data)) {
                        $dataSource->commit();
                        $message = [
                            'Option1' => 'Message',
                            //'Type'=>'cake',
                            'Command' => 'Funcionario',
                            'Action'  => 'processaCadastroFuncionario',
                            'turmaId'  => $this->id
                        ];
                        CakeRabbit::publish($message);


                        return true;
                    } else {
                        return [false, $this->validationErrors];
                    }
                } else {
                    $dataSource->rollback();

                    return [false, $this->Entidade->validationErrors];
                }
            } else {
                $dataSource->rollback();

                return [false, $this->Entidade->User->validationErrors];
            }
            $dataSource->rollback();

            return false;
        }

        function geraCodigo()
        {
            $id = $this->find('first', ['order' => ['Funcionario.created DESC'], 'fields' => 'id']);
            $ano = date('Y');
            $id_for = str_pad($id['Funcionario']['id'] + 1, 5, "0", STR_PAD_LEFT);
            $codigo = $ano . $id_for;

            return $codigo;
        }

        /**
         *
         * @param type $name
         *
         * @return string
         *
         * @deprecated Usa o geraUsername dos users que eh global
         */
        function criaUsername($name)
        {
            $nome_lw = strtolower($name);
            $nome_ex = explode(' ', $nome_lw);
            $nome_1 = $nome_ex[0];
            $nome_2 = end($nome_ex);
            $nome = $nome_1 . "." . $nome_2;
            $numero = $this->User->find('count', ['conditions' => ['username' => $nome]]);
            if ($numero > 0) {
                //$numero=$numero+1;
                $nome = $nome . $numero;
            }

            return $nome;
        }

        public function getAllFuncionariosForResponsavelCurso()
        {
            $this->contain(['UnidadeOrganica', 'Entidade' => ['User'], 'User']);
            $funcionarios = $this->find('list', [
                'conditions' => [
                    'UnidadeOrganica.codigo' => ['DRA', 'DRA_DR', 'DRA_DI']
                ],
                'fields'     => [
                    'User.id',
                    'Entidade.name'
                ],
                'order'      => ['Entidade.name']
            ]);

            return $funcionarios;
        }

        public function getByUserId($user_id)
        {
            $funcionario = $this->findByUserId($user_id);

            return $funcionario;
        }

        function getTurmasByFuncionario($funcionario_id)
        {
            $query = "SELECT tt.id FROM t0010turmas tt, funcionarios tf where (tf.id = tt.funcionario_id or tt.funcionario_ass_id = tf.id) and tf.id  = {$funcionario_id} ";
            $resultado = $this->query($query);

            return $resultado;
        }

        public function isFromUnidadeOrganica($useId, $unidadeOriganicaId)
        {
            return true;
        }

        /**
         * Esta funcao faz o mesmo que find list, mas busca o name a partir da tabela entidades
         */
        public function listaFuncionarios()
        {

            $this->contain('Entidade');

            $funcionarios = $this->find('all', ['fields' => ['id', 'Entidade.name']]);

            $f = [];
            foreach ($funcionarios as $funcionario) {

                $f[$funcionario[$this->alias]['id']] = $funcionario['Entidade']['name'];
            }

            return $f;
        }

    }

?>