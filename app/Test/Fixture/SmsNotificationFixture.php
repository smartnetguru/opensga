<?php
/**
 * SmsNotificationFixture
 *
 */
class SmsNotificationFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'phone_number' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'message' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'status' => array('type' => 'integer', 'null' => true, 'default' => null),
		'sms_notification_type_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'notifications_types_idx' => array('column' => 'sms_notification_type_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => '1',
			'phone_number' => '+258827633340',
			'message' => 'Bom dia vai querer o seriado ? ',
			'status' => null,
			'sms_notification_type_id' => null
		),
		array(
			'id' => '2',
			'phone_number' => '+258827633340',
			'message' => 'Essa hora estarei no museu perto do king pie so presicas mesmo do valor esta num dvd ja grado',
			'status' => null,
			'sms_notification_type_id' => null
		),
		array(
			'id' => '3',
			'phone_number' => '+258827158386',
			'message' => 'Nao',
			'status' => null,
			'sms_notification_type_id' => null
		),
		array(
			'id' => '4',
			'phone_number' => '+258827158386',
			'message' => 'Uqe?',
			'status' => null,
			'sms_notification_type_id' => null
		),
		array(
			'id' => '5',
			'phone_number' => 'Vodacom',
			'message' => 'Tens apenas 5MB no teu pacote de internet.Digita*111# ou envia mes para 84162 para comprar um novo pacote e continuar a usar internet MegaBarata.Tudo bom pra ti',
			'status' => null,
			'sms_notification_type_id' => null
		),
		array(
			'id' => '6',
			'phone_number' => 'Vodacom',
			'message' => 'O teu pacote de internet acabou. Digita *111# ou envia mes para 84162 para comprar um novo pacote e continuar a usar internet MegaBarata. Tudo bom pra ti.',
			'status' => null,
			'sms_notification_type_id' => null
		),
		array(
			'id' => '7',
			'phone_number' => '+258827465850',
			'message' => '0i.n tenh o nr gravado,qem èh?',
			'status' => null,
			'sms_notification_type_id' => null
		),
		array(
			'id' => '8',
			'phone_number' => '+258827465850',
			'message' => 'HmM. .ok. .n tinha o nr gravado. .ainda n.t0u fazr esPECIalidad da FPAI, .',
			'status' => null,
			'sms_notification_type_id' => null
		),
		array(
			'id' => '9',
			'phone_number' => '+258827465850',
			'message' => 'Ta nice. Tarei na h0me. Bju bju',
			'status' => null,
			'sms_notification_type_id' => null
		),
		array(
			'id' => '10',
			'phone_number' => '+258827633340',
			'message' => 'Mano so podes tentar vir as 12 buscar o seriado onde jobas?',
			'status' => null,
			'sms_notification_type_id' => null
		),
	);

}
