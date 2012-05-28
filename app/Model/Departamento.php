<?php
/**
 * Model Departamento
 * 
 * @copyright     Copyright 2010-2011, INFOmoz (Inform�tica-Mo�ambique) (http://infomoz.net)
 ** @link          http://opensga.com OpenSGA  - Sistema de Gestão Académica
 * @author		  Elisio Leonardo (elisio.leonardo@gmail.com)
 * @package       opensga
 * @subpackage    opensga.core.controller
 * @since         OpenSGA v 0.10.0.0

 * 
 */
 
 
class Departamento extends AppModel {
	var $name = 'Departamento';
	//The Associations below have been created with all possible keys, those that are not needed can be removed
    
    public $belongsTo = array(
        'SimNaoResposta' => array(
			'className' => 'SimNaoResposta',
			'foreignKey' => 'pagamento_exclusivo',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
        'Faculdade' => array(
			'className' => 'Faculdade',
			'foreignKey' => 'faculdade_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
    );

	var $hasMany = array(
		'Funcionario' => array(
			'className' => 'Funcionario',
			'foreignKey' => 'departamento_id',
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
?>