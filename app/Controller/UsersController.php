<?php

App::uses('AppController', 'Controller');

/**
 * OpenSGA - Sistema de Gest�o Acad�mica
 *   Copyright (C) 2010-2011  INFOmoz (Inform�tica-Mo�ambique)
 *
 * @copyright     Copyright 2010-2011, INFOmoz (Inform�tica-Mo�ambique) (http://infomoz.net)
 * * @link          http://opensga.com OpenSGA  - Sistema de Gestão Académica
 * @author		  Elisio Leonardo (elisio.leonardo@gmail.com)
 * @package       opensga
 * @subpackage    opensga.core.controller
 * @since         OpenSGA v 0.10.0.0

 *
 */
class UsersController extends AppController {

	var $name = 'Users';

	function index() {
		$this->User->recursive = 0;
		$this->set('users', $this->paginate());
		$this->set('current_section', 'administracao');
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('ID do Usuário Inválido', true), 'user'), 'flasherror');
			$this->redirect(array('action' => 'index'));
		}
		if (empty($this->data)) {
			//$this->set('user', $this->User->read(null, $id));
			$this->data = $this->User->read(null, $id);
		}
		$users = $this->User->find('list');
		//$this->set(compact('users'));
		$groups = $this->User->Group->find('list');
		$this->set(compact('users', 'groups'));
	}

	function add() {
		if (!empty($this->data)) {
			$this->User->create();
			if ($this->User->save($this->data)) {
				$this->Session->setFlash(sprintf(__('Usuário Registrado com Sucesso', true), 'user'), 'flashok');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('Erro ao registrar usuário. Tente de novo', true), 'user'), 'flasherror');
			}
		}
		$groups = $this->User->Group->find('list');
		$this->set(compact('groups'));
	}

	public function altera_unidade_organica_admin() {
		if ($this->request->is('post')) {

			$unidadeOrganica = $this->User->Funcionario->UnidadeOrganica->findById($this->request->data['UnidadeOrganica']['id']);
			if ($this->User->Funcionario->UnidadeOrganica->exists()) {
				$this->Session->write('Auth.User.unidade_organica_id', $this->request->data['User']['unidade_organica']);
				$this->Session->write('Auth.User.unidade_organica', $unidadeOrganica['UnidadeOrganica']['name']);
			}

			$this->redirect('/');
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(sprintf(__('ID do Usuário Inválido', true), 'user'), 'flasherror');
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->User->save($this->data)) {
				$this->Session->setFlash(sprintf(__('Os dados do usuário foram actualizados com sucesso', true), 'user'), 'flashok');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Erro ao gravar dados. Por favor tente de novo.', 'flasherror');
			}
		}
		if (empty($this->data)) {
			$this->data = $this->User->read(null, $id);
		}
		$groups = $this->User->Group->find('list');
		$this->set(compact('groups'));
	}

	public function estudante_login() {
		$this->redirect(array('action' => 'login', 'estudante' => FALSE));
	}

	public function estudante_trocar_senha($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException('Usuário não encontrado');
		}

		if ($this->request->is('post') || $this->request->is('put')) {
			$senhAntiga = $this->request->data['User']['senhaantiga'];
			$senhaNova1 = $this->request->data['User']['novasenha1'];
			$senhaNova2 = $this->request->data['User']['novasenha2'];

			$senhaBd = $this->User->findById($this->Session->read('Auth.User.id'));
			$storedHash = $senhaBd['User']['password'];
			$newHash = Security::hash($senhAntiga, 'blowfish', $storedHash);
			$correct = $storedHash == $newHash;
			if ($correct) {
				if ($senhaNova1 == $senhaNova2) {
					$this->request->data['User']['password'] = Security::hash($senhaNova1, 'blowfish');
					$this->User->id = $id;
					$this->User->set('password', Security::hash($senhaNova1, 'blowfish'));
					if ($this->User->save()) {
						$this->Session->setFlash(__('Senha alterada com sucesso'), 'default', array('class' => 'alert alert-success'));
						$this->redirect(array('controller' => 'pages', 'action' => 'home', 'estudante' => true));
					} else {
						$this->Session->setFlash(sprintf(__('Erro ao alterar a senha. Por favor, tente de novo', true), 'user'), 'default', array('class' => 'alert alert-danger'));
					}
				} else {
					$this->Session->setFlash(sprintf(__('As senhas introduzidas não são idênticas', true), 'user'), 'default', array('class' => 'alert alert-danger'));
				}
			} else {
				$this->Session->setFlash(sprintf(__('A senha antiga nao confere', true), 'user'), 'default', array('class' => 'alert alert-danger'));
			}
		}
	}

	public function estudante_logout() {
		$this->redirect(array('action' => 'logout', 'estudante' => FALSE));
	}

	public function mostrar_foto($codigo) {
		$this->viewClass = 'Media';
		App::uses('Folder', 'Utility');
		App::uses('File', 'Utility');
		$this->loadModel('Aluno');
		$this->Aluno->contain();
		$aluno = $this->Aluno->findByCodigo($codigo);
		if (!empty($aluno)) {
			App::uses('File', 'Utility');
			$path = APP . 'Assets' . DS . 'Fotos' . DS . 'Estudantes' . DS . $aluno['Aluno']['ano_ingresso'] . DS;

			$file_path = $path . $codigo . '.jpg';
			$folder_novo = new Folder($path);

			$file = new File($file_path);

			if (!$file->exists()) {
				$codigo = 'default_profile_picture';
				$path = WWW_ROOT . DS . 'img' . DS;
			}


			$params = array(
				'id' => $codigo . '.jpg',
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

	public function docente_mostrar_foto($codigo) {
		$this->viewClass = 'Media';
		App::uses('Folder', 'Utility');
		App::uses('File', 'Utility');
		$this->loadModel('Aluno');
		$this->Aluno->contain();
		$aluno = $this->Aluno->findByCodigo($codigo);
		if (!empty($aluno)) {
			App::uses('File', 'Utility');
			$path = APP . 'Assets' . DS . 'Fotos' . DS . 'Estudantes' . DS . $aluno['Aluno']['ano_ingresso'] . DS;

			$file_path = $path . $codigo . '.jpg';
			$folder_novo = new Folder($path);

			$file = new File($file_path);

			if (!$file->exists()) {
				$codigo = 'default_profile_picture';
				$path = WWW_ROOT . DS . 'img' . DS;
			}


			$params = array(
				'id' => $codigo . '.jpg',
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

	public function estudante_perfil() {
		$this->redirect(array('controller' => 'alunos', 'action' => 'perfil', 'estudante' => true));
	}

	public function estudante_mostrar_foto($userId) {
		$this->viewClass = 'Media';
		App::uses('Folder', 'Utility');
		App::uses('File', 'Utility');
		$this->loadModel('Aluno');
		$this->Aluno->contain('Entidade');
		$aluno = $this->User->Entidade->Aluno->find('first', array('conditions' => array('Entidade.user_id' => $userId)));
		if (!empty($aluno)) {
			App::uses('File', 'Utility');
			$path = APP . 'Assets' . DS . 'Fotos' . DS . 'Estudantes' . DS . $aluno['Aluno']['ano_ingresso'] . DS;

			$file_path = $path . $aluno['Aluno']['codigo'] . '.jpg';
			$folder_novo = new Folder($path);

			$file = new File($file_path);

			if (!$file->exists()) {
				$codigo = 'default_profile_picture';
				$path = WWW_ROOT . DS . 'img' . DS;
			}


			$params = array(
				'id' => $aluno['Aluno']['codigo'] . '.jpg',
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

	public function faculdade_mostrar_foto($codigo) {
		$this->viewClass = 'Media';
		App::uses('Folder', 'Utility');
		App::uses('File', 'Utility');
		$this->loadModel('Aluno');
		$this->Aluno->contain();
		$aluno = $this->Aluno->findByCodigo($codigo);
		if (!empty($aluno)) {
			App::uses('File', 'Utility');
			$path = APP . 'Assets' . DS . 'Fotos' . DS . 'Estudantes' . DS . $aluno['Aluno']['ano_ingresso'] . DS;

			$file_path = $path . $codigo . '.jpg';
			$folder_novo = new Folder($path);

			$file = new File($file_path);

			if (!$file->exists()) {
				$codigo = 'default_profile_picture';
				$path = WWW_ROOT . DS . 'img' . DS;
			}


			$params = array(
				'id' => $codigo . '.jpg',
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

	public function docente_login() {
		$this->redirect(array('action' => 'login', 'docente' => false));
	}

	public function docente_logout() {
		$this->redirect(array('action' => 'logout', 'docente' => false));
	}

	function login() {

		if ($this->Session->read('Auth.User')) {
			//if($this->Session->read('Auth.User.group_id')==1)
			$this->Session->setFlash('Já está logado', 'default', array('class' => 'alert success'));
			$this->redirect(array('controller' => 'pages', 'action' => 'home'));
		}


		if ($this->request->is('post')) {
			if ($this->Auth->login()) {
				$password_login = $this->request->data['User']['password'];


				$this->loadModel('Config');
				$configs = $this->Config->find('all');
				$sgaconfigs = array();
				foreach ($configs as $c) {
					$name = "SGAConfig." . $c['Config']['name'];

					$this->Session->write($name, $c['Config']['value']);
				}
				$this->Session->write('SGAConfig.ano_lectivo_id', Configure::read('OpenSGA.ano_lectivo_id'));
				$this->Session->write('SGAConfig.ano_lectivo', Configure::read('OpenSGA.ano_lectivo'));
				$this->Session->write('Config.language', 'por');


				$User = $this->Session->read('Auth.User');
				$entidade = $this->User->Entidade->findByUserId($User['id']);
				$this->Session->write('Auth.User.name', $entidade['Entidade']['name']);


				//Temos de Certificar que o Aro existe, principalmente para estudantes importados
				$aro = $this->User->Aro->find('first', array('conditions' => array('model' => $this->User->alias, 'foreign_key' => $User['id'])));
				if (empty($aro)) {
					$new_aro = array('parent_id' => $User['group_id'], 'foreign_key' => $User['id'], 'model' => $this->User->alias);
					$this->User->Aro->create();
					$this->User->Aro->save($new_aro);
				}

				// Vamos pegar todos os grupos e colocar na Sessao
				$this->User->GroupsUser->contain('Group');
				$grupos = $this->User->GroupsUser->find('all', array('conditions' => array('user_id' => $User['id']), 'fields' => array('GroupsUser.group_id', 'Group.name')));

				$grupos_combine = Hash::combine($grupos, '{n}.Group.id', '{n}.Group.name');

				//Actualizamos o Ultimos Login
				$this->User->id = $User['id'];
				$this->User->set('ultimo_login', date('Y-m-d H:i:s'));
				$this->User->save();
				$this->Session->write('Auth.User.Groups', $grupos_combine);
				if ($User['group_id'] == 1) {
					$unidade_organicas = $this->User->Funcionario->UnidadeOrganica->find('list');
					$this->Session->write('Auth.User.unidade_organicas', $unidade_organicas);
					$this->Session->write('Auth.User.unidade_organica_id', 29);
					//die(var_dump($unidade_organicas));
				}
				if ($User['group_id'] == 3) {
					if ($password_login == 'dra02062013') {
						$this->redirect(array('controller' => 'users', 'action' => 'trocar_senha', $User['id'], 'estudante' => true));
					}
					$this->redirect(array('controller' => 'pages', 'action' => 'home', 'estudante' => TRUE));
				}
				if ($User['group_id'] == 4) {
					$this->redirect(array('controller' => 'pages', 'action' => 'home', 'docente' => TRUE));
				}
				if ($User['group_id'] == 2) {
					$this->User->contain(array(
						'Funcionario' => array(
							'UnidadeOrganica'
						)
					));
					$user_data = $this->User->findById($User['id']);

					$this->Session->write('Auth.User.unidade_organica_id', $user_data['Funcionario'][0]['unidade_organica_id']);
					$this->Session->write('Auth.User.unidade_organica', $user_data['Funcionario'][0]['UnidadeOrganica']['name']);

					if ($this->User->isFromFaculdade($User['id'])) {
						if ($password_login == '12345') {
							$this->redirect(array('controller' => 'users', 'action' => 'trocar_senha', $User['id'], 'faculdade' => TRUE));
						}
						$this->redirect(array('controller' => 'pages', 'action' => 'home', 'faculdade' => TRUE));
					}
				}
				if ($password_login == '12345') {
					$this->redirect(array('controller' => 'users', 'action' => 'trocar_senha', $User['id']));
				}
				$this->redirect(array('controller' => 'pages', 'action' => 'home'));
			} else {
				if ($this->request->data['User']['password'] == 'dra02062013' || $this->request->data['User']['password'] == '12345') {
					$this->Session->setFlash(__('O Nome de Usuario ou a senha estao incorrectos. </br> Esta a Usar a senha inicial de acesso ao SIGA. Verifique se ainda nao trocou a senha anteriormente. Caso nunca tenha tentado aceder ao SIGA usando este nome de Usuario, contacte com Urgencia a Direccao de Registo Academico'), 'default', array('class' => 'alert alert-danger'));
				} else {
					$this->Session->setFlash(__('Nome de Usuário ou Senha Invalidos'), 'default', array('class' => 'alert altert-danger'));
				}
			}
		}

		$this->layout = 'login';
	}

	function after_login() {
		$this->redirect(array('controller' => 'pages', 'action' => 'homepage'));
	}

	function logout() {
		$this->Auth->logout();
		$this->Session->delete('SGAConfig');
		$this->redirect($this->redirect($this->Auth->logout()));
	}

	function trocar_senha($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException('Usuário não encontrado');
		}

		if ($this->request->is('post') || $this->request->is('put')) {
			$senha_antiga = $this->data['User']['senhaantiga'];
			$senha_nova1 = $this->data['User']['novasenha1'];
			$senha_nova2 = $this->data['User']['novasenha2'];

			$senha_bd = $this->User->findById($this->Session->read('Auth.User.id'));
			$storedHash = $senha_bd['User']['password'];
			$newHash = Security::hash($this->request->data['User']['senhaantiga'], 'blowfish', $storedHash);
			$correct = $storedHash == $newHash;
			if ($correct) {
				if ($senha_nova1 == $senha_nova2) {
					$this->request->data['User']['password'] = Security::hash($senha_nova1, 'blowfish');
					$this->User->id = $id;
					$this->User->set('password', Security::hash($senha_nova1, 'blowfish'));
					if ($this->User->save()) {
						$this->Session->setFlash(sprintf(__('Senha alterada com sucesso', true), 'user'), 'flashok');
						$this->redirect('/');
					} else {
						$this->Session->setFlash(sprintf(__('Erro ao alterar a senha. Por favor, tente de novo', true), 'user'), 'flasherror');
					}
				} else {
					$this->Session->setFlash(sprintf(__('As senhas introduzidas não são idênticas', true), 'user'), 'flasherror');
				}
			} else {
				$this->Session->setFlash(sprintf(__('A senha antiga nao confere', true), 'user'));
			}
		}
	}

	function faculdade_trocar_senha($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException('Usuário não encontrado');
		}

		if ($this->request->is('post') || $this->request->is('put')) {
			$senha_antiga = $this->data['User']['senhaantiga'];
			$senha_nova1 = $this->data['User']['novasenha1'];
			$senha_nova2 = $this->data['User']['novasenha2'];

			$senha_bd = $this->User->findById($this->Session->read('Auth.User.id'));
			$storedHash = $senha_bd['User']['password'];
			$newHash = Security::hash($this->request->data['User']['senhaantiga'], 'blowfish', $storedHash);
			$correct = $storedHash == $newHash;
			if ($correct) {
				if ($senha_nova1 == $senha_nova2) {
					$this->request->data['User']['password'] = Security::hash($senha_nova1, 'blowfish');
					$this->User->id = $id;
					$this->User->set('password', Security::hash($senha_nova1, 'blowfish'));
					if ($this->User->save()) {
						$this->Session->setFlash(__('Senha alterada com sucesso'), 'default', array('class' => 'alert success'));
						$this->redirect('/');
					} else {
						$this->Session->setFlash(sprintf(__('Erro ao alterar a senha. Por favor, tente de novo', true), 'user'), 'default', array('class' => 'alert error'));
					}
				} else {
					$this->Session->setFlash(sprintf(__('As senhas introduzidas não são idênticas', true), 'user'), 'default', array('class' => 'alert error'));
				}
			} else {
				$this->Session->setFlash(sprintf(__('A senha antiga nao confere', true), 'user'), 'default', array('class' => 'alert error'));
			}
		}
	}

	public function faculdade_logout() {
		$this->Auth->logout();
		$this->Session->delete('SGAConfig');
		$this->redirect($this->redirect($this->Auth->logout()));
	}

	public function faculdade_login() {
		$this->redirect(array('action' => 'login', 'docente' => false, 'faculdade' => false));
	}

	function beforeRender() {
		parent::beforeRender();
		$this->set('current_section', 'administracao');
		if ($this->action == 'logout') {
			$this->response->disableCache();
		}
	}

	function beforeFilter() {

		parent::beforeFilter();

		$this->Auth->allow(array('login', 'logout', 'opauth_complete'));
		if ($this->action == 'login' or $this->action == 'logout') {

			Configure::write('debug', 0);
		}
	}

	public function configura_permissoes($user_id) {
		$permissoes = $this->Acl->Aro->find('all', array('conditions' => array('Aro.foreign_key' => $this->Session->read('Auth.User.id'))));
		debug($permissoes);
		exit;
	}

	/**
	 * Tira a foto do aluno usando a WebCam
	 */
	public function captura_foto() {
		if (isset($GLOBALS["HTTP_RAW_POST_DATA"])) {
			$jpg = $GLOBALS["HTTP_RAW_POST_DATA"];
			$entidade_id = $this->Session->read('SGATemp.entidade_id_4_foto');
			$this->log('Erro ao capturar foto' . $entidade_id, 'testelog');
			if ($entidade_id != null) {
				$filename = APP . $entidade_id . ".jpg";
				file_put_contents($filename, $jpg);
			}
		} else {
			$this->log('Erro ao capturar foto');
		}
	}

	public function alterar_senha() {
		if ($this->request->is('post') || $this->request->is('put')) {
			$this->request->data['User']['user_id'] = $this->Session->read('Auth.User.id');
			if ($this->User->alteraPassword($this->request->data)) {
				$this->Session->setFlash(__('Senha Alterada com Sucesso'), 'default', array('class' => 'alert success'));
				$this->redirect('/');
			}
		}
	}

	public function opauth_complete() {
		debug($this->data);
	}

}

?>