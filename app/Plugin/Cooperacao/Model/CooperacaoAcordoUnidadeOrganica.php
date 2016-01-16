<?php
App::uses('CooperacaoAppModel', 'Cooperacao.Model');
/**
 * CooperacaoAcordoUnidadeOrganica Model
 *
 * @property UnidadeOrganica $UnidadeOrganica
 * @property CooperacaoAcordo $CooperacaoAcordo
 */
class CooperacaoAcordoUnidadeOrganica extends CooperacaoAppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'UnidadeOrganica' => array(
			'className' => 'UnidadeOrganica',
			'foreignKey' => 'unidade_organica_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'CooperacaoAcordo' => array(
			'className' => 'CooperacaoAcordo',
			'foreignKey' => 'cooperacao_acordo_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
