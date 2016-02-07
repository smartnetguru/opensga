<?php

	class DocenteCategoria extends AppModel
	{
		var $name = 'DocenteCategoria';
		//The Associations below have been created with all possible keys, those that are not needed can be removed

		var $hasMany = [
			'Docente' => [
				'className'    => 'Docente',
				'foreignKey'   => 'docente_categoria_id',
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

		public $validate = [
			'name' => [
				'nameNotBlank' => [
					'rule'     => 'notBlank',
					'required' => true,
					'message'  => 'O nome da Categoria do Docente é de preenchimento Obrigatório',
				],
				'nameUnique'   => [
					'rule'    => 'isUnique',
					'message' => 'Ja existe uma categoria de Docente com este nome',
				],
			],
		];

	}
