<?php
App::uses('AppController', 'Controller');
/**
 * CandidatoAlumnis Controller
 *
 * @property CandidatoAlumni $CandidatoAlumni
 */
class CandidatoAlumnisController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->CandidatoAlumni->recursive = 0;
		$this->set('candidatoAlumnis', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function perfil_candidato_alumni($id = null) {
		if (!$this->CandidatoAlumni->exists($id)) {
			throw new NotFoundException(__('Invalid candidato alumni'));
		}
		$options = array('conditions' => array('CandidatoAlumni.' . $this->CandidatoAlumni->primaryKey => $id));
		$this->set('candidatoAlumni', $this->CandidatoAlumni->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function cadastro_alumni() {
		if ($this->request->is('post')) {
			$this->CandidatoAlumni->create();
			if ($this->CandidatoAlumni->save($this->request->data)) {
				$this->Session->setFlash(__('The candidato alumni has been saved'));
				//$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The candidato alumni could not be saved. Please, try again.'));
			}
		}
		$generos = $this->CandidatoAlumni->Genero->find('list');
		$estadoCivils = $this->CandidatoAlumni->EstadoCivil->find('list');
		$unidadeOrganicas = $this->CandidatoAlumni->UnidadeOrganica->find('list');
		$cursos = $this->CandidatoAlumni->Curso->find('list');
		$grauAcademicos = $this->CandidatoAlumni->GrauAcademico->find('list');
                $paisNascimentos = $this->CandidatoAlumni->PaisNascimento->find('list');
                $provinciaNascimentos = $this->CandidatoAlumni->ProvinciaNascimento->find('list');
                $cidadeNascimentos = $this->CandidatoAlumni->CidadeNascimento->find('list');
                $paisMoradas = $this->CandidatoAlumni->PaisMorada->find('list');
                $provinciaMoradas = $this->CandidatoAlumni->ProvinciaMorada->find('list');
                $cidadeMoradas = $this->CandidatoAlumni->CidadeMorada->find('list');
                $this->loadModel('DocumentoIdentificacao');
                $documentoIdentificacaos = $this->DocumentoIdentificacao->find('list');
                $this->layout = 'guest_users';
                
                $this->set('siga_page_title','Pre-Registro de Alumni');
                $this->set('siga_page_overview','Preencha o formulario abaixo para se registar como Alumni da UEM');
                $this->set('naturalidade','');
		$this->set(compact('generos', 'estadoCivils', 'unidadeOrganicas', 'cursos', 'grauAcademicos','paisNascimentos','provinciaNascimentos','cidadeNascimentos','paisMoradas','provinciaMoradas','cidadeMoradas','documentoIdentificacaos'));
        
        
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function editar_candidato_alumni($id = null) {
		if (!$this->CandidatoAlumni->exists($id)) {
			throw new NotFoundException(__('Invalid candidato alumni'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->CandidatoAlumni->save($this->request->data)) {
				$this->Session->setFlash(__('The candidato alumni has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The candidato alumni could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CandidatoAlumni.' . $this->CandidatoAlumni->primaryKey => $id));
			$this->request->data = $this->CandidatoAlumni->find('first', $options);
		}
		$generos = $this->CandidatoAlumni->Genero->find('list');
		$estadoCivils = $this->CandidatoAlumni->EstadoCivil->find('list');
		$unidadeOrganicas = $this->CandidatoAlumni->UnidadeOrganica->find('list');
		$cursos = $this->CandidatoAlumni->Curso->find('list');
		$grauAcademicos = $this->CandidatoAlumni->GrauAcademico->find('list');
		$this->set(compact('generos', 'estadoCivils', 'unidadeOrganicas', 'cursos', 'grauAcademicos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function cancelar_candidatura_alumni($id = null) {
		$this->CandidatoAlumni->id = $id;
		if (!$this->CandidatoAlumni->exists()) {
			throw new NotFoundException(__('Invalid candidato alumni'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->CandidatoAlumni->delete()) {
			$this->Session->setFlash(__('Candidato alumni deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Candidato alumni was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

    public function aprovar_candidatura_alumni(){

    }
        public function beforeFilter() {
            parent::beforeFilter();
            
            $this->Auth->allow(array('cadastro_alumni'));
            $this->disableCache();
        }
}
