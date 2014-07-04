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
		$alunos = $this->Aluno->find('all', array('conditions' => array('Aluno.codigo' => array(
            20095401,20110208, 20104667, 20110433, 20111900, 20111907, 20110181, 20111910, 20111922, 20116785, 20115894, 20110225, 20114417, 20111882, 20110189, 20111063, 20111499, 20116361, 20114591,
            20114902, 20111618, 20111598, 20116786, 20124617, 20121913, 20122889, 20124648, 20120062, 20122464, 20122892, 20120399, 20121541, 20110193, 20123298, 20111591, 20122005, 20110204, 20110950, 20114641, 20114910, 20110632, 20114906, 20114377, 20111672, 20120302, 20115983, 20111750, 20111766, 20111678, 20111752, 20114905, 20114256, 20110710, 20110707, 20110489, 20115098, 20115685, 20114977, 20110677, 20116795, 20111328, 20102622, 20103448, 20103451, 20104659, 20103517, 20110697, 20114620, 20123831, 20110407, 20112986, 20114389, 20114636, 20116383, 20110525, 20115981, 20110685, 20111757, 20110469, 20111674, 20111504, 20111928, 20113572, 20113508, 20113537, 20111477, 20112185, 20114395, 20114621, 20111101, 20134850, 20131030, 20133331, 20131574, 20133118, 20130146, 20131133, 20133308, 20131342, 20130424, 20130469, 20134913, 20133317, 20133550, 20131308, 20134689, 20131477, 20131120, 20121778, 20131768, 20131757, 20104670, 20103483, 20093730, 20093786, 20093790, 20130483, 20133329, 20130043, 20131780, 20130170, 20134241, 20130158, 20131131, 20134582, 20134451, 20131364, 20131154, 20132736, 20133353, 20133346, 20134912, 20130705, 20122134, 20125299, 20121979, 20123259, 20122002, 20122098, 20123581, 20124593, 20121561, 20131802, 20124270, 20123049, 20122629, 20124644, 20122151, 20122152, 20123357, 20125298, 20121540, 20125300, 20103496, 20123496, 20131648, 20130976, 20131123, 20133955, 20131135, 20134580, 20131129, 20131660, 20132559, 20132923, 20100171, 20130043, 20090308, 20130484, 20131479, 20134914, 20125141, 20123069, 20121006, 20123832, 20122719, 20122546, 20131661, 20124274, 20130976, 20112333, 20133329, 20130705, 20130484))));
		foreach ($alunos as $aluno) {
			if (isset($aluno['Entidade']['EntidadeContacto'][0]['valor'])) {
				$numero = $aluno['Entidade']['EntidadeContacto'][0]['valor'];
				if (is_numeric($numero)) {
					print_r($numero);
					$mensagem = "A DRA, DSS, DF e a  AEU,pretende reunir com  estudantes que perderam a bolsa no dia 07/07/2014 pelas 11h no anfiteatro da Faculdade de Medicina.";

					$this->SmsEnviada->sendSMS($numero, $mensagem);
				}
			}


			$this->SmsEnviada->sendSMS(826489374, "Todas SMS foram enviadas.");
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
