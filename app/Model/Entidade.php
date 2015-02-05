<?php

/**
 * OpenSGA - Sistema de Gest�o Acad�mica
 *   Copyright (C) 2010-2011  INFOmoz (Inform�tica-Mo�ambique)
 *
 *
 * @copyright     Copyright 2010-2011, INFOmoz (Inform�tica-Mo�ambique) (http://infomoz.net)
 * * @link          http://opensga.com OpenSGA  - Sistema de Gestão Académica
 * @author		  Elisio Leonardo (elisio.leonardo@gmail.com)
 * @package       opensga
 * @subpackage    opensga.core.controller
 * @since         OpenSGA v 0.10.0.0

 *
 */
class Entidade extends AppModel {

	var $name = 'Entidade';

   /** public $validate = array(
        'apelido' => array(
            'apelidoNotEmpty' => array(
                'rule' => 'notEmpty',
                'required'=>'create',
                'message'=>'O Campo Apelido é de Preenchimento Obrigatório',
                // extra keys like on, required, etc. go here...
            )
        ),
        'nomes' => array(
            'nomesNotEmpty' => array(
                'rule' => 'notEmpty',
                'required'=>'create',
                'message'=>'O Campo Outros Nomes é de Preenchimento Obrigatório',
                // extra keys like on, required, etc. go here...
            )
        ),
        'genero_id' => array(
            'generoIdNotEmpty' => array(
                'rule' => 'notEmpty',
                'required'=>'create',
                'message'=>'O Campo Sexo é de Preenchimento Obrigatório',
                // extra keys like on, required, etc. go here...
            )
        ),
        'data_nascimento' => array(
            'dataNascimentoNotEmpty' => array(
                'rule' => 'notEmpty',
                'required'=>'create',
                'message'=>'O Campo Data de Nascimento é de Preenchimento Obrigatório',
                // extra keys like on, required, etc. go here...
            ),
            'dataNascimentoDate' => array(
                'rule' => array('date', 'ymd'),
                'message'=>'Introduza uma data no formato certo',
                // extra keys like on, required, etc. go here...
            )

        ),
        'name' => array(
            'nameNotEmpty' => array(
                'rule' => 'notEmpty',
                'required'=>'create',
                'message'=>'O Campo Nome Completo é de Preenchimento Obrigatório',
                // extra keys like on, required, etc. go here...
            )
        ),
        'email' => array(
            'emailValid' => array(
                'rule' => 'email',
                'required'=>'create',
                'message'=>'O Campo Email de Preenchimento Obrigatório',
                // extra keys like on, required, etc. go here...
            )
        ),

    ); */
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
		'Bairro' => array(
			'className' => 'Bairro',
			'foreignKey' => 'bairro_morada',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Rua' => array(
			'className' => 'Rua',
			'foreignKey' => 'avenida_rua',
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
		'EstadoEntidade' => array(
			'className' => 'EstadoEntidade',
			'foreignKey' => 'EstadoEntidade_id',
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
			'className' => 'Docente',
			'foreignKey' => 'entidade_id',
			'dependent' => true
		),
		'Aluno' => array(
			'className' => 'Aluno',
			'foreignKey' => 'entidade_id',
			'dependent' => true
		),
		'Funcionario' => array(
			'className' => 'Funcionario',
			'foreignKey' => 'entidade_id',
			'dependent' => true
		),
		'FinanceiroConta' => array(
			'className' => 'FinanceiroConta',
			'foreignKey' => 'entidade_id',
			'dependent' => true
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
		'FinanceiroTransacao' => array(
			'className' => 'FinanceiroTransacao',
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

	public function alteraNome($entidadeId, $apelido, $nomes) {
		$this->id = $entidadeId;
		if (!$this->exists()) {
			return false;
		}
		$apelido = trim($apelido);
		$nomes = trim($nomes);
		$this->set('apelido', $apelido);
		$this->set('nomes', $nomes);
		$this->set('name', $nomes . " " . $apelido);
        $save = $this->save();
		return $save;
	}

	public function getApelidoFromName($name) {
		$nomes = explode(' ', $name);
		return $nomes[count($nomes) - 1];
	}

	public function getNomesFromName($name) {
		$nomes = explode(' ', $name);
		unset($nomes[count($nomes) - 1]);
		return implode(' ', $nomes);
	}

	public function getCellNumber($entidade_id) {
		$entidade = $this->findById($entidade_id);
		if ($entidade['Entidade']['telemovel']) {
			return $entidade['Entidade']['telemovel'];
		} else {
			$entidade_contacto = $this->EntidadeContacto->find('first', array('conditions' => array('entidade_id' => $entidade_id, 'tipo_contacto_id' => 2, 'estado_objecto_id' => 1), 'orderr' => 'id DESC'));
			if ($entidade_contacto) {
				return $entidade_contacto['EntidadeContacto']['valor'];
			} else {
				return 0;
			}
		}
	}

	/**
	 * Retorna todos os dados do documento de identificacao activo para a entidade
	 * @todo implementar o metodo
	 * @param type $entidade_id
	 */
	public function getDocumentoIdentificacao($entidade_id) {

	}

	/**
	 * Retorna a morada de uma entidade como uma string devidamente formatada
	 *
	 * @todo implementar
	 * @param type $entidade_id
	 */
	public function getMorada($entidadeId) {
		$morada = array();
		$paisMorada = $this->EntidadeContacto->findByEntidadeIdAndTipoContactoIdAndEstadoObjectoId($entidadeId, 11, 1, null, 'id DESC');
		if (!empty($paisMorada)) {
			$morada['pais_morada'] = $paisMorada['EntidadeContacto']['valor'];
		} else {
			$morada['pais_morada'] = null;
		}
		debug($paisMorada);
		$provinciaMorada = $this->EntidadeContacto->findByEntidadeIdAndTipoContactoIdAndEstadoObjectoId($entidadeId, 10, 1);
		if (!empty($provinciaMorada)) {
			$morada['provincia_morada'] = $provinciaMorada['EntidadeContacto']['valor'];
		} else {
			$morada['provincia_morada'] = null;
		}

		$cidadeMorada = $this->EntidadeContacto->findByEntidadeIdAndTipoContactoIdAndEstadoObjectoId($entidadeId, 9, 1);
		if (!empty($cidadeMorada)) {
			$morada['cidade_morada'] = $cidadeMorada['EntidadeContacto']['valor'];
		} else {
			$morada['cidade_morada'] = null;
		}

		$quarteiraoMorada = $this->EntidadeContacto->findByEntidadeIdAndTipoContactoIdAndEstadoObjectoId($entidadeId, 7, 1);
		if (!empty($quarteiraoMorada)) {
			$morada['quarteirao'] = $quarteiraoMorada['EntidadeContacto']['valor'];
		} else {
			$morada['quarteirao'] = null;
		}
		return $morada;
	}

	/**
	 * Retorna apenas o numero de documento de identificacao da entidade
	 * @todo implementar o metodo
	 */
	public function getNumeroDocumentoIdentificacao($entidade_id) {
		return '0';
	}

    /**
     * Retorna todas entidades que fazem anos numa determinada data
     * @param null $diaNascimento
     * @param null $mesNascimento
     * @return array
     */
    public function getAllAniversariantes($diaNascimento=null,$mesNascimento=null){
        if($diaNascimento==null){
            $diaNascimento = date('d');
        }
        if($mesNascimento==null){
            $mesNascimento=date('m');
        }
        $entidades = $this->find('all',array(
            'conditions'=>array(
                'DAY(Entidade.data_nascimento)'=>$diaNascimento,
            'MONTH(Entidade.data_nascimento)'=>$mesNascimento
            ),
                'fields'=>array('Entidade.id','Entidade.name','Entidade.data_nascimento','Entidade.telemovel')
        )
        );
        return $entidades;
    }

}

?>
