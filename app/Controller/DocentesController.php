<?php

/**
 * Controller do Docente. Todas as funções referentes ao docente devem ser definidas aqui
 *
 *
 * @copyright     Copyright 2010-2011, INFOmoz (Informática-Moçambique) (http://infomoz.net)
 * @link          http://infomoz.net/opensga OpenSGA - Sistema de Gestão Académica
 * @author		  Elisio Leonardo (elisio.leonardo@gmail.com)
 * @package       opensga
 * @subpackage    opensga.core.docentes
 * @version       OpenSGA v 0.5.0
 * @since         OpenSGA v 0.1.0.0

 *
 * @property Docente $Docente
 *
 */
class DocentesController extends AppController {

	var $name = 'Docentes';

	function index() {
		$this->Docente->contain(array(
			'Entidade' => array(
				'User'
			), 'UnidadeOrganica', 'DocenteCategoria'
		));
		$this->set('docentes', $this->paginate());
	}

	/**
	 * Pagina de Perfil do docente
	 * @param type $id
	 */
	function perfil_docente($docente_id = null) {
		if (!$docente_id) {
			$this->Session->setFlash(__('Invalid docente', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->Docente->contain(array(
			'Entidade' => array(
				'User', 'PaisNascimento', 'CidadeNascimento', 'ProvinciaNascimento', 'DocumentoIdentificacao', 'Genero'
			), 'UnidadeOrganica'
		));
		$docente = $this->Docente->findById($docente_id);
		$this->set(compact('docente'));
	}

	/**
	 * Registra um novo docente no Sistema
	 *
	 * @todo Terminar a optimizacao dos views
	 *
	 * @todo testar todos os campos
	 */
	function adicionar_docente() {
		if ($this->request->is('post') || $this->request->is('put')) {
			$this->request->data['Entidade']['name'] = $this->request->data['Entidade']['nomes'] . ' ' . $this->request->data['Entidade']['apelido'];
			if ($this->Docente->cadastraDocente($this->request->data)) {
				$this->Session->setFlash("Dados registrados com sucesso", 'default', array('class' => 'alert_success'));
				$this->redirect(array('controller' => 'docentes', 'action' => 'perfil_docente', $this->Docente->id));
			} else {
				$this->Session->setFlash('Problemas ao registrar dados', 'default', array('class' => 'alert_error'));
			}
		}

		$entidades = $this->Docente->Entidade->find('list');
		$docenteCategorias = $this->Docente->DocenteCategoria->find('list');
		$paises = $this->Docente->Entidade->PaisNascimento->find('list');
		$cidades = $this->Docente->Entidade->CidadeNascimento->find('list');
		$provincias = $this->Docente->Entidade->ProvinciaNascimento->find('list');
		$documento_identificacaos = $this->Docente->Entidade->DocumentoIdentificacao->find('list');
		$generos = $this->Docente->Entidade->Genero->find('list');
		$unidadeOrganicas = $this->Docente->UnidadeOrganica->find('list');
		$this->set(compact('entidades', 'docenteCategorias', 'paises', 'provincias', 'cidades', 'generos', 'documento_identificacaos', 'unidadeOrganicas'));
	}

	function editar_docente($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid docente', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Docente->save($this->data)) {
				$this->Session->setFlash(__('The docente has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The docente could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Docente->read(null, $id);
		}
		$entidades = $this->Docente->Entidade->find('list');
		$docenteCategorias = $this->Docente->DocenteCategoria->find('list');
		$paises = $this->Docente->Entidade->PaisNascimento->find('list');
		$cidades = $this->Docente->Entidade->CidadeNascimento->find('list');
		$provincias = $this->Docente->Entidade->ProvinciaNascimento->find('list');
		$documento_identificacaos = $this->Docente->Entidade->DocumentoIdentificacao->find('list');
		$generos = $this->Docente->Entidade->Genero->find('list');
		$unidadeOrganicas = $this->Docente->UnidadeOrganica->find('list');
		$this->set(compact('entidades', 'docenteCategorias', 'paises', 'provincias', 'cidades', 'generos', 'documento_identificacaos', 'unidadeOrganicas'));
	}

	public function docente_meu_perfil() {


		$docente_id = $this->Docente->getByUserID($this->Session->read('Auth.User.id'));
		$this->Docente->contain(array(
			'Entidade' => array(
				'User', 'PaisNascimento', 'CidadeNascimento', 'ProvinciaNascimento', 'DocumentoIdentificacao', 'Genero'
			), 'UnidadeOrganica'
		));
		$docente = $this->Docente->findById($docente_id);
		$this->set(compact('docente'));
	}

	public function mostrar_foto($docente_id) {
		$this->viewClass = 'Media';
		App::uses('Folder', 'Utility');
		App::uses('File', 'Utility');
		$this->Docente->contain();
		$docente = $this->Docente->findById($docente_id);
		if (!empty($docente)) {
			App::uses('File', 'Utility');
			$path = APP . 'Assets' . DS . 'Fotos' . DS . 'Docentes' . DS . $docente['UnidadeOrganica']['codigo'] . DS;

			$file_path = $path . $docente_id . '.jpg';
			$folder_novo = new Folder($path);

			$file = new File($file_path);

			if (!$file->exists()) {
				$docente_id = 'default_profile_picture';
				$path = WWW_ROOT . DS . 'img' . DS;
			}


			$params = array(
				'id' => $docente_id . '.jpg',
				'name' => 'fotografia',
				'extension' => 'jpg',
				'mimeType' => array(
					'docx' => 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'
				),
				'path' => $path
			);
			$this->set($params);
		} else {
			throw new NotFoundException('Estudante não encontrado. Mostrar foto');
		}
	}

	function faculdade_index() {
		$this->Docente->contain(array(
			'Entidade' => array(
				'User'
			), 'UnidadeOrganica', 'DocenteCategoria'
		));
		$this->set('docentes', $this->paginate());
	}

	/**
	 * Pagina de Perfil do docente
	 * @param type $id
	 */
	function faculdade_perfil_docente($docente_id = null) {
		if (!$docente_id) {
			$this->Session->setFlash(__('Invalid docente', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->Docente->contain(array(
			'Entidade' => array(
				'User', 'PaisNascimento', 'CidadeNascimento', 'ProvinciaNascimento', 'DocumentoIdentificacao', 'Genero'
			), 'UnidadeOrganica'
		));
		$docente = $this->Docente->findById($docente_id);
		$this->set(compact('docente'));
	}

	/**
	 * Registra um novo docente no Sistema
	 *
	 * @todo Terminar a optimizacao dos views
	 *
	 * @todo testar todos os campos
	 */
	function faculdade_adicionar_docente() {
		ini_set('memory_limit', "2048M");
		if ($this->request->is('post') || $this->request->is('put')) {
			$this->request->data['Entidade']['name'] = $this->request->data['Entidade']['nomes'] . ' ' . $this->request->data['Entidade']['apelido'];
			if ($this->Docente->cadastraDocente($this->request->data)) {
				$this->Session->setFlash("Dados registrados com sucesso", 'default', array('class' => 'alert_success'));
				$this->redirect(array('controller' => 'docentes', 'action' => 'perfil_docente', $this->Docente->id));
			} else {
				$this->Session->setFlash('Problemas ao registrar dados', 'default', array('class' => 'alert_error'));
			}
		}

		$entidades = $this->Docente->Entidade->find('list');
		$docenteCategorias = $this->Docente->DocenteCategoria->find('list');
		$paises = $this->Docente->Entidade->PaisNascimento->find('list');
		$cidadeNascimentos = $this->Docente->Entidade->CidadeNascimento->find('list');
		$provincias = $this->Docente->Entidade->ProvinciaNascimento->find('list');
		$documentoIdentificacaos = $this->Docente->Entidade->DocumentoIdentificacao->find('list');
		$generos = $this->Docente->Entidade->Genero->find('list');
		$unidadeOrganicas = $this->Docente->UnidadeOrganica->find('list');
		$naturalidade = '';
		$estadoCivil = $this->Docente->Entidade->EstadoCivil->find('list');
		$this->set(compact('entidades', 'docenteCategorias', 'paises', 'provincias', 'cidadeNascimentos', 'generos', 'documento_identificacaos', 'unidadeOrganicas', 'naturalidade', 'estadoCivil'));
	}

	function faculdade_editar_docente($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid docente', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Docente->save($this->data)) {
				$this->Session->setFlash(__('The docente has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The docente could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Docente->read(null, $id);
		}
		$entidades = $this->Docente->Entidade->find('list');
		$docenteCategorias = $this->Docente->DocenteCategoria->find('list');
		$paises = $this->Docente->Entidade->PaisNascimento->find('list');
		$cidades = $this->Docente->Entidade->CidadeNascimento->find('list');
		$provincias = $this->Docente->Entidade->ProvinciaNascimento->find('list');
		$documento_identificacaos = $this->Docente->Entidade->DocumentoIdentificacao->find('list');
		$generos = $this->Docente->Entidade->Genero->find('list');
		$unidadeOrganicas = $this->Docente->UnidadeOrganica->find('list');
		$this->set(compact('entidades', 'docenteCategorias', 'paises', 'provincias', 'cidades', 'generos', 'documento_identificacaos', 'unidadeOrganicas'));
	}

	public function beforeFilter() {
		parent::beforeFilter();
		//$this->layout = 'clipone_default';
	}

}
