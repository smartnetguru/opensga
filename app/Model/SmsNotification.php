<?php

	App::uses('AppModel', 'Model');
	App::uses('SmsEnviada', 'Model');

	/**
	 * SmsNotification Model
	 *
	 * @property SmsNotificationType $SmsNotificationType
	 */
	class SmsNotification extends AppModel
	{
//The Associations below have been created with all possible keys, those that are not needed can be removed

		/**
		 * belongsTo associations
		 *
		 * @var array
		 */
		public $belongsTo = [
			'SmsNotificationType' => [
				'className'  => 'SmsNotificationType',
				'foreignKey' => 'sms_notification_type_id',
				'conditions' => '',
				'fields'     => '',
				'order'      => '',
			],
		];

		public function processaSMSRenovacao($notification_id, $origin, $numero_estudante)
		{
			App::uses('Aluno', 'Model');
			$Aluno = new Aluno();
			$Aluno->contain('Entidade');
			$aluno = $Aluno->findByCodigo($numero_estudante);

			$origin = substr($origin, 3);

			$this->SmsEnviada = new SmsEnviada();
			if (empty($aluno)) {
				$message = "Numero de Estudante incorrecto";
				$sms_enviada = $this->SmsEnviada->sendSMS($origin, $message, 0, 1, 0);

				return $sms_enviada;
			} else {
//Vemos se o estudante eh regular
				$is_regular = $Aluno->isRegular($aluno['Aluno']['id']);
				if ($is_regular[0]['regular'] == true) {

//Vemos se ja renovou 2014
					$renovacao2014 = $Aluno->Matricula->getRenovacaoByAlunoAndAnoLectivo($aluno['Aluno']['id'], 2014);

					if (!empty($renovacao2014)) {
						$message = "A sua matricula ja foi renovada. Obrigado. www.dra.uem.mz.. twitter.com/uemdra";

						$sms_enviada = $this->SmsEnviada->sendSMS($origin, $message, $aluno['Aluno']['entidade_id'], 1,
							0);

						return $sms_enviada;
					} else {
						$turno = $Aluno->Curso->getTurnoIdByCursoId($aluno['Aluno']['curso_id']);
						if ($turno == 1) {
							$valor_renovacao = 80;
							$codigo_pagamento = "02";
						} else {
							$valor_renovacao = 160;
							$codigo_pagamento = "03";
						}

						$ano_ingresso = $aluno['Aluno']['ano_ingresso'];
						if ($ano_ingresso >= 2000 && $ano_ingresso <= 2007) {
							$referencia = substr($aluno['Aluno']['codigo'], 2);
						} elseif ($ano_ingresso > 2007) {
							$referencia = "0" . $aluno['Aluno']['codigo'];
						} else {
							$referencia = $aluno['Aluno']['codigo'];
						}
						$message = "Status:Nao Renovada. Efectue Pagamento do Servico no  BIM. Entidade:77001, Referencia:" . $referencia . $codigo_pagamento . ", Valor:" . $valor_renovacao . "MT. Obrigado. www.dra.uem.mz";

						$sms_enviada = $this->SmsEnviada->sendSMS($origin, $message, $aluno['Aluno']['entidade_id'], 1,
							0);

						return $sms_enviada;
					}
				} else {
					$message = "A sua matricula nao e regular Por favor dirija-se com urgencia para a Direccao do Registo Academico. www.dra.uem.mz.. twitter.com/uemdra";
					$sms_enviada = $this->SmsEnviada->sendSMS($origin, $message, $aluno['Aluno']['entidade_id'], 1, 0);

					return $sms_enviada;
				}
			}

			return true;
		}

		public function processaSMSConfirmacaoRenovacao($notification_id, $origin, $numero_estudante)
		{
			App::uses('Aluno', 'Model');
			$Aluno = new Aluno();
			$Aluno->contain('Entidade');
			$aluno = $Aluno->findByCodigo($numero_estudante);

			$origin = substr($origin, 3);

			$this->SmsEnviada = new SmsEnviada();
			if (empty($aluno)) {
				$message = "Numero de Estudante incorrecto";
				$sms_enviada = $this->SmsEnviada->sendSMS($origin, $message, 0, 1, 0);

				return $sms_enviada;
			} else {
//Vemos se o estudante eh regular
				$is_regular = $Aluno->isRegular($aluno['Aluno']['id']);
				if ($is_regular[0]['regular'] == true) {

//Vemos se ja renovou 2014
					$renovacao2014 = $Aluno->Matricula->getRenovacaoByAlunoAndAnoLectivo($aluno['Aluno']['id'], 2014);

					if (!empty($renovacao2014)) {
						$message = "A sua matricula ja foi renovada. Obrigado. www.dra.uem.mz.. twitter.com/uemdra";

						$sms_enviada = $this->SmsEnviada->sendSMS($origin, $message, $aluno['Aluno']['entidade_id'], 1,
							0);

						return $sms_enviada;
					} else {
						$turno = $Aluno->Curso->getTurnoIdByCursoId($aluno['Aluno']['curso_id']);
						if ($turno == 1) {
							$valor_renovacao = 80;
							$codigo_pagamento = "02";
						} else {
							$valor_renovacao = 160;
							$codigo_pagamento = "03";
						}

						$ano_ingresso = $aluno['Aluno']['ano_ingresso'];
						if ($ano_ingresso >= 2000 && $ano_ingresso <= 2007) {
							$referencia = substr($aluno['Aluno']['codigo'], 2);
						} else {
							$referencia = "0" . $aluno['Aluno']['codigo'];
						}
						$message = "Renovacao de Matricula nao confirmada. Se fez o pagamento ha mais de 72h uteis, dirija-se ao Registo Academico para confirmacao manual.. Obrigado. UEM-DRA";

						$sms_enviada = $this->SmsEnviada->sendSMS($origin, $message, $aluno['Aluno']['entidade_id'], 1,
							0);

						return $sms_enviada;
					}
				} else {
					$message = "A sua matricula nao e regular Por favor dirija-se com urgencia para a Direccao do Registo Academico. www.dra.uem.mz.. twitter.com/uemdra";
					$sms_enviada = $this->SmsEnviada->sendSMS($origin, $message, $aluno['Aluno']['entidade_id'], 1, 0);

					return $sms_enviada;
				}
			}

			return true;
		}

		public function getEmailEstudante($notification_id, $origin, $numero_estudante)
		{
			App::uses('Aluno', 'Model');
			$this->Aluno = new Aluno();
			$this->Aluno->contain(['Entidade' => ['User']]);
			$aluno = $this->Aluno->findByCodigo($numero_estudante);
			$origin = substr($origin, 3);

			$this->SmsEnviada = new SmsEnviada();
			if (empty($aluno)) {
				$message = "Numero de Estudante incorrecto";
				$sms_enviada = $this->SmsEnviada->sendSMS($origin, $message, 0, 1, 0);

				return $sms_enviada;
			} else {
				$is_regular = $this->Aluno->isRegular($aluno['Aluno']['id']);
				if ($is_regular[0]['regular'] == true) {

					$email_aluno = $aluno['Entidade']['User']['username'];
					$nome_completo = $aluno['Entidade']['name'];
					$message = "O Email Institucional de {$nome_completo} e:{$email_aluno}.";
					$sms_enviada = $this->SmsEnviada->sendSMS($origin, $message, $aluno['Aluno']['entidade_id'], 1, 0);

					return $sms_enviada;
				} else {
					$message = "A sua matricula nao e regular Por favor dirija-se com urgencia para a Direccao do Registo Academico. www.dra.uem.mz.. twitter.com/uemdra";
					$sms_enviada = $this->SmsEnviada->sendSMS($origin, $message, $aluno['Aluno']['entidade_id'], 1, 0);

					return $sms_enviada;
				}
			}
		}

		public function getTesteOJM($notification_id, $origin, $numero_estudante)
		{
			App::uses('Aluno', 'Model');
			$this->Aluno = new Aluno();
			$this->Aluno->contain(['Entidade' => ['User']]);
			$aluno = $this->Aluno->findByCodigo($numero_estudante);
			$origin = substr($origin, 3);

			$this->SmsEnviada = new SmsEnviada();
			$message = "A sua quota a pagar eh de 10,00MT. Para pagar responda esta SMS com a palavra PAGAR";
			$sms_enviada = $this->SmsEnviada->sendSMS($origin, $message, $aluno['Aluno']['entidade_id'], 1, 0);

			return $sms_enviada;
		}

		public function getTesteOJM2($notification_id, $origin, $numero_estudante)
		{
			App::uses('Aluno', 'Model');
			$this->Aluno = new Aluno();
			$this->Aluno->contain(['Entidade' => ['User']]);
			$aluno = $this->Aluno->findByCodigo($numero_estudante);
			$origin = substr($origin, 3);

			$this->SmsEnviada = new SmsEnviada();
			$message = "A sua quota esta liquidada. VOTE FILIPE NYUSI";
			$sms_enviada = $this->SmsEnviada->sendSMS($origin, $message, $aluno['Aluno']['entidade_id'], 1, 0);

			return $sms_enviada;
		}

		public function getSenhaEmailEstudante($notification_id, $origin, $numero_estudante)
		{
			App::uses('Aluno', 'Model');
			App::import('Vendor', 'zend_include_path');
			App::import('Vendor', 'Zend_Loader', true, false, 'Zend/Loader.php');

			Zend_Loader::loadClass('Zend_Gdata');
			Zend_Loader::loadClass('Zend_Gdata_ClientLogin');
			Zend_Loader::loadClass('Zend_Gdata_Gapps');

			$service = Zend_Gdata_Gapps::AUTH_SERVICE_NAME;
			$client = Zend_Gdata_ClientLogin::getHttpClient('elisio.leonardo@uem.ac.mz', 'COLOCAR SENHA AQUI',
				$service);
			$gdata = new Zend_Gdata_Gapps($client, 'uem.ac.mz');
			$this->Aluno = new Aluno();
			$this->Aluno->contain(['Entidade' => ['User']]);
			$aluno = $this->Aluno->findByCodigo($numero_estudante);
			$origin = substr($origin, 3);

			$this->SmsEnviada = new SmsEnviada();
			if (empty($aluno)) {
				$message = "Numero de Estudante incorrecto";
				$sms_enviada = $this->SmsEnviada->sendSMS($origin, $message, 0, 1, 0);

				return $sms_enviada;
			} else {
				$is_regular = $this->Aluno->isRegular($aluno['Aluno']['id']);
				if ($is_regular[0]['regular'] == true) {

					$email_aluno = $aluno['Entidade']['User']['username'];
					$codigo_activacao = $aluno['Entidade']['User']['codigo_activacao'];
					$random_password = $this->randomPassword();
					if ($codigo_activacao != 2) {
						$conta_existe = $gdata->retrieveUser($email_aluno);
						if ($conta_existe) {
							$conta_existe->login->password = $random_password;
							$conta_existe->name->givenName = $u['Entidade']['nomes'];
							$conta_existe->name->familyName = $u['Entidade']['apelido'];
							$conta_existe->login->changePasswordAtNextLogin = true;
							$conta_existe->save();
						} else {
							$novo_email = $gdata->createUser($email_aluno, $aluno['Entidade']['nomes'],
								$aluno['Entidade']['apelido'], $random_password);
						}
						$this->Aluno->Entidade->User->id = $aluno['Entidade']['User']['id'];
						$this->Aluno->Entidade->User->set('codigo_activacao', 2);
						$this->Aluno->Entidade->User->save();
						$message = "O email {$email_aluno} foi activado. A senha inicial e:{$random_password}.";
						$sms_enviada = $this->SmsEnviada->sendSMS($origin, $message, $aluno['Aluno']['entidade_id'], 1,
							0);

						return $sms_enviada;
					} else {
						$message = "Esta conta de email ja foi activada. Se tem certeza que a conta e sua e alguem activou por falha, ou perdeu a senha, contacte a DRA.";
						$sms_enviada = $this->SmsEnviada->sendSMS($origin, $message, $aluno['Aluno']['entidade_id'], 1,
							0);

						return $sms_enviada;
					}
					$nome_completo = $aluno['Entidade']['name'];
					$message = "O Email Institucional de {$nome_completo} e:{$email_aluno}.";
					$sms_enviada = $this->SmsEnviada->sendSMS($origin, $message, $aluno['Aluno']['entidade_id'], 1, 0);

					return $sms_enviada;
				} else {
					$message = "A sua matricula nao e regular Por favor dirija-se com urgencia para a Direccao do Registo Academico. www.dra.uem.mz.. twitter.com/uemdra";
					$sms_enviada = $this->SmsEnviada->sendSMS($origin, $message, $aluno['Aluno']['entidade_id'], 1, 0);

					return $sms_enviada;
				}
			}
		}

		function randomPassword()
		{
			$alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
			$pass = []; //remember to declare $pass as an array
			$alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
			for ($i = 0; $i < 9; $i++) {
				$n = rand(0, $alphaLength);
				$pass[] = $alphabet[$n];
			}

			return implode($pass); //turn the array into a string
		}

	}
