<?php
App::uses('AppModel', 'Model');

/**
 * SadeAutoAvaliacao Model
 *
 * @property Entidade $Entidade
 * @property SadeParametro $SadeParametro
 * @property AnoLectivo $AnoLectivo
 * @property SemestreLectivo $SemestreLectivo
 * @property SadeAvaliacao $SadeAvaliacao
 */
class SadeAutoAvaliacao extends AppModel
{

    //The Associations below have been created with all possible keys, those that are not needed can be removed

    /**
     * belongsTo associations
     *
     * @var array
     */
    public $belongsTo = [
        'Entidade' => [
            'className' => 'Entidade',
            'foreignKey' => 'entidade_id',
            'conditions' => '',
            'fields' => '',
            'order' => '',
        ],
        'SadeParametro' => [
            'className' => 'SadeParametro',
            'foreignKey' => 'sade_parametro_id',
            'conditions' => '',
            'fields' => '',
            'order' => '',
        ],
        'AnoLectivo' => [
            'className' => 'AnoLectivo',
            'foreignKey' => 'ano_lectivo_id',
            'conditions' => '',
            'fields' => '',
            'order' => '',
        ],
        'SemestreLectivo' => [
            'className' => 'SemestreLectivo',
            'foreignKey' => 'semestre_lectivo_id',
            'conditions' => '',
            'fields' => '',
            'order' => '',
        ],
        'SadeAvaliacao' => [
            'className' => 'SadeAvaliacao',
            'foreignKey' => 'sade_avaliacao_id',
            'conditions' => '',
            'fields' => '',
            'order' => '',
        ],
    ];
}
