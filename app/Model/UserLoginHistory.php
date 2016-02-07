<?php
	App::uses('AppModel', 'Model');

	/**
	 * UserLoginHistorie Model
	 *
	 * @property User $User
	 */
	class UserLoginHistory extends AppModel
	{


		public $useTable = 'user_login_histories';

		/**
		 * belongsTo associations
		 *
		 * @var array
		 */
		public $belongsTo = [
			'User' => [
				'className'  => 'User',
				'foreignKey' => 'user_id',
				'conditions' => '',
				'fields'     => '',
				'order'      => '',
			],
		];
	}
