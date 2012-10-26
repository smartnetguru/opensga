<?php
/**
 * OpenSGA - Sistema de Gest�o Acad�mica
 *   Copyright (C) 2010-2012  INFOmoz (Inform�tica-Mo�ambique)
 *
 * @copyright     Copyright 2010-2012, INFOmoz (Inform�tica-Mo�ambique) (http://infomoz.net)
 ** @link          http://opensga.com OpenSGA  - Sistema de Gestão Académica
 * @author		  Elisio Leonardo (elisio.leonardo@gmail.com)
 * @package       opensga
 * @subpackage    opensga.core.controller
 * @since         OpenSGA v 0.1.0

 *
 */


class GroupsController extends AppController {

	var $name = 'Groups';

	function index() {
		$this->Group->recursive = 0;
		$this->set('groups', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'group'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('group', $this->Group->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Group->create();
			if ($this->Group->save($this->data)) {
				$this->Session->setFlash(sprintf(__('Dado Cadastrado com sucesso', true), 'group'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('Erro ao gravar dados. Por favor tente de novo.', true), 'group'));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'group'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Group->save($this->data)) {
				$this->Session->setFlash(sprintf(__('Dado Cadastrado com sucesso', true), 'group'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('Erro ao gravar dados. Por favor tente de novo.', true), 'group'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Group->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid id for %s', true), 'group'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Group->delete($id)) {
			$this->Session->setFlash(sprintf(__('%s deleted', true), 'Group'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s was not deleted', true), 'Group'));
		$this->redirect(array('action' => 'index'));
	}


	function initDB(){
		$group =& $this->User->Group;
		$group->id = 1;

		$this->Acl->allow(array('model' => 'Group', 'foreign_key' => 1), 'controllers');
	}

        function beforeRender(){
            $this->set('current_section','administracao');
        }

	function build_acl() {
        if (!Configure::read('debug')) {
            return $this->_stop();
        }
        $log = array();

        $aco = $this->Acl->Aco;
        $root = $aco->node('controllers');
        if (!$root) {
            $aco->create(array('parent_id' => null, 'model' => null, 'alias' => 'controllers'));
            $root = $aco->save();
            $root['Aco']['id'] = $aco->id;
            $log[] = 'Created Aco node for controllers';
        } else {
            $root = $root[0];
        }

        App::uses('File', 'Utility');

        $Controllers = App::objects('controller');

        $appIndex = array_search('App', $Controllers);
        if ($appIndex !== false ) {
            unset($Controllers[$appIndex]);
        }
        $baseMethods = get_class_methods('Controller');
        $baseMethods[] = 'build_acl';

        $Plugins = $this->_getPluginControllerNames();
        $Controllers = array_merge($Controllers, $Plugins);

        // look at each controller in app/controllers
       foreach ($Controllers as $ctrlName) {
       		$ctrlName = str_replace('Controller','',$ctrlName);
            $methods = $this->_getClassMethods($this->_getPluginControllerPath($ctrlName));

            // Do all Plugins First
            if ($this->_isPlugin($ctrlName)){
                $pluginNode = $aco->node('controllers/'.$this->_getPluginName($ctrlName));
                if (!$pluginNode) {
                    $aco->create(array('parent_id' => $root['Aco']['id'], 'model' => null, 'alias' => $this->_getPluginName($ctrlName)));
                    $pluginNode = $aco->save();
                    $pluginNode['Aco']['id'] = $aco->id;
                    $log[] = 'Created Aco node for ' . $this->_getPluginName($ctrlName) . ' Plugin';
                }
            }
            // find / make controller node
            $controllerNode = $aco->node('controllers/'.$ctrlName);
            if (!$controllerNode) {
                if ($this->_isPlugin($ctrlName)){
                    $pluginNode = $aco->node('controllers/' . $this->_getPluginName($ctrlName));
                    $aco->create(array('parent_id' => $pluginNode['0']['Aco']['id'], 'model' => null, 'alias' => $this->_getPluginControllerName($ctrlName)));
                    $controllerNode = $aco->save();
                    $controllerNode['Aco']['id'] = $aco->id;
                    $log[] = 'Created Aco node for ' . $this->_getPluginControllerName($ctrlName) . ' ' . $this->_getPluginName($ctrlName) . ' Plugin Controller';
                } else {
                    $aco->create(array('parent_id' => $root['Aco']['id'], 'model' => null, 'alias' => $ctrlName));
                    $controllerNode = $aco->save();
                    $controllerNode['Aco']['id'] = $aco->id;
                    $log[] = 'Created Aco node for ' . $ctrlName;
                }
            } else {
                $controllerNode = $controllerNode[0];
            }

            //clean the methods. to remove those in Controller and private actions.
            foreach ($methods as $k => $method) {
                if (strpos($method, '_', 0) === 0) {
                    unset($methods[$k]);
                    continue;
                }
                if (in_array($method, $baseMethods)) {
                    unset($methods[$k]);
                    continue;
                }
                $methodNode = $aco->node('controllers/'.$ctrlName.'/'.$method);
                if (!$methodNode) {
                    $aco->create(array('parent_id' => $controllerNode['Aco']['id'], 'model' => null, 'alias' => $method));
                    $methodNode = $aco->save();
                    $log[] = 'Created Aco node for '. $method;
                }
            }
        }
        if(count($log)>0) {
            debug($log);
        }
    }

function _getClassMethods($ctrlName = null) {
        App::uses($ctrlName . 'Controller', 'Controller');
        if (strlen(strstr($ctrlName, '.')) > 0) {
            // plugin's controller
            $num = strpos($ctrlName, '.');
            $ctrlName = substr($ctrlName, $num+1);
        }
        $ctrlclass = $ctrlName.'Controller';

        $methods = get_class_methods($ctrlclass);




        // Add scaffold defaults if scaffolds are being used
        $properties = get_class_vars($ctrlclass);
        if (array_key_exists('scaffold',$properties)) {
            if($properties['scaffold'] == 'admin') {
                $methods = array_merge($methods, array('admin_add', 'admin_edit', 'admin_index', 'admin_view', 'admin_delete'));
            } else {
                $methods = array_merge($methods, array('add', 'edit', 'index', 'view', 'delete'));
            }
        }
        return $methods;
    }

    function _isPlugin($ctrlName = null) {
        $arr = String::tokenize($ctrlName, '/');
        if (count($arr) > 1) {
            return true;
        } else {
            return false;
        }
    }

    function _getPluginControllerPath($ctrlName = null) {
        $arr = String::tokenize($ctrlName, '/');
        if (count($arr) == 2) {
            return $arr[0] . '.' . $arr[1];
        } else {
            return $arr[0];
        }
    }

    function _getPluginName($ctrlName = null) {
        $arr = String::tokenize($ctrlName, '/');
        if (count($arr) == 2) {
            return $arr[0];
        } else {
            return false;
        }
    }

    function _getPluginControllerName($ctrlName = null) {
        $arr = String::tokenize($ctrlName, '/');
        if (count($arr) == 2) {
            return $arr[1];
        } else {
            return false;
        }
    }

/**
 * Get the names of the plugin controllers ...
 *
 * This function will get an array of the plugin controller names, and
 * also makes sure the controllers are available for us to get the
 * method names by doing an App::import for each plugin controller.
 *
 * @return array of plugin names.
 *
 */
    function _getPluginControllerNames() {
        $Plugins = App::objects('plugins');
        $arr = array();

        // Loop through the plugins
        foreach($Plugins as $pluginName) {
            $controllers = App::objects('controller', $pluginName);
            $pluginPath = App::pluginPath($pluginName);

            foreach ($controllers as $controller) {
                $arr[] = Inflector::humanize($pluginName) . "/" . $controller;
            }
        }
        return $arr;
    }

	    function configura_permissoes($user_id) {
        if (!isset($user_id)) {
            exit;
        }
        $grupo = $this->Session->read('Auth.User.group_id');
        if ($grupo != 1) {
            exit;
        }
        $grupo = $this->Group;

        //Permissoes para SuperAdmin
        $grupo->id = 1;
        $this->Acl->allow($grupo, 'controllers');


        //Permissoes para o Grupo de docentes
        $grupo->id = 4;
        $this->Acl->deny($grupo, 'controllers');
        $this->Acl->allow($grupo, 'controllers/Pages/docente_home');
        $this->Acl->allow($grupo, 'controllers/Turmas/docente_index');
        $this->Acl->allow($grupo, 'controllers/Turmas/docente_detalhes_turma');
        $this->Acl->allow($grupo, 'controllers/Users/docente_login');
        $this->Acl->allow($grupo, 'controllers/Users/docente_logout');
        $this->Acl->allow($grupo, 'controllers/Users/login');
        $this->Acl->allow($grupo, 'controllers/Users/logout');

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
        $this->Acl->allow($grupo, 'controllers/Users/estudante_login');
        $this->Acl->allow($grupo, 'controllers/Users/estudante_logout');
        $this->Acl->allow($grupo, 'controllers/Users/login');
        $this->Acl->allow($grupo, 'controllers/Users/logout');



        $this->Session->setFlash(__('Permissões configuradas com sucesso'), 'default', array('class' => 'alert_success'));
        $this->redirect('/');
    }

}
?>