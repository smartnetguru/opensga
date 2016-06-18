<?php
App::uses('AppModel', 'Model');

/**
 * MessageUser Model
 *
 * @property Message $Message
 * @property User $User
 * @property MessageFolder $MessageFolder
 * @property EstadoMessage $EstadoMessage
 */
class MessageUser extends AppModel
{

    /**
     * Validation rules
     *
     * @var array
     */
    public $validate = [
        'user_id' => [
            'numeric' => [
                'rule' => ['numeric'],
                //'message' => 'Your custom message here',
                //'allowEmpty' => false,
                //'required' => false,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ],
        ],
        'message_folder_id' => [
            'numeric' => [
                'rule' => ['numeric'],
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
        'is_starred' => [
            'notBlank' => [
                'rule' => ['notBlank'],
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
        'Message' => [
            'className' => 'Message',
            'foreignKey' => 'message_id',
            'conditions' => '',
            'fields' => '',
            'order' => '',
        ],
        'User' => [
            'className' => 'User',
            'foreignKey' => 'user_id',
            'conditions' => '',
            'fields' => '',
            'order' => '',
        ],
        'MessageFolder' => [
            'className' => 'MessageFolder',
            'foreignKey' => 'message_folder_id',
            'conditions' => '',
            'fields' => '',
            'order' => '',
        ],
        'EstadoMessage' => [
            'className' => 'EstadoMessage',
            'foreignKey' => 'estado_message_id',
            'conditions' => '',
            'fields' => '',
            'order' => '',
        ],
    ];
}
