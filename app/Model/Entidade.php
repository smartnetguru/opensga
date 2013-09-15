<?php
/**
 * OpenSGA - Sistema de Gest�o Acad�mica
 *   Copyright (C) 2010-2011  INFOmoz (Inform�tica-Mo�ambique)
 *
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
	//validations

	public $validate=array(
		'apelido'=>array('rule'=>'notempty','message'=>'campo obrigatorio'),
		'nomes'=>array('rule'=>'notempty','message'=>'campo obrigatório'),
		'genero_id'=>array('rule'=>'notempty','message'=>'seleccione o sexo'),
		'data_nascimento'=>array('rule'=>'notempty','message'=>'seleccione a data de nascimento')
	);

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
		),
        'EntidadeIdentificacao' => array(
			'className' => 'EntidadeIdentificacao',
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
		),
        'EntidadeContacto' => array(
			'className' => 'EntidadeContacto',
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


    public function gravaContactos($data,$tipo_entidade='aluno'){
        
    }
    
    
    public function getCellNumber($entidade_id){
        $entidade = $this->findById($entidade_id);
        if($entidade['Entidade']['telemovel']){
            return $entidade['Entidade']['telemovel'];
        } else{
            $entidade_contacto = $this->EntidadeContacto->find('first',array('conditions'=>array('entidade_id'=>$entidade_id,'tipo_contacto_id'=>2,'estado_objecto_id'=>1),'orderr'=>'id DESC'));
            if($entidade_contacto){
                return $entidade_contacto['EntidadeContacto']['valor'];
            } else{
                return 0;
            }
        }
    }


}
?>
