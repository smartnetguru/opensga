<?php
/**
 * Classe Model para o Docente
 * 
 * 
 * @copyright     Copyright 2010-2011, INFOmoz (Informática-Moçambique) (http://infomoz.net)
 * @link          http://infomoz.net/opensga OpenSGA - Sistema de Gestão Académica
 * @author		  Elisio Leonardo (elisio.leonardo@gmail.com)
 * @package       opensga
 * @subpackage    opensga.core.estudantes.view
 * @version       OpenSGA v 0.5.0
 * @since         OpenSGA v 0.1.0.0

 * 
 * @property Entidade @Entidade
 * @property Seccao @Seccao
 * @property DocenteCategoria @DocenteCategoria
 */
class Docente extends AppModel {
	var $name = 'Docente';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Entidade' => array(
			'className' => 'Entidade',
			'foreignKey' => 'entidade_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Seccao' => array(
			'className' => 'Seccao',
			'foreignKey' => 'seccao_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'DocenteCategoria' => array(
			'className' => 'DocenteCategoria',
			'foreignKey' => 'docente_categoria_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
	
	
	
	function configuraAcl(){
		
		
		
	}
	
	function getByUserID($user_id){
		//Primeiro retornamos a entidade
		$entidade = $this->Entidade->find('first',array('conditions'=>array('user_id'=>$user_id),));
		return $entidade['Docente'][0]['id'];
	}
}
