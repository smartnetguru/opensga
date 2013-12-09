<?php
App::uses('AppModel', 'Model');
/**
 * EntidadeIdentificacao Model
 *
 * @property Entidade $Entidade
 * @property Documentoentificacao $Documentoentificacao
 * @property EstadoObjecto $EstadoObjecto
 */
class EntidadeIdentificacao extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Entidade' => array(
			'className' => 'Entidade',
			'foreignKey' => 'entidade_id',
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
		'EstadoObjecto' => array(
			'className' => 'EstadoObjecto',
			'foreignKey' => 'estado_objecto_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

    public $validate = array(
        'numero'=>array(
            'Unico'=>array(
                'rule'=>array('autenticaDocumentoIdentificacao'),
                'message'=>'Alguem já se registou no sistema usando este documento de Identificação'
            )
        )
    );


    /**
     *Tenta ver se o documento de identificacao ainda nao foi usado por ninguem
     * @param type $check
     * @return type
     * @todo implementar isso :(
     */
    public function autenticaDocumentoIdentificacao($check){

        $tipo_documento = $this->data['EntidadeIdentificacao']['documento_identificacao_id'];
        $this->contain();
        $find = $this->find('count',array('conditions'=>array('documento_identificacao_id'=>$tipo_documento,'numero'=>$check)));
        return $find == 0;
    }
}
