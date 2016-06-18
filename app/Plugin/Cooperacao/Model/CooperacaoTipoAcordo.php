<?php
App::uses('CooperacaoAppModel', 'Cooperacao.Model');

/**
 * CooperacaoTipoAcordo Model
 *
 * @property CooperacaoAcordo $CooperacaoAcordo
 */
class CooperacaoTipoAcordo extends CooperacaoAppModel
{


    //The Associations below have been created with all possible keys, those that are not needed can be removed

    /**
     * hasMany associations
     *
     * @var array
     */
    public $hasMany = [
        'CooperacaoAcordo' => [
            'className' => 'CooperacaoAcordo',
            'foreignKey' => 'cooperacao_tipo_acordo_id',
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
