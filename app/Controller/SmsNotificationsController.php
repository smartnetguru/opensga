<?php

ini_set('memory_limit', "512M");
App::uses('AppController', 'Controller');
App::uses('HttpSocket', 'Network/Http');

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
        
        $country_id = $this->request->query['CountryId'];
        $country_iso = $this->request->query['CountryISO'];
        $product_id = $this->request->query['ProductId'];
        $pricepoint_id = $this->request->query['PricePointId'];
        $operator_id = $this->request->query['OpId'];
        $origin = $this->request->query['Origin'];
        $text = $this->request->query['Text'];
        $transaction_id = $this->request->query['TxId'];
        $test = $this->request->query['Test'];
        $password_hash = $this->request->query['PasswordHash'];
        
        $array_sms = array(
            'SmsNotification'=>array(
                'message'=>$text,
                'countryid'=>$country_id,
                'countryiso'=>$country_iso,
                'productid'=>$product_id,
                'pricepointid'=>$pricepoint_id,
                'operatorid'=>$operator_id,
                'transactionind'=>$transaction_id,
                'password_hash'=>$password_hash,
                'phone_number'=>$origin
            )
        );
        
        $this->SmsNotification->create();
        $this->SmsNotification->save($array_sms);
        
        $message = preg_replace('/\s+/', ' ', $text);
        $message_explode = explode(' ', $message);
        $comando_recebido = strtolower($message_explode[0]);
        $this->log("Sms received",'sms_timwe');
        $this->log($text,'sms_timwe');
        $this->log($message_explode[1],'sms_timwe');
        $this->log("------------------------------------",'sms_timwe');
        
        switch ($comando_recebido) {
            case "nome":
                //$this->redirect(array('action' => 'get_nome_completo', $phone, $smscenter, $message_explode[1]));
                break;
            case "email":
                //$this->redirect(array('action' => 'get_email_estudante', $phone, $smscenter, $message_explode[1]));
                break;
        }
        
         
        $response_text  =   $this->SmsNotification->id."SIGA";
         $this->log($response_text,'sms_timwe');
        $this->response->type("text/html");
        $this->response->charset("utf-8");
        //$this->response->header(array("text" => $response_text));
        $this->response->body($response_text);
        //$this->response->send();
        return $this->response;
        
        
    }
    
    public function send_sms(){
        
        $this->loadModel('SmsEnviada');
        $this->SmsEnviada->sendSMS(842569523,"Ola Elisio Leonardo");
        
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
