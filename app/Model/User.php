<?php
    App::uses('CakeEvent', 'Event');

    /**
     * OpenSGA - Sistema de Gestão Académica
     * Copyright (C) 2010-2012  INFOmoz,Lda(http://infomoz.net)
     * Copyright (C) 2012  SIGA-Sistemas,Lda
     *
     *
     * @copyright       Copyright 2010-2012, INFOmoz (Informática-Moçambique) (http://infomoz.net)
     * * @link          http://opensga.com OpenSGA  - Sistema de Gestão Académica
     * @author          Elisio Leonardo (elisio.leonardo@gmail.com)
     * @package         opensga
     * @subpackage      opensga.core.controller
     * @since           OpenSGA v 0.1.0
     * @version         OpenSGA v 0.6.0
     *
     */
    class User extends AppModel
    {

        var $name = 'User';
        //The Associations below have been created with all possible keys, those that are not needed can be removed


        var $belongsTo = [
            'Group' => [
                'className'  => 'Group',
                'foreignKey' => 'group_id',
                'conditions' => '',
                'fields'     => '',
                'order'      => ''
            ]
        ];
        public $hasOne = [
            'Entidade' => [
                'className'  => 'Entidade',
                'foreignKey' => 'user_id',
                'conditions' => ''
            ]
        ];
        var $hasMany = [
            'Funcionario' => [
                'className'    => 'Funcionario',
                'foreignKey'   => 'user_id',
                'dependent'    => false,
                'conditions'   => '',
                'fields'       => '',
                'order'        => '',
                'limit'        => '',
                'offset'       => '',
                'exclusive'    => '',
                'finderQuery'  => '',
                'counterQuery' => ''
            ],
            'GroupsUser'  => [
                'className'    => 'GroupsUser',
                'foreignKey'   => 'user_id',
                'dependent'    => false,
                'conditions'   => '',
                'fields'       => '',
                'order'        => '',
                'limit'        => '',
                'offset'       => '',
                'exclusive'    => '',
                'finderQuery'  => '',
                'counterQuery' => ''
            ],
            'UserLoginHistory'  => [
                'className'    => 'UserLoginHistory',
                'foreignKey'   => 'user_id',
                'dependent'    => false,
                'conditions'   => '',
                'fields'       => '',
                'order'        => '',
                'limit'        => '',
                'offset'       => '',
                'exclusive'    => '',
                'finderQuery'  => '',
                'counterQuery' => ''
            ]
        ];
        var $actsAs = ['Acl' => ['type' => 'requester']];
        //Regras de Validacao
        public $validate = [
            'username' => [
                'usernameIsEmail'  => [
                    'rule'     => 'email',
                    'required' => 'create',
                    'message'  => 'O Username deve ser um email Válido',
                ],
                'usernameIsUnique' => [
                    'rule'    => 'isUnique',
                    'message' => 'Não podem existir 2 usuários com emails iguais'
                ],
                'usernameNotBlank' => [
                    'rule'    => 'notBlank',
                    'message' => 'O Usermane não pode estar vazio'
                ]
            ]
        ];


        public function afterSave($created, $options = [])
        {
            if ($created) {

            }


        }

        public function alteraPassword($data)
        {

            $user_id = $data['User']['user_id'];
            $this->id = $user_id;
            if ($data['User']['novasenha1'] != $data['User']['novasenha2']) {
                return false;
            }

            $this->set('password', Security::hash($data['User']['novasenha1'], 'blowfish'));
            $this->save();
            $event = new CakeEvent('Model.User.afterChangePassword', $this, [
                'data' => $data
            ]);
            $this->getEventManager()->dispatch($event);

            return true;
        }

        /**
         * Cadastra novo User na BD. Esta funcao deve ser chamada ao cadastrar alunos, docentes,etc
         *
         * @param $data
         */
        public function cadastraUser($data)
        {
            //Grava os dados do Usuario
            $this->create();
            if (!isset($data['User']['username']) || $data['User']['username'] == '') {
                $data['User']['username'] = $this->geraEmailUem($data['Entidade']['apelido'],
                    $data['Entidade']['nomes']);
            }
            $data['User']['password'] = Security::hash($data['User']['password'], 'blowfish');
            if ($this->save($data)) {
                return $this->id;
            }

            return false;
        }

        public function geraEmailUem($apelido, $nome)
        {

            $nome = $this->normalize_str($nome);
            $nome = trim(strtolower($nome));


            $apelido = strtolower(trim($this->normalize_str($apelido)));

            $nome = utf8_encode($nome);
            $apelido = utf8_encode($apelido);
            $nome = preg_replace('/[^a-zA-Z0-9\s]/s', '', $nome);

            $nome = preg_replace('/\s+/', ' ', $nome);
            $apelido = preg_replace('/\s+/', ' ', $apelido);
            $nomes = explode(' ', $nome);
            $apelido = str_replace(' ', '', $apelido);
            $email = $nomes[0] . '.' . $apelido . '@uem.ac.mz';

            //Verificar se existe algum email assim
            $email_existe = $this->findByUsername($email);

            if ($email_existe) {
                if (count($nomes) > 1) {

                    $segundo_nome = trim($nomes[1]);
                    $email = $nomes[0] . '.' . $segundo_nome[0] . '.' . $apelido . '@uem.ac.mz';
                    $email_existe1 = $this->findByUsername($email);

                    if ($email_existe1) {
                        $email = $nomes[0] . '.' . $segundo_nome . '.' . $apelido . '@uem.ac.mz';
                        $email_existe3 = $this->findByUsername($email);
                        if ($email_existe3) {
                            $email = $apelido . '.' . $nomes[0] . '@uem.ac.mz';
                            $email_existe2 = $this->findByUsername($email);
                            if ($email_existe2) {
                                $contador = $email_existe2['User']['id'];

                                $encontrado = false;
                                while (!$encontrado) {
                                    $email = $nomes[0] . '.' . $apelido . '.' . $contador . '@uem.ac.mz';
                                    $email_4 = $this->findByUsername($email);
                                    if (empty($email_4)) {
                                        $encontrado = true;
                                    } else {
                                        $contador++;
                                    }
                                }

                            }
                        }
                    }
                } else {

                    $email = $apelido . '.' . $nomes[0] . '@uem.ac.mz';

                    $email_existe2 = $this->findByUsername($email);

                    if ($email_existe2) {
                        $contador = $email_existe2['User']['id'];

                        $encontrado = false;
                        while (!$encontrado) {
                            $email = $nomes[0] . '.' . $apelido . '.' . $contador . '@uem.ac.mz';
                            $email_4 = $this->findByUsername($email);
                            if (empty($email_4)) {
                                $encontrado = true;
                            } else {
                                $contador++;
                            }
                        }

                    }
                }
            }

            return strtolower($email);
        }

        function deleteUser($user_id)
        {
            $query = "delete from users where id = {$user_id} ";
            $resultado = $this->query($query);

            //var_dump($query);
            return $resultado;
        }

        /**
         * Gera o nome de Usuario de Cada Utilizador de acordo com criterios pre-estabelecidos
         * Por Enquanto Ele usa a estrutura "primeironome.ultimonome<sequencia>"
         */
        function geraUsername($nome)
        {
            $nome = $this->normalize_str($nome);
            $nomes = explode(' ', $nome);

            $username = strtolower($nomes[0]) . "." . strtolower(end($nomes));

            $username1 = $username;
            $numero = 1;
            $linha = 1;
            while ($linha != 0) {
                $this->contain();
                $users = $this->find('count', ['conditions' => ['username' => $username]]);
                $linha = $users;
                if ($linha == 0) {

                    //Actualiza o estado do candidato

                    $this->Candidatura->id = $data['Dados']['numero_candidato'];

                    $this->Candidatura->set('estado_matricula_id', 1);
                    $this->Candidatura->set('estado_candidatura_id', 3);

                    $this->Candidatura->set('data_matricula', date('Y-m-d H:m:s'));
                    if ($this->Candidatura->save()) {

                    }

                    return $username;
                } else {

                    $username = $username1 . $numero;
                    $numero++;
                }
            }

            return $username;
        }

        /*function beforeSave($options = array()) {
            //So gera Password e Username se for novo cadastro

            if (isset($this->request->data['User']['password'])) {
                $this->request->data['User']['password'] = Security::hash($this->request->data['User']['password'], 'Blowfish');
            }

            if (!isset($this->request->data['User']['username'])) {
                $this->request->data['User']['username'] = $this->geraUsername($this->request->data['User']['name']);
            }
            return true;
        }
    */

        public function normalize_str($str)
        {
            $invalid = [
                'Š'         => 'S',
                'š'         => 's',
                'Đ'         => 'Dj',
                'đ'         => 'dj',
                'Ž'         => 'Z',
                'ž'         => 'z',
                'Č'         => 'C',
                'č'         => 'c',
                'Ć'         => 'C',
                'ć'         => 'c',
                'À'         => 'A',
                'Á'         => 'A',
                'Â'         => 'A',
                'Ã'         => 'A',
                'Ä'         => 'A',
                'Å'         => 'A',
                'Æ'         => 'A',
                'Ç'         => 'C',
                'È'         => 'E',
                'É'         => 'E',
                'Ê'         => 'E',
                'Ë'         => 'E',
                'Ì'         => 'I',
                'Í'         => 'I',
                'Î'         => 'I',
                'Ï'         => 'I',
                'Ñ'         => 'N',
                'Ò'         => 'O',
                'Ó'         => 'O',
                'Ô'         => 'O',
                'Õ'         => 'O',
                'Ö'         => 'O',
                'Ø'         => 'O',
                'Ù'         => 'U',
                'Ú'         => 'U',
                'Û'         => 'U',
                'Ü'         => 'U',
                'Ý'         => 'Y',
                'Þ'         => 'B',
                'ß'         => 'Ss',
                'à'         => 'a',
                'á'         => 'a',
                'â'         => 'a',
                'ã'         => 'a',
                'ä'         => 'a',
                'å'         => 'a',
                'æ'         => 'a',
                'ç'         => 'c',
                'è'         => 'e',
                'é'         => 'e',
                'ê'         => 'e',
                'ë'         => 'e',
                'ì'         => 'i',
                'í'         => 'i',
                'î'         => 'i',
                'ï'         => 'i',
                'ð'         => 'o',
                'ñ'         => 'n',
                'ò'         => 'o',
                'ó'         => 'o',
                'ô'         => 'o',
                'õ'         => 'o',
                'ö'         => 'o',
                'ø'         => 'o',
                'ù'         => 'u',
                'ú'         => 'u',
                'û'         => 'u',
                'ý'         => 'y',
                'ý'         => 'y',
                'þ'         => 'b',
                'ÿ'         => 'y',
                'Ŕ'         => 'R',
                'ŕ'         => 'r',
                "`"         => "'",
                "´"         => "'",
                "„"         => ",",
                "`"         => "'",
                "´"         => "'",
                "“"         => "\"",
                "”"         => "\"",
                "´"         => "'",
                "&acirc;€™" => "'",
                "{"         => "",
                "~"         => "",
                "–"         => "-",
                "’"         => "'"
            ];

            $str = str_replace(array_keys($invalid), array_values($invalid), $str);

            return $str;
        }

        function getAlunoIDByUser($user_id)
        {
            $query = "SELECT ta.id FROM users us, Alunos ta WHERE ta.user_id = us.id AND us.id = {$user_id} ";
            $resultado = $this->query($query);

            return $resultado[0]["ta"]["id"];
        }

        public function getFuncionarioActivoId($user_id)
        {
            if ($user_id == 1) {
                return ['Funcionario' => ['id' => 0]];
            }
            $this->Funcionario->contain();

            $funcionario = $this->Funcionario->findByUserId($user_id);

            return $funcionario;
        }

        //Verifica se um dado Estudante é aluno

        function getFuncionarioIDByUser($user_id)
        {
            $query = "SELECT tf.id FROM users us, funcionarios tf WHERE tf.user_id = us.id AND us.id = {$user_id} ";
            $resultado = $this->query($query);

            return $resultado[0]["tf"]["id"];
        }

        function getUserByFuncionario($funcionario_id)
        {
            $query = "SELECT us.id FROM users us, funcionarios tf WHERE tf.user_id = us.id AND tf.id = {$funcionario_id} ";
            $resultado = $this->query($query);

            return $resultado;
        }

        public function isAluno($userId)
        {
            $this->Entidade->Aluno->contain('Entidade');
            if ($this->Entidade->Aluno->find('first', ['conditions' => ['Entidade.user_id' => $userId]])) {
                return true;
            }

            return false;
        }

        public function isFromFaculdade($user_id)
        {
            $this->contain();
            $user = $this->findById($user_id);
            if ($user['User']['group_id'] == 2) {
                $this->Funcionario->contain('UnidadeOrganica');
                $funcionario = $this->Funcionario->findByUserId($user_id);
                if ($this->Funcionario->UnidadeOrganica->isFromFaculdade($funcionario['Funcionario']['unidade_organica_id'])) {
                    return true;
                } else {
                    return false;
                }
            }
        }

        function parentNode()
        {
            if (!$this->id && empty($this->data)) {
                return null;
            }
            if (isset($this->data['User']['group_id'])) {
                $groupId = $this->data['User']['group_id'];
            } else {
                $groupId = $this->field('group_id');
            }
            if (!$groupId) {
                return null;
            } else {
                return ['Group' => ['id' => $groupId]];
            }
        }

        /**
         * Faz o reset da password de um Usuario.
         * Coloca uma senha gerada aleatoriamente
         *
         * @param $userId
         * @param $novaPassword  Caso nao seja passado nenhuma password, o sistema gera senha aleatoria
         *
         * @return string $novaPassword
         */
        public function resetPassword($userId, $novaPassword = null)
        {
            $datasource = $this->getDataSource();
            $datasource->begin();

            $this->id = $userId;
            if (!$this->exists()) {
                return false;
            }
            if ($novaPassword == null) {
                $novaPassword = $this->generatePassword(5);
            }

            $this->set('password', Security::hash($novaPassword, 'blowfish'));
            $this->save();

            //Invocamos o after Change Password para notificar o User
            //CakeResque::enqueue('default', 'UserShell', array('afterChangePassword', $userId, $novaPassword));
            $datasource->commit();

            return $novaPassword;
        }

        public function geraPassword($length = 8, $capital = true, $symbol = true)
        {
            $chars = "abcdefghijklmnopqrstuvwxyz0123456789";
            if ($capital == true) {
                $chars .= "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
            }
            if ($symbol == true) {
                $chars .= "!@#$%^&*()_-=+;:,.?";
            }
            $password = substr(str_shuffle($chars), 0, $length);

            return $password;
        }

        function splitName($name, $prefix = '')
        {
            $pos = strrpos($name, ' ');

            if ($pos === false) {
                return [
                    $prefix . 'firstname' => $name,
                    $prefix . 'surname'   => null
                ];
            }

            $firstname = substr($name, 0, $pos + 1);
            $surname = substr($name, $pos);

            return [
                $prefix . 'firstname' => $firstname,
                $prefix . 'surname'   => $surname
            ];
        }


        public function actualizaLoginHistory($userId,$groupId,$data,$ip){
            $arrayLoginHistory = array('UserLoginHistory'=>array('user_id'=>$userId,'group_id'=>$groupId,'login_date'=>$data,'ip'=>$ip));
            $this->UserLoginHistory->create();
            $this->UserLoginHistory->save($arrayLoginHistory);
            return true;
        }

    }

?>