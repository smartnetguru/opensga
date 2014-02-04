<?php

/**
 * Controller inscrições
 *
 * Controller para o processamento das inscrições dos alunos
 * Executa todos os detalhes relacionados ás inscrições dos alunos no sistema
 * A maior parte das validações e filtragens de dados ocorrem aqui
 *
 *
 * @copyright     Copyright 2010-2011, INFOmoz (Informática-Moçambique) (http://infomoz.net)
 * @link          http://opensga.com OpenSGA  - Sistema de Gestão Académica
 * @author		  Elisio Leonardo (elisio.leonardo@gmail.com)
 * @package       opensga
 * @subpackage    opensga.core.inscricoes
 * @since         OpenSGA v 0.1.0
 * @version       OpenSGA v 0.5.0
 *
 *
 * @property Inscricao $Inscricao
 */
class InscricaosController extends AppController {

	var $name = 'Inscricaos';

	public function faculdade_apagar_inscricao($inscricao_id) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Inscricao->id = $inscricao_id;
		$inscricao = $this->Inscricao->read();

		if (!$this->Inscricao->exists()) {
			throw new NotFoundException(__('Inscricao Invalida'));
		}
		if ($this->Inscricao->delete()) {
			$this->Session->setFlash(__('Inscricao Apagada com Sucesso'), 'default', array('class' => 'alert success'));
			$this->redirect(array('action' => 'ver_inscricoes_aluno', $inscricao['Inscricao']['aluno_id'], 'faculdade' => true));
		}
		$this->Session->setFlash(__('Problemas ao apagar a inscricao. Tente novamente'), 'default', array('class' => 'alert error'));
		$this->redirect(array('action' => 'ver_inscricoes_aluno', $inscricao['Inscricao']['aluno_id'], 'faculdade' => true));

		debug($this->request->data);
	}

	/**
	 * Por enquanto o inscrever nao eh seguro
	 * @todo verificar o security no inscrever
	 */
	public function beforeFilter() {
		parent::beforeFilter();

		//No security no inscrever
		if ($this->action == 'faculdade_inscrever' || $this->action == 'faculdade_adicionar_cadeiras_inscricao') {
			$this->Security->csrfCheck = false;
			$this->Security->validatePost = false;
		}
	}

	function index() {

		if ($this->request->is('post') || $this->request->is('put')) {

			$this->Pagamento->Aluno->contain(array('Entidade', 'Curso', 'Matricula'));
			$alunos = $this->Pagamento->Aluno->find('all', array('conditions' => array('OR' => array(array('Entidade.name LIKE' => '%' . $this->request->data['Aluno']['name'] . '%'), array('Aluno.codigo LIKE' => $this->request->data['Aluno']['codigo'])))));

			$this->set(compact('alunos'));
			$this->set('mostrar_resultado', true);
		}
	}

	function view($id = null) {
		//App::Import('Model','Logmv');
		//$logmv = new Logmv;
		App::Import('Model', 'Matricula');
		$matriculas = new Matricula;

		App::Import('Model', 'Turma');
		$turma = new Turma;

		if (!$id) {
			$this->Session->setFlash('Invalido %s', 'flasherror');
			$this->redirect(array('action' => 'index'));
		}
		//	$this->set('t0013inscricao', $this->Inscricao->read(null, $id));
		if (empty($this->data)) {
			$this->data = $this->Inscricao->read(null, $id);
			//$logmv->logview(11,$this->Session->read('Auth.User.id'),$id,$this->data["Inscricao"]["Aluno_id"]);
		}

		//var_dump($this->data);
		$alunos = $this->Inscricao->Aluno->find('list');
		$turmas = $this->Inscricao->Turma->find('list');
		$EpocaAvaliacaos = $this->Inscricao->EpocaAvaliacao->find('list');
		//$notafrequencia = $this->data['Inscricao']['notafrequencia'];


		$estadoinscricao = $this->Inscricao->Estadoinscricao->find('list');

		$curso = $turma->getCursoAluno($this->data['Inscricao']['t0010turma_id']);
		$curso1 = $curso[0]['tc']['name'];

		$docente = $turma->getDocente($this->data['Inscricao']['t0010turma_id']);
		$docente1 = $docente[0]['tf']['name'];

		$assistente = $turma->getAssistente($this->data['Inscricao']['t0010turma_id']);
		$assistente1 = $assistente[0]['tf']['name'];

		$plano = $turma->getPlanoEstudo($this->data['Inscricao']['t0010turma_id']);
		$plano1 = $plano[0]['tp']['name'];

		$turma = $turma->getTurma($this->data['Inscricao']['t0010turma_id']);
		$turma1 = $turma[0]['tt']['name'];

		$turno = $turma->getTurno($this->data['Inscricao']['t0010turma_id']);
		$turno1 = $turno[0]['ttu']['name'];

		$anoCurricular = $turma->getAnoCurricular($this->data['Inscricao']['t0010turma_id']);
		$anoCurricular1 = $anoCurricular[0]['tt']['ano_curricular'];

		$semestreCurricular = $turma->getSemestreCurricular($this->data['Inscricao']['t0010turma_id']);
		$semestreCurricular1 = $semestreCurricular[0]['tt']['semestre_curricular'];

		$anoLectivo = $turma->getAnoLectivo($this->data['Inscricao']['t0010turma_id']);
		$anoLectivo1 = $anoLectivo[0]['tal']['codigo'];


		$this->set(compact('Alunos', 'turmas', 'EpocaAvaliacaos', 'tg0020estadoinscricao', 'funcionarios', 'curso1', 'docente1', 'assistente1', 'plano1', 'turma1', 'turno1', 'anoCurricular1', 'semestreCurricular1', 'anoLectivo1'));
	}

	/**
	 * Adiciona novas cadeiras a um aluno que ja fez inscricao num dado semestre, e recalcula as mensalidades
	 *
	 * @param type $aluno_id
	 * @param type $matricula_id
	 *
	 * @todo Implementar essa cena :(
	 */
	public function faculdade_adicionar_cadeiras_inscricao($aluno_id, $matricula_id) {
		$this->loadModel('Turma');
		$this->loadModel('Aluno');
		$this->loadModel('FinanceiroPagamento');
		$this->loadModel('Matricula');

		$unidade_organica_id = $this->Session->read('Auth.User.unidade_organica_id');

		$this->Inscricao->Aluno->contain(array(
			'Entidade', 'PlanoEstudo', 'Curso' => array('UnidadeOrganica')
		));
		$aluno = $this->Inscricao->Aluno->findById($aluno_id);

		if ($aluno['Curso']['unidade_organica_id'] != $unidade_organica_id) {
			$this->Session->setFlash(__('Nao Possui permissao para aceder a pagina anterior'));
			$this->redirect($this->referer());
		}



		if ($this->request->is('post') || $this->request->is('put')) {

			$aluno_id = $this->request->data['Inscricao']['aluno_id'];
			$matricula_id = $this->request->data['Inscricao']['matricula_id'];
			$inscricao_nova = array();
			foreach ($this->request->data['Inscricao']['disciplinas'] as $k => $v) {
				if ($v > 0) {
					$inscricao_nova[] = $v;
				}
			}

			$this->Session->write('OpenSGA.inscricao.cadeiras', $inscricao_nova);
			$this->Session->write('OpenSGA.inscricao.matricula_id', $matricula_id);
			$this->Session->write('OpenSGA.inscricao.aluno_id', $aluno_id);
			$this->redirect(array('controller' => 'inscricaos', 'action' => 'valida_inscricao'));
		}


		$turmas = $this->Turma->getAllByAlunoForInscricao($aluno_id, $matricula_id);



		$this->set('aluno_id', $aluno_id);
		$this->set('matricula_id', $matricula_id);
		$this->set(compact('turmas', 'disciplinas'));
	}

	/**
	 *
	 * Imprime o Comprovativo de inscricao
	 * @param type $aluno_id
	 * @param type $anolectivo_ano
	 *
	 * @fixme ver o ano lectivo que esta estatico
	 */
	public function faculdade_print_comprovativo_inscricao($aluno_id, $matricula_id, $anolectivo_ano = null) {

		if ($anolectivo_ano == null) {
			$anolectivo = $this->Inscricao->Turma->AnoLectivo->findByAno(Configure::read('OpenSGA.ano_lectivo'));
		} else {
			$anolectivo = $this->Inscricao->Turma->AnoLectivo->findByAno($anolectivo_ano);
		}

		$this->Inscricao->Aluno->contain(array(
			'Entidade' => array(
				'User'
			)
		));
		$aluno = $this->Inscricao->Aluno->findById($aluno_id);
		$matricula = $this->Inscricao->Aluno->Matricula->findByAlunoIdAndAnoLectivoId($aluno_id, $anolectivo['AnoLectivo']['id']);

		//Pegamos todas inscricoes activas
		$this->Inscricao->contain(array(
			'Turma' => array(
				'Disciplina' => array(
					'DisciplinaPlanoEstudo' => array(
						'conditions' => array(
							'plano_estudo_id' => $matricula['Matricula']['plano_estudo_id']
						)
					)
				), 'Curso' => array(
					'UnidadeOrganica'
				), 'PlanoEstudo', 'Turno'
			), 'TipoInscricao'
		));
		$inscricoes_activas = $this->Inscricao->find('all', array('conditions' => array('estado_inscricao_id' => 1, 'aluno_id' => $aluno_id, 'Turma.ano_lectivo_id' => 30)));

		$this->loadModel('Funcionario');
		$this->Funcionario->contain('Entidade');
		$funcionario = $this->Funcionario->getByUserId($inscricoes_activas[0]['Inscricao']['created_by']);

		$this->set(compact('inscricoes_activas', 'aluno', 'anolectivo', 'funcionario'));
	}

	function faculdade_editar_inscricao($inscricao_id = null) {
		$this->Inscricao->id = $id;
		if (!$this->Inscricao->exists()) {
			throw new NotFoundException('Inscricao Invalida');
		}

		App::Import('Model', 'Turma');
		$turma = new Turma;
		//App::Import('Model','Logmv');
		//$logmv = new Logmv;

		if (!$id && empty($this->data)) {
			$this->Session->setFlash('Invalido %s', 'flasherror');
			$this->redirect(array('action' => 'index'));
		}

		if (!empty($this->data)) {
			if ($this->Inscricao->save($this->data)) {
				$this->Session->setFlash('Dado Editados com sucesso', 'flashok');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Erro ao editar dados. Por favor tente de novo.', 'flasherror');
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Inscricao->read(null, $id);
			//$logmv->logUpdate(11,$this->Session->read('Auth.User.id'),$id,$this->data["Inscricao"]["Aluno_id"]);
		}

		//var_dump($this->data);
		$alunos = $this->Inscricao->Aluno->find('list');
		$turmas = $this->Inscricao->Turma->find('list');
		$EpocaAvaliacaos = $this->Inscricao->EpocaAvaliacao->find('list');
		//$notafrequencia = $this->data['Inscricao']['notafrequencia'];

		$estadoinscricao = $this->Inscricao->Estadoinscricao->find('list');

		$curso = $turma->getCursoAluno($this->data['Inscricao']['t0010turma_id']);
		$curso1 = $curso[0]['tc']['name'];

		$docente = $turma->getDocente($this->data['Inscricao']['t0010turma_id']);
		$docente1 = $docente[0]['tf']['name'];

		$assistente = $turma->getAssistente($this->data['Inscricao']['t0010turma_id']);
		$assistente1 = $assistente[0]['tf']['name'];

		$plano = $turma->getPlanoEstudo($this->data['Inscricao']['t0010turma_id']);
		$plano1 = $plano[0]['tp']['name'];

		$turma = $turma->getTurma($this->data['Inscricao']['t0010turma_id']);
		$turma1 = $turma[0]['tt']['name'];

		$turno = $turma->getTurno($this->data['Inscricao']['t0010turma_id']);
		$turno1 = $turno[0]['ttu']['name'];

		$anoCurricular = $turma->getAnoCurricular($this->data['Inscricao']['t0010turma_id']);
		$anoCurricular1 = $anoCurricular[0]['tt']['ano_curricular'];

		$semestreCurricular = $turma->getSemestreCurricular($this->data['Inscricao']['t0010turma_id']);
		$semestreCurricular1 = $semestreCurricular[0]['tt']['semestre_curricular'];

		$anoLectivo = $turma->getAnoLectivo($this->data['Inscricao']['t0010turma_id']);
		$anoLectivo1 = $anoLectivo[0]['tal']['codigo'];


		$this->set(compact('Alunos', 't0010turmas', 'EpocaAvaliacaos', 'tg0020estadoinscricao', 'funcionarios', 'curso1', 'docente1', 'assistente1', 'plano1', 'turma1', 'turno1', 'anoCurricular1', 'semestreCurricular1', 'anoLectivo1'));
	}

	/**
	 * Inscreve alunos depois da primeira matricula
	 * @param type $aluno_id
	 * @param type $matricula_id
	 *
	 *
	 * @todo garantir que so se inscreve quem nao tem dividas no semestre anterior
	 * @todo A lista de disciplinas deve ter em consideracao  a tabela de precedencias
	 * @todo Deve existir possibilidade de inscricao condicional
	 */
	public function faculdade_inscrever($aluno_id, $matricula_id) {
		$this->loadModel('Turma');
		$this->loadModel('Aluno');
		$this->loadModel('FinanceiroPagamento');
		$this->loadModel('Matricula');

		$unidade_organica_id = $this->Session->read('Auth.User.unidade_organica_id');

		$is_regular = $this->Inscricao->Aluno->isRegular($aluno_id);
		if (!$is_regular[0]['regular'] == true) {
			$this->Session->setFlash(__('So pode fazer Inscricoes depois de renovar a matricula para o ano lectivo actual'), 'default', array('class' => 'alert error'));
			$this->redirect($this->referer());
		}
		$this->Inscricao->Aluno->contain(array(
			'Entidade', 'PlanoEstudo', 'Curso' => array('UnidadeOrganica')
		));
		$aluno = $this->Inscricao->Aluno->findById($aluno_id);

		if ($aluno['Curso']['unidade_organica_id'] != $unidade_organica_id) {
			$this->Session->setFlash(__('Nao Possui permissao para aceder a pagina anterior'));
			$this->redirect($this->referer());
		}




		$matricula = $this->Inscricao->Matricula->findById($matricula_id);

		//Primeiro vemos se ainda nao se matriculou no ano lectivo em questao

		$this->Inscricao->contain(array(
			'Turma'
		));
		$inscricoes_activas = $this->Inscricao->find('all', array('conditions' => array('Inscricao.aluno_id' => $aluno_id, 'Turma.ano_lectivo_id' => Configure::read('OpenSGA.ano_lectivo_id'), 'Turma.semestre_lectivo_id' => Configure::read('OpenSGA.semestre_lectivo_id'))));
		if (!empty($inscricoes_activas)) {
			$this->Session->setFlash(__('Este Aluno já fez inscrições neste ano. As cadeiras seguintes serão adicionadas ás inscrições anteriores, e o valor da inscrição será recalculado'), 'default', array('class' => 'alert info'));
			$this->redirect(array('controller' => 'inscricaos', 'action' => 'adicionar_cadeiras_inscricao', $aluno_id, $matricula_id));
		}
		if ($this->request->is('post') || $this->request->is('put')) {

			$aluno_id = $this->request->data['Inscricao']['aluno_id'];
			$matricula_id = $this->request->data['Inscricao']['matricula_id'];
			$inscricao_nova = array();
			foreach ($this->request->data['Inscricao']['disciplinas'] as $k => $v) {
				if ($v > 0) {
					$inscricao_nova[] = $v;
				}
			}

			$this->Session->write('OpenSGA.inscricao.cadeiras', $inscricao_nova);
			$this->Session->write('OpenSGA.inscricao.matricula_id', $matricula_id);
			$this->Session->write('OpenSGA.inscricao.aluno_id', $aluno_id);
			$this->redirect(array('controller' => 'inscricaos', 'action' => 'valida_inscricao'));
		}


		$turmas = $this->Turma->getAllByAlunoForInscricao($aluno_id, $matricula_id);



		$this->set('aluno_id', $aluno_id);
		$this->set('matricula_id', $matricula_id);
		$this->set(compact('turmas', 'disciplinas'));
	}

	/**
	 * Verifica se esta tudo bem com a inscricao e o pagamento
	 */
	public function faculdade_valida_inscricao() {

		$unidade_organica_id = $this->Session->read('Auth.User.unidade_organica_id');
		$aluno_id = $this->Session->read('OpenSGA.inscricao.aluno_id');

		$this->Inscricao->Aluno->contain(array(
			'Entidade', 'PlanoEstudo', 'Curso' => array('UnidadeOrganica')
		));
		$aluno = $this->Inscricao->Aluno->findById($aluno_id);

		if ($aluno['Curso']['unidade_organica_id'] != $unidade_organica_id) {
			$this->Session->setFlash(__('Nao Possui permissao para aceder a pagina anterior'));
			$this->redirect($this->referer());
		}

		$this->Inscricao->Turma->contain(array(
			'Disciplina'
		));
		$turmas = $this->Inscricao->Turma->find('all', array('conditions' => array('Turma.id' => $this->Session->read('OpenSGA.inscricao.cadeiras')), 'order' => array('Turma.ano_curricular DESC', 'Turma.semestre_curricular DESC')));


		$this->loadModel('FinanceiroPagamento');

		$pagamento_normal = $this->FinanceiroPagamento->FinanceiroTipoPagamento->findByCodigo(44);
		$pagamento_atraso = $this->FinanceiroPagamento->FinanceiroTipoPagamento->findByCodigo(45);
		$total_normal = 0;
		$total_atraso = 0;
		$cadeiras_atraso = 0;
		$cadeiras_normais = 0;
		$turmas_normais = array();
		$turmas_atraso = array();
		$turmas_tipo = array();
		$ano_maior = $turmas[0]['Turma']['ano_curricular'];
		$semestre_maior = $turmas[0]['Turma']['semestre_curricular'];
		foreach ($turmas as $turma) {
			if ($turma['Turma']['ano_curricular'] == $ano_maior and $turma['Turma']['semestre_curricular'] == $semestre_maior) {
				$turmas_normais[] = $turma;
				$total_normal = $total_normal + $pagamento_normal['FinanceiroTipoPagamento']['valor'];
				$turmas_tipo[$turma['Turma']['id']] = 1;
			} else {
				$turmas_atraso[] = $turma;
				$total_atraso = $total_atraso + $pagamento_atraso['FinanceiroTipoPagamento']['valor'];
				$turmas_tipo[$turma['Turma']['id']] = 2;
			}
		}



		$matricula_id = $this->Session->read('OpenSGA.inscricao.matricula_id');

		$aluno = $this->Inscricao->Aluno->findById($aluno_id);
		$imprimir = false;

		if ($this->request->is('post') || $this->request->is('put')) {
			$this->request->data['turmas'] = $this->Session->read('OpenSGA.inscricao.cadeiras');
			$total_normal = 0;
			$total_atraso = 0;
			foreach ($this->request->data['Turma'] as $turma) {
				$turmas_tipo[$turma['id']] = $turma['tipo'];
				if ($turma['tipo'] == 1) {
					$total_normal = $total_normal + $pagamento_normal['FinanceiroTipoPagamento']['valor'];
					$cadeiras_normais+=1;
				} else {
					$total_atraso = $total_atraso + $pagamento_atraso['FinanceiroTipoPagamento']['valor'];
					$cadeiras_atraso+=1;
				}
			}

			$this->request->data['total_normal'] = $total_normal;
			$this->request->data['total_atraso'] = $total_atraso;
			$this->request->data['aluno_id'] = $aluno_id;
			$this->request->data['matricula_id'] = $matricula_id;
			$this->request->data['turmas_tipo'] = $turmas_tipo;

			if ($cadeiras_atraso > 3 && $cadeiras_normais >= 1) {
				//Nao pode fazer cadeiras normais com mais de 3 cadeiras em atraso
				$this->Session->setFlash(__('Não pode fazer cadeiras normais com mais de 3 cadeiras em atraso'), 'default', array('class' => 'alert_error'));
				//    $this->redirect(array('controller' => 'alunos', 'action' => 'perfil_estudante', $aluno_id));
			}

			$this->request->data['cadeiras_normais'] = $cadeiras_normais;
			$this->request->data['cadeiras_atraso'] = $cadeiras_atraso;

			$inscricao = $this->Inscricao->inscreveAluno($this->request->data);
			if ($inscricao) {
				$this->Session->setFlash(sprintf(__('O Aluno  Foi inscrito com sucesso', true)), 'default', array('class' => 'alert_success'));

				$imprimir = true;
			} else {
				$this->Session->setFlash(sprintf(__('O Aluno  nao foi inscrito', true)), 'default', array('class' => 'alert_error'));

				//$this->redirect(array('controller' => 'alunos', 'action' => 'perfil_estudante', $aluno_id));
			}
		}
		$this->set(compact('turmas', 'turmas_normais', 'turmas_atraso', 'total_normal', 'total_atraso', 'matricula_id', 'aluno_id', 'imprimir', 'aluno'));
	}

	/**
	 *
	 * @param type $aluno_id
	 *
	 * @fixme esta matricula nao eh consistente para casos em que aluno muda de curso,etc
	 */
	public function faculdade_ver_inscricoes_aluno($aluno_id) {
		$unidade_organica_id = $this->Session->read('Auth.User.unidade_organica_id');

		$this->Inscricao->Aluno->contain(array(
			'Entidade' => array('User'), 'PlanoEstudo', 'Curso' => array('UnidadeOrganica')
		));
		$aluno = $this->Inscricao->Aluno->findById($aluno_id);

		if ($aluno['Curso']['unidade_organica_id'] != $unidade_organica_id) {
			$this->Session->setFlash(__('Nao Possui permissao para aceder a pagina anterior'));
			$this->redirect($this->referer());
		}
		//Pegamos todas inscricoes activas
		$this->Inscricao->contain(array(
			'Turma' => array(
				'Disciplina', 'AnoLectivo'
			), 'TipoInscricao'
		));
		$inscricoes_activas = $this->Inscricao->find('all', array('conditions' => array('estado_inscricao_id' => 1, 'aluno_id' => $aluno_id), 'order' => 'Inscricao.id DESC'));




		$matricula = $this->Inscricao->Matricula->findByAlunoIdAndCursoId($aluno_id, $aluno['Aluno']['curso_id']);
		$cadeiras_pendentes = $this->Inscricao->Turma->getAllByAlunoForInscricao($aluno_id, $matricula['Matricula']['id']);
		$isRegular = $this->Inscricao->Aluno->isRegular($aluno_id);

		if (count($isRegular) == 1 && $isRegular[0]['regular'] == true) {
			if ($isRegular[0]['estado'] == 1) {
				$classeEstado = "alert alert-info";
			} else {
				$classeEstado = "alert alert-success";
			}
		} else {
			$classeEstado = "alert alert-danger";
		}


		$this->set(compact('inscricoes_activas', 'cadeiras_pendentes', 'aluno', 'matricula', 'isRegular', 'classeEstado'));
	}

}

?>