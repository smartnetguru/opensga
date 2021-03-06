<?php

App::uses('AppModel', 'Model');
App::uses('OpenSGAExcel', 'Lib');


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
class Candidatura extends AppModel
{
    //The Associations below have been created with all possible keys, those that are not needed can be removed

    /**
     * belongsTo associations
     *
     * @var array
     */
    public $belongsTo = [
        'EscolaNivelMedio' => [
            'className' => 'EscolaNivelMedio',
            'foreignKey' => 'escola_nivel_medio_id',
            'conditions' => '',
            'fields' => '',
            'order' => '',
        ],
        'ProvinciaNascimento' => [
            'className' => 'Provincia',
            'foreignKey' => 'provincia_nascimento',
            'conditions' => '',
            'fields' => '',
            'order' => '',
        ],
        'ProvinciaCandidatura' => [
            'className' => 'Provincia',
            'foreignKey' => 'provincia_candidatura',
            'conditions' => '',
            'fields' => '',
            'order' => '',
        ],
        'CidadeNascimento' => [
            'className' => 'Cidade',
            'foreignKey' => 'cidade_nascimento',
            'conditions' => '',
            'fields' => '',
            'order' => '',
        ],
        'PaisNascimento' => [
            'className' => 'Pais',
            'foreignKey' => 'pais_nascimento',
            'conditions' => '',
            'fields' => '',
            'order' => '',
        ],
        'AlunoViaAdmissao' => [
            'className' => 'AlunoViaAdmissao',
            'foreignKey' => 'aluno_via_admissao_id',
            'conditions' => '',
            'fields' => '',
            'order' => '',
        ],
        'Curso' => [
            'className' => 'Curso',
            'foreignKey' => 'curso_id',
            'conditions' => '',
            'fields' => '',
            'order' => '',
        ],
        'EstadoCivil' => [
            'className' => 'EstadoCivil',
            'foreignKey' => 'estado_civil_id',
            'conditions' => '',
            'fields' => '',
            'order' => '',
        ],
        'DocumentoIdentificacao' => [
            'className' => 'DocumentoIdentificacao',
            'foreignKey' => 'documento_identificacao_id',
            'conditions' => '',
            'fields' => '',
            'order' => '',
        ],
        'TipoIngresso' => [
            'className' => 'TipoIngresso',
            'foreignKey' => 'tipo_ingresso_id',
            'conditions' => '',
            'fields' => '',
            'order' => '',
        ],
        'EstadoMatricula' => [
            'className' => 'EstadoMatricula',
            'foreignKey' => 'estado_matricula_id',
            'conditions' => '',
            'fields' => '',
            'order' => '',
        ],
        'UnidadeOrganica' => [
            'className' => 'UnidadeOrganica',
            'foreignKey' => 'unidade_organica_id',
            'conditions' => '',
            'fields' => '',
            'order' => '',
        ],
        'BolsaTipoBolsa' => [
            'className' => 'BolsaTipoBolsa',
            'foreignKey' => 'bolsa_tipo_bolsa_id',
            'conditions' => '',
            'fields' => '',
            'order' => '',
        ],
        'Genero' => [
            'className' => 'Genero',
            'foreignKey' => 'genero_id',
            'conditions' => '',
            'fields' => '',
            'order' => '',
        ],
        'Turno' => [
            'className' => 'Turno',
            'foreignKey' => 'turno_id',
            'conditions' => '',
            'fields' => '',
            'order' => '',
        ],
    ];
    public $hasOne = [
        'BolsaTemporaria',
    ];
    public $validate = [
        'numero_estudante' => [
            'uniqueRule' => [
                'rule' => 'isUnique',
                'message' => 'Não podem existir 2 candidatos com mesmo número de estudante',
            ],
            'notEmptyRule' => [
                'rule' => 'notBlank',
                'message' => 'Todo candidato deve ter um número de estudante atribuido',
            ],
        ],
    ];


