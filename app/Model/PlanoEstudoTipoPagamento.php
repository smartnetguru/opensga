<?php
App::uses('AppModel', 'Model');

/**
 * PlanoEstudoTipoPagamento Model
 *
 * @property PlanoEstudo $PlanoEstudo
 * @property Tipopagamento $Tipopagamento
 */
class PlanoEstudoTipoPagamento extends AppModel
{


    //The Associations below have been created with all possible keys, those that are not needed can be removed

    /**
     * belongsTo associations
     *
     * @var array
     */
    public $belongsTo = [
        'PlanoEstudo' => [
            'className' => 'PlanoEstudo',
            'foreignKey' => 'plano_estudo_id',
            'conditions' => '',
            'fields' => '',
            'order' => '',
        ],
        'FinanceiroTipoPagamento' => [
            'className' => 'Tipopagamento',
            'foreignKey' => 'tipopagamento_id',
            'conditions' => '',
            'fields' => '',
            'order' => '',
        ],
    ];
}
