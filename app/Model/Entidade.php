<?php
/**
 * OpenSGA - Sistema de Gest�o Acad�mica
 *   Copyright (C) 2010-2011  INFOmoz (Inform�tica-Mo�ambique)
 * 
 * Este programa � um software livre: Voc� pode redistribuir e/ou modificar
 * todo ou parte deste programa, desde que siga os termos da licen�a por nele
 * estabelecidos. Grande parte do c�digo deste programa est� sob a licen�a 
 * GNU Affero General Public License publicada pela Free Software Foundation.
 * A vers�o original desta licen�a est� dispon�vel na pasta raiz deste software.
 * 
 * Este software � distribuido sob a perspectiva de que possa ser �til para 
 * satisfazer as necessidades dos seus utilizadores, mas SEM NENHUMA GARANTIA. Veja
 * os termos da licen�a GNU Affero General Public License para mais detalhes
 * 
 * As redistribui��es deste software, mesmo quando o c�digo-fonte for modificado significativamente,
 * devem manter est� informa��o legal, assim como a licen�a original do software.
 * 
 * @copyright     Copyright 2010-2011, INFOmoz (Inform�tica-Mo�ambique) (http://infomoz.net)
 ** @link          http://opensga.com OpenSGA  - Sistema de Gestão Académica
 * @author		  Elisio Leonardo (elisio.leonardo@gmail.com)
 * @package       opensga
 * @subpackage    opensga.core.controller
 * @since         OpenSGA v 0.10.0.0

 * 
 */
 
 
 
class Entidade extends AppModel {
	var $name = 'Entidade';
	//The Associations below have been created with all possible keys, those that are not needed can be removed
    
    
    
    
	var $belongsTo = array(
			'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Genero' => array(
			'className' => 'Genero',
			'foreignKey' => 'genero_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'PaisNascimento' => array(
			'className' => 'Pais',
			'foreignKey' => 'pais_nascimento',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'CidadeMorada' => array(
			'className' => 'Cidade',
			'foreignKey' => 'cidade_morada',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
        'CidadeFerias' => array(
			'className' => 'Cidade',
			'foreignKey' => 'cidade_ferias',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
        'CidadeNascimento' => array(
			'className' => 'Cidade',
			'foreignKey' => 'cidade_nascimento',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
        'ProvinciaNascimento' => array(
			'className' => 'Provincia',
			'foreignKey' => 'provincia_nascimento',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'DocumentoIdentificacao' => array(
			'className' => 'DocumentoIdentificacao',
			'foreignKey' => 'documento_identificacao_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Estadoentidade' => array(
			'className' => 'Estadoentidade',
			'foreignKey' => 'estadoentidade_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
        'ProvinciaFerias' => array(
			'className' => 'Cidade',
			'foreignKey' => 'provincia_ferias',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
        'EstadoCivil' => array(
			'className' => 'EstadoCivil',
			'foreignKey' => 'estado_civil',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
        
	);
    public $hasOne = array(
        'Docente' => array(
            'className'    => 'Docente',
            'foreignKey'   =>'entidade_id',
            'dependent'    => true
        ),
        'Aluno' => array(
            'className'    => 'Aluno',
            'foreignKey'   =>'entidade_id',
            'dependent'    => true
        ),
        'Funcionario' => array(
            'className'    => 'Funcionario',
            'foreignKey'   =>'entidade_id',
            'dependent'    => true
        ),
        'FinanceiroConta' => array(
            'className'    => 'FinanceiroConta',
            'foreignKey'   =>'entidade_id',
            'dependent'    => true
        )
    );
    
    public $hasMany = array(
		'FinanceiroDeposito' => array(
			'className' => 'FinanceiroDeposito',
			'foreignKey' => 'entidade_id',
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
    
    
    public function getApelidoFromName($name){
        $nomes = explode(' ',$name);
        return $nomes[count($nomes) - 1];
                
    }
    
    public function getNomesFromName($name){
        $nomes = explode(' ',$name);
        unset($nomes[count($nomes)-1]);
        return implode(' ',$nomes);
    }
    
    
	

}
?>