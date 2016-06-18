<?php
App::uses('AppModel', 'Model');

/**
 * FinanceiroTipoPagamento Model
 *
 * @property Month $Month
 * @property FinanceiroPagamento $FinanceiroPagamento
 */
class FinanceiroTipoPagamento extends AppModel
{


    //The Associations below have been created with all possible keys, those that are not needed can be removed

    /**
     * belongsTo associations
     *
     * @var array
     */
    public $belongsTo = [
        'Month' => [
            'className' => 'Month',
            'foreignKey' => 'month_id',
            'conditions' => '',
            'fields' => '',
            'order' => '',
        ],
    ];

    /**
     * hasMany associations
     *
     * @var array
     */
    public $hasMany = [
        'FinanceiroPagamento' => [
            'className' => 'FinanceiroPagamento',
            'foreignKey' => 'financeiro_tipo_pagamento_id',
            'dependent' => false,
            'conditions' => '',
            'fields' => '',
            'order' => '',
            'limit' => '',
            'offset' => '',
            'exclusive' => '',
            'finderQuery' => '',
            'counterQuery' => '',
        ],
    ];

}
