<?php

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

    public function estudante_logout() {
        $this->redirect(array('action' => 'logout', 'estudante' => FALSE));
    }

    function delete($id = null) {
        if (!$id) {
            $this->Session->setFlash(sprintf(__('ID do Usuário Inválido', true), 'user'), 'flasherror');
            $this->redirect(array('action' => 'index'));
        }
        if ($this->User->delete($id)) {
            $this->Session->setFlash(sprintf(__('Usuário removido com sucesso', true), 'user'), 'flashok');
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(sprintf(__('O usuário não foi removido', true), 'user'), 'flasherror');
        $this->redirect(array('action' => 'index'));
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
            $this->Session->setFlash('Já está logado', 'default', array('class' => 'alert_success'));
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
                $this->Session->write('SGAConfig.anolectivo_id', Configure::read('OpenSGA.ano_lectivo_id'));
                $this->Session->write('SGAConfig.ano_lectivo', Configure::read('OpenSGA.ano_lectivo'));
                $this->Session->write('Config.language', 'por');


                $User = $this->Session->read('Auth.User');
                $entidade = $this->User->Entidade->findByUserId($User['id']);
                $this->Session->write('Auth.User.name', $entidade['Entidade']['name']);


                //Temos de Certificar que o Aro existe, principalmente para estudantes importados
                $aro = $this->User->Aro->find('all', array('conditions' => array('model' => $this->User->alias, 'foreign_key' => $User['id'])));
                if (empty($aro)) {
                    $new_aro = array('parent_id' => $User['group_id'], 'foreign_key' => $User['id'], 'model' => $this->User->alias);
                    $this->User->Aro->create();
                    $this->User->Aro->save($new_aro);
                }

                if ($User['group_id'] == 3) {

                    $this->redirect(array('controller' => 'pages', 'action' => 'home', 'estudante' => TRUE));
                }
                if ($User['group_id'] == 4) {
                    $this->redirect(array('controller' => 'pages', 'action' => 'home', 'docente' => TRUE));
                }
                if ($User['group_id'] == 2) {
                    $this->User->contain('Funcionario');
                    $user_data = $this->User->findById($User['id']);

                    $this->Session->write('Auth.User.unidade_organica_id', $user_data['Funcionario'][0]['unidade_organica_id']);

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
                $this->Session->setFlash(__('Nome de Usuário ou Senha Invalidos'), 'default', array('class' => 'alert error'));
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
                    $this->request->data['User']['password'] = Security::hash($senha_nova1,'blowfish');
                    $this->User->id = $id;
                    $this->User->set('password',Security::hash($senha_nova1,'blowfish'));
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
                    $this->request->data['User']['password'] = Security::hash($senha_nova1,'blowfish');
                    $this->User->id = $id;
                    $this->User->set('password',Security::hash($senha_nova1,'blowfish'));
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
                $filename = APP . "/entidades_fotos/" . $entidade_id . ".jpg";
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

    /**
     * uploads files to the server
     * @params:
     * 		$folder 	= the folder to upload the files e.g. 'img/files'
     * 		$formdata 	= the array containing the form files
     * 		$itemId 	= id of the item (optional) will create a new sub folder
     * @return:
     * 		will return an array with the success of each file upload
     */
    function uploadFiles($folder, $formdata, $itemId = null) {
        // setup dir names absolute and relative
        $folder_url = WWW_ROOT . $folder;
        $rel_url = $folder;

        // create the folder if it does not exist
        if (!is_dir($folder_url)) {
            mkdir($folder_url);
        }

        // if itemId is set create an item folder
        if ($itemId) {
            // set new absolute folder
            $folder_url = WWW_ROOT . $folder . '/' . $itemId;
            // set new relative folder
            $rel_url = $folder . '/' . $itemId;
            // create directory
            if (!is_dir($folder_url)) {
                mkdir($folder_url);
            }
        }

        // list of permitted file types, this is only images but documents can be added
        $permitted = array('image/gif', 'image/jpeg', 'image/pjpeg', 'image/png');

        // loop through and deal with the files
        foreach ($formdata as $file) {
            // replace spaces with underscores
            $filename = str_replace(' ', '_', $file['name']);
            // assume filetype is false
            $typeOK = false;
            // check filetype is ok
            foreach ($permitted as $type) {
                if ($type == $file['type']) {
                    $typeOK = true;
                    break;
                }
            }

            // if file type ok upload the file
            if ($typeOK) {
                // switch based on error code
                switch ($file['flasherror']) {
                    case 0:
                        // check filename already exists
                        if (!file_exists($folder_url . '/' . $filename)) {
                            // create full filename
                            $full_url = $folder_url . '/' . $filename;
                            $url = $rel_url . '/' . $filename;
                            // upload the file
                            $success = move_uploaded_file($file['tmp_name'], $url);
                        } else {
                            // create unique filename and upload file
                            ini_set('date.timezone', 'Europe/London');
                            $now = date('Y-m-d-His');
                            $full_url = $folder_url . '/' . $now . $filename;
                            $url = $rel_url . '/' . $now . $filename;
                            $success = move_uploaded_file($file['tmp_name'], $url);
                        }
                        // if upload was successful
                        if ($success) {
                            // save the url of the file
                            $result['urls'][] = $url;
                        } else {
                            $result['errors'][] = "Error uploaded $filename. Please try again.";
                        }
                        break;
                    case 3:
                        // an error occured
                        $result['errors'][] = "Error uploading $filename. Please try again.";
                        break;
                    default:
                        // an error occured
                        $result['errors'][] = "System error uploading $filename. Contact webmaster.";
                        break;
                }
            } elseif ($file['error'] == 4) {
                // no file was selected for upload
                $result['nofiles'][] = "No file Selected";
            } else {
                // unacceptable file type
                $result['errors'][] = "$filename cannot be uploaded. Acceptable file types: gif, jpg, png.";
            }
        }
        return $result;
    }

    public function opauth_complete() {
        debug($this->data);
    }

}

?>