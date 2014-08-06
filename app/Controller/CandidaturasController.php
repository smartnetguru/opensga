<?php

ini_set('memory_limit', "2048M");
set_time_limit(300);
App::uses('AppController', 'Controller');

/**
 * Candidaturas Controller
 *
 * @property Candidatura $Candidatura
 * @property PaginatorComponent $Paginator
 */
class CandidaturasController extends AppController {

	/**
	 * Lista de Candidatos não Matriculados.
     *
     * @todo Pesquisar Candidatos ainda não funciona!
	 *
	 * @return void
	 */
	public function index() {
		$this->paginate = array(
			'conditions' => array(
			),
			'contain' => array(
				'AlunoViaAdmissao', 'EscolaNivelMedio', 'Curso', 'UnidadeOrganica', 'Genero', 'ProvinciaNascimento'
			)
		);
		$this->set('candidaturas', $this->Paginator->paginate());
	}

    public function importar_candidatos(){

    }

    public function importar_candidatos_2(){

    }

	public function candidatos_admitidos() {
		$this->paginate = array(
			'conditions' => array(
				'Candidatura.estado_candidatura_id' => 2,
				'ano_lectivo_admissao' => Configure::read('OpenSGA.ano_lectivo')
			),
			'contain' => array(
				'AlunoViaAdmissao', 'EscolaNivelMedio', 'Curso', 'UnidadeOrganica', 'Genero', 'ProvinciaNascimento'
			)
		);
		$this->set('candidaturas', $this->Paginator->paginate());
	}

	public function candidatos_matriculados() {
		$this->paginate = array(
			'conditions' => array(
				'Candidatura.estado_candidatura_id' => 3,
				'ano_lectivo_admissao' => Configure::read('OpenSGA.ano_lectivo')
			),
			'contain' => array(
				'AlunoViaAdmissao', 'EscolaNivelMedio', 'Curso', 'UnidadeOrganica', 'Genero', 'ProvinciaNascimento'
			)
		);
		$this->set('candidaturas', $this->Paginator->paginate());
	}

	public function print_lista_admitidos() {
		$this->Candidatura->contain('Curso');
		$cursos = $this->Candidatura->find('list', array('conditions' => array('estado_candidatura_id' => 2, 'ano_lectivo_admissao' => Configure::read('OpenSGA.ano_lectivo')), 'fields' => array('curso_id', 'Curso.name'), 'group' => 'curso_id', 'order' => 'Curso.name'));


		$candidatos = array();
		foreach ($cursos as $k => $v) {
			$this->Candidatura->contain(array(
				'Genero'
			));
			$candidatos2 = $this->Candidatura->find('all', array('conditions' => array('estado_candidatura_id' => 2, 'ano_lectivo_admissao' => Configure::read('OpenSGA.ano_lectivo'), 'curso_id' => $k), 'order' => array('apelido', 'nomes')));
			$candidatos[$v] = $candidatos2;
		}

		$this->set(compact('candidatos'));
	}

	public function relatorios() {

	}

	public function estudantes_matriculados_curso_ano($anoLectivo = null) {
		$this->loadModel('Aluno');
		$this->Aluno->contain(array(
			'Curso'
		));
		if (!$anoLectivo) {
			$anoLectivo = Configure::read('OpenSGA.ano_lectivo');
		}
		$alunosMatriculados = $this->Aluno->find('all', array('conditions' => array('Aluno.ano_ingresso' => $anoLectivo), 'group' => array('Aluno.curso_id'), 'fields' => array('Curso.name', 'Aluno.curso_id', 'Count(*) as total')));
		$javascript = "[";
		foreach ($alunosMatriculados as $alunos) {
			$javascript .= "[\"" . $alunos['Curso']['name'] . "\"," . $alunos[0]['total'] . "],";
		}
		$javascript .="]";
		$this->set(compact('javascript'));
	}

	/**
	 * view method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function view($id = null) {
		if (!$this->Candidatura->exists($id)) {
			throw new NotFoundException(__('Invalid candidatura'));
		}
		$options = array('conditions' => array('Candidatura.' . $this->Candidatura->primaryKey => $id));
		$this->set('candidatura', $this->Candidatura->find('first', $options));
	}

}
