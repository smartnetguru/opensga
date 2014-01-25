<?php
App::uses('AppModel', 'Model');
/**
 * Candidatura Model
 *
 * @property Entidade $Entidade
 * @property EscolaNivelMedio $EscolaNivelMedio
 * @property Provincia $Provincia
 * @property AlunoViaAdmissao $AlunoViaAdmissao
 * @property TipoResultadoExameAdmissao $TipoResultadoExameAdmissao
 * @property Curso $Curso
 * @property TipoIngresso $TipoIngresso
 * @property EstadoMatricula $EstadoMatricula
 * @property Funcionario $Funcionario
 * @property UnidadeOrganica $UnidadeOrganica
 * @property LocalNormal $LocalNormal
 * @property BolsaTipoBolsa $BolsaTipoBolsa
 * @property Genero $Genero
 * @property Turno $Turno
 */
class Candidatura extends AppModel {


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
		'EscolaNivelMedio' => array(
			'className' => 'EscolaNivelMedio',
			'foreignKey' => 'escola_nivel_medio_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Provincia' => array(
			'className' => 'Provincia',
			'foreignKey' => 'provincia_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'AlunoViaAdmissao' => array(
			'className' => 'AlunoViaAdmissao',
			'foreignKey' => 'aluno_via_admissao_id',
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
		'TipoIngresso' => array(
			'className' => 'TipoIngresso',
			'foreignKey' => 'tipo_ingresso_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'EstadoMatricula' => array(
			'className' => 'EstadoMatricula',
			'foreignKey' => 'estado_matricula_id',
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
		),
		'UnidadeOrganica' => array(
			'className' => 'UnidadeOrganica',
			'foreignKey' => 'unidade_organica_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		
		'BolsaTipoBolsa' => array(
			'className' => 'BolsaTipoBolsa',
			'foreignKey' => 'bolsa_tipo_bolsa_id',
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
		'Turno' => array(
			'className' => 'Turno',
			'foreignKey' => 'turno_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
        
        
        public $validate = array(
            'numero_estudante'=>array(
                'uniqueRule'=>array(
                    'rule'=>'isUnique',
                    'message'=>'Não podem existir 2 candidatos com mesmo número de estudante'
                ),
                'notEmptyRule'=>array(
                    'rule'=>'notEmpty',
                    'message'=>'Todo candidato deve ter um número de estudante atribuido'
                )
            )
        );
}
