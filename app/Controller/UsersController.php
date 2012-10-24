<?php

/**
 * OpenSGA - Sistema de Gest�o Acad�mica
 *   Copyright (C) 2010-2011  INFOmoz (Inform�tica-Mo�ambique)
 *
 * Este programa � um software livre: Voc� pode redistribuir e/ou modificar
 * todo ou parte deste programa, desde que siga os termos da licen�a por nele
 * estabelecidos. Grande parte do c�digo deste programa est� sob a licen�a
 * GNU Affero General Public License publicada pela Free Software Foundation.
 * A vers�o original desta licen�a est� dispon�vel na pasta raiz deste software.
 *
 * Este software � distribuido sob a perspectiva de que possa ser �til para
 * satisfazer as necessidades dos seus utilizadores, mas SEM NENHUMA GARANTIA. Veja
 * os termos da licen�a GNU Affero General Public License para mais detalhes
 *
 * As redistribui��es deste software, mesmo quando o c�digo-fonte for modificado significativamente,
 * devem manter est� informa��o legal, assim como a licen�a original do software.
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

    function login() {

        if ($this->request->is('post')) {
            if ($this->Auth->login()) {
                $this->loadModel('Config');
                $configs = $this->Config->find('all');
                $sgaconfigs = array();
                foreach ($configs as $c) {
                    $name = "SGAConfig." . $c['Config']['name'];

                    $this->Session->write($name, $c['Config']['value']);
                }
                $User = $this->Session->read('Auth.User');

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
                $this->redirect('/');
            } else {
                $this->Session->setFlash('Your username or password was incorrect.');
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
            throw new NotFoundException('User não encontrado');
        }

        if ($this->request->is('post') || $this->request->is('put')) {
            $senha_antiga = $this->data['User']['senhaantiga'];
            $senha_nova1 = $this->data['User']['novasenha1'];
            $senha_nova2 = $this->data['User']['novasenha2'];

            $senha_bd = $this->User->findById($this->Session->read('Auth.User.id'));
            if ($senha_bd['User']['password'] == AuthComponent::password($senha_antiga)) {
                if ($senha_nova1 == $senha_nova2) {
                    $this->request->data['User']['password'] = AuthComponent::password($senha_nova1);
                    if ($this->User->save($this->request->data)) {
                        $this->Session->setFlash(sprintf(__('Senha alterada com sucesso', true), 'user'), 'flashok');
                        $this->redirect(array('action' => 'index'));
                    } else {
                        $this->Session->setFlash(sprintf(__('Erro ao alterar a senha. Por favor, tente de novo', true), 'user'), 'flasherror');
                    }
                } else {
                    $this->Session->setFlash(sprintf(__('As senhas introduzidas não são idênticas', true), 'user'), 'flasherror');
                    $this->redirect(array('action' => 'index'));
                }
            } else {
                $this->Session->setFlash(sprintf(__('A senha antiga nao confere', true), 'user'));
                $this->redirect(array('action' => 'index'));
            }
        }
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
        $this->Auth->allow(array('login', 'logout'));
    }

    function teste() {
        $aluno = $this->User->Aluno->findById(1);
        debug($aluno);
        $this->User->geraUsername('Nilza Martina Notico');
        $this->render('add');
    }

    public function configura_permissoes($user_id) {
        $permissoes = $this->Acl->Aro->find('all', array('conditions' => array('Aro.foreign_key' => $this->Session->read('Auth.User.id'))));
        debug($permissoes);
        exit;
    }

    function inicializa_acl($user_id) {
        if (!isset($user_id)) {
            exit;
        }
        $grupo = $this->Session->read('Auth.User.group_id');
        if ($grupo != 1) {
            exit;
        }
        $grupo = $this->User->Group;

        //Permissoes para SuperAdmin
        $grupo->id = 1;
        $this->Acl->allow($grupo, 'controllers');


        //Permissoes para o Grupo de docentes
        $grupo->id = 4;
        $this->Acl->deny($grupo, 'controllers');
        $this->Acl->allow($grupo, 'controllers/SadeAutoAvaliacaos');
        $this->Acl->allow($grupo, 'controllers/SadeAutoAvaliacaos/docente');
        $this->Acl->allow($grupo, 'controllers/Users/alterar_senha');


        //Permissoes para o Grupo de Funcionarios
        $grupo->id = 2;
        $this->Acl->deny($grupo, 'controllers');
        $this->Acl->allow($grupo, 'controllers/Alunos');
        $this->Acl->allow($grupo, 'controllers/Inscricaos');
        $this->Acl->allow($grupo, 'controllers/Planoestudos/getByCurso');
        $this->Acl->allow($grupo, 'controllers/Provincias/getByPais');
        $this->Acl->allow($grupo, 'controllers/Cidades/getByProvincia');
        $this->Acl->allow($grupo, 'controllers/Relatorios/resumo_semestral');
        $this->Acl->allow($grupo, 'controllers/FinanceiroTransacaos');

        $this->Acl->allow($grupo, 'controllers/Users/alterar_senha');

        //Permissoes para o Grupo de Estudantes
        $grupo->id = 3;
        $this->Acl->deny($grupo, 'controllers');
        $this->Acl->allow($grupo, 'controllers/Pages/estudante_home');


        $this->Session->setFlash(__('Permissões configuradas com sucesso'), 'default', array('class' => 'alert_success'));
        $this->redirect('/');
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
            if ($this->User->alteraPassword($this->request->data)) {
                $this->Session->setFlash('Senha Alterada');
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

}

?>