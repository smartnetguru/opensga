<?php
    App::uses('AppModel', 'Model');

    /**
     * Message Model
     *
     * @property User $User
     * @property EstadoObjecto $EstadoObjecto
     * @property MessageText $MessageText
     * @property MessageUser $MessageUser
     */
    class Message extends AppModel
    {

        /**
         * Validation rules
         *
         * @var array
         */
        public $validate = [
            'user_id'           => [
                'numeric' => [
                    'rule' => ['numeric'],
                    //'message' => 'Your custom message here',
                    //'allowEmpty' => false,
                    //'required' => false,
                    //'last' => false, // Stop validation after this rule
                    //'on' => 'create', // Limit validation to 'create' or 'update' operations
                ],
            ],
            'assunto'           => [
                'notBlank' => [
                    'rule' => ['notBlank'],
                    //'message' => 'Your custom message here',
                    //'allowEmpty' => false,
                    //'required' => false,
                    //'last' => false, // Stop validation after this rule
                    //'on' => 'create', // Limit validation to 'create' or 'update' operations
                ],
            ],
            'data_envio'        => [
                'datetime' => [
                    'rule' => ['datetime'],
                    //'message' => 'Your custom message here',
                    //'allowEmpty' => false,
                    //'required' => false,
                    //'last' => false, // Stop validation after this rule
                    //'on' => 'create', // Limit validation to 'create' or 'update' operations
                ],
            ],
            'estado_objecto_id' => [
                'numeric' => [
                    'rule' => ['numeric'],
                    //'message' => 'Your custom message here',
                    //'allowEmpty' => false,
                    //'required' => false,
                    //'last' => false, // Stop validation after this rule
                    //'on' => 'create', // Limit validation to 'create' or 'update' operations
                ],
            ],
        ];

        // The Associations below have been created with all possible keys, those that are not needed can be removed

        /**
         * belongsTo associations
         *
         * @var array
         */
        public $belongsTo = [
            'User'          => [
                'className'  => 'User',
                'foreignKey' => 'user_id',
                'conditions' => '',
                'fields'     => '',
                'order'      => '',
            ],
            'EstadoObjecto' => [
                'className'  => 'EstadoObjecto',
                'foreignKey' => 'estado_objecto_id',
                'conditions' => '',
                'fields'     => '',
                'order'      => '',
            ],
        ];

        public $hasOne = [
            'MessageText' => [
                'className'  => 'MessageText',
                'conditions' => [],
                'dependent'  => true,
            ],
        ];

        /**
         * hasMany associations
         *
         * @var array
         */
        public $hasMany = [
            'MessageText' => [
                'className'    => 'MessageText',
                'foreignKey'   => 'message_id',
                'dependent'    => false,
                'conditions'   => '',
                'fields'       => '',
                'order'        => '',
                'limit'        => '',
                'offset'       => '',
                'exclusive'    => '',
                'finderQuery'  => '',
                'counterQuery' => '',
            ],
            'MessageUser' => [
                'className'    => 'MessageUser',
                'foreignKey'   => 'message_id',
                'dependent'    => false,
                'conditions'   => '',
                'fields'       => '',
                'order'        => '',
                'limit'        => '',
                'offset'       => '',
                'exclusive'    => '',
                'finderQuery'  => '',
                'counterQuery' => '',
            ],
        ];


        public function sendMessage($from, $to, $subject, $message, $dataEnvio = null)
        {
            $datasource = $this->getDataSource();
            $datasource->begin();

            if (!$dataEnvio) {
                $dataEnvio = date('Y-m-d H:i:s');
            }
            $arrayMessage = [
                'Message' => [
                    'user_id'           => $from,
                    'assunto'           => $subject,
                    'data_envio'        => $dataEnvio,
                    'estado_objecto_id' => 1,
                ],
            ];
            $this->create();
            if (!$this->save($arrayMessage)) {
                $datasource->rollback();

                return false;
            }
            $arrayMessageText = [
                'MessageText' => [
                    'message_id' => $this->id,
                    'texto'      => $message,
                ],
            ];
            $this->MessageText->create();
            if (!$this->MessageText->save($arrayMessageText)) {
                $datasource->rollback();

                return false;
            }
            $arrayMessageUser = [
                'MessageUser' => [
                    'message_id'        => $this->id,
                    'user_id'           => $to,
                    'message_folder_id' => 1,
                    'estado_message_id' => 1,
                    'is_starred'        => 0,
                ],
            ];
            $this->MessageUser->create();
            if (!$this->MessageUser->save($arrayMessageUser)) {
                $datasource->rollback();

                return false;
            }
            $arrayMessageUserFrom = [
                'MessageUser' => [
                    'message_id'        => $this->id,
                    'user_id'           => $from,
                    'message_folder_id' => 2,
                    'estado_message_id' => 2,
                    'is_starred'        => 0,
                ],
            ];
            $this->MessageUser->create();
            if (!$this->MessageUser->save($arrayMessageUserFrom)) {
                $datasource->rollback();

                return false;
            }

            $datasource->commit();

            return true;
        }

    }
