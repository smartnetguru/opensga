<?php
//App::import('Vendor', 'HighchartsPHP/Highchart');
/**
 * App Controller
 *
 * @copyright       Copyright 2010-2011, INFOmoz (Informática-Moçambique) (http://infomoz.net)
 * * @link          http://opensga.com OpenSGA  - Sistema de Gestão Académica
 * @author          Elisio Leonardo (elisio.leonardo@gmail.com)
 * @package         opensga
 * @subpackage      opensga.core.controller
 * @since           OpenSGA v 0.1.0
 *
 */
App::uses('AuditableConfig', 'Auditable.Lib');
//App::uses('Controller', 'Controller');

/**
 * Classe Mae para todos os Controllers
 *
 * @package    opensga
 * @subpackage opensga.core.controller
 * @author     Elisio Leonardo <elisio.leonardo@infomoz.net>
 */
class AppController extends Controller
{

    public $components = [
        'Security',
        'Acl',
        'Auth' => [
            'authenticate' => 'Blowfish'
        ],
        'Session',
        'RequestHandler' => ['viewClassMap' => ['xlsx' => 'CakeExcel.Excel']],
        'Paginator',
        'Cookie',
        'DebugKit.Toolbar' => [
            'panels' => []
        ],
        'Flash', 'Search.Prg'

    ];
    public $helpers = [
        'Html' => ['className' => 'BoostCake.BoostCakeHtml'],
        'Form' => ['className' => 'BoostCake.BoostCakeForm'],
        'Paginator' => ['className' => 'BoostCake.BoostCakePaginator'],
        'AclLink',
        'BreadCumbs',
        'Session',
        'Js' => [
            'MyJquery'
        ],
        'EventsCalendar',
        'Javascript',
        'Ajax',
        'PhpExcel',
        'AclLink',
        'Time',
        'AmazonS3',
        'NewRelic.NewRelic'
    ];
    public $pdfConfig = ['engine' => 'CakePdf.Tcpdf'];
    public $cacheAction = '1 hour';
    public $persistModel = true;


