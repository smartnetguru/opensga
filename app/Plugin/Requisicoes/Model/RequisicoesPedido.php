<?php
App::uses('RequisicoesAppModel', 'Requisicoes.Model');
/**
 * RequisicoesPedido Model
 *
 * @property Aluno $Aluno
 * @property Entidade $Entidade
 * @property Curso $Curso
 * @property RequisicoesTipoPedido $RequisicoesTipoPedido
 * @property RequisicoesEstadoPedido $RequisicoesEstadoPedido
 * @property Funcionario $Funcionario
 * @property RequisicoesPedidoLog $RequisicoesPedidoLog
 */
class RequisicoesPedido extends RequisicoesAppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'aluno_id';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Aluno' => array(
			'className' => 'Aluno',
			'foreignKey' => 'aluno_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Entidade' => array(
			'className' => 'Entidade',
			'foreignKey' => 'entidade_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Curso' => array(
			'className' => 'Curso',
			'foreignKey' => 'curso_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'RequisicoesTipoPedido' => array(
			'className' => 'Requisicoes.RequisicoesTipoPedido',
			'foreignKey' => 'requisicoes_tipo_pedido_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'RequisicoesEstadoPedido' => array(
			'className' => 'Requisicoes.RequisicoesEstadoPedido',
			'foreignKey' => 'requisicoes_estado_pedido_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Funcionario' => array(
			'className' => 'Funcionario',
			'foreignKey' => 'funcionario_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'RequisicoesPedidoLog' => array(
			'className' => 'Requisicoes.RequisicoesPedidoLog',
			'foreignKey' => 'requisicoes_pedido_id',
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
        
        
        
        public function getAllRequisicoesPedidoByEstudante($aluno_id){
             $this->contain(array(
                   'RequisicoesEstadoPedido','RequisicoesTipoPedido','Funcionario'=>array(
                       'Entidade'
                   ) 
                ));
            $requisicoes = $this->find('all',array('conditions'=>array('aluno_id'=>$aluno_id)));
            return $requisicoes;
        }

}

