<?php

/**
 * OpenSGA - Sistema de Gestão Académica
 *   Copyright (C) 2010-2011  INFOmoz (Informática-Moçambique)
 *
 *
 * @copyright     Copyright 2010-2011, INFOmoz (Informática-Moçambique) (http://infomoz.net)
 * * @link          http://opensga.com OpenSGA  - Sistema de Gestão Académica
 * @author		  Elisio Leonardo (elisio.leonardo@gmail.com)
 * @package       opensga
 * @subpackage    opensga.core.controller
 * @since         OpenSGA v 0.1.0
 * @
 *
 * @property Aluno $Aluno
 * @property FinanceiroTransacao $FinanceiroTransacao
 *
 */
class Inscricao extends AppModel {

	var $name = 'Inscricao';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

    public $validate = [
        'tipo_inscricao_id'=>[
            'TipoInscricaoNotEmpty'=>[
                'rule'=>'notBlank',
                'required'=>true,
                'message'=>'O Tipo de Inscricao deve ser Definido'
            ]
        ],
        'estado_inscricao_id'=>[
            'EstadoInscricaoNotEmpty'=>[
                'rule'=>'notBlank',
                'required'=>true,
                'message'=>'O Estado da Inscricao deve ser Definido'
            ]
        ],
        'turma_id'=>[
            'TurmaNotEmpty'=>[
                'rule'=>'notBlank',
                'required'=>true,
                'message'=>'A Turma deve ser Definida'
            ]
        ],
        'turma_frequencia_id'=>[
            'TurmaFrequenciaNotEmpty'=>[
                'rule'=>'notBlank',
                'required'=>true,
                'message'=>'A turma de frequencia deve ser Definida'
            ]
        ],

    ];
	var $belongsTo = array(
		'Aluno' => array(
			'className' => 'Aluno',
			'foreignKey' => 'Aluno_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Turma' => array(
			'className' => 'Turma',
			'foreignKey' => 'turma_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'EstadoInscricao' => array(
			'className' => 'EstadoInscricao',
			'foreignKey' => 'estado_inscricao_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'EpocaAvaliacao' => array(
			'className' => 'EpocaAvaliacao',
			'foreignKey' => 'EpocaAvaliacao_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Matricula' => array(
			'className' => 'Matricula',
			'foreignKey' => 'matricula_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'TipoInscricao' => array(
			'className' => 'TipoInscricao',
			'foreignKey' => 'tipo_inscricao_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
	var $hasMany = array(
		'Avaliacao' => array(
			'className' => 'Avaliacao',
			'foreignKey' => 'inscricao_id',
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

	/**
	 * Calcula os valores de pagamentos relativos a Inscricao, de acordo com as cadeiras e o tipo de inscricao seleccionados
	 * @param type $data
	 */
	public function calculaValoresInscricao($data) {


		$inscricao_normal = $this->Aluno->FinanceiroPagamento->FinanceiroTipoPagamento->findByCodigo(44);
		$inscricao_atraso = $this->Aluno->FinanceiroPagamento->FinanceiroTipoPagamento->findByCodigo(45);

		$mensalidade_atraso = $this->Aluno->FinanceiroPagamento->FinanceiroTipoPagamento->findByCodigo(30);

		debug($inscricao_normal);
		die(debug($data));
	}

	/**
	 * Retorna a lista de todos os alunos que podem fazer inscricao
	 * Podem fazer inscricao os alunos que tiverem a matricula activa
	 * @return array()
	 */
	function findAllAlunos() {
		App::import('Model', 'Matricula');
		$matriculas = new Matricula;
		//$matriculas->recursive=-1;
		$alunos = $matriculas->find('all', array('conditions' => array('estado_matricula_id' => 1), 'order' => array('name ASC')));
		$alunos2 = array();
		foreach ($alunos as $aluno) {
			$alunos2[$aluno['Aluno']['id']] = $aluno['Aluno']['name'];
		}
		return $alunos2;
	}

	/**
	 * Devolve todas as cadeiras inscritas por um aluno num dado Semestre
	 * @param type $aluno_id
	 * @param type $semestre_id
	 */
	public function getAllCadeirasInscritasByAlunoSemestre($aluno_id, $semestre_id = null) {

		//Se o semestre nao for mencionado, usamos o semestre actual
		if ($semestre_id == null)
			$semestre_id = Configure::read('OpenSGA.semestre_lectivo_id');

		$this->contain(array(
			'Turma'
		));
		$inscricaos =  $this->find('all', array('conditions' => array('Inscricao.aluno_id' => $aluno_id, 'Turma.semestre_lectivo_id' => $semestre_id)));
        return $inscricaos;
	}

	public function getAllInscricoesByAlunoAndEstado($alunoId, $estadoInscricao = null) {
		$this->Aluno->Inscricao->contain(array(
			'Turma' => array(
				'fields' => array(
					'id', 'disciplina_id', 'ano_curricular', 'semestre_curricular'),
				'Disciplina' => array(
					'fields' => array('id', 'name')
				)
			),
			'Matricula' => array(
				'fields' => array('id', 'ano_lectivo_id'),
				'AnoLectivo' => array(
					'fields' => array('id', 'ano')
				)
			)
				)
		);
		$conditions = array('Inscricao.aluno_id' => $alunoId);
		if ($estadoInscricao != null) {
			$conditions['Inscricao.estado_inscricao_id'] = $estadoInscricao;
		}
		$inscricoes = $this->find('all', array('conditions' => $conditions));
		return $inscricoes;
	}

	public function getTotalInscricoesActivas($unidades_organicas = null, $ano_lectivo_id = null) {

		$conditions = array();
		$conditions['Inscricao.estado_inscricao_id'] = 1;
		if ($unidades_organicas) {
			$cursos = $this->Turma->Curso->getAllIdsByUnidadeOrganica($unidades_organicas);
			$conditions['Turma.curso_id'] = $cursos;
		}
		if ($ano_lectivo_id) {
			$conditions['Turma.ano_lectivo_id'] = $ano_lectivo_id;
		}

		$this->contain(array(
			'Turma'
		));
		return $this->find('count', array('conditions' => $conditions));
	}

	/**
	 * Verifica se um aluno pode se inscrever na cadeira em questao
	 */
	function validaInscricao($inscricao_data) {
		$this->recursive = -1;
		$turma = $this->find('first', array('conditions' => array('turma_id' => $inscricao_data['Inscricao']['turma_id'], 'aluno_id' => $inscricao_data['Inscricao']['aluno_id'], 'matricula_id' => $inscricao_data['Inscricao']['matricula_id'])));
		if (!$turma) {
			return true;
		}
		return FALSE;
	}

	public function inscreveAluno($data) {
		$dataSource = $this->getDataSource();
		$dataSource->useNestedTransactions = true;

		$dataSource->begin();
		$this->FinanceiroTransacao = ClassRegistry::init('FinanceiroTransacao');
        $this->Aluno->contain([
            'PlanoEstudo'
        ]);
        $aluno = $this->Aluno->findById($data['aluno_id']);
		//Primeiro Realizamos o deposito
		if ($this->FinanceiroTransacao->processarDeposito($data)) {


			//Temos de ver se o valor depositado é suficiente para pagar a Inscrição
			$valor_total_inscricao = $data['total_normal'] + $data['total_atraso'];
			$conta = $this->Aluno->getContaByAlunoId($data['FinanceiroTransacao']['aluno_id']);
			/** if ($valor_total_inscricao > $conta['FinanceiroConta']['saldo_actual']) {
			  return false;
			  }
			 */



			foreach ($data['Disciplina'] as $disciplinaId) {

				//Primeiro gravamos o pagamento ;)
				if ($data['turmas_tipo'][$disciplinaId['id']] == 1) {
					$tipo_pagamento_id = 35;
					$this->FinanceiroTransacao->FinanceiroPagamento->FinanceiroTipoPagamento->id = 35;
					$valor = $this->FinanceiroTransacao->FinanceiroPagamento->FinanceiroTipoPagamento->field('valor');
				} else {
					$tipo_pagamento_id = 36;
					$this->FinanceiroTransacao->FinanceiroPagamento->FinanceiroTipoPagamento->id = 36;
					$valor = $this->FinanceiroTransacao->FinanceiroPagamento->FinanceiroTipoPagamento->field('valor');
				}

				//Mas antes do Pagamento, a Transacao

				$pagamentoInscricao = array(
					'aluno_id' => $data['FinanceiroTransacao']['aluno_id'],
					'financeiro_conta_id' => $conta['FinanceiroConta']['id'],
					'valor' => $valor,
					'data_pagamento' => date('Y-m-d'),
					'financeiro_tipo_pagamento_id' => $tipo_pagamento_id,
					'data_orcamento' => date('Y-m-d'),
					'financeiro_estado_pagamento_id' => 2,
					'ano_lectivo_id' => Configure::read('OpenSGA.ano_lectivo_id'),
					'data_emissao' => date('Y-m-d'),
					'semestre_lectivo_id' => Configure::read('OpenSGA.semestre_lectivo_id'),
					'entidade_id' => $conta['FinanceiroConta']['entidade_id']
				);

				$pagamento_id = $this->FinanceiroTransacao->processarPagamento($pagamentoInscricao);
				if ($pagamentoInscricao) {


                    $this->Turma->PlanoEstudo->DisciplinaPlanoEstudo->contain(['Disciplina']);
                    $disciplinaPlanoEstudo = $this->Turma->PlanoEstudo->DisciplinaPlanoEstudo->findById($disciplinaId['id']);

                    /* @todo pegar esse ano lectivo duma forma mais consistente */
                    $anoLectivoAno = Configure::read('OpenSGA.ano_lectivo');
                    $anoLectivo = $this->Turma->AnoLectivo->findByAno($anoLectivoAno);

                    //Vamos verificar se a turma existe, e criar caso contrario
                    $turmaExisteConditions = array(
                        'Turma.ano_lectivo_id' => $anoLectivo['AnoLectivo']['id'],
                        'Turma.curso_id' => $aluno['Aluno']['curso_id'],
                        'Turma.plano_estudo_id' => $aluno['Aluno']['plano_estudo_id'],
                        'Turma.disciplina_id' => $disciplinaPlanoEstudo['DisciplinaPlanoEstudo']['disciplina_id'],
                        'Turma.estado_turma_id' => 1,
                        'Turma.ano_curricular' => $disciplinaPlanoEstudo['DisciplinaPlanoEstudo']['ano_curricular'],
                        'Turma.semestre_curricular' =>  $disciplinaPlanoEstudo['DisciplinaPlanoEstudo']['semestre_curricular'],
                        'Turma.semestre_lectivo_id'=>Configure::read('OpenSGA.semestre_lectivo_id')
                    );
                    $turmaExiste = $this->Turma->find('first', array(
                        'conditions' => $turmaExisteConditions
                    ));


                    if (empty($turmaExiste)) {


                        $turma = array();
                        $turma['ano_lectivo_id'] = $anoLectivo['AnoLectivo']['id'];
                        $turma['ano_curricular'] = $disciplinaPlanoEstudo['DisciplinaPlanoEstudo']['ano_curricular'];
                        $turma['semestre_curricular'] = $disciplinaPlanoEstudo['DisciplinaPlanoEstudo']['semestre_curricular'];
                        $turma['curso_id'] = $aluno['Aluno']['curso_id'];
                        $turma['escola_id'] = 1;
                        $turma['plano_estudo_id'] = $aluno['Aluno']['plano_estudo_id'];
                        $turma['turno_id'] = null;
                        $turma['disciplina_id'] = $disciplinaPlanoEstudo['DisciplinaPlanoEstudo']['disciplina_id'];
                        $turma['estado_turma_id'] = 1;
                        $turma['semestre_lectivo_id'] = Configure::read('OpenSGA.semestre_lectivo_id');
                        $nome = $disciplinaPlanoEstudo['Disciplina']['name'] . " - " . $aluno['PlanoEstudo']['name'];
                        $turma['name'] = $nome;

                        $turmas = array('Turma' => $turma);
                        $this->Aluno->Curso->Turma->create();
                        $this->Aluno->Curso->Turma->save($turmas);
                        $turmaId = $this->Aluno->Curso->Turma->id;
                        debug($turma);
                    } else {
                        $turmaId = $turmaExiste['Turma']['id'];
                    }
                    $matricula = $this->Aluno->Matricula->findByAlunoIdAndAnoLectivoId($aluno['Aluno']['id'], $anoLectivo['AnoLectivo']['id']);
                    $inscricaoExiste = $this->Aluno->Inscricao->find('first', array(
                        'conditions' => array(
                            'aluno_id' => $aluno['Aluno']['id'],
                            'turma_id' => $turmaId,
                            'estado_inscricao_id' => 1
                        )
                    ));
                    $inscricaoSave = array(
                        'Inscricao' => array(
                            'aluno_id' => $data['aluno_id'],
                            'turma_id' => $turmaId,
                            'estado_inscricao_id' => 1,
                            'matricula_id' => $data['matricula_id'],
                            'data' => date('Y-m-d'),
                            'pagamento_id' => $pagamento_id,
                            'tipo_inscricao_id' => 1
                        )
                    );
                    if (empty($inscricaoExiste)) {
                        if ($this->validaInscricao($inscricaoSave)) {
                            $this->create();
                            if (!$this->save($inscricaoSave)) {
                                $dataSource->rollback();
                                return false;
                            }
                        } else {
                            $dataSource->rollback();
                            return false;
                        }

                    }


				} else {
					$dataSource->rollback();
					return false;
				}
			}

			//Chamamos o Metodo Gera Pagamentos, Para Gerar os pagamentos deste Aluno
			if ($this->FinanceiroTransacao->FinanceiroPagamento->gerarPagamentosByAluno($data['FinanceiroTransacao']['aluno_id'], $data)) {
				return $dataSource->commit();
			}
			//return $dataSource->commit();
		}


		$dataSource->rollback();
	}

    public function getAllDisciplinasForInscricao($alunoId,$anoLectivoId=null){
        if(!$anoLectivoId){
            $anoLectivo = Configure::read('OpenSGA.ano_lectivo');
            $anoLectivo  = $this->Turma->AnoLectivo->findByAno($anoLectivo);
            $anoLectivoId = $anoLectivo['AnoLectivo']['id'];
        }

        $this->Aluno->contain([
            'Matricula'=>[
                'conditions'=>[
                    'ano_lectivo_id'=>$anoLectivoId
                ]
            ]
        ]);
        $aluno = $this->Aluno->findById($alunoId);
        $cadeirasInscritas = $this->getAllCadeirasInscritasByAlunoSemestre($alunoId);

        $disciplinasFeitas = $this->getAllInscricoesByAlunoAndEstado($alunoId,[4,5,6,13]);
        $inscricaosExcluir = Hash::merge($cadeirasInscritas,$disciplinasFeitas);

        $disciplinasExcluir = Hash::extract($inscricaosExcluir,'{n}.Turma.disciplina_id');
        debug($disciplinasExcluir);
        $this->Aluno->PlanoEstudo->DisciplinaPlanoEstudo->contain([
            'Disciplina'
        ]);

        $disciplinaPlanoEstudo = $this->Aluno->PlanoEstudo->DisciplinaPlanoEstudo->find('all',[
            'conditions'=>[
                'plano_estudo_id'=>$aluno['Matricula'][0]['plano_estudo_id'],
                'Disciplina.id NOT'=>$disciplinasExcluir
            ],
            'order'=>[
                'ano_curricular','semestre_curricular'
            ]

        ]);
        return $disciplinaPlanoEstudo;
    }

}

?>