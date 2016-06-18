<?php
App::uses('AppModel', 'Model');

/**
 * BolsaValorBolsa Model
 *
 * @property AnoLectivo $AnoLectivo
 * @property BolsaTipoBolsa $BolsaTipoBolsa
 */
class BolsaValorBolsa extends AppModel
{


    //The Associations below have been created with all possible keys, those that are not needed can be removed

    /**
     * belongsTo associations
     *
     * @var array
     */
    public $belongsTo = [
        'AnoLectivo' => [
            'className' => 'AnoLectivo',
            'foreignKey' => 'ano_lectivo_id',
            'conditions' => '',
            'fields' => '',
            'order' => '',
        ],
        'BolsaTipoBolsa' => [
            'className' => 'BolsaTipoBolsa',
            'foreignKey' => 'bolsa_tipo_bolsa_id',
            'conditions' => '',
            'fields' => '',
            'order' => '',
        ],
    ];
}
