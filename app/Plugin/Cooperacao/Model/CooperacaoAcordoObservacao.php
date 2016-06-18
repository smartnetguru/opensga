<?php
App::uses('CooperacaoAppModel', 'Cooperacao.Model');

/**
 * CooperacaoAcordoObservacao Model
 *
 * @property CooperacaoAcordo $CooperacaoAcordo
 */
class CooperacaoAcordoObservacao extends CooperacaoAppModel
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
    ];
}
