<?php
/**
 * SmsEnviadaFixture
 *
 */
class SmsEnviadaFixture extends CakeTestFixture {

/**
 * Import
 *
 * @var array
 */
	public $import = array('model' => 'SmsEnviada');

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => '1',
			'destination' => null,
			'text' => 'Teste de SMS em Produção :)',
			'created' => '2013-09-16 02:34:01',
			'modified' => '2013-09-16 02:34:01',
			'user_id' => '42646',
			'sms_tipo_id' => '1',
			'created_by' => '42646',
			'modified_by' => null,
			'resultado' => null,
			'url_final' => null,
			'entidade_destino' => null
		),
		array(
			'id' => '2',
			'destination' => null,
			'text' => 'Teste de SMS em Produção :)',
			'created' => '2013-09-16 02:35:19',
			'modified' => '2013-09-16 02:35:19',
			'user_id' => '42646',
			'sms_tipo_id' => '1',
			'created_by' => '42646',
			'modified_by' => null,
			'resultado' => null,
			'url_final' => null,
			'entidade_destino' => null
		),
		array(
			'id' => '3',
			'destination' => '826489374',
			'text' => 'Teste de sms em producao :)',
			'created' => '2013-09-16 02:38:59',
			'modified' => '2013-09-16 02:38:59',
			'user_id' => '42646',
			'sms_tipo_id' => '1',
			'created_by' => '42646',
			'modified_by' => null,
			'resultado' => null,
			'url_final' => null,
			'entidade_destino' => null
		),
		array(
			'id' => '4',
			'destination' => '826489374',
			'text' => 'Teste de sms em producao :)',
			'created' => '2013-09-16 02:41:16',
			'modified' => '2013-09-16 02:41:18',
			'user_id' => '42646',
			'sms_tipo_id' => '1',
			'created_by' => '42646',
			'modified_by' => '42646',
			'resultado' => '2296766895',
			'url_final' => 'http://mb.timwe.com/sendMT?CountryId=258&Destination=826489374&ExtTxId=4&OpId=241&PartnerRoleId=1112&PricePointId=356&ProductId=1762&Test=0&Text=Teste+de+sms+em+producao+%3A%29&PasswordHash=ddd12df33793060363d65004136835f4',
			'entidade_destino' => null
		),
		array(
			'id' => '5',
			'destination' => '826489374',
			'text' => 'Mais um teste de sms em producao',
			'created' => '2013-09-16 02:47:44',
			'modified' => '2013-09-16 02:47:45',
			'user_id' => '1',
			'sms_tipo_id' => '1',
			'created_by' => '1',
			'modified_by' => '1',
			'resultado' => '-10',
			'url_final' => 'http://mb.timwe.com/sendMT?CountryId=258&Destination=826489374&ExtTxId=5&OpId=241&PartnerRoleId=1112&PricePointId=356&ProductId=1762&Test=0&Text=Mais+um+teste+de+sms+em+producao&PasswordHash=d3032fd9eed5722b39dc1f348b6218c5',
			'entidade_destino' => '10358'
		),
		array(
			'id' => '6',
			'destination' => '826489374',
			'text' => 'Ultimo teste de sms em producao',
			'created' => '2013-09-16 02:50:07',
			'modified' => '2013-09-16 02:50:08',
			'user_id' => '1',
			'sms_tipo_id' => '1',
			'created_by' => '1',
			'modified_by' => '1',
			'resultado' => '-10',
			'url_final' => 'http://mb.timwe.com/sendMT?CountryId=258&Destination=826489374&ExtTxId=6&OpId=241&PartnerRoleId=1112&PricePointId=356&ProductId=1762&Test=0&Text=Ultimo+teste+de+sms+em+producao&PasswordHash=93da1d2b8b70fef3d25e4374e248a3b1',
			'entidade_destino' => '10358'
		),
		array(
			'id' => '7',
			'destination' => '826489374',
			'text' => 'Mais um teste em producao',
			'created' => '2013-09-16 03:01:16',
			'modified' => '2013-09-16 03:01:17',
			'user_id' => '1',
			'sms_tipo_id' => '1',
			'created_by' => '1',
			'modified_by' => '1',
			'resultado' => '-10',
			'url_final' => 'http://mb.timwe.com/sendMT?CountryId=258&Destination=826489374&ExtTxId=7&OpId=241&PartnerRoleId=1112&PricePointId=356&ProductId=1762&Test=0&Text=Mais+um+teste+em+producao&PasswordHash=3be49ffcd7d93d26d25a6c5dca45e094',
			'entidade_destino' => '10358'
		),
		array(
			'id' => '8',
			'destination' => '826489374',
			'text' => 'SMS sempre retorna -10',
			'created' => '2013-09-16 03:02:52',
			'modified' => '2013-09-16 03:02:53',
			'user_id' => '1',
			'sms_tipo_id' => '1',
			'created_by' => '1',
			'modified_by' => '1',
			'resultado' => '-10',
			'url_final' => 'http://mb.timwe.com/sendMT?CountryId=258&Destination=826489374&ExtTxId=8&OpId=241&PartnerRoleId=1112&PricePointId=356&ProductId=1762&Test=0&Text=SMS+sempre+retorna+-10&PasswordHash=c5ad1ca69a38e51d91b646b93f8fef53',
			'entidade_destino' => '10358'
		),
		array(
			'id' => '9',
			'destination' => '1',
			'text' => null,
			'created' => null,
			'modified' => null,
			'user_id' => null,
			'sms_tipo_id' => null,
			'created_by' => null,
			'modified_by' => null,
			'resultado' => null,
			'url_final' => null,
			'entidade_destino' => null
		),
		array(
			'id' => '10',
			'destination' => '1',
			'text' => null,
			'created' => null,
			'modified' => null,
			'user_id' => null,
			'sms_tipo_id' => null,
			'created_by' => null,
			'modified_by' => null,
			'resultado' => null,
			'url_final' => null,
			'entidade_destino' => null
		),
	);

}
