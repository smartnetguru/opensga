<?php
App::uses('CooperacaoAppModel', 'Cooperacao.Model');

/**
 * CooperacaoAcordoArea Model
 *
 * @property CooperacaoAcordo $CooperacaoAcordo
 * @property CooperacaoArea $CooperacaoArea
 */
class CooperacaoAcordoArea extends CooperacaoAppModel
{


    //The Associations below have been created with all possible keys, those that are not needed can be removed

    /**
     * belongsTo associations
     *
     * @var array
     */
    public $belongsTo = [
        'CooperacaoAcordo' => [
            'className' => 'CooperacaoAcordo',
            'foreignKey' => 'cooperacao_acordo_id',
            'conditions' => '',
            'fields' => '',
            'order' => '',
        ],
//		'CooperacaoArea' => array(
//			'className' => 'CooperacaoArea',
//			'foreignKey' => 'cooperacao_area_id',
//			'conditions' => '',
//			'fields' => '',
//			'order' => ''
//		)
    ];


    public $hasMany = [
        'CooperacaoAcordo' => [
            'className' => 'CooperacaoAcordo',
            'foreignKey' => 'cooperacao_area_id',
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
