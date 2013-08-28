<?php
/**
 * PlanoestudoFixture
 *
 */
class PlanoestudoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'curso_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'duracao' => array('type' => 'integer', 'null' => true, 'default' => null),
		'semestresano' => array('type' => 'integer', 'null' => true, 'default' => null),
		'codigo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 25, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'numero_ciclos' => array('type' => 'integer', 'null' => true, 'default' => null),
		'ano_criacao' => array('type' => 'text', 'null' => true, 'default' => null, 'length' => 4),
		'estado_objecto_id' => array('type' => 'integer', 'null' => true, 'default' => null),
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
			'id' => '1',
			'name' => 'Licenciatura em Estatística - 2004',
			'curso_id' => '50',
			'duracao' => null,
			'semestresano' => null,
			'codigo' => '2005-2004',
			'numero_ciclos' => null,
			'ano_criacao' => '2004',
			'estado_objecto_id' => null
		),
		array(
			'id' => '2',
			'name' => 'Licenciatura em Estatística - 2010',
			'curso_id' => '50',
			'duracao' => null,
			'semestresano' => null,
			'codigo' => '2005-2010',
			'numero_ciclos' => null,
			'ano_criacao' => '2010',
			'estado_objecto_id' => null
		),
		array(
			'id' => '3',
			'name' => 'Licenciatura em Estatística (Pós Laboral) - 2004',
			'curso_id' => '56',
			'duracao' => null,
			'semestresano' => null,
			'codigo' => '2015-2004',
			'numero_ciclos' => null,
			'ano_criacao' => '2004',
			'estado_objecto_id' => null
		),
		array(
			'id' => '4',
			'name' => 'Licenciatura em Estatística (Pós Laboral) - 2010',
			'curso_id' => '56',
			'duracao' => null,
			'semestresano' => null,
			'codigo' => '2015-2010',
			'numero_ciclos' => null,
			'ano_criacao' => '2010',
			'estado_objecto_id' => null
		),
		array(
			'id' => '5',
			'name' => 'Licenciatura em Informática - 2010',
			'curso_id' => '49',
			'duracao' => null,
			'semestresano' => null,
			'codigo' => '2004-2010',
			'numero_ciclos' => null,
			'ano_criacao' => '2010',
			'estado_objecto_id' => null
		),
		array(
			'id' => '6',
			'name' => 'Licenciatura em Informática - 2012',
			'curso_id' => '49',
			'duracao' => null,
			'semestresano' => null,
			'codigo' => '2004-2012',
			'numero_ciclos' => null,
			'ano_criacao' => '2012',
			'estado_objecto_id' => null
		),
		array(
			'id' => '7',
			'name' => 'Licenciatura em Informática (Pós Laboral) - 2010',
			'curso_id' => '55',
			'duracao' => null,
			'semestresano' => null,
			'codigo' => '2014-2010',
			'numero_ciclos' => null,
			'ano_criacao' => '2010',
			'estado_objecto_id' => null
		),
		array(
			'id' => '8',
			'name' => 'Licenciatura em Informática (Pós Laboral) - 2012',
			'curso_id' => '55',
			'duracao' => null,
			'semestresano' => null,
			'codigo' => '2014-2012',
			'numero_ciclos' => null,
			'ano_criacao' => '2012',
			'estado_objecto_id' => null
		),
		array(
			'id' => '9',
			'name' => 'Licenciatura em Informática - 2004',
			'curso_id' => '49',
			'duracao' => '4',
			'semestresano' => '2',
			'codigo' => '2004-2004',
			'numero_ciclos' => null,
			'ano_criacao' => '2004',
			'estado_objecto_id' => null
		),
		array(
			'id' => '10',
			'name' => 'Licenciatura em Informática (Pós Laboral) - 2004',
			'curso_id' => '55',
			'duracao' => null,
			'semestresano' => null,
			'codigo' => '2014-2004',
			'numero_ciclos' => null,
			'ano_criacao' => '2004',
			'estado_objecto_id' => null
		),
	);

}
