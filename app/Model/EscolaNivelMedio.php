<?php
App::uses('AppModel', 'Model');

/**
 * EscolaNivelMedio Model
 *
 * @property Distrito $Distrito
 * @property Provincia $Provincia
 * @property Pais $Pais
 * @property AlunoNivelMedio $AlunoNivelMedio
 */
class EscolaNivelMedio extends AppModel
{

    //The Associations below have been created with all possible keys, those that are not needed can be removed

    /**
     * belongsTo associations
     *
     * @var array
     */
    public $belongsTo = [
        'Distrito' => [
            'className' => 'Cidade',
            'foreignKey' => 'distrito_id',
            'conditions' => '',
            'fields' => '',
            'order' => '',
        ],
        'Provincia' => [
            'className' => 'Provincia',
            'foreignKey' => 'provincia_id',
            'conditions' => '',
            'fields' => '',
            'order' => '',
        ],
        'Pais' => [
            'className' => 'Paise',
            'foreignKey' => 'pais_id',
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
        'AlunoNivelMedio' => [
            'className' => 'AlunoNivelMedio',
            'foreignKey' => 'escola_nivel_medio_id',
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
