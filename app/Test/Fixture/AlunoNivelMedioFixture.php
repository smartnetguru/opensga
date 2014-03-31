<?php
/**
 * AlunoNivelMedioFixture
 *
 */
class AlunoNivelMedioFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'aluno_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'escola_nivel_medio_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'ano_conclusao' => array('type' => 'text', 'null' => true, 'default' => null, 'length' => 4),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'provincia_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'tipo_nivel_medio_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'nota_final' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => '4,2'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'aluno_nivel_medios_aluno_id_idx' => array('column' => 'aluno_id', 'unique' => 0),
			'aluno_nivel_medio_escola_nivel_medio_id_idx' => array('column' => 'escola_nivel_medio_id', 'unique' => 0),
			'aluno_nivel_medios_provincia_id_idx' => array('column' => 'provincia_id', 'unique' => 0),
			'aluno_nivel_medios_tipo_nivel_medio_id_idx' => array('column' => 'tipo_nivel_medio_id', 'unique' => 0)
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
			'aluno_id' => '42343',
			'escola_nivel_medio_id' => null,
			'ano_conclusao' => '2005',
			'created' => '2013-07-02 07:47:02',
			'modified' => '2013-07-02 07:47:02',
			'provincia_id' => '5',
			'tipo_nivel_medio_id' => null,
			'nota_final' => '13.00'
		),
		array(
			'id' => '4',
			'aluno_id' => '42344',
			'escola_nivel_medio_id' => '985',
			'ano_conclusao' => '2006',
			'created' => '2013-07-02 07:57:08',
			'modified' => '2013-07-02 07:57:08',
			'provincia_id' => '5',
			'tipo_nivel_medio_id' => null,
			'nota_final' => '14.00'
		),
		array(
			'id' => '5',
			'aluno_id' => '42345',
			'escola_nivel_medio_id' => '8',
			'ano_conclusao' => '2013',
			'created' => '2013-07-02 08:44:33',
			'modified' => '2013-07-02 08:44:33',
			'provincia_id' => '5',
			'tipo_nivel_medio_id' => null,
			'nota_final' => '14.00'
		),
		array(
			'id' => '6',
			'aluno_id' => '42346',
			'escola_nivel_medio_id' => '79',
			'ano_conclusao' => '2010',
			'created' => '2013-07-02 08:53:22',
			'modified' => '2013-07-02 08:53:22',
			'provincia_id' => '5',
			'tipo_nivel_medio_id' => null,
			'nota_final' => '14.00'
		),
		array(
			'id' => '7',
			'aluno_id' => '42347',
			'escola_nivel_medio_id' => '1',
			'ano_conclusao' => '0000',
			'created' => '2013-07-02 09:00:52',
			'modified' => '2013-07-02 09:00:52',
			'provincia_id' => '1',
			'tipo_nivel_medio_id' => null,
			'nota_final' => null
		),
		array(
			'id' => '8',
			'aluno_id' => '42348',
			'escola_nivel_medio_id' => '8',
			'ano_conclusao' => '2011',
			'created' => '2013-07-02 09:06:44',
			'modified' => '2013-07-02 09:06:44',
			'provincia_id' => '5',
			'tipo_nivel_medio_id' => null,
			'nota_final' => '14.00'
		),
		array(
			'id' => '9',
			'aluno_id' => '42349',
			'escola_nivel_medio_id' => '8',
			'ano_conclusao' => '2010',
			'created' => '2013-07-04 07:29:36',
			'modified' => '2013-07-04 07:29:36',
			'provincia_id' => '5',
			'tipo_nivel_medio_id' => null,
			'nota_final' => '13.00'
		),
		array(
			'id' => '10',
			'aluno_id' => '42350',
			'escola_nivel_medio_id' => '8',
			'ano_conclusao' => '2005',
			'created' => '2013-07-04 07:39:05',
			'modified' => '2013-07-04 07:39:05',
			'provincia_id' => '5',
			'tipo_nivel_medio_id' => null,
			'nota_final' => '14.00'
		),
		array(
			'id' => '11',
			'aluno_id' => '42351',
			'escola_nivel_medio_id' => '8',
			'ano_conclusao' => '2009',
			'created' => '2013-07-04 07:48:08',
			'modified' => '2013-07-04 07:48:08',
			'provincia_id' => '5',
			'tipo_nivel_medio_id' => null,
			'nota_final' => '14.00'
		),
		array(
			'id' => '12',
			'aluno_id' => '42352',
			'escola_nivel_medio_id' => '556',
			'ano_conclusao' => '2009',
			'created' => '2013-07-04 08:04:33',
			'modified' => '2013-07-04 08:04:33',
			'provincia_id' => '5',
			'tipo_nivel_medio_id' => null,
			'nota_final' => '15.00'
		),
		array(
			'id' => '13',
			'aluno_id' => '42353',
			'escola_nivel_medio_id' => '79',
			'ano_conclusao' => '2012',
			'created' => '2013-07-04 08:14:45',
			'modified' => '2013-07-04 08:14:45',
			'provincia_id' => '5',
			'tipo_nivel_medio_id' => null,
			'nota_final' => '12.00'
		),
		array(
			'id' => '14',
			'aluno_id' => '42354',
			'escola_nivel_medio_id' => '79',
			'ano_conclusao' => '2012',
			'created' => '2013-07-04 08:23:47',
			'modified' => '2013-07-04 08:23:47',
			'provincia_id' => '5',
			'tipo_nivel_medio_id' => null,
			'nota_final' => '12.00'
		),
		array(
			'id' => '15',
			'aluno_id' => '42355',
			'escola_nivel_medio_id' => '985',
			'ano_conclusao' => '2005',
			'created' => '2013-07-04 08:33:21',
			'modified' => '2013-07-04 08:33:21',
			'provincia_id' => '5',
			'tipo_nivel_medio_id' => null,
			'nota_final' => '13.00'
		),
		array(
			'id' => '16',
			'aluno_id' => '42356',
			'escola_nivel_medio_id' => '8',
			'ano_conclusao' => '2009',
			'created' => '2013-07-04 08:42:21',
			'modified' => '2013-07-04 08:42:21',
			'provincia_id' => '5',
			'tipo_nivel_medio_id' => null,
			'nota_final' => '12.00'
		),
		array(
			'id' => '17',
			'aluno_id' => '42357',
			'escola_nivel_medio_id' => '8',
			'ano_conclusao' => '2009',
			'created' => '2013-07-04 08:52:10',
			'modified' => '2013-07-04 08:52:10',
			'provincia_id' => '6',
			'tipo_nivel_medio_id' => null,
			'nota_final' => '13.00'
		),
		array(
			'id' => '18',
			'aluno_id' => '42358',
			'escola_nivel_medio_id' => '556',
			'ano_conclusao' => '2010',
			'created' => '2013-07-04 08:59:47',
			'modified' => '2013-07-04 08:59:47',
			'provincia_id' => '1',
			'tipo_nivel_medio_id' => null,
			'nota_final' => '15.00'
		),
		array(
			'id' => '19',
			'aluno_id' => '42359',
			'escola_nivel_medio_id' => '8',
			'ano_conclusao' => '2008',
			'created' => '2013-07-04 09:09:24',
			'modified' => '2013-07-04 09:09:24',
			'provincia_id' => '1',
			'tipo_nivel_medio_id' => null,
			'nota_final' => '15.00'
		),
		array(
			'id' => '20',
			'aluno_id' => '42360',
			'escola_nivel_medio_id' => '8',
			'ano_conclusao' => '2011',
			'created' => '2013-07-04 09:22:36',
			'modified' => '2013-07-04 09:22:36',
			'provincia_id' => '1',
			'tipo_nivel_medio_id' => null,
			'nota_final' => '14.00'
		),
		array(
			'id' => '21',
			'aluno_id' => '42361',
			'escola_nivel_medio_id' => '86',
			'ano_conclusao' => '2008',
			'created' => '2013-07-04 09:26:37',
			'modified' => '2013-07-04 09:26:37',
			'provincia_id' => '5',
			'tipo_nivel_medio_id' => null,
			'nota_final' => '16.00'
		),
		array(
			'id' => '22',
			'aluno_id' => '42362',
			'escola_nivel_medio_id' => '645',
			'ano_conclusao' => '2010',
			'created' => '2013-07-04 09:38:01',
			'modified' => '2013-07-04 09:38:01',
			'provincia_id' => '5',
			'tipo_nivel_medio_id' => null,
			'nota_final' => '13.00'
		),
	);

}
