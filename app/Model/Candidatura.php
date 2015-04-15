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
		'ProvinciaNascimento' => array(
			'className' => 'Provincia',
			'foreignKey' => 'provincia_nascimento',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
        'ProvinciaCandidatura' => array(
            'className' => 'Provincia',
            'foreignKey' => 'provincia_candidatura',
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
        'PaisNascimento' => array(
            'className' => 'Pais',
            'foreignKey' => 'pais_nascimento',
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
        'EstadoCivil' => array(
            'className' => 'EstadoCivil',
            'foreignKey' => 'estado_civil_id',
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
	public $hasOne = array(
		'BolsaTemporaria'
	);
	public $validate = array(
		'numero_estudante' => array(
			'uniqueRule' => array(
				'rule' => 'isUnique',
				'message' => 'Não podem existir 2 candidatos com mesmo número de estudante'
			),
			'notEmptyRule' => array(
				'rule' => 'notEmpty',
				'message' => 'Todo candidato deve ter um número de estudante atribuido'
			)
		)
	);


    public function processaFicheiroExcelCandidatos($filePath){
        AuditableConfig::$Logger = ClassRegistry::init('Auditable.Logger');
        App::import('Vendor', 'PHPExcel', array('file' => 'PHPExcel.php'));
        if (!class_exists('PHPExcel')) {
            throw new CakeException('Vendor class PHPExcel not found!');
        }

        $xls = PHPExcel_IOFactory::load(Configure::read('OpenSGA.save_path') . DS . $filePath);

        $worksheet = $xls->getActiveSheet();
        $linha_actual = 2;
        $candidatos = array();
        foreach ($worksheet->getRowIterator() as $row) {
            if ($worksheet->getCell('A' . $linha_actual)->getValue() == '') {
                break;
            }

            $numeroEstudante = $worksheet->getCell('A' . $linha_actual)->getCalculatedValue();
            $candidatoExiste = $this->findByNumeroEstudante($numeroEstudante);
            if($candidatoExiste){
                return 'O número de Estudante '.$numeroEstudante.' Já foi usado por outro candidato. Nenhum Candidato foi importado';
            } else{
                $alunoExiste = $this->Entidade->Aluno->findByCodigo($numeroEstudante);
                if($alunoExiste){
                    return 'O número de Estudante '.$numeroEstudante.' pertence a um estudante já matriculado. Nenhum Candidato foi importado';
                } else{
                    $arrayCandidato  = array(
                        'Candidatura' => array(
                            'numero_estudante' => $numeroEstudante,
                        )
                    );
                    $nomeCompleto2                                          = $worksheet->getCell('B' . $linha_actual)
                        ->getCalculatedValue();
                    $nomeCompleto                                           = trim($nomeCompleto2);
                    $nomes                                                   = $this->Entidade->User->splitName($nomeCompleto);
                    $arrayCandidato['Candidatura']['apelido']               = trim($nomes['surname']);
                    $arrayCandidato['Candidatura']['nomes']                 = trim($nomes['firstname']);
                    $arrayCandidato['Candidatura']['estado_matricula_id']   = 5;
                    $arrayCandidato['Candidatura']['ano_lectivo_admissao']  = $worksheet->getCell('F' . $linha_actual)
                        ->getCalculatedValue();
                    $arrayCandidato['Candidatura']['tipo_ingresso_id']      = 2;
                    $arrayCandidato['Candidatura']['estado_candidatura_id'] = 2;
                    $cursoNome                                              = $worksheet->getCell('D' . $linha_actual)
                        ->getCalculatedValue();
                    $curso                                                   = $this->Curso->findByName($cursoNome);
                    if ($curso) {
                        $arrayCandidato['Candidatura']['curso_id']   = $curso['Curso']['id'];
                        $arrayCandidato['Candidatura']['nome_curso'] = $curso['Curso']['name'];
                    } else {


                        return 'O Curso '.$cursoNome.' ainda não está cadastrado, ou está mal escrito no ficheiro.
                        Nenhum Candidato foi importado';
                    }
                    $candidatos[] = $arrayCandidato;

                    $linha_actual++;
                }
            }

        }
        if($this->saveAll($candidatos)){
            CakeResque::enqueue(
                'default', 'CandidatoShell', array('afterImportCandidato', $candidatos, $filePath)
            );
            /*$this->loadModel('Upload');
            $upload = $this->Upload->findByFileUrl($filePath);
            if($upload){
                $this->Upload->id = $upload['Upload']['id'];
                $this->Upload->set('estado_upload_id',3);
                $this->Upload->save();
            }*/

            return $candidatos;
        } else{
            return 'Erro ao gravar Candidatos';
        }
    }

    public function getAllCandidatosByStatus($status){

    }
}
