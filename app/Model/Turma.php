<?php

/**
 * OpenSGA - Sistema de Gestão Académica
 *   Copyright (C) 2010-2011  INFOmoz (Informática-Moçambique)
 *
 * Este programa é um software livre: Você pode redistribuir e/ou modificar
 * todo ou parte deste programa, desde que siga os termos da licença por nele
 * estabelecidos. Grande parte do código deste programa está sob a licença
 * GNU Affero General Public License publicada pela Free Software Foundation.
 * A versão original desta licença está disponível na pasta raiz deste software.
 *
 * Este software é distribuido sob a perspectiva de que possa ser útil para
 * satisfazer as necessidades dos seus utilizadores, mas SEM NENHUMA GARANTIA. Veja
 * os termos da licença GNU Affero General Public License para mais detalhes
 *
 * As redistribuições deste software, mesmo quando o código-fonte for modificado significativamente,
 * devem manter está informação legal, assim como a licença original do software.
 *
 * @copyright     Copyright 2010-2011, INFOmoz (Informática-Moçambique) (http://infomoz.net)
 * * @link          http://opensga.com OpenSGA  - Sistema de Gestão Académica
 * @author		  Elisio Leonardo (elisio.leonardo@gmail.com)
 * @package       opensga
 * @subpackage    opensga.core.controller
 * @since         OpenSGA v 0.10.0.0

 *
 */
/**
 * Bibliotecas incluidas
 */

/**
 * Modelo Turma
 *
 * Modelo para a manipulação da turma
 * Executa todas as conexões á base de dados que envolvam directamente a tabela turmas.
 * Todas as funções para a manipulação da tabela turmas devem ser definidas aqui
 *
 *
 * @package       opensga
 * @subpackage    opensga.core.modelo
 * @link          http://book.cakephp.org/view/1000/Models
 * @Todo Colocar o link para a documentação aqui
 */
class Turma extends AppModel {

	//The Associations below have been created with all possible keys, those that are not needed can be removed

