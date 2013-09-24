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

    public $components = array('Security', 'Acl', 'Auth'=>array('authenticate'=>'Blowfish'), 'Session', 'RequestHandler', 'Cookie','HighCharts.HighCharts', 'DebugKit.Toolbar');
    public $helpers = array('Html','AclLink','Print', 'Form', 'Session', 'Js' => array('MyJquery'), 'EventsCalendar', 'Javascript', 'Ajax', 'PhpExcel','HighCharts.HighCharts','AclLink');
    public $pdfConfig = array('engine' => 'CakePdf.Tcpdf');
    public $cacheAction = '1 hour';

    public function beforeFilter() {
        parent::beforeFilter();
		
        $config_language  = $this->Session->read('Config.language');
       
        if($config_language==null){
            $config_language = 'por';
        }
        Configure::write('Config.language', $config_language);
        setlocale(LC_ALL, 'ptb');
        if ($this->Auth->loggedIn()) {
            AuditableConfig::$responsibleId = $this->Auth->user('id');
        }

        // Caso deseje usar o modelo padrão, utilize como abaixo, caso contrário você pode usar qualquer modelo
        AuditableConfig::$Logger = ClassRegistry::init('Auditable.Logger');
		
        
        
       $this->Security->csrfExpires = "+30 minutes";
        $this->Auth->authorize = array('Actions' => array('actionPath' => 'controllers'));
        $this->Auth->autoRedirect = false;
        $this->Auth->loginError = "Nome de Usuário ou senha incorrectas";
        $this->Auth->authError = "Não tem permissão para aceder a essa página";
        $this->Auth->flash = array('element' => 'default', 'key' => 'auth', 'params' => array('class' => 'alert_error'));
        $this->Auth->loginAction = array('plugin'=>false,'controller' => 'users', 'action' => 'login');
        $this->Auth->logoutRedirect = array('plugin'=>false,'controller' => 'users', 'action' => 'login');
        $this->Auth->loginRedirect = array(array('plugin'=>false,'controller' => 'pages', 'action' => 'display', 'home'));
        $this->Auth->unauthorizedRedirect = false;

        if ($this->request->is('ajax')) {
            $this->Security->csrfCheck = false;
            $this->Security->validatePost = false;
        }
        
        //Devemos forcar o prefixo para funcionarios da faculdade, docente e estudantes
        $grupo_id = $this->Session->read('Auth.User.group_id');
        if($grupo_id ==4){
            if($this->request->prefix != 'docente'){
                $this->Security->blackHole($this);
            }
            
        } elseif($grupo_id ==3){
            if($this->request->prefix != 'estudante'){
                $this->Security->blackHole($this);
            }
        } elseif($grupo_id ==2){
            $this->loadModel('User');
            if($this->User->isFromFaculdade($this->Session->read('Auth.User.id'))){
                if($this->request->prefix != 'faculdade'){
                    $this->Session->setFlash(__('Não tem Permissão para acessar a area anterior'),'default',array('class'=>'alert info'));
                $this->redirect(array('controller'=>'pages','action'=>'home','faculdade'=>true));
            }
            }
           
        }

        $this->set('title_for_layout', '');
        
    }
    


    public function beforeRender() {
        parent::beforeRender();
        if(isset($this->request->prefix)){
            $this->layout=$this->request->prefix;
        }
    }
    
    
     public function afterFilter(){
        parent::afterFilter();
 
        // sql logging to chrome console
        if (class_exists('ConnectionManager') && Configure::read('debug') >= 2) {
            App::import('Vendor', 'ChromePhp/ChromePhp');
            
            $sources = ConnectionManager::sourceList();
            
            $logs = array();
            foreach ($sources as $source){
                $db = ConnectionManager::getDataSource($source);
                $logs[$source] = $db->getLog();
            }
            
            foreach ($logs as $source => $logInfo){
                
                $text = $logInfo['count'] > 1 ? 'queries' : 'query';
                ChromePhp::info('------- SQL: '.sprintf('(%s) %s %s took %s ms', $source, count($logInfo['log']), $text, $logInfo['time']).' -------');
                ChromePhp::info('------- REQUEST: '.$this->request->params['controller'].'/'.$this->request->params['action'].' -------');
                
                foreach ($logInfo['log'] as $k => $i){
                    
                    $i += array('error' => '');
                    if (!empty($i['params']) && is_array($i['params'])) {
                        $bindParam = $bindType = null;
                        if (preg_match('/.+ :.+/', $i['query'])) {
                            $bindType = true;
                        }
                        foreach ($i['params'] as $bindKey => $bindVal) {
                            if ($bindType === true) {
                                $bindParam .= h($bindKey) ." => " . h($bindVal) . ", ";
                            } else {
                                $bindParam .= h($bindVal) . ", ";
                            }
                        }
                        $i['query'] .= " , params[ " . rtrim($bindParam, ', ') . " ]";
                    }
                    
                    $error = !empty($i['error']) ? "\nError: ".$i['error']:"\n";
                    $logStr = $i['query'].$error."\nAffected: ".$i['affected']."\nNum. Rows: ".$i['numRows']."\nTook(ms): ".$i['took']."\n\n";
                    
                    if(!empty($i['error'])){
                        ChromePhp::error($logStr);
                    }
                    else if($i['took'] >= 100){
                        ChromePhp::warn($logStr);
                    }
                    else{
                        ChromePhp::info($logStr);
                    }
                }
            }
        }
    }


}

?>
