<?php

App::uses('CakeSession', 'Model/Datasource');

/**
 * Model de Matricula
 *
 * @copyright     Copyright 2010-2011, INFOmoz (Informática-Moçambique) (http://infomoz.net)
 * * @link          http://opensga.com OpenSGA  - Sistema de Gestão Académica
 * @author		  Elisio Leonardo (elisio.leonardo@gmail.com)
 * @package       opensga
 * @subpackage    opensga.core.controller
 * @since         OpenSGA v 0.10.0.0

 *
 */
class Matricula extends AppModel {

	var $name = 'Matricula';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	public $actsAs = array('Auditable.Auditable');
	var $belongsTo = array(
		'Aluno' => array(
			'className' => 'Aluno',
			'foreignKey' => 'aluno_id',
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
		'PlanoEstudo' => array(
			'className' => 'PlanoEstudo',
			'foreignKey' => 'plano_estudo_id',
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
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
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
		),
		'AnoLectivo' => array(
			'className' => 'AnoLectivo',
			'foreignKey' => 'ano_lectivo_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'TipoMatricula' => array(
			'className' => 'TipoMatricula',
			'foreignKey' => 'tipo_matricula_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
	var $validate = array(
		'Aluno_id' => array(
			'rule' => 'validaMatricula',
			'message' => 'Este aluno ja possui uma matricula activa'
		)
	);

	/**
	 * Retorna todos os alunos matriculados num dado plano de estudos
	 */
	function getAllAlunosMatriculados($ano_lectivo_id) {
		$alunos = $this->find('all', array('conditions' => array('ano_lectivo_id' => $ano_lectivo_id), 'fields' => array('aluno_id', 'Aluno.codigo')));
		return $alunos;
	}

	public function getAllMatriculasByAluno($alunoId) {
		$this->contain(array(
			'TipoMatricula', 'EstadoMatricula', 'AnoLectivo', 'Curso', 'PlanoEstudo'
		));
		$matriculas = $this->find('all', array('conditions' => array('aluno_id' => $alunoId), 'order' => 'AnoLectivo.ano DESC'));
		return $matriculas;
	}

	function validaMatricula($check) {
		$aluno = $check['aluno_id'];
		$alunos = $this->find('all', array('conditions' => array('aluno_id' => $aluno, 'estado_matricula_id' => 4)));

		if (empty($alunos)) {
			return true;
		}
		return false;
	}

	public function getTotalMatriculasActivas($unidades_organicas = null, $ano_lectivo_id = null) {
		if ($ano_lectivo_id == null) {

			$ano_lectivo_id = Configure::read('OpenSGA.ano_lectivo_id');
		}

		$conditions = array();
		$conditions['estado_matricula_id'] = 1;
		$conditions['Matricula.ano_lectivo_id'] = $ano_lectivo_id;
		if ($unidades_organicas) {
			$conditions['Curso.unidade_organica_id'] = $unidades_organicas;
		}
		$this->contain('Curso');
		return $this->find('count', array('conditions' => $conditions));
	}

	/**
	 * Renova a Matricula de um estudante. Tambem processa o pagamento da renovação de matricula
	 * @param type $data
	 */
	public function renovaMatricula($data) {
		$dataSource = $this->getDataSource();
		$dataSource->begin();

		foreach ($data['AnoLectivo'] as $k => $v) {
			if ($v != 0) {
				$data['Matricula']['ano_lectivo_id'] = $v;
				$this->Aluno->Matricula->create();
				$this->Aluno->Matricula->save($data);
			}
		}
		return $dataSource->commit();
	}

	/**
	 * Retorna o Total de Alunos que nao renovou matricula num determinado ano lectivo
	 * @param type $semestre_id
	 */
	public function getTotalMatriculasNaoRenovadas($unidades_organicas = null, $ano_lectivo_id = null) {

		$total_matriculas_renovadas = $this->getTotalMatriculasActivas($unidades_organicas, $ano_lectivo_id);

		$total_alunos_activos = $this->Aluno->getTotalAlunosActivos($unidades_organicas);

		return $total_alunos_activos - $total_matriculas_renovadas;
	}

	/**
	 * Retorna o estado da renovacao de matricula do Aluno.
	 * @param type $aluno_id
	 */
	public function getStatusRenovacao($aluno_id, $renovacoes_futuras = false) {

		//Primeiro vamos buscar todos os anos lectivos que ele devia matricular
		$this->Aluno->contain('HistoricoCurso');
		$aluno = $this->Aluno->findById($aluno_id);


		$this->AnoLectivo->contain();
		$ano_lectivo_conditions = array('ano >=' => $aluno['Aluno']['ano_ingresso']);
		if ($aluno['Aluno']['estado_aluno_id'] == 3) {
			$this->Aluno->HistoricoCurso->contain();
			$historicoAluno = $this->Aluno->HistoricoCurso->find('first', array('conditions' => array('aluno_id' => $aluno['Aluno']['id'], 'curso_id' => $aluno['Aluno']['curso_id'])));
			$ano_lectivo_conditions['ano <='] = $historicoAluno['HistoricoCurso']['ano_fim'];
		} else {
			if ($renovacoes_futuras) {
				$ano_lectivo_maximo = $this->AnoLectivo->find('first', array('order' => 'AnoLectivo.ano DESC'));
				$ano_lectivo_conditions['ano <='] = $ano_lectivo_maximo['AnoLectivo']['ano'];
			} else {
				$ano_lectivo_conditions['ano <='] = Configure::read('OpenSGA.ano_lectivo');
			}
		}
		$ano_lectivos = $this->AnoLectivo->find('all', array('conditions' => $ano_lectivo_conditions, 'order' => 'ano desc'));
		$array_renovacao_falta = array();
		foreach ($ano_lectivos as $ano_lectivo) {
			$matricula = $this->find('first', array('conditions' => array('aluno_id' => $aluno_id, 'ano_lectivo_id' => $ano_lectivo['AnoLectivo']['id'])));
			if (empty($matricula)) {
				$array_renovacao_falta[] = $ano_lectivo;
			} else {
				return $array_renovacao_falta;
			}
		}
		return $array_renovacao_falta;
	}

	/**
	 * Retorna a renovacao dado o id do aluno e o ano lectivo
	 *
	 * @todo rever essa funcao/melhorar
	 * @param type $aluno_id
	 * @param type $ano
	 * @return type
	 */
	public function getRenovacaoByAlunoAndAnoLectivo($aluno_id, $ano) {
		$ano_lectivo_id = $this->AnoLectivo->getAnoLectivoIdByAno($ano);

		$matricula = $this->find('first', array('conditions' => array('aluno_id' => $aluno_id, 'ano_lectivo_id' => $ano_lectivo_id)));
		return $matricula;
	}

	public function processaFicheiroRenovacao($file_url) {
		App::uses('File', 'Utility');
		$file = new File(APP . $file_url);
		$linhas = file(APP . $file_url, FILE_IGNORE_NEW_LINES);
		$datasource = $this->getDataSource();
		$datasource->begin();
		foreach ($linhas as $linha) {

			switch ($linha[0]) {
				case '0': //Primeira Linha
					$dia = substr($linha, 6, 2);
					$mes = substr($linha, 8, 2);
					$ano = substr($linha, 10, 4);
					$data = $ano . '-' . $mes . '-' . $dia;
					break;
				case '1':
					$referencia = substr($linha, 1, 11);
					$montante = substr($linha, 12, 16);
					$comissao = substr($linha, 28, 16);
					$dia = substr($linha, 44, 2);
					$mes = substr($linha, 46, 2);
					$ano = substr($linha, 48, 4);
					$hora = substr($linha, 52, 2);
					$minuto = substr($linha, 54, 2);
					$segundo = substr($linha, 56, 2);
					$data = $ano . '-' . $mes . '-' . $dia . " " . $hora . ":" . $minuto . ":" . $segundo;

					$transacao_id = substr($linha, 58, 7);
					$atm_id = substr($linha, 65, 10);
					$localizacao_atm = substr($linha, 75, 16);
					$montante_decimal = substr($montante, -2);
					debug($montante_decimal);
					$montante_real = ltrim(substr($montante, 0, -2), '0');
					debug($montante_real);
					$montante = $montante_real . '.' . $montante_decimal;



					$transacao = array();
					$deposito = array();
					$transacao['tipo_transacao_id'] = 1;
					$transacao['valor'] = $montante;
					$this->Aluno->Entidade->FinanceiroTransacao->FinanceiroPagamento->contain('Aluno');
					$pagamento = $this->Aluno->Entidade->FinanceiroTransacao->FinanceiroPagamento->findByReferenciaPagamento($referencia);
					if ($pagamento) {
						$transacao['entidade_id'] = $pagamento['FinanceiroPagamento']['entidade_id'];
						$transacao['financeiro_conta_id'] = $pagamento['FinanceiroPagamento']['financeiro_conta_id'];
						$deposito['entidade_id'] = $pagamento['FinanceiroPagamento']['entidade_id'];
						$deposito['financeiro_conta_id'] = $pagamento['FinanceiroPagamento']['financeiro_conta_id'];
						$transacao['financeiro_estado_transacao_id'] = 4;

						$deposito['financeiro_estado_deposito_id'] = 2;
						$anolectivo = $this->AnoLectivo->findByAno('2014');

						//Renova a Matricula se o valor for aceitavel.
						if ($pagamento['FinanceiroPagamento']['valor'] == $montante) {
							$deposito['data_reconciliacao'] = date('Y-m-d H:i:s');
							$matricula_existe = $this->find('first', array('conditions' => array('aluno_id' => $pagamento['FinanceiroPagamento']['aluno_id'], 'ano_lectivo_id' => $anolectivo['AnoLectivo']['id'])));
							if (empty($matricula_existe)) {

								//verifica se o aluno é regular
								if ($this->Aluno->isRegular($pagamento['Aluno']['aluno_id'])) {
									$this->create();
									$matricula = array(
										'aluno_id' => $pagamento['Aluno']['id'],
										'curso_id' => $pagamento['Aluno']['curso_id'],
										'plano_estudo_id' => $pagamento['Aluno']['plano_estudo_id'],
										'data' => $data,
										'estado_matricula_id' => 1,
										'ano_lectivo_id' => $anolectivo['AnoLectivo']['id'],
										'tipo_matricula_id' => 2,
										'user_id' => 1
									);
									$this->save(array('Matricula' => $matricula));
								} else {
									$deposito['financeiro_estado_deposito_id'] = 6;
								}
							} else {
								$deposito['financeiro_estado_deposito_id'] = 5;
							}
						} else {
							$deposito['financeiro_estado_deposito_id'] = 4;
						}
					} else {
						$transacao['financeiro_estado_transacao_id'] = 5;
						$deposito['financeiro_estado_deposito_id'] = 3;
					}
					$this->Aluno->Entidade->FinanceiroTransacao->create();
					$this->Aluno->Entidade->FinanceiroTransacao->save(array('FinanceiroTransacao' => $transacao));

					$deposito['data_deposito'] = $data;
					$deposito['numero_comprovativo'] = $referencia;
					$deposito['financeiro_forma_deposito_id'] = 1;
					$deposito['financeiro_transacao_id'] = $this->Aluno->Entidade->FinanceiroTransacao->id;
					$deposito['financeiro_banco_id'] = 1;
					$deposito['valor'] = $montante;
					$deposito['referencia_deposito'] = $referencia;
					$deposito['id_transacao_banco'] = $transacao_id;
					$this->Aluno->Entidade->FinanceiroTransacao->FinanceiroDeposito->create();
					$this->Aluno->Entidade->FinanceiroTransacao->FinanceiroDeposito->save(array('FinanceiroDeposito' => $deposito));






					break;
				case '9':
					$total_pagamentos = substr($linha, 1, 7);
					$valor_total = substr($linha, 8, 16);
					$total_commissoes = substr($linha, 24, 16);


					break;
			}
		}
		$datasource->commit();
		return true;
	}

}

?>