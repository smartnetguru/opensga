<?php

/**
 * Controller para plano de estudos
 *
 * @copyright     Copyright 2010-2011, INFOmoz (Inform�tica-Mo�ambique) (http://infomoz.net)
 * @link          http://infomoz.net/opensga OpenSGA - Sistema de Gestão Académica
 * @author		  Elisio Leonardo (elisio.leonardo@gmail.com)
 * @package       opensga
 * @subpackage    opensga.core.pedagogia
 * @version       OpenSGA v 0.5.0
 * @since         OpenSGA v 0.1.0

 *
 */

/**
 *
 * @todo Ver bem a tabela de precedencias. O nome nao parece consistente
 */
class PlanoEstudosController extends AppController {

	var $name = 'PlanoEstudos';

	function index() {
		$this->PlanoEstudo->recursive = 0;
		$this->set('planoestudos', $this->PlanoEstudo->find('all'));
	}

	function faculdade_index() {

		$this->paginate = array(
			'contain' => array(
				'Curso', 'EstadoObjecto'
			),
			'conditions' => array(
				'Curso.unidade_organica_id' => $this->Session->read('Auth.User.unidade_organica_id')
			),
			'order' => 'PlanoEstudo.ano_criacao DESC'
		);
		$this->set('planoEstudos', $this->paginate('PlanoEstudo'));
	}

	function faculdade_ver_plano_estudo($id = null) {
		App::Import('Model', 'DisciplinaPlanoEstudo');
		App::Import('Model', 'Disciplina');
		//App::Import('Model','Logmv');
		//$logmv =new Logmv;
		$planoestudoanos = new DisciplinaPlanoEstudo;
		$disciplina = new Disciplina;

		if (!$id) {
			$this->Session->setFlash('Invalido %s', 'flasherror');
			$this->redirect(array('action' => 'index'));
		}
		$this->set('planoestudo', $this->PlanoEstudo->read(null, $id));
		if (empty($this->data)) {
			$this->data = $this->PlanoEstudo->read(null, $id);
			//var_dump($this->data);
			////////$logmv->logview(5,$this->Session->read('Auth.User.id'),$this->data["PlanoEstudo"]["id"],$this->data["PlanoEstudo"]["name"]);
		}

		$disciplinas = $this->PlanoEstudo->getAllDisciplinasByPlanoEstudo($id);


		$disciplinas_precedencia = $planoestudoanos->findDisciplinasByPrecendencia($id, 1, 1);
		$this->set('pdisciplina', $disciplinas_precedencia);
		$this->set('plano_id', $id);
		$cursos = $this->PlanoEstudo->Curso->find('list');
		$this->set(compact('cursos', 'disciplinas', 'anos', 'semestres', 'disciplinas', 'pobrigatorias', 'popcionais'));
	}

	function ver_plano_estudos($id = null) {
		App::Import('Model', 'DisciplinaPlanoEstudo');
		App::Import('Model', 'Disciplina');
		//App::Import('Model','Logmv');
		//$logmv =new Logmv;
		$planoestudoanos = new DisciplinaPlanoEstudo;
		$disciplina = new Disciplina;

		if (!$id) {
			$this->Session->setFlash('Invalido %s', 'flasherror');
			$this->redirect(array('action' => 'index'));
		}
		$this->set('planoestudo', $this->PlanoEstudo->read(null, $id));
		if (empty($this->data)) {
			$this->data = $this->PlanoEstudo->read(null, $id);
			//var_dump($this->data);
			////////$logmv->logview(5,$this->Session->read('Auth.User.id'),$this->data["PlanoEstudo"]["id"],$this->data["PlanoEstudo"]["name"]);
		}

		$disciplinas = $this->PlanoEstudo->getAllDisciplinasByPlanoEstudo($id);


		$disciplinas_precedencia = $planoestudoanos->findDisciplinasByPrecendencia($id, 1, 1);
		$this->set('pdisciplina', $disciplinas_precedencia);
		$this->set('plano_id', $id);
		$cursos = $this->PlanoEstudo->Curso->find('list');
		$this->set(compact('cursos', 'disciplinas', 'anos', 'semestres', 'disciplinas', 'pobrigatorias', 'popcionais'));
	}

