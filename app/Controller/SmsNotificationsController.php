<?php

ini_set('memory_limit', "512M");
App::uses('AppController', 'Controller');
App::uses('HttpSocket', 'Network/Http');
ini_set('max_execution_time', 300);

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

    public function get_message() {

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
            'SmsNotification' => array(
                'message' => $text,
                'countryid' => $country_id,
                'countryiso' => $country_iso,
                'productid' => $product_id,
                'pricepointid' => $pricepoint_id,
                'operatorid' => $operator_id,
                'transactionind' => $transaction_id,
                'password_hash' => $password_hash,
                'phone_number' => $origin
            )
        );

        $this->SmsNotification->create();
        $this->SmsNotification->save($array_sms);

        $message = preg_replace('/\s+/', ' ', $text);
        $message_explode = explode(' ', $message);
        $comando_recebido = strtolower($message_explode[0]);


        switch ($comando_recebido) {
            case "rm2014":
                $this->log("Renovacao" . $message, 'sms');
                $this->SmsNotification->processaSMSRenovacao($this->SmsNotification->id, $origin, $message_explode[1]);
                //$this->redirect(array('action' => 'get_nome_completo', $phone, $smscenter, $message_explode[1]));
                break;
            case "email":
                //$this->redirect(array('action' => 'get_email_estudante', $phone, $smscenter, $message_explode[1]));
                break;
        }


        $response_text = $this->SmsNotification->id . "SIGA";
        $this->log($response_text, 'sms_timwe');
        $this->response->type("text/html");
        $this->response->charset("utf-8");
        //$this->response->header(array("text" => $response_text));
        $this->response->body($response_text);
        //$this->response->send();
        return $this->response;
    }

    public function send_sms() {

        $this->loadModel('SmsEnviada');
        $this->SmsEnviada->sendSMS(842569523, "SMS de Teste");
    }

    public function send_sms_estrangeiros() {

        $array_numeros = array(842569523, 844213948, 826489374);
        $this->loadModel('SmsEnviada');
        $this->loadModel('Aluno');
        $this->Aluno->contain(array(
            'Entidade' => array(
                'EntidadeContacto' => array(
                    'conditions' => array('tipo_contacto_id' => 2)
                )
            )
        ));
        $alunos = $this->Aluno->find('all', array('conditions' => array('Entidade.pais_nascimento NOT' => 152)));
        debug(count($alunos));
        foreach ($alunos as $aluno) {
            if(isset($aluno['Entidade']['EntidadeContacto'][0]['valor'])){
                $numero = $aluno['Entidade']['EntidadeContacto'][0]['valor'];
            if (is_numeric($numero)) {
                debug($numero);
                $mensagem = "Boa tarde! A DRA o convida a participar da reuniao com estudantes estrangeiros, amanha (27/09/13), as 14, no Centro Cultural Universitario. www.dra.uem.mz";
                debug($mensagem);
                $this->SmsEnviada->sendSMS($numero,$mensagem);    
            }
            }
            

            //debug($aluno);
            //$this->SmsEnviada->sendSMS($v,"Boa tarde! A DRA o convida a participar da reuniao com estudantes estrangeiros, amanha (27/09/13), as 14, no Centro Cultural Universitario.");    
        }
        
    }

    public function testa_sms() {
        $this->SmsNotification->processaSMSRenovacao(1, 258826489374, 20131030);
    }

    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow();
    }

}
