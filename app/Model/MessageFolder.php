<?php
	App::uses('AppModel', 'Model');

	/**
	 * MessageFolder Model
	 *
	 * @property MessageUser $MessageUser
	 */
	class MessageFolder extends AppModel
	{

		/**
		 * Validation rules
		 *
		 * @var array
		 */
		public $validate = [
			'name' => [
				'notBlank' => [
					'rule' => ['notBlank'],
					//'message' => 'Your custom message here',
					//'allowEmpty' => false,
					//'required' => false,
					//'last' => false, // Stop validation after this rule
					//'on' => 'create', // Limit validation to 'create' or 'update' operations
				],
			],
		];

		// The Associations below have been created with all possible keys, those that are not needed can be removed

		/**
		 * hasMany associations
		 *
		 * @var array
		 */
		public $hasMany = [
			'MessageUser' => [
				'className'    => 'MessageUser',
				'foreignKey'   => 'message_folder_id',
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
