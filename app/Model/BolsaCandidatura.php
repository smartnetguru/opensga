<?php
App::uses('AppModel', 'Model');

/**
 * BolsaPedido Model
 *
 * @property Aluno $Aluno
 * @property AnoLectivo $AnoLectivo
 * @property BolsaBolsa $BolsaBolsa
 * @property EstadoObjecto $EstadoObjecto
 * @property BolsaTipoBolsa $BolsaTipoBolsa
 * @property Entidade $Entidade
 * @property BolsaTipoCandidatura $BolsaTipoCandidatura
 * @property BolsaBolsa $BolsaBolsa
 * @property BolsaCandidatoFamilia $BolsaCandidatoFamilia
 * @property BolsaResultado $BolsaResultado
 */
class BolsaPedido extends AppModel
{


    //The Associations below have been created with all possible keys, those that are not needed can be removed

    /**
     * belongsTo associations
     *
     * @var array
     */
    public $belongsTo = [
        'Aluno' => [
            'className' => 'Aluno',
            'foreignKey' => 'aluno_id',
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
        'BolsaBolsa' => [
            'className' => 'BolsaBolsa',
            'foreignKey' => 'bolsa_bolsa_id',
            'conditions' => '',
            'fields' => '',
            'order' => '',
        ],
        'EstadoObjecto' => [
            'className' => 'EstadoObjecto',
            'foreignKey' => 'estado_objecto_id',
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
        'Entidade' => [
            'className' => 'Entidade',
            'foreignKey' => 'entidade_id',
            'conditions' => '',
            'fields' => '',
            'order' => '',
        ],
        'BolsaTipoCandidatura' => [
            'className' => 'BolsaTipoCandidatura',
            'foreignKey' => 'bolsa_tipo_candidatura_id',
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
        'BolsaBolsa' => [
            'className' => 'BolsaBolsa',
            'foreignKey' => 'bolsa_candidatura_id',
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
        'BolsaCandidatoFamilia' => [
            'className' => 'BolsaCandidatoFamilia',
            'foreignKey' => 'bolsa_candidatura_id',
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
        'BolsaResultado' => [
            'className' => 'BolsaResultado',
            'foreignKey' => 'bolsa_candidatura_id',
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
