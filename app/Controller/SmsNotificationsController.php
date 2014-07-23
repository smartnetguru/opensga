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
		$alunos = $this->Aluno->find('all', array('conditions' => array('Aluno.codigo' => array(20095401, 20124663, 20140016, 20140167, 20140183, 20140183, 20140266, 20140288, 20130232, 20130337, 20140372, 20130336, 20140451, 20140488, 20140398, 20140534, 20140848, 20130869, 20130896, 20140939, 20130955, 20131012, 2013089, 20131018, 20141000, 20141137, 20144970, 20141193, 20123751, 20141375, 20141376, 20131320, 20121905, 20141377, 20141526, 20131365, 20131253, 20131366, 20141495, 20131358, 20141614, 20141591, 20141765, 20141762, 20141736, 20131564, 20131568, 20131652, 20141447, 20144615, 20141825, 20141823, 20141897, 20131745, 20141912, 20131750, 20141946, 20141947, 20142021, 20141994, 20142049, 20142249, 20132196, 20132214, 20132220, 20132156, 20132184, 20132195, 20124030, 20132175, 20142656, 20142602, 20144975, 20142749, 20142767, 20142879, 20143170, 20132968, 20143266, 20133040, 20143362, 20143352, 20143356, 20143477, 20143678, 20143664, 20143669, 20143666, 20143675, 20143690, 20143713, 20143639, 20124595, 20143783, 20143768, 20143759, 20143775, 20133505, 20133506, 20133502, 20133573, 20133733, 20133736))));
		foreach ($alunos as $aluno) {
			if (isset($aluno['Entidade']['EntidadeContacto'][0]['valor'])) {
				$numero = $aluno['Entidade']['EntidadeContacto'][0]['valor'];
				if (is_numeric($numero)) {
					print_r($numero);
					$mensagem = "Para se proceder o pagamento da sua bolsa, favor contactar a Direcção do Registo Académico–Reitoria para abertura de conta bancária ate dia 25/07";

					//$this->SmsEnviada->sendSMS($numero, $mensagem);
				}
			}



		}
        //$this->SmsEnviada->sendSMS(826489374, "Todas SMS foram enviadas.");
	}

	public function testa_sms() {

		$this->SmsNotification->processaSMSConfirmacaoRenovacao(10000000000000000, 258842569523, 20092946);
	}

	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow();
	}

}
