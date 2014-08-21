<?php
App::uses('AppModel', 'Model');
/**
 * CandidatoAlumni Model
 *
 * @property Genero $Genero
 * @property EstadoCivil $EstadoCivil
 * @property UnidadeOrganica $UnidadeOrganica
 * @property Curso $Curso
 * @property GrauAcademico $GrauAcademico
 * @property Alumni $Alumni
 */
class CandidatoAlumni extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Genero' => array(
			'className' => 'Genero',
			'foreignKey' => 'genero_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'EstadoCivil' => array(
			'className' => 'EstadoCivil',
			'foreignKey' => 'estado_civil_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'UnidadeOrganica' => array(
			'className' => 'UnidadeOrganica',
			'foreignKey' => 'unidade_organica_id',
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
		'GrauAcademico' => array(
			'className' => 'GrauAcademico',
			'foreignKey' => 'grau_academico_id',
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
		'ProvinciaNascimento' => array(
			'className' => 'Provincia',
			'foreignKey' => 'provincia_nascimento',
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
		'PaisMorada' => array(
			'className' => 'Pais',
			'foreignKey' => 'pais_morada',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'ProvinciaMorada' => array(
			'className' => 'Provincia',
			'foreignKey' => 'provincia_morada',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'CidadeMorada' => array(
			'className' => 'cidade',
			'foreignKey' => 'cidade_morada',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
        'DoumentoIdentificacao' => array(
            'className' => 'DocumentoIdentificacao',
            'foreignKey' => 'documento_identificacao_id',
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
		'Alumni' => array(
			'className' => 'Alumni',
			'foreignKey' => 'candidato_alumni_id',
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


    public $validate = array(
        'apelido' => array(
            'apelidoRule-1' => array(
                'rule'    => 'notEmpty',
                'required' =>'create',
                'message' => 'O Preenchimento do campo Apelido é obrigatório',
            ),
        ),
        'nomes' => array(
            'nomesRule-1' => array(
                'rule'    => 'notEmpty',
                'required' =>'create',
                'message' => 'O Preenchimento do campo Outros nomes é obrigatório',
            ),
        ),
        'genero_id' => array(
            'generoRule-1' => array(
                'rule'    => 'notEmpty',
                'required' =>'create',
                'message' => 'O preenchimento do Campo Sexo é obrigatório',
            ),
        ),
        'data_nascimento' => array(
            'dataNascimentoRule-1' => array(
                'rule'    => 'notEmpty',
                'required' =>'create',
                'message' => 'O preenchimento do Campo de data de Nascimento é obrigatório',
            ),
        )
    );
}