    public function beforeFilter()
    {

        parent::beforeFilter();

        $config_language = $this->Session->read('Config.language');
        if ($config_language == null) {
            $config_language = 'por';
        }
        Configure::write('Config.language', $config_language);
        setlocale(LC_ALL, 'ptb');
        if ($this->Auth->loggedIn()) {
            AuditableConfig::$responsibleId = $this->Auth->user('id');
        }
        AuditableConfig::$Logger = ClassRegistry::init('Auditable.Logger');
        $this->Security->csrfExpires = "+10 minutes";
        $this->Auth->authorize = ['Actions' => ['actionPath' => 'controllers']];
        $this->Auth->autoRedirect = false;
        $this->Auth->loginError = "Nome de Usuário ou senha incorrectas";
        $this->Auth->authError = "Não tem permissão para aceder a essa página";
        $this->Auth->flash = ['element' => 'default', 'key' => 'auth', 'params' => ['class' => 'alert_error']];
        $this->Auth->loginAction = ['plugin' => false, 'controller' => 'users', 'action' => 'login'];
        $this->Auth->logoutRedirect = ['plugin' => false, 'controller' => 'users', 'action' => 'login'];
        $this->Auth->loginRedirect = [['plugin' => false, 'controller' => 'pages', 'action' => 'display', 'home']];
        $this->Auth->unauthorizedRedirect = false;
        $paginationOptions = [];



        //Devemos forcar o prefixo para funcionarios da faculdade, docente e estudantes
        $general_actions = [
            'logout',
            'trocar_senha',
            'autocomplete',
            'altera_unidade_organica_admin',
            'display',
            'email_oficial_uem',
            'webmail',
            'email'
        ];
        if ($this->request->is('ajax')) {
            $this->Auth->allow(['faculdade_autocomplete','autocomplete']);
        } elseif (!in_array($this->action, $general_actions)) {
            $grupo_id = $this->Session->read('Auth.User.group_id');

            if ($grupo_id == 1) {
                $this->loadModel('User');
                $unidade_organica = $this->User->Funcionario->UnidadeOrganica->findById($this->Session->read('Auth.User.unidade_organica_id'));
                $codigo_unidade = $unidade_organica['UnidadeOrganica']['codigo_interno'];

                switch ($codigo_unidade) {
                    case 'cooperacao':
                        if ($this->request->plugin != 'cooperacao') {
                            $this->redirect([
                                'controller' => 'cooperacao_acordos',
                                'action' => 'home',
                                'plugin' => 'cooperacao'
                            ]);
                        }
                        break;
                    case 'faculdade':
                        if ($this->request->prefix != 'faculdade') {
                            $this->redirect(['faculdade' => true]);
                        }
                }
            } elseif ($grupo_id == 4) {
                if ($this->request->prefix != 'docente') {
                    $this->redirect(['docente' => true]);
                }
            } elseif ($grupo_id == 3) {

                if ($this->request->prefix != 'estudante') {
                    $this->redirect(['estudante' => true]);
                }
            } elseif ($grupo_id == 2) {
                $this->loadModel('User');
                $unidade_organica = $this->User->Funcionario->UnidadeOrganica->findById($this->Session->read('Auth.User.unidade_organica_id'));

                $codigo_unidade = $unidade_organica['UnidadeOrganica']['codigo_interno'];

                switch ($codigo_unidade) {
                    case 'dra':
                        break;
                    case 'cooperacao':
                        if ($this->request->plugin != 'cooperacao') {
                            $this->Session->setFlash(__('Não tem Permissão para acessar a area anterior'),
                                'default', ['class' => 'alert info']);
                            $this->redirect([
                                'controller' => 'cooperacao_acordos',
                                'action' => 'home',
                                'plugin' => 'cooperacao'
                            ]);
                        }
                        break;
                    case 'faculdade':
                        if ($this->request->prefix != 'faculdade') {
                            $this->Session->setFlash(__('Não tem Permissão para acessar a area anterior'),
                                'default', ['class' => 'alert info']);
                            $this->redirect(['controller' => 'pages', 'action' => 'home', 'faculdade' => true]);
                        }

                        break;
                    case 'cea':
                        if ($this->request->plugin != 'cea') {
                            $this->Session->setFlash(__('Não tem Permissão para acessar a area anterior'),
                                'default', ['class' => 'alert info']);
                            $this->redirect([
                                'controller' => 'pages',
                                'action' => 'home',
                                'plugin' => 'cea'
                            ]);
                        }
                        break;
                    default:
                        $this->Flash->error('Não está autorizado a aceder ao Sistema');
                        $this->redirect(['controller' => 'users', 'action' => 'logout']);
                }
                if ($this->User->isFromFaculdade($this->Session->read('Auth.User.id'))) {

                    if ($this->request->prefix != 'faculdade') {
                        $this->Session->setFlash(__('Não tem Permissão para acessar a area anterior'), 'default',
                            ['class' => 'alert info']);
                        $this->redirect(['controller' => 'pages', 'action' => 'home', 'faculdade' => true]);
                    }
                }

            }
        }


        $this->set('title_for_layout', '');
        $this->set(compact('paginationOptions'));
    }

    /**
     * Estamos a ler mensagens, notificacoes e tarefas em todas as requisicoes :(
     *
     * @Todo ver a melhor maneira de resolver isto
     */
    public function beforeRender()
    {
        parent::beforeRender();
        $this->loadModel('Message');

        $userId = $this->Session->read('Auth.User.id');
        if ($userId) {
            //Lemos as mensagens, notificacoes e tarefas em todas as requisicoes :(
            $totalMensagensPendentes = $this->Message->MessageUser->find('count', [
                'conditions' => [
                    'MessageUser.user_id' => $userId,
                    'message_folder_id' => 1,
                    'estado_message_id' => 1
                ]
            ]);
            $this->Message->MessageUser->contain(['Message' => 'User']);
            $headerMessages = $this->Message->MessageUser->find('all', [
                'conditions' => [
                    'MessageUser.user_id' => $userId,
                    'message_folder_id' => 1,
                    'estado_message_id' => 1
                ],
                'limit' => 5
            ]);
            $totalNotificacoesPendentes = 0;
            $totalTarefasPendentes = 0;

            $notificacoes = [];
            $tarefas = [];
        }


        if (isset($this->request->prefix) && !$this->request->is('ajax')) {
            $action = $this->action;
            if (strcmp($action, 'trocar_senha')) {
                $this->layout = $this->request->prefix;
            }

        }

        $pageTitle = Inflector::humanize($this->action);
        $pageTitle .= ' - ' . Inflector::humanize($this->request->param('controller'));
        $this->set('title_for_layout', $pageTitle);
        $this->set(compact('totalMensagensPendentes', 'totalTarefasPendentes', 'totalNotificacoesPendentes',
            'headerMessages', 'tarefas',
            'notificacoes'));
    }



}

?>