	public $belongsTo = array(
		'AnoLectivo' => array(
			'className' => 'AnoLectivo',
			'foreignKey' => 'ano_lectivo_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'SemestreLectivo' => array(
			'className' => 'SemestreLectivo',
			'foreignKey' => 'semestre_lectivo_id',
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
		'Turno' => array(
			'className' => 'Turno',
			'foreignKey' => 'turno_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Disciplina' => array(
			'className' => 'Disciplina',
			'foreignKey' => 'disciplina_id',
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
		'AnoLectivo' => array(
			'className' => 'AnoLectivo',
			'foreignKey' => 'ano_lectivo_id',
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
		'EstadoTurma' => array(
			'className' => 'EstadoTurma',
			'foreignKey' => 'estado_turma_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
	public $hasMany = array(
		'Inscricao' => array(
			'className' => 'Inscricao',
			'foreignKey' => 'turma_id',
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
		'Avaliacao' => array(
			'className' => 'Avaliacao',
			'foreignKey' => 'turma_id',
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
		'TurmaTipoAvaliacao' => array(
			'className' => 'TurmaTipoAvaliacao',
			'foreignKey' => 'turma_id',
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
		'DocenteTurma' => array(
			'className' => 'DocenteTurma',
			'foreignKey' => 'turma_id',
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
	 * Adiciona um Docente a Uma turma.
	 * @todo falta validar
	 * @todo Uma turma so pode ter um regente
	 *
	 * @todo se calhar limitar o numero de assistentes
	 * @param type $data
	 * @return type
	 */
	public function adicionaDocente($data) {
		if ($this->DocenteTurma->save($data)) {
			return TRUE;
		} else {
			return false;
		}
	}

	/**
	 * Cria todas as turmas referentes a aquele ano lectivo e aquele semestre
	 * @Todo Testar essa funcao
	 * @Todo Para facilitar vamos considerar so um plano de estudos activo
	 * @todo Podemos usar transactions aqui ;)
	 */
	function criarTurmas($plano_estudo_id) {
		$datasource = $this->getDataSource();
		$datasource->begin();

		$ano_lectivo_id = Configure::read('OpenSGA.ano_lectivo_id');
		$semestre_id = Configure::read('OpenSGA.semestre_lectivo_id');
		$disciplinas = $this->PlanoEstudo->getAllDisciplinasByPlanoestudo($plano_estudo_id);
		//$semestre = $this->SemestreLectivo->findById($semestre_id);
		$turnos = $this->Turno->find('list');
		foreach ($turnos as $turno_id => $turno) {
			foreach ($disciplinas as $disciplina) {

				$turma = array();
				$turma['ano_lectivo_id'] = $ano_lectivo_id;
				$turma['ano_curricular'] = $disciplina['p']['ano'];
				$turma['semestre_curricular'] = $disciplina['p']['semestre'];
				$turma['curso_id'] = $disciplina['pe']['curso_id'];
				$turma['escola_id'] = 1;
				$turma['plano_estudo_id'] = $plano_estudo_id;
				$turma['turno_id'] = $turno_id;
				$turma['disciplina_id'] = $disciplina['d']['id'];
				$turma['estado_turma_id'] = 1;
				$turma['semestre_lectivo_id'] = $semestre_id;
				$nome = $disciplina['d']['name'] . " - " . $disciplina['pe']['name'];
				$turma['name'] = $nome;

				$turmas = array('Turma' => $turma);

				//Primeiro precisamos ver se a turma nao esta criada ainda
				$turma_existe = $this->find('first', array('recursive' => -1, 'conditions' => array('ano_lectivo_id' => $ano_lectivo_id, 'plano_estudo_id' => $plano_estudo_id, 'disciplina_id' => $disciplina['d']['id'], 'ano_curricular' => $turma['ano_curricular'], 'semestre_curricular' => $turma['semestre_curricular'], 'turno_id' => $turma['turno_id'], 'semestre_lectivo_id' => $semestre_id)));

				if (!$turma_existe) {
					$this->create();
					$this->save($turmas);
				}
			}
		}
		$datasource->commit();
	}

	/**
	 * Esta função retorna todas as turmas do plano curricular do aluno
	 *
	 * A função filtra as turmas existentes no sistema de acordo com as condições da
	 * matricula do aluno.
	 * Retorna um array contendo o ID da turma e o nome da disciplina correspondente a turma
	 *
	 * @param int $aluno_id o ID do aluno em questão
	 * @return array Um array contendo todas as turmas do plano curricular do aluno
	 * @access public
	 * @link http://book.cakephp.org/view/1031/Saving-Your-Data
	 * @Todo Colocar o link para a documentação aqui
	 * @Todo Filtrar para apenas mostrar as turmas em que o aluno pode se inscrever
	 */
	function getAllByAlunoForInscricao($alunoId, $anoLectivoId = null) {
		if ($anoLectivoId == null) {
			$anoLectivo = $this->AnoLectivo->findByAno(Configure::read('OpenSGA.ano_lectivo'));
			$anoLectivoId = $anoLectivo['AnoLectivo']['id'];
		}
		$matricula = $this->Inscricao->Matricula->findByAlunoIdAndAnoLectivoId($alunoId, $anoLectivoId);
		//Se nao renovou matricula naquele ano, nao aparece nenhuma cadeira para se inscrever
		if (empty($matricula)) {
			return array();
		}
		//Primeiro vamos pegar todas as disciplinas do plano de estudos
		$todasDisciplinas = $this->PlanoEstudo->getAllDisciplinas($matricula['Matricula']['plano_estudo_id']);


		$conditions = array('Turma.plano_estudo_id' => $matricula['Matricula']['plano_estudo_id'], 'Turma.estado_turma_id' => 1, 'Turma.ano_lectivo_id' => $anoLectivoId);

		$this->contain(array(
			'Disciplina', 'PlanoEstudo'
		));
		$turmas = $this->find('all', array('conditions' => $conditions, 'fields' => array('Turma.id', 'Disciplina.name', 'Disciplina.id', 'Turma.ano_curricular', 'Turma.semestre_curricular', 'PlanoEstudo.name'), 'order' => array('Turma.ano_curricular', 'Turma.semestre_curricular')));

		return $turmas;
	}

	function getAllByPlanoEstudoAntigo($aluno_id) {
		$matricula = $this->Inscricao->Matricula->findByAlunoId($aluno_id);
		$this->Inscricao->Aluno->recursive = -1;
		//Primeiro vamos pegar todas as disciplinas do plano de estudos

		$todas_disciplinas = $this->PlanoEstudo->getAllDisciplinas($matricula['Matricula']['plano_estudo_id']);


		$conditions = array('Turma.plano_estudo_id' => $matricula['Matricula']['plano_estudo_id'], 'Turma.estado_turma_id' => 1, 'Turma.ano_lectivo_id' => Configure::read('OpenSGA.ano_lectivo_id'));

		$this->contain(array(
			'Disciplina', 'PlanoEstudo'
		));
		$turmas = $this->find('all', array('conditions' => $conditions, 'fields' => array('Turma.id', 'Disciplina.name', 'Disciplina.id', 'Turma.ano_curricular', 'Turma.semestre_curricular', 'PlanoEstudo.name'), 'order' => array('Turma.ano_curricular', 'Turma.semestre_curricular')));

		$turmaIds = Hash::extract($turmas, '{n}.Disciplina.id');
		$conditions2 = array('Turma.curso_id' => $matricula['Matricula']['curso_id'], 'Turma.estado_turma_id' => 1, 'Turma.ano_lectivo_id' => Configure::read('OpenSGA.ano_lectivo_id'), 'Turma.disciplina_id NOT' => $turmaIds);

		$this->contain(array(
			'Disciplina', 'PlanoEstudo'
		));
		$turmas2 = $this->find('all', array('conditions' => $conditions2, 'fields' => array('Turma.id', 'Disciplina.name', 'Disciplina.id', 'Turma.ano_curricular', 'Turma.semestre_curricular', 'PlanoEstudo.name'), 'order' => array('Turma.ano_curricular', 'Turma.semestre_curricular')));


		return $turmas2;
	}

	function getAllTurmasInscritas() {

	}

	function getAllTurmasActivasByPlanoEstudo($plano) {
		$this->recursive = 0;
		$turmas = $this->find('all', array('conditions' => array('plano_estudo_id' => $plano, 'estado' => 1), 'fields' => array('Turma.id', 'Disciplina.name')));


		return $turmas;
	}

	public function getAllTurmasByDocente($docenteId, $estadoTurmaId = 1) {
		$turmasDocente = $this->DocenteTurma->findAllByDocenteId($docenteId);

		$turmaIds = Hash::extract($turmasDocente, '{n}.DocenteTurma.turma_id');

		$turmas = $this->find('all', array('conditions' => array('Turma.id' => $turmaIds, 'Turma.estado_turma_id' => $estadoTurmaId)));
		return $turmas;
	}

	// Faz o update do estado da turma para fechada
	function upDateTurma($t0009anolectivo_id, $curso_id) {
		$query = "update t0010turmas tt set tt.estado = 3 where tt.t0003curso_id = {$curso_id} and tt.t0009anolectivo_id = {$t0009anolectivo_id}";
		$resultado = $this->query($query);
		//var_dump($query);
		return $resultado;
	}

	// Contacta os alunos inscritos numa determinada turma
	function getAlunosInscritos($turma_id) {
		$query = "select count(*) from t0013inscricaos ti, t0010turmas tt where ti.t0010turma_id = tt.id and ti.t0010turma_id = {$turma_id}";
		$resultado = $this->query($query);
		//var_dump($resultado);
		return $resultado;
	}

	// Devolve todos os estudante aprovados
	function getAlunosAprovados($turma_id) {
		$query = "select count(*) from t0013inscricaos ti, t0010turmas tt where ti.t0010turma_id = tt.id and ti.tg0020estadoinscricao_id =2 and ti.t0010turma_id = {$turma_id}";
		$resultado = $this->query($query);
		return $resultado;
	}

	// Devolve todos os estudante reprovados
	function getAlunosReprovados($turma_id) {
		$query = "select count(*) from t0013inscricaos ti, t0010turmas tt where ti.t0010turma_id = tt.id and ti.tg0020estadoinscricao_id =3 and ti.t0010turma_id = {$turma_id}";
		$resultado = $this->query($query);
		return $resultado;
	}

	// Devolve a media da turma
	function getSomaNotaFinal($turma_id) {
		$query = "select sum(notafinal) from t0013inscricaos ti, t0010turmas tt where ti.t0010turma_id = tt.id and ti.t0010turma_id = {$turma_id}";
		//var_dump($query);
		$resultado = $this->query($query);
		return $resultado;
	}

	// Devolve o nome do docente da turma
	function getDocente($turma_id) {
		$query = "select tf.name from t0010turmas tt, t0013inscricaos ti, funcionarios tf where ti.t0010turma_id = tt.id and tt.funcionario_id = tf.id and ti.t0010turma_id = {$turma_id}";
		//var_dump($query);
		$resultado = $this->query($query);
		return $resultado;
	}

	// Devolve o nome do assistente da turma
	function getAssistente($turma_id) {
		$query = "select tf.name from t0010turmas tt, t0013inscricaos ti, funcionarios tf where ti.t0010turma_id = tt.id and tt.funcionario_ass_id = tf.id and ti.t0010turma_id = {$turma_id}";
		//var_dump($query);
		$resultado = $this->query($query);
		return $resultado;
	}

	// Devolve o nome do plano
	function getPlanoEstudo($turma_id) {
		$query = "select tp.name from t0010turmas tt, t0005planoestudos tp, t0013inscricaos ti where ti.t0010turma_id = tt.id and  tt.t0005planoestudo_id = tp.id and ti.t0010turma_id = {$turma_id}";
		//var_dump($query);
		$resultado = $this->query($query);
		return $resultado;
	}

	public function getRegente($turmaId) {
		$this->DocenteTurma->contain(array(
			'Docente' => array(
				'Entidade'
			)
		));
		return $this->DocenteTurma->find('first', array('conditions' => array('turma_id' => $turmaId, 'estado_docente_turma_id' => 1, 'tipo_docente_turma_id' => 1)));
	}

	/**
	 * Retorna todos os assistentes de uma turma
	 * @param type $turma_id
	 * @return type
	 */
	public function getAllAssistentes($turmaId) {
		$this->DocenteTurma->contain(array(
			'Docente' => array(
				'Entidade'
			)
		));
		return $this->DocenteTurma->find('all', array('conditions' => array('turma_id' => $turmaId, 'estado_docente_turma_id' => 1, 'tipo_docente_turma_id' => 2)));
	}

	/**
	 * Fecha todas as turmas e inscricoes de um dado semestre.
	 */
	public function fecharTodasTurmas($semestre = null) {
		if ($semestre == null) {
			$semestre = Configure::read('OpenSGA.semestre_lectivo_id');
		}
		$dataSource = $this->getDataSource();
		$dataSource->begin();

		$this->contain('Inscricao');
		$turmas = $this->find('all', array('conditions' => array('Turma.semestre_lectivo_id' => $semestre, 'Turma.estado_turma_id' => 1), 'limit' => 100));



		foreach ($turmas as $turma) {
			$inscricaos = $turma['Inscricao'];
			foreach ($inscricaos as $inscricao) {
				if ($inscricao['estadoinscricao_id'] == 1) {
					$this->Inscricao->id = $inscricao['id'];
					$this->Inscricao->set('estadoinscricao_id', 6);
					$this->Inscricao->save();
				}
			}

			//Fechamos a turma tambem
			$this->id = $turma['Turma']['id'];
			$this->set('estado_turma_id', 3);
			$this->save();
		}

		//return $dataSource->rollback();
		return $dataSource->commit();
	}

	function getTurmasByFuncionario($funcionario_id) {
		$query = "SELECT tt.id FROM t0010turmas tt, funcionarios tf where (tf.id = tt.funcionario_id or tt.funcionario_ass_id = tf.id) and tf.id  = {$funcionario_id} ";
		$resultado = $this->query($query);
		return $resultado;
	}

	public function hasAvaliacoesAbertas($turma_id) {
		$avaliacoes = $this->TurmaTipoAvaliacao->find('all', array('conditions' => array('TurmaTipoAvaliacao.turma_id' => $turma_id)));
		debug($avaliacoes);
	}

	public function isDocente($turmaId, $docenteId) {
		$docenteTurma = $this->DocenteTurma->find('first', array('conditions' => array('turma_id' => $turmaId, 'docente_id' => $docenteId, 'estado_docente_turma_id' => 1)));
		if ($docenteTurma) {
			return true;
		}
		return false;
	}

	public function processaPauta($pautaURL, $turmaId) {
		AuditableConfig::$Logger = ClassRegistry::init('Auditable.Logger');
		App::import('Vendor', 'PHPExcel', array('file' => 'PHPExcel.php'));
		if (!class_exists('PHPExcel')) {
			throw new CakeException('Vendor class PHPExcel not found!');
		}


		$xls = PHPExcel_IOFactory::load(APP . $pautaURL);

		$ws = $xls->getSheetByName('avaliacoes');

		//Primeiro vamos ver todos os testes feitos
		$testeExiste = true;
		$mapaTodosTestes = array('F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O');
		$mapaTestes = array();
		$ordemTeste = 0;
		foreach ($mapaTodosTestes as $k => $v) {
			$verificaTeste = $ws->getCell($v . '6')->getCalculatedValue();

			if ($verificaTeste == 0) {

			} else {
				$ordemTeste += 1;

				$turmaTipoAvaliacao = $this->TurmaTipoAvaliacao->find('first', array('conditions' => array('turma_id' => $turmaId, 'ordem' => $ordemTeste)));
				if (empty($turmaTipoAvaliacao)) {
					$arrayNovaAvaliacao = array(
						'TurmaTipoAvaliacao' => array(
							'turma_id' => $turmaId,
							'tipo_avaliacao_id' => 1,
							'peso' => $verificaTeste * 100,
							'ordem' => $ordemTeste,
							'estado_turma_avaliacao_id' => 1
						)
					);
					$this->TurmaTipoAvaliacao->create();
					$this->TurmaTipoAvaliacao->save($arrayNovaAvaliacao);
					$turmaTipoAvaliacao = $this->TurmaTipoAvaliacao->find('first', array('conditions' => array('turma_id' => $turmaId, 'ordem' => $ordemTeste)));
				} else {
					$pesoOriginal = $turmaTipoAvaliacao['TurmaTipoAvaliacao']['peso'];
					if ($pesoOriginal != $verificaTeste * 100) {
						$this->TurmaTipoAvaliacao->id = $turmaTipoAvaliacao['TurmaTipoAvaliacao']['id'];
						$this->TurmaTipoAvaliacao->set('peso', $verificaTeste * 100);
						$this->TurmaTipoAvaliacao->save();
					}
				}
				$mapaTestes[] = array(
					'letra' => $v,
					'peso' => $verificaTeste * 100,
					'ordem' => $ordemTeste,
					'turma_tipo_avaliacao_id' => $turmaTipoAvaliacao['TurmaTipoAvaliacao']['id'],
					'tipo_avaliacao_id' => $turmaTipoAvaliacao['TurmaTipoAvaliacao']['tipo_avaliacao_id'],
					'data_marcada' => $turmaTipoAvaliacao['TurmaTipoAvaliacao']['data_marcada'],
					'data_realizada' => $turmaTipoAvaliacao['TurmaTipoAvaliacao']['data_realizada']
				);
			}
		}

		$linhaActual = 9;
		foreach ($ws->getRowIterator() as $row) {
			if ($ws->getCell('A' . $linhaActual)->getValue() == '') {
				break;
			}
			$numeroEstudante = $ws->getCell('C' . $linhaActual)->getCalculatedValue();
			$aluno = $this->Inscricao->Aluno->findByCodigo($numeroEstudante);
			if (!empty($aluno)) {
				foreach ($mapaTestes as $mapaTeste) {
					$nota = $ws->getCell($mapaTeste['letra'] . $linhaActual)->getCalculatedValue();
					$avaliacaoExiste = $this->TurmaTipoAvaliacao->Avaliacao->find('first', array('conditions' => array('turma_tipo_avaliacao_id' => $mapaTeste['turma_tipo_avaliacao_id'], 'aluno_id' => $aluno['Aluno']['id'], 'estado_avaliacao_id' => 1)));
					if (!$avaliacaoExiste) {
						$arrayNovaAvaliacao = array(
							'Avaliacao' => array(
								'turma_tipo_avaliacao_id' => $mapaTeste['turma_tipo_avaliacao_id'],
								'nota' => $nota,
								'data_avaliacao' => $mapaTeste['data_realizada'],
								'aluno_id' => $aluno['Aluno']['id'],
								'estado_avaliacao_id' => 1
							)
						);
						$this->TurmaTipoAvaliacao->Avaliacao->create();
						$this->TurmaTipoAvaliacao->Avaliacao->save($arrayNovaAvaliacao);
					} else {
						$this->TurmaTipoAvaliacao->Avaliacao->id = $avaliacaoExiste['Avaliacao']['id'];
						$this->TurmaTipoAvaliacao->Avaliacao->set('nota', $nota);
						$this->TurmaTipoAvaliacao->Avaliacao->set('data_avaliacao', $mapaTeste['data_realizada']);
						$this->TurmaTipoAvaliacao->Avaliacao->save();
					}
				}
			}

			$linhaActual++;
		}
		return true;
	}

	function getTotalAlunosInscritosByTurma($turma_id = null) {

	}

}

?>