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
	 * @property BolsaBolsa $BolsaBolsa
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
			'Aluno'          => [
				'className'  => 'Aluno',
				'foreignKey' => 'aluno_id',
				'conditions' => '',
				'fields'     => '',
				'order'      => '',
			],
			'AnoLectivo'     => [
				'className'  => 'AnoLectivo',
				'foreignKey' => 'ano_lectivo_id',
				'conditions' => '',
				'fields'     => '',
				'order'      => '',
			],
			'BolsaBolsa'     => [
				'className'  => 'BolsaBolsa',
				'foreignKey' => 'bolsa_bolsa_id',
				'conditions' => '',
				'fields'     => '',
				'order'      => '',
			],
			'EstadoObjecto'  => [
				'className'  => 'EstadoObjecto',
				'foreignKey' => 'estado_objecto_id',
				'conditions' => '',
				'fields'     => '',
				'order'      => '',
			],
			'BolsaTipoBolsa' => [
				'className'  => 'BolsaTipoBolsa',
				'foreignKey' => 'bolsa_tipo_bolsa_id',
				'conditions' => '',
				'fields'     => '',
				'order'      => '',
			],
		];

		/**
		 * hasMany associations
		 *
		 * @var array
		 */
		public $hasMany = [
			'BolsaBolsa' => [
				'className'    => 'BolsaBolsa',
				'foreignKey'   => 'bolsa_pedido_id',
				'dependent'    => false,
				'conditions'   => '',
				'fields'       => '',
				'order'        => '',
				'limit'        => '',
				'offset'       => '',
				'exclusive'    => '',
				'finderQuery'  => '',
				'counterQuery' => '',
			],
		];

	}
