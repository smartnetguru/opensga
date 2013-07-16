<?php

/**
 * App Controller
 *
 * @copyright     Copyright 2010-2011, INFOmoz (Informática-Moçambique) (http://infomoz.net)
 * * @link          http://opensga.com OpenSGA  - Sistema de Gestão Académica
 * @author		  Elisio Leonardo (elisio.leonardo@gmail.com)
 * @package       opensga
 * @subpackage    opensga.core.controller
 * @since         OpenSGA v 0.1.0

 *
 */

App::uses('AuditableConfig', 'Auditable.Lib');
App::uses('Controller', 'Controller');

/**
 * Classe Mae para todos os Controllers
 *
 * @package opensga
 * @subpackage opensga.core.controller
 * @author Elisio Leonardo <elisio.leonardo@infomoz.net>
 */
class AppController extends Controller {

    public $components = array( 'Acl', 'Auth'=>array('authenticate'=>'Blowfish'), 'Session', 'RequestHandler', 'Cookie','HighCharts.HighCharts', 'DebugKit.Toolbar');
    public $helpers = array('Html','Print', 'Form', 'Session', 'Js' => array('MyJquery'), 'EventsCalendar', 'Javascript', 'Ajax', 'PhpExcel','HighCharts.HighCharts');
    public $pdfConfig = array('engine' => 'CakePdf.Tcpdf');
    public $cacheAction = '1 hour';

    public function beforeFilter() {
        parent::beforeFilter();
		
        Configure::write('Config.language', $this->Session->read('Config.language'));
        setlocale(LC_ALL, 'ptb');
        if ($this->Auth->loggedIn()) {
            AuditableConfig::$responsibleId = $this->Auth->user('id');
        }

        // Caso deseje usar o modelo padrão, utilize como abaixo, caso contrário você pode usar qualquer modelo
        AuditableConfig::$Logger = ClassRegistry::init('Auditable.Logger');
		
        //Configure AuthComponent
        //Security::setHash('md5');
        //$this->Auth->authenticate('Blowfish');
        //$this->Security->blackHoleCallback = 'blackhole';
        $this->Auth->authorize = array('Actions' => array('actionPath' => 'controllers'));
        $this->Auth->autoRedirect = false;
        $this->Auth->loginError = "Nome de Usuário ou senha incorrectas";
        $this->Auth->authError = "Não tem permissão para aceder a essa página";
        $this->Auth->flash = array('element' => 'default', 'key' => 'auth', 'params' => array('class' => 'alert_error'));
        $this->Auth->loginAction = array('plugin'=>false,'controller' => 'users', 'action' => 'login');
        $this->Auth->logoutRedirect = array('plugin'=>false,'controller' => 'users', 'action' => 'login');
        $this->Auth->loginRedirect = array(array('plugin'=>false,'controller' => 'pages', 'action' => 'display', 'home'));

        if ($this->request->is('ajax')) {
            $this->Security->csrfCheck = false;
            $this->Security->validatePost = false;
        }

        $this->set('title_for_layout', '');
        
    }

    public function beforeRender() {
        parent::beforeRender();
        if(isset($this->request->prefix)){
            $this->layout=$this->request->prefix;
        }
    }


}

?>
