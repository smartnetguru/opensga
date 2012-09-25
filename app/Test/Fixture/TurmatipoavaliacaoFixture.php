<?php
/**
 * TurmatipoavaliacaoFixture
 *
 */
class TurmatipoavaliacaoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'turma_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'tipoavaliacao_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'data' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'scanpauta' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'estado' => array('type' => 'integer', 'null' => true, 'default' => null),
		'peso' => array('type' => 'integer', 'null' => false, 'default' => null),
		'ordem' => array('type' => 'integer', 'null' => false, 'default' => null),
		'data_marcada' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'data_realizada' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'turma_id' => 1,
			'tipoavaliacao_id' => 1,
			'data' => '2012-09-25 16:44:48',
			'scanpauta' => 'Lorem ipsum dolor sit amet',
			'estado' => 1,
			'peso' => 1,
			'ordem' => 1,
			'data_marcada' => '2012-09-25 16:44:48',
			'data_realizada' => '2012-09-25 16:44:48',
			'created' => '2012-09-25 16:44:48',
			'modified' => '2012-09-25 16:44:48'
		),
		array(
			'id' => 2,
			'turma_id' => 2,
			'tipoavaliacao_id' => 2,
			'data' => '2012-09-25 16:44:48',
			'scanpauta' => 'Lorem ipsum dolor sit amet',
			'estado' => 2,
			'peso' => 2,
			'ordem' => 2,
			'data_marcada' => '2012-09-25 16:44:48',
			'data_realizada' => '2012-09-25 16:44:48',
			'created' => '2012-09-25 16:44:48',
			'modified' => '2012-09-25 16:44:48'
		),
		array(
			'id' => 3,
			'turma_id' => 3,
			'tipoavaliacao_id' => 3,
			'data' => '2012-09-25 16:44:48',
			'scanpauta' => 'Lorem ipsum dolor sit amet',
			'estado' => 3,
			'peso' => 3,
			'ordem' => 3,
			'data_marcada' => '2012-09-25 16:44:48',
			'data_realizada' => '2012-09-25 16:44:48',
			'created' => '2012-09-25 16:44:48',
			'modified' => '2012-09-25 16:44:48'
		),
		array(
			'id' => 4,
			'turma_id' => 4,
			'tipoavaliacao_id' => 4,
			'data' => '2012-09-25 16:44:48',
			'scanpauta' => 'Lorem ipsum dolor sit amet',
			'estado' => 4,
			'peso' => 4,
			'ordem' => 4,
			'data_marcada' => '2012-09-25 16:44:48',
			'data_realizada' => '2012-09-25 16:44:48',
			'created' => '2012-09-25 16:44:48',
			'modified' => '2012-09-25 16:44:48'
		),
		array(
			'id' => 5,
			'turma_id' => 5,
			'tipoavaliacao_id' => 5,
			'data' => '2012-09-25 16:44:48',
			'scanpauta' => 'Lorem ipsum dolor sit amet',
			'estado' => 5,
			'peso' => 5,
			'ordem' => 5,
			'data_marcada' => '2012-09-25 16:44:48',
			'data_realizada' => '2012-09-25 16:44:48',
			'created' => '2012-09-25 16:44:48',
			'modified' => '2012-09-25 16:44:48'
		),
		array(
			'id' => 6,
			'turma_id' => 6,
			'tipoavaliacao_id' => 6,
			'data' => '2012-09-25 16:44:48',
			'scanpauta' => 'Lorem ipsum dolor sit amet',
			'estado' => 6,
			'peso' => 6,
			'ordem' => 6,
			'data_marcada' => '2012-09-25 16:44:48',
			'data_realizada' => '2012-09-25 16:44:48',
			'created' => '2012-09-25 16:44:48',
			'modified' => '2012-09-25 16:44:48'
		),
		array(
			'id' => 7,
			'turma_id' => 7,
			'tipoavaliacao_id' => 7,
			'data' => '2012-09-25 16:44:48',
			'scanpauta' => 'Lorem ipsum dolor sit amet',
			'estado' => 7,
			'peso' => 7,
			'ordem' => 7,
			'data_marcada' => '2012-09-25 16:44:48',
			'data_realizada' => '2012-09-25 16:44:48',
			'created' => '2012-09-25 16:44:48',
			'modified' => '2012-09-25 16:44:48'
		),
		array(
			'id' => 8,
			'turma_id' => 8,
			'tipoavaliacao_id' => 8,
			'data' => '2012-09-25 16:44:48',
			'scanpauta' => 'Lorem ipsum dolor sit amet',
			'estado' => 8,
			'peso' => 8,
			'ordem' => 8,
			'data_marcada' => '2012-09-25 16:44:48',
			'data_realizada' => '2012-09-25 16:44:48',
			'created' => '2012-09-25 16:44:48',
			'modified' => '2012-09-25 16:44:48'
		),
		array(
			'id' => 9,
			'turma_id' => 9,
			'tipoavaliacao_id' => 9,
			'data' => '2012-09-25 16:44:48',
			'scanpauta' => 'Lorem ipsum dolor sit amet',
			'estado' => 9,
			'peso' => 9,
			'ordem' => 9,
			'data_marcada' => '2012-09-25 16:44:48',
			'data_realizada' => '2012-09-25 16:44:48',
			'created' => '2012-09-25 16:44:48',
			'modified' => '2012-09-25 16:44:48'
		),
		array(
			'id' => 10,
			'turma_id' => 10,
			'tipoavaliacao_id' => 10,
			'data' => '2012-09-25 16:44:48',
			'scanpauta' => 'Lorem ipsum dolor sit amet',
			'estado' => 10,
			'peso' => 10,
			'ordem' => 10,
			'data_marcada' => '2012-09-25 16:44:48',
			'data_realizada' => '2012-09-25 16:44:48',
			'created' => '2012-09-25 16:44:48',
			'modified' => '2012-09-25 16:44:48'
		),
	);

}
