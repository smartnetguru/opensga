<?php

App::uses('AppModel', 'Model');

/**
 * Instituicao Model
 *
 * @property CooperacaoAcordo $CooperacaoAcordo
 */
class Instituicao extends AppModel {

    public $belongsTo = array(
        'Cidade' => array(
            'className' => 'Cidade',
            'foreignKey' => 'cidade_origem',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        ),
        'Provincia' => array(
            'className' => 'Provincia',
            'foreignKey' => 'provincia_origem',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        ),
        'Pais' => array(
            'className' => 'Pais',
            'foreignKey' => 'pais_origem',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        ),
        'Continente' => array(
            'className' => 'Continente',
            'foreignKey' => 'continente_origem',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        ),
    );

    /**
     * hasMany associations
     *
     * @var array
     */
    public $hasMany = array(
        'CooperacaoAcordo' => array(
            'className' => 'CooperacaoAcordo',
            'foreignKey' => 'instituicao_id',
            'dependent' => false,
            'conditions' => '',
            'fields' => '',
            'order' => '',
            'limit' => '',
            'offset' => '',
            'exclusive' => '',
            'finderQuery' => '',
            'counterQuery' => ''
        )
    );
    
    
    public $validade = array(
        
    );
    
    public function getInstituicaoById($id) {
        $instituicao = $this->findById($id);
        if($instituicao){
            return $instituicao['Instituicao'];
        }
        else            return false;
    }

}
