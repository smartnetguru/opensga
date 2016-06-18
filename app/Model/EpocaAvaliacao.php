<?php
App::uses('AppModel', 'Model');

/**
 * EpocaAvaliacao Model
 *
 */
class EpocaAvaliacao extends AppModel
{

    /**
     * Validation rules
     *
     * @var array
     */
    public $validate = [
        'codigo' => [
            'notEmpty' => [
                'rule' => ['notEmpty'],
                //'message' => 'Your custom message here',
                //'allowEmpty' => false,
                //'required' => false,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ],
        ],
    ];
}
