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
		$alunos = $this->Aluno->find('all', array('conditions' => array('Entidade.pais_nascimento NOT' => 152)));
		debug(count($alunos));
		foreach ($alunos as $aluno) {
			if (isset($aluno['Entidade']['EntidadeContacto'][0]['valor'])) {
				$numero = $aluno['Entidade']['EntidadeContacto'][0]['valor'];
				if (is_numeric($numero)) {
					print_r($numero);
					$mensagem = "Bom dia! A DRA o convida a participar da reunião com estudantes estrangeiros, na 6 feira ( 16/05/1 4), às 14h, no Complexto Pedagógico. www.dra.uem.mz";

					$this->SmsEnviada->sendSMS($numero, $mensagem);
				}
			}


			$this->SmsEnviada->sendSMS(844213948, "Todas SMS foram enviadas.");
		}
	}

	public function testa_sms() {

		$this->SmsNotification->processaSMSConfirmacaoRenovacao(10000000000000000, 258842569523, 20092946);
	}

	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow();
	}

}
