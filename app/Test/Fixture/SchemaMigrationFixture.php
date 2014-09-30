<?php
/**
 * SchemaMigrationFixture
 *
 */
class SchemaMigrationFixture extends CakeTestFixture {

/**
 * Import
 *
 * @var array
 */
	public $import = array('table' => 'schema_migrations');

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => '1',
			'class' => 'FirstMigration',
			'type' => 'app',
			'created' => '2014-07-24 08:34:27'
		),
		array(
			'id' => '2',
			'class' => 'DuracaoCurso',
			'type' => 'app',
			'created' => '2014-07-24 08:34:59'
		),
		array(
			'id' => '3',
			'class' => 'AnularInscricao',
			'type' => 'app',
			'created' => '2014-08-15 06:19:46'
		),
		array(
			'id' => '4',
			'class' => 'CorrecaoMatriculas',
			'type' => 'app',
			'created' => '2014-09-01 09:14:13'
		),
	);

}
