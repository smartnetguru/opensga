<?php
App::uses('AppModel', 'Model');
/**
 * BolsaValorBolsa Model
 *
 * @property Anolectivo $Anolectivo
 * @property BolsaTipoBolsa $BolsaTipoBolsa
 */
class BolsaValorBolsa extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Anolectivo' => array(
			'className' => 'Anolectivo',
			'foreignKey' => 'anolectivo_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'BolsaTipoBolsa' => array(
			'className' => 'BolsaTipoBolsa',
			'foreignKey' => 'bolsa_tipo_bolsa_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
