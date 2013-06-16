<?php

ini_set('memory_limit', "512M");
App::uses('AppController', 'Controller');

/**
 * SmsNotifications Controller
 *
 * @property SmsNotification $SmsNotification
 */
class SmsNotificationsController extends AppController {

    /**
     * index method
     *
     * @return void
     */
    public function index() {
        $this->SmsNotification->recursive = 0;
        $this->set('smsNotifications', $this->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->SmsNotification->exists($id)) {
            throw new NotFoundException(__('Invalid sms notification'));
        }
        $options = array('conditions' => array('SmsNotification.' . $this->SmsNotification->primaryKey => $id));
        $this->set('smsNotification', $this->SmsNotification->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->SmsNotification->create();
            if ($this->SmsNotification->save($this->request->data)) {
                $this->Session->setFlash(__('The sms notification has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The sms notification could not be saved. Please, try again.'));
            }
        }
        $smsNotificationTypes = $this->SmsNotification->SmsNotificationType->find('list');
        $this->set(compact('smsNotificationTypes'));
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        if (!$this->SmsNotification->exists($id)) {
            throw new NotFoundException(__('Invalid sms notification'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->SmsNotification->save($this->request->data)) {
                $this->Session->setFlash(__('The sms notification has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The sms notification could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('SmsNotification.' . $this->SmsNotification->primaryKey => $id));
            $this->request->data = $this->SmsNotification->find('first', $options);
        }
        $smsNotificationTypes = $this->SmsNotification->SmsNotificationType->find('list');
        $this->set(compact('smsNotificationTypes'));
    }

    /**
     * delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
        $this->SmsNotification->id = $id;
        if (!$this->SmsNotification->exists()) {
            throw new NotFoundException(__('Invalid sms notification'));
        }
        $this->request->onlyAllow('post', 'delete');
        if ($this->SmsNotification->delete()) {
            $this->Session->setFlash(__('Sms notification deleted'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Sms notification was not deleted'));
        $this->redirect(array('action' => 'index'));
    }

    public function get_sms() {
        $phone = $this->request->query['phone'];
        $smscenter = $this->request->query['smscenter'];
        $message = $this->request->query['text'];
        $message = preg_replace('/\s+/', ' ', $message);
        $message_explode = explode(' ', $message);
        $comando_recebido = strtolower($message_explode[0]);
        
        $this->SmsNotification->create();
        
        switch ($comando_recebido) {
            case "nome":
                CakeLog::debug("Quero novo nome");
                $this->redirect(array('action' => 'get_nome_completo', $phone, $smscenter, $message_explode[1]));
                break;
        }

        
        

        $this->autoRender = false;
    }

    public function get_nome_completo($phone, $smscenter, $numero_estudante) {
        CakeLog::debug("chegamos na funcao");
        CakeLog::debug($numero_estudante);
        $this->loadModel('Aluno');
        setlocale(LC_CTYPE, 'en_US.UTF-8');
        mb_internal_encoding("UTF-8");
        mb_http_output('UTF-8');

        $aluno = $this->Aluno->findByCodigo($numero_estudante);
        $nome_completo = $aluno['Entidade']['name'];
        CakeLog::debug($nome_completo);
        $texto_resposta = rawurlencode("O nome completo do estudante " . $numero_estudante . " é " . $nome_completo);
        CakeLog::debug($texto_resposta);
        $this->response->type("text/html");
        $this->response->charset("utf-8");
        $this->response->header(array("text" => $texto_resposta));
        $this->autoRender = false;
        $this->response->send();
    }

    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow();
    }

}
