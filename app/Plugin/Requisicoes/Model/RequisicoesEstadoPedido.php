<?php
App::uses('RequisicoesAppModel', 'Requisicoes.Model');
/**
 * RequisicoesEstadoPedido Model
 *
 * @property RequisicoesPedido $RequisicoesPedido
 */
class RequisicoesEstadoPedido extends RequisicoesAppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'RequisicoesPedido' => array(
			'className' => 'RequisicoesPedido',
			'foreignKey' => 'requisicoes_estado_pedido_id',
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

}