	/**
	 * Cria um novo Plano de Estudos para uma Unidade Organica
	 * Depois direcciona para pagina de adicionar disciplinas
	 */
	public function faculdade_adicionar_plano_estudo() {
		if ($this->request->is('post')) {
			$this->request->data['PlanoEstudo']['ano_criacao'] = $this->request->data['PlanoEstudo']['ano_criacao']['year'];
            $curso = $this->PlanoEstudo->Curso->findById($this->request->data['PlanoEstudo']['curso_id']);
            $this->request->data['PlanoEstudo']['name'] = $curso['Curso']['name']." - ".$this->request->data['PlanoEstudo']['ano_criacao'];

			$this->PlanoEstudo->create();
			if ($this->PlanoEstudo->save($this->request->data)) {
				$this->Session->setFlash('Adicione as  disciplinas deste plano de estudos. ', 'default', array('class' => 'alert alert-success'));
				$this->redirect(array('action' => 'adicionar_disciplinas', $this->PlanoEstudo->id));
			} else {
				$this->Session->setFlash('Erro ao gravar dados. Por favor tente de novo.', 'default', array('class' => 'alert alert-success'));
			}
		}
		$cursos = $this->PlanoEstudo->Curso->find('list', array('conditions' => array('Curso.unidade_organica_id' => $this->Session->read('Auth.User.unidade_organica_id')), 'order' => 'Curso.name ASC'));
		$this->set(compact('cursos'));
	}

	/**
	 * Adiciona disciplinas precedentes.
	 *
	 * @todo Precedencias Aconselhadas nao estao a funcionar :(
	 * @throws  NotFoundException,MethodNotAllowedException
	 */
	public function faculdade_adicionar_precedencias($planoEstudoId = null, $disciplinaId = null) {
		$disciplinaPlanoEstudo = $this->PlanoEstudo->DisciplinaPlanoEstudo->findByPlanoEstudoIdAndDisciplinaId($planoEstudoId, $disciplinaId);
		if (empty($disciplinaPlanoEstudo)) {
			throw new NotFoundException(__('Esta disciplina nao pertence a este plano de Estudos'));
		}
		$this->PlanoEstudo->contain(array(
			'Curso'
		));
		$planoEstudo = $this->PlanoEstudo->find('first', array('conditions' => array('Curso.unidade_organica_id' => $this->Session->read('Auth.User.unidade_organica_id'), 'PlanoEstudo.id' => $planoEstudoId)));
		if (empty($planoEstudo)) {
			throw new MethodNotAllowedException(__('Nao possui permissao para aceder a pagina anterior'));
		}

		if ($this->request->is('post')) {

			$this->request->data['DisciplinaPlanoEstudo']['id'] = $disciplinaPlanoEstudo['DisciplinaPlanoEstudo']['id'];
			if ($this->PlanoEstudo->cadastraPrecedencias($this->request->data)) {
				$this->Session->setFlash(__('Dado Registado com Sucesso.Adicione Mais disciplinas.'), 'default', array('class' => 'alert success'));
				$this->redirect(array('action' => 'adicionar_disciplinas', $this->data['PlanoEstudo']['plano_estudo_id']));
			} else {
				$this->Session->setFlash(__('Problemas ao Gravar Dados. Tente Novamente'), 'default', array('class' => 'alert error'));
			}
		}

		$precedencias = $this->PlanoEstudo->getAllDisciplinasForPrecedencia($planoEstudoId, $disciplinaId);
		$this->set(compact('precedencias', 'planoEstudoId', 'disciplinaId'));
	}

	function faculdade_adicionar_disciplinas($planoEstudoId) {
		$this->PlanoEstudo->contain(array(
			'Curso'
		));
		$planoEstudo = $this->PlanoEstudo->findById($planoEstudoId);
        $planoEstudo['PlanoEstudo']['total_creditos'] = $this->PlanoEstudo->getTotalCreditos($planoEstudoId);
		if (empty($planoEstudo)) {
			throw new NotFoundException(__('Plano de Estudos Nao encontrado'));
		}
		if ($planoEstudo['Curso']['unidade_organica_id'] != $this->Session->read('Auth.User.unidade_organica_id')) {

			throw new MethodNotAllowedException(__('Nao tem permissao para aceder a pagina anterior'));
		}
		if ($this->request->is('post')) {

			$this->request->data['DisciplinaPlanoEstudo']['plano_estudo_id'] = $planoEstudoId;
			//Calcula o Semestre Sequencial
			if ($this->request->data['DisciplinaPlanoEstudo']['semestre_curricular'] == 1) {
				$this->request->data['DisciplinaPlanoEstudo']['semestre_sequencial'] = $this->request->data['DisciplinaPlanoEstudo']['ano_curricular'] * ($this->request->data['DisciplinaPlanoEstudo']['semestre_curricular'] + 1) - 1;
			}
			if ($this->request->data['DisciplinaPlanoEstudo']['semestre_curricular'] == 2) {
				$this->request->data['DisciplinaPlanoEstudo']['semestre_sequencial'] = $this->request->data['DisciplinaPlanoEstudo']['ano_curricular'] * $this->request->data['DisciplinaPlanoEstudo']['semestre_curricular'];
			}

			$this->PlanoEstudo->DisciplinaPlanoEstudo->create();
			if ($this->PlanoEstudo->DisciplinaPlanoEstudo->save($this->request->data)) {
				if ($this->request->data['DisciplinaPlanoEstudo']['semestre_sequencial'] > 1) {
					$this->Session->setFlash('Dado Registado com Sucesso.Seleccione as Precedencias desta disciplina, Ou clique em voltar se nao tiver precedencias', 'default', array('class' => 'alert success'));
					$this->redirect(array('action' => 'adicionar_precedencias', $this->request->data['DisciplinaPlanoEstudo']['plano_estudo_id'], $this->request->data['DisciplinaPlanoEstudo']['disciplina_id']));
				} else {
					$this->Session->setFlash('Dado Registado com Sucesso.Adicione Mais disciplinas.', 'default', array('class' => 'alert success'));
					$this->redirect(array('action' => 'adicionar_disciplinas', $this->request->data['DisciplinaPlanoEstudo']['plano_estudo_id']));
				}
			} else {
				$this->Session->setFlash('Erro ao gravar dados. Por favor tente de novo.', 'default', array('class' => 'alert error'));
			}
		}

		$this->request->data = $planoEstudo;

		$disciplinasAdicionadas = $this->PlanoEstudo->getAllDisciplinas($planoEstudoId);
		$disciplinasExcluir = Hash::extract($disciplinasAdicionadas, '{n}.Disciplina.id');

		$disciplinas = $this->PlanoEstudo->DisciplinaPlanoEstudo->Disciplina->find('list', array('conditions' => array('NOT' => array('id' => $disciplinasExcluir)), 'order' => array('name ASC')));
		$anos = array();
		for ($i = 1; $i <= $planoEstudo['PlanoEstudo']['duracao']; $i++) {
			$anos[$i] = $i;
		}
		for ($i = 1; $i <= $planoEstudo['PlanoEstudo']['semestres_ano']; $i++) {
			$semestres[$i] = $i;
		}

		$this->set('planoId', $planoEstudoId);
		$this->set(compact('disciplinasAdicionadas', 'anos', 'semestres', 'disciplinas'));
	}

	function faculdade_editar_plano_estudo($id = null) {
		$this->PlanoEstudo->id = $id;
		if (!$this->PlanoEstudo->exists()) {
			throw new NotFoundException(__('Plano de Estudos Invalido'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->PlanoEstudo->save($this->request->data)) {
				$this->Session->setFlash('Dados Registados com Sucesso', 'flasherror');
				$this->redirect(array('action' => 'adicionar_disciplinas', $id));
			} else {
				$this->Session->setFlash('Erro ao editar dados. Por favor tente de novo.', 'flasherror');
			}
		}
		if (empty($this->request->data)) {
			$this->data = $this->PlanoEstudo->read(null, $id);
		}
		$cursos = $this->PlanoEstudo->Curso->find('list');
		$this->set(compact('cursos'));
	}

	public function getByCurso() {
		foreach ($this->request->data as $k => $v) {
			$curso_id = $v['curso_id'];
		}
		//$curso_id = $this->request->data['Aluno']['curso_id'];
		$planoestudos = $this->PlanoEstudo->find('list', array('conditions' => array('curso_id' => $curso_id)));
		$this->set(compact('planoestudos'));
		$this->layout = 'ajax';
	}

	public function beforeFilter() {
		parent::beforeFilter();
		if ($this->action == 'faculdade_adicionar_precedencias') {
			//$this->Security->validatePost=false;
		}
	}

    public function manutencao(){

    }

    public function manutencao_plano_estudos_incompletos(){

    }

}

?>