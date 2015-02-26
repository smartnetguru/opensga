<?php

ini_set('memory_limit', "512M");
App::uses('AppController', 'Controller');
App::uses('HttpSocket', 'Network/Http');
ini_set('max_execution_time', 3000);

/**
 * SmsNotifications Controller
 *
 * @property SmsNotification $SmsNotification
 */
class SmsNotificationsController extends AppController {

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

				$this->SmsNotification->processaSMSRenovacao($this->SmsNotification->id, $origin, $message_explode[1]);

				break;
			case "crm2014":

				$this->SmsNotification->processaSMSConfirmacaoRenovacao($this->SmsNotification->id, $origin, $message_explode[1]);

				break;
			case "email":
				$this->SmsNotification->getEmailEstudante($this->SmsNotification->id, $origin, $message_explode[1]);
				break;
			case "senha":
				$this->SmsNotification->getSenhaEmailEstudante($this->SmsNotification->id, $origin, $message_explode[2]);
				break;
			case "ojm":
				$this->SmsNotification->getTesteOJM($this->SmsNotification->id, $origin, $message_explode[1]);
				break;
			case "pagar":
				$this->SmsNotification->getTesteOJM2($this->SmsNotification->id, $origin, $message_explode[1]);
				break;
		}


		$response_text = $this->SmsNotification->id . "SIGA";
		$this->log($response_text, 'sms_timwe');
		$this->response->type("text/html");
		$this->response->charset("utf-8");

		$this->response->body($response_text);

		return $this->response;
	}

	public function send_sms() {

		$this->loadModel('SmsEnviada');
		$this->SmsEnviada->sendSMS(842569523, "SMS de Teste");
	}

	public function send_sms_estrangeiros() {


		$this->loadModel('SmsEnviada');
		$this->loadModel('Aluno');
		$this->Aluno->contain(array(
			'Entidade' => array(
				'EntidadeContacto' => array(
					'conditions' => array('tipo_contacto_id' => 2)
				)
			)
		));
        $candidatos = $this->Aluno->find('all',array('conditions'=>array('ano_ingresso'=>2015)));
        debug(count($candidatos));

        $mensagem = "A DRA informa que a reuniao de orientacao de estudantes, foi alterada para as 13h, no Pavilhao Gimnodesportivo";
        $this->SmsEnviada->sendSMS(826489374, "Todas SMS foram enviadas.");
        $this->SmsEnviada->sendSMS(826489374, "A UEM, o convida a cerimónia de lançamento da iniciativa Alumni no dia //22/08/2014 no Centro Cultural e niversitário, pelas 14.00 horas.");
        $this->SmsEnviada->sendSMS(822454375, "A UEM, o convida a cerimónia de lançamento da iniciativa Alumni no dia //22/08/2014 no Centro Cultural e niversitário, pelas 14.00 horas.");
        $this->SmsEnviada->sendSMS(845179795, "A UEM, o convida a cerimónia de lançamento da iniciativa Alumni no dia //22/08/2014 no Centro Cultural e niversitário, pelas 14.00 horas.");
		foreach ($candidatos as $candidato) {
			if ($candidato['Entidade']['telemovel']!='') {
				$numero = $candidato['Entidade']['EntidadeContacto']['telemovel'];
				if (is_numeric($numero)) {
					debug($numero);



					$this->SmsEnviada->sendSMS($numero, $mensagem);
				}



			}



		}
        $this->SmsEnviada->sendSMS(826489374, "Todas SMS foram enviadas.");
        $this->SmsEnviada->sendSMS(844213948, "A UEM, o convida a cerimónia de lançamento da iniciativa Alumni no dia 22/08/2014, no Centro Cultural e Universitário,pelas 14.00 horas.");
	}

	public function testa_sms() {

		$this->SmsNotification->processaSMSConfirmacaoRenovacao(10000000000000000, 258842569523, 20092946);
	}

	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow();
	}

}
