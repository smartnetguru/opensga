<?php
/**
 * EntidadeContactoFixture
 *
 */
class EntidadeContactoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'entidade_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'tipo_contacto_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'valor' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'estado_objecto_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'created_by' => array('type' => 'integer', 'null' => true, 'default' => null),
		'modified_by' => array('type' => 'integer', 'null' => true, 'default' => null),
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
			'id' => '21',
			'entidade_id' => '42346',
			'tipo_contacto_id' => '11',
			'valor' => '152',
			'estado_objecto_id' => '1',
			'created' => '2013-07-02 07:47:02',
			'modified' => '2013-07-02 07:47:02',
			'created_by' => '42313',
			'modified_by' => null
		),
		array(
			'id' => '22',
			'entidade_id' => '42346',
			'tipo_contacto_id' => '10',
			'valor' => '5',
			'estado_objecto_id' => '1',
			'created' => '2013-07-02 07:47:02',
			'modified' => '2013-07-02 07:47:02',
			'created_by' => '42313',
			'modified_by' => null
		),
		array(
			'id' => '23',
			'entidade_id' => '42346',
			'tipo_contacto_id' => '9',
			'valor' => '144',
			'estado_objecto_id' => '1',
			'created' => '2013-07-02 07:47:02',
			'modified' => '2013-07-02 07:47:02',
			'created_by' => '42313',
			'modified_by' => null
		),
		array(
			'id' => '24',
			'entidade_id' => '42346',
			'tipo_contacto_id' => '6',
			'valor' => 'Guava',
			'estado_objecto_id' => '1',
			'created' => '2013-07-02 07:47:02',
			'modified' => '2013-07-02 07:47:02',
			'created_by' => '42313',
			'modified_by' => null
		),
		array(
			'id' => '25',
			'entidade_id' => '42346',
			'tipo_contacto_id' => '5',
			'valor' => '',
			'estado_objecto_id' => '1',
			'created' => '2013-07-02 07:47:02',
			'modified' => '2013-07-02 07:47:02',
			'created_by' => '42313',
			'modified_by' => null
		),
		array(
			'id' => '26',
			'entidade_id' => '42346',
			'tipo_contacto_id' => '7',
			'valor' => '',
			'estado_objecto_id' => '1',
			'created' => '2013-07-02 07:47:02',
			'modified' => '2013-07-02 07:47:02',
			'created_by' => '42313',
			'modified_by' => null
		),
		array(
			'id' => '27',
			'entidade_id' => '42346',
			'tipo_contacto_id' => '8',
			'valor' => '',
			'estado_objecto_id' => '1',
			'created' => '2013-07-02 07:47:02',
			'modified' => '2013-07-02 07:47:02',
			'created_by' => '42313',
			'modified_by' => null
		),
		array(
			'id' => '28',
			'entidade_id' => '42346',
			'tipo_contacto_id' => '4',
			'valor' => '',
			'estado_objecto_id' => '1',
			'created' => '2013-07-02 07:47:02',
			'modified' => '2013-07-02 07:47:02',
			'created_by' => '42313',
			'modified_by' => null
		),
		array(
			'id' => '29',
			'entidade_id' => '42346',
			'tipo_contacto_id' => '2',
			'valor' => '827580980',
			'estado_objecto_id' => '1',
			'created' => '2013-07-02 07:47:02',
			'modified' => '2013-07-02 07:47:02',
			'created_by' => '42313',
			'modified_by' => null
		),
		array(
			'id' => '30',
			'entidade_id' => '42346',
			'tipo_contacto_id' => '1',
			'valor' => '',
			'estado_objecto_id' => '1',
			'created' => '2013-07-02 07:47:02',
			'modified' => '2013-07-02 07:47:02',
			'created_by' => '42313',
			'modified_by' => null
		),
		array(
			'id' => '31',
			'entidade_id' => '42347',
			'tipo_contacto_id' => '11',
			'valor' => '152',
			'estado_objecto_id' => '1',
			'created' => '2013-07-02 07:57:08',
			'modified' => '2013-07-02 07:57:08',
			'created_by' => '42313',
			'modified_by' => null
		),
		array(
			'id' => '32',
			'entidade_id' => '42347',
			'tipo_contacto_id' => '10',
			'valor' => '5',
			'estado_objecto_id' => '1',
			'created' => '2013-07-02 07:57:08',
			'modified' => '2013-07-02 07:57:08',
			'created_by' => '42313',
			'modified_by' => null
		),
		array(
			'id' => '33',
			'entidade_id' => '42347',
			'tipo_contacto_id' => '9',
			'valor' => '144',
			'estado_objecto_id' => '1',
			'created' => '2013-07-02 07:57:08',
			'modified' => '2013-07-02 07:57:08',
			'created_by' => '42313',
			'modified_by' => null
		),
		array(
			'id' => '34',
			'entidade_id' => '42347',
			'tipo_contacto_id' => '6',
			'valor' => 'Central',
			'estado_objecto_id' => '1',
			'created' => '2013-07-02 07:57:08',
			'modified' => '2013-07-02 07:57:08',
			'created_by' => '42313',
			'modified_by' => null
		),
		array(
			'id' => '35',
			'entidade_id' => '42347',
			'tipo_contacto_id' => '5',
			'valor' => 'Av. Vladimir Lenine',
			'estado_objecto_id' => '1',
			'created' => '2013-07-02 07:57:08',
			'modified' => '2013-07-02 07:57:08',
			'created_by' => '42313',
			'modified_by' => null
		),
		array(
			'id' => '36',
			'entidade_id' => '42347',
			'tipo_contacto_id' => '7',
			'valor' => '',
			'estado_objecto_id' => '1',
			'created' => '2013-07-02 07:57:08',
			'modified' => '2013-07-02 07:57:08',
			'created_by' => '42313',
			'modified_by' => null
		),
		array(
			'id' => '37',
			'entidade_id' => '42347',
			'tipo_contacto_id' => '8',
			'valor' => '1424',
			'estado_objecto_id' => '1',
			'created' => '2013-07-02 07:57:08',
			'modified' => '2013-07-02 07:57:08',
			'created_by' => '42313',
			'modified_by' => null
		),
		array(
			'id' => '38',
			'entidade_id' => '42347',
			'tipo_contacto_id' => '4',
			'valor' => '',
			'estado_objecto_id' => '1',
			'created' => '2013-07-02 07:57:08',
			'modified' => '2013-07-02 07:57:08',
			'created_by' => '42313',
			'modified_by' => null
		),
		array(
			'id' => '39',
			'entidade_id' => '42347',
			'tipo_contacto_id' => '2',
			'valor' => '828918110',
			'estado_objecto_id' => '1',
			'created' => '2013-07-02 07:57:08',
			'modified' => '2013-07-02 07:57:08',
			'created_by' => '42313',
			'modified_by' => null
		),
		array(
			'id' => '40',
			'entidade_id' => '42347',
			'tipo_contacto_id' => '1',
			'valor' => '',
			'estado_objecto_id' => '1',
			'created' => '2013-07-02 07:57:08',
			'modified' => '2013-07-02 07:57:08',
			'created_by' => '42313',
			'modified_by' => null
		),
	);

}
