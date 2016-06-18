<?php
App::uses('AppModel', 'Model');

/**
 * MessageText Model
 *
 * @property Message $Message
 */
class MessageText extends AppModel
{


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
    ];
}
