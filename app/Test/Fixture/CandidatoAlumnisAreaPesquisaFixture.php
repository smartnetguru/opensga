<?php
/**
 * CandidatoAlumnisAreaPesquisaFixture
 *
 */
class CandidatoAlumnisAreaPesquisaFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'candidato_alumni_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'area_pesquisa_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'candidato_alumnios_candidato_alumnis_idx' => array('column' => 'candidato_alumni_id', 'unique' => 0),
			'candidato_alumnis_areas_pesquisas_idx' => array('column' => 'area_pesquisa_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
	);

}
