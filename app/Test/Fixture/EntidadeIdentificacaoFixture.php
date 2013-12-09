<?php
/**
 * EntidadeIdentificacaoFixture
 *
 */
class EntidadeIdentificacaoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'entidade_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'documento_identificacao_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'data_emissao' => array('type' => 'date', 'null' => true, 'default' => null),
		'data_validade' => array('type' => 'date', 'null' => true, 'default' => null),
		'numero' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'created_by' => array('type' => 'integer', 'null' => true, 'default' => null),
		'modified_by' => array('type' => 'integer', 'null' => true, 'default' => null),
		'estado_objecto_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'local_emissao' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 150, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
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
			'id' => '3',
			'entidade_id' => '42346',
			'documento_identificacao_id' => '1',
			'data_emissao' => '2010-03-31',
			'data_validade' => null,
			'numero' => '110100134575M',
			'created' => '2013-07-02 07:47:02',
			'modified' => '2013-07-02 07:47:02',
			'created_by' => '42313',
			'modified_by' => null,
			'estado_objecto_id' => '1',
			'local_emissao' => 'Maputo'
		),
		array(
			'id' => '4',
			'entidade_id' => '42347',
			'documento_identificacao_id' => '1',
			'data_emissao' => '2010-09-02',
			'data_validade' => null,
			'numero' => '110100567096B',
			'created' => '2013-07-02 07:57:08',
			'modified' => '2013-07-02 07:57:08',
			'created_by' => '42313',
			'modified_by' => null,
			'estado_objecto_id' => '1',
			'local_emissao' => 'Maputo'
		),
		array(
			'id' => '5',
			'entidade_id' => '42348',
			'documento_identificacao_id' => '1',
			'data_emissao' => '2011-09-23',
			'data_validade' => null,
			'numero' => '110201520701I',
			'created' => '2013-07-02 08:44:33',
			'modified' => '2013-07-02 08:44:33',
			'created_by' => '1',
			'modified_by' => null,
			'estado_objecto_id' => '1',
			'local_emissao' => 'Maputo'
		),
		array(
			'id' => '6',
			'entidade_id' => '42349',
			'documento_identificacao_id' => '1',
			'data_emissao' => '2012-08-30',
			'data_validade' => null,
			'numero' => '110102394322P',
			'created' => '2013-07-02 08:53:22',
			'modified' => '2013-07-02 08:53:22',
			'created_by' => '1',
			'modified_by' => null,
			'estado_objecto_id' => '1',
			'local_emissao' => 'Maputo'
		),
		array(
			'id' => '7',
			'entidade_id' => '42350',
			'documento_identificacao_id' => '1',
			'data_emissao' => null,
			'data_validade' => null,
			'numero' => '',
			'created' => '2013-07-02 09:00:51',
			'modified' => '2013-07-02 09:00:51',
			'created_by' => '1',
			'modified_by' => null,
			'estado_objecto_id' => '1',
			'local_emissao' => ''
		),
		array(
			'id' => '8',
			'entidade_id' => '42351',
			'documento_identificacao_id' => '1',
			'data_emissao' => '2011-05-04',
			'data_validade' => null,
			'numero' => '1101095334Q',
			'created' => '2013-07-02 09:06:44',
			'modified' => '2013-07-02 09:06:44',
			'created_by' => '1',
			'modified_by' => null,
			'estado_objecto_id' => '1',
			'local_emissao' => 'Maputo'
		),
		array(
			'id' => '9',
			'entidade_id' => '42352',
			'documento_identificacao_id' => '1',
			'data_emissao' => '2010-02-12',
			'data_validade' => null,
			'numero' => '110300073850F',
			'created' => '2013-07-04 07:29:35',
			'modified' => '2013-07-04 07:29:35',
			'created_by' => '1',
			'modified_by' => null,
			'estado_objecto_id' => '1',
			'local_emissao' => 'Maputo'
		),
		array(
			'id' => '10',
			'entidade_id' => '42353',
			'documento_identificacao_id' => '1',
			'data_emissao' => '2010-08-30',
			'data_validade' => null,
			'numero' => '030100460841S',
			'created' => '2013-07-04 07:39:05',
			'modified' => '2013-07-04 07:39:05',
			'created_by' => '1',
			'modified_by' => null,
			'estado_objecto_id' => '1',
			'local_emissao' => 'Nampula'
		),
		array(
			'id' => '11',
			'entidade_id' => '42354',
			'documento_identificacao_id' => '1',
			'data_emissao' => '2010-03-29',
			'data_validade' => null,
			'numero' => '030100146662N',
			'created' => '2013-07-04 07:48:08',
			'modified' => '2013-07-04 07:48:08',
			'created_by' => '1',
			'modified_by' => null,
			'estado_objecto_id' => '1',
			'local_emissao' => ''
		),
		array(
			'id' => '12',
			'entidade_id' => '42355',
			'documento_identificacao_id' => '1',
			'data_emissao' => '2010-08-25',
			'data_validade' => null,
			'numero' => '030100417405B',
			'created' => '2013-07-04 08:04:33',
			'modified' => '2013-07-04 08:04:33',
			'created_by' => '1',
			'modified_by' => null,
			'estado_objecto_id' => '1',
			'local_emissao' => 'Nampula'
		),
	);

}