    public function processaFicheiroExcelCandidatos($data)
    {
        AuditableConfig::$Logger = ClassRegistry::init('Auditable.Logger');

        $this->Entidade = ClassRegistry::init('Entidade');

        $filePath = $data['path'][0];
        $fileUrl = $data['urls'][0];
        $objPHPExcel = new OpenSGAExcel();
        $xls = $objPHPExcel->loadWorksheetFromS3($filePath);

        $worksheet = $xls->getActiveSheet();
        $linha_actual = 2;
        $candidatos = [];
        foreach ($worksheet->getRowIterator() as $row) {
            if ($worksheet->getCell('A' . $linha_actual)->getValue() == '') {
                break;
            }

            $numeroCandidato = $worksheet->getCell('G' . $linha_actual)->getCalculatedValue();
            $numeroEstudante = $worksheet->getCell('A' . $linha_actual)->getCalculatedValue();
            $candidatoExiste = $this->findByNumeroCandidato($numeroCandidato);
            $alunoExiste = $this->Entidade->Aluno->findByCodigo($numeroEstudante);
            if ($alunoExiste) {
                return 'O número de Estudante ' . $numeroEstudante . ' pertence a um estudante já matriculado. Nenhum Candidato foi importado';
            } else {
                $arrayCandidato = [
                    'Candidatura' => [
                        'numero_estudante' => $numeroEstudante,
                        'numero_candidato' => $numeroCandidato
                    ],
                ];
                $nomeCompleto2 = $worksheet->getCell('B' . $linha_actual)
                    ->getCalculatedValue();
                $nomeCompleto = trim($nomeCompleto2);
                $nomes = $this->Entidade->User->splitName($nomeCompleto);
                $arrayCandidato['Candidatura']['apelido'] = trim($nomes['surname']);
                $arrayCandidato['Candidatura']['nomes'] = trim($nomes['firstname']);
                $arrayCandidato['Candidatura']['estado_matricula_id'] = 5;
                $arrayCandidato['Candidatura']['ano_lectivo_admissao'] = $worksheet->getCell('F' . $linha_actual)
                    ->getCalculatedValue();
                $arrayCandidato['Candidatura']['tipo_ingresso_id'] = 2;
                $arrayCandidato['Candidatura']['estado_candidatura_id'] = 2;
                $cursoNome = $worksheet->getCell('D' . $linha_actual)->getCalculatedValue();
                $curso = $this->Curso->findByName($cursoNome);
                if ($curso) {
                    $arrayCandidato['Candidatura']['curso_id'] = $curso['Curso']['id'];
                    $arrayCandidato['Candidatura']['nome_curso'] = $curso['Curso']['name'];
                } else {


                    return 'O Curso ' . $cursoNome . ' ainda não está cadastrado, ou está mal escrito no ficheiro.
                        Nenhum Candidato foi importado';
                }
                $viaAdmissao = $worksheet->getCell('E' . $linha_actual)->getCalculatedValue();
                $alunoViaAdmissao = $this->AlunoViaAdmissao->findByName($viaAdmissao);
                if (empty($alunoViaAdmissao)) {
                    $arrayViaAdmissao = [
                        'AlunoViaAdmissao' => [
                            'name' => $viaAdmissao
                        ]
                    ];
                    $this->AlunoViaAdmissao->create();
                    $this->AlunoViaAdmissao->save($arrayViaAdmissao);
                    $alunoViaAdmissao = $this->AlunoViaAdmissao->findByName($viaAdmissao);
                }
                $arrayCandidato['Candidatura']['aluno_via_admissao_id'] = $alunoViaAdmissao['AlunoViaAdmissao']['id'];

                if ($candidatoExiste) {
                    $arrayCandidato['Candidatura']['id'] = $candidatoExiste['Candidatura']['id'];
                }

                $candidatos[] = $arrayCandidato;

                $linha_actual++;
            }


        }
        if ($this->saveAll($candidatos)) {
            /*CakeResque::enqueue(
                'default', 'CandidatoShell', array('afterImportCandidato', $candidatos, $filePath)
            );*/
            $this->Upload = ClassRegistry::init('Upload');
            $upload = $this->Upload->findByFileUrl($fileUrl);
            if ($upload) {
                $this->Upload->id = $upload['Upload']['id'];
                $this->Upload->set('estado_upload_id', 3);
                $this->Upload->save();
            }

            $newPath = 'Imports/Admitidos/' . date('Y') . '/admitidos_' . date('Y_m_d_His') . '.xlsx';
            if ($objPHPExcel->unloadWorksheetFromS3($filePath, $newPath)) {
                $this->Upload->id = $upload['Upload']['id'];
                $this->Upload->set('file_dir', $newPath);
                $this->Upload->save();
            }

            return $candidatos;
        } else {
            return 'Erro ao gravar Candidatos';
        }
    }

    public function getAllCandidatosByStatus($status)
    {

    }
}
