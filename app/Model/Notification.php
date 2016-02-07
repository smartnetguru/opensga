<?php
    App::uses('AppModel', 'Model');

    /**
     * Notification Model
     *
     * @property User $User
     * @property EstadoMessage $EstadoMessage
     */
    class Notification extends AppModel
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
            'title'             => [
                'notEmpty' => [
                    'rule' => ['notEmpty'],
                    //'message' => 'Your custom message here',
                    //'allowEmpty' => false,
                    //'required' => false,
                    //'last' => false, // Stop validation after this rule
                    //'on' => 'create', // Limit validation to 'create' or 'update' operations
                ],
            ],
            'details'           => [
                'notEmpty' => [
                    'rule' => ['notEmpty'],
                    //'message' => 'Your custom message here',
                    //'allowEmpty' => false,
                    //'required' => false,
                    //'last' => false, // Stop validation after this rule
                    //'on' => 'create', // Limit validation to 'create' or 'update' operations
                ],
            ],
            'estado_message_id' => [
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

        //The Associations below have been created with all possible keys, those that are not needed can be removed

        /**
         * belongsTo associations
         *
         * @var array
         */
        public $belongsTo = [
            'NotificationUser' => [
                'className'  => 'NotificationUser',
                'foreignKey' => 'user_id',
                'conditions' => '',
                'fields'     => '',
                'order'      => '',
            ],
            'EstadoMessage'    => [
                'className'  => 'EstadoMessage',
                'foreignKey' => 'estado_message_id',
                'conditions' => '',
                'fields'     => '',
                'order'      => '',
            ],
        ];

        public function sendNotification($receptorId, $title, $areaNotification, $details = null)
        {


            $this->NotificationUser->User->contain('Entidade');
            $receptor = $this->NotificationUser->User->findById($receptorId);

            $arrayNotification = [
                'Notification' => [
                    'title'                => $title,
                    'details'              => $details,
                    'areaNotification'     => $areaNotification,
                    'notification_type_id' => 1,
                ],
            ];
            $this->create();
            if ($this->save($arrayNotification)) {
                $arrayNotificationUser = [
                    'NotificationUser' => [
                        'user_id'           => $receptorId,
                        'notification_id'   => $this->id,
                        'estado_message_id' => 1,

                    ],
                ];
                $this->NotificationUser->create();
                if ($this->NotificationUser->save($arrayNotificationUser)) {
                    return true;
                }
            }
        }
    }
