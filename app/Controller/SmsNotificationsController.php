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

    

    

    public function get_message(){
        $this->log("Sms received",'sms_timwe');
        die(debug($this->request));
        CakeLog::debug($this->request->query);
        $this->response->type("text/html");
        $this->response->charset("utf-8");
        $this->response->header(array("text" => "Ok"));
        $this->autoRender = false;
        $this->response->send();
    }

    public function get_sms() {
        $phone = $this->request->query['phone'];
        $smscenter = $this->request->query['smscenter'];
        $message = $this->request->query['text'];
        $message = preg_replace('/\s+/', ' ', $message);
        $message_explode = explode(' ', $message);
        $comando_recebido = strtolower($message_explode[0]);
        
        $this->SmsNotification->create();
        $array_notification = array(
            'SmsNotification'=>array(
                'phone_number'=>$phone,
                'message' => $message
            )
        );
        $this->SmsNotification->save($array_notification);
        switch ($comando_recebido) {
            case "nome":
                $this->redirect(array('action' => 'get_nome_completo', $phone, $smscenter, $message_explode[1]));
                break;
            case "email":
                $this->redirect(array('action' => 'get_email_estudante', $phone, $smscenter, $message_explode[1]));
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
    
    /**
     * Retorna o Email do usuario, dado o numero de estudante
     */
    public function get_email_estudante($phone, $smscenter, $numero_estudante) {
        CakeLog::debug("chegamos na funcao Email");
        CakeLog::debug($numero_estudante);
        $this->loadModel('Aluno');
        setlocale(LC_CTYPE, 'en_US.UTF-8');
        mb_internal_encoding("UTF-8");
        mb_http_output('UTF-8');

        $aluno = $this->Aluno->findByCodigo($numero_estudante);
        $email_estudante = $aluno['User']['username'];
        CakeLog::debug($email_estudante);
        $texto_resposta = rawurlencode("O email do estudante " . $numero_estudante . " é " . $email_estudante.". Senha padrão:dra02062013");
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
