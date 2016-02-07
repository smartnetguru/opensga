<?php

	/**
	 * Controller para definir quais cursos serao leccionados por escola. Especificacoes da ESEG
	 *
	 * @copyright     Copyright 2010-2011, INFOmoz (Informática-Moçambique) (http://infomoz.net)
	 * @link          http://infomoz.net/opensga OpenSGA - Sistema de Gestão Académica
	 * @author          Elisio Leonardo (elisio.leonardo@gmail.com)
	 * @package       opensga
	 * @subpackage    opensga.core.cursos
	 * @since         OpenSGA v 0.1.0
	 *
	 */
	class CursoEscola extends AppModel
	{
		var $name = 'CursoEscola';
		//The Associations below have been created with all possible keys, those that are not needed can be removed

		var $belongsTo = [
			'Escola' => [
				'className'  => 'Escola',
				'foreignKey' => 'escola_id',
				'conditions' => '',
				'fields'     => '',
				'order'      => '',
			],
			'Curso'  => [
				'className'  => 'Curso',
				'foreignKey' => 'curso_id',
				'conditions' => '',
				'fields'     => '',
				'order'      => '',
			],
		];
	}
