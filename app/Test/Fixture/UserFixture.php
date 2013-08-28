<?php
/**
 * UserFixture
 *
 */
class UserFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'username' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'password' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'codigocartao' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 30, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'group_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'created_by' => array('type' => 'integer', 'null' => true, 'default' => null),
		'modified_by' => array('type' => 'integer', 'null' => true, 'default' => null),
		'ultimo_login' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'codigo_activacao' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'estado_objecto_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'verificar_permissoes' => array('type' => 'integer', 'null' => true, 'default' => '0'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
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
			'username' => 'admin',
			'password' => '$2a$10$OtSkDQkkhEwZLheHzk1M9u1RSAnusMQuPD.TgolOUihMFLdg0Croy',
			'codigocartao' => 'admin',
			'group_id' => '1',
			'created_by' => null,
			'modified_by' => null,
			'ultimo_login' => null,
			'codigo_activacao' => '1',
			'estado_objecto_id' => null,
			'verificar_permissoes' => '0',
			'created' => null,
			'modified' => null
		),
		array(
			'id' => '2',
			'username' => 'jessica.matos@uem.ac.mz',
			'password' => '$2a$10$pmiFVNVFh3gVxtYDxizsN.Ot6e1MCipbrOSMOhIiF0SARwJjNRZv.',
			'codigocartao' => '20093821',
			'group_id' => '3',
			'created_by' => null,
			'modified_by' => null,
			'ultimo_login' => null,
			'codigo_activacao' => '1',
			'estado_objecto_id' => '1',
			'verificar_permissoes' => '0',
			'created' => null,
			'modified' => null
		),
		array(
			'id' => '3',
			'username' => 'sefora.noor@uem.ac.mz',
			'password' => '$2a$10$fmSCtgX/5SIwRyoSvn6Cnu2uFLp5o4A5MKZjQt0r16ETHhzRp5sMa',
			'codigocartao' => '20093823',
			'group_id' => '3',
			'created_by' => null,
			'modified_by' => null,
			'ultimo_login' => null,
			'codigo_activacao' => '1',
			'estado_objecto_id' => '1',
			'verificar_permissoes' => '0',
			'created' => null,
			'modified' => null
		),
		array(
			'id' => '4',
			'username' => 'rosita.tivane@uem.ac.mz',
			'password' => '$2a$10$mlkJir9px3S/Se1Ld5knqus4E1lSdu8wnduUepHlvVwANLwsXaSOe',
			'codigocartao' => '20092034',
			'group_id' => '3',
			'created_by' => null,
			'modified_by' => null,
			'ultimo_login' => null,
			'codigo_activacao' => '1',
			'estado_objecto_id' => '1',
			'verificar_permissoes' => '0',
			'created' => null,
			'modified' => null
		),
		array(
			'id' => '5',
			'username' => 'nelson.mubai@uem.ac.mz',
			'password' => '$2a$10$L0GabycePgysSiqbOzJWeuwSUd3T25r2Ve7K3OsDhZz.jZrPz7a7G',
			'codigocartao' => '20090004',
			'group_id' => '3',
			'created_by' => null,
			'modified_by' => null,
			'ultimo_login' => null,
			'codigo_activacao' => '1',
			'estado_objecto_id' => '1',
			'verificar_permissoes' => '0',
			'created' => null,
			'modified' => null
		),
		array(
			'id' => '6',
			'username' => 'elton.massingue@uem.ac.mz',
			'password' => '$2a$10$pSV1EPa8nPbpwtTWfcDGx.oQn5JgoumXfF4q7VqniITKH.EECUjxy',
			'codigocartao' => '20093732',
			'group_id' => '3',
			'created_by' => null,
			'modified_by' => null,
			'ultimo_login' => null,
			'codigo_activacao' => '1',
			'estado_objecto_id' => '1',
			'verificar_permissoes' => '0',
			'created' => null,
			'modified' => null
		),
		array(
			'id' => '7',
			'username' => 'lucas.chiau@uem.ac.mz',
			'password' => '$2a$10$eRxeww79Ruds6ihx3Dm5J.HUs7o.ngxL7MkeQKqxRD1fgmNtbXZ/2',
			'codigocartao' => '20090023',
			'group_id' => '3',
			'created_by' => null,
			'modified_by' => null,
			'ultimo_login' => null,
			'codigo_activacao' => '1',
			'estado_objecto_id' => '1',
			'verificar_permissoes' => '0',
			'created' => null,
			'modified' => null
		),
		array(
			'id' => '8',
			'username' => 'vladimir.tsandzana@uem.ac.mz',
			'password' => '$2a$10$RTh0YIrudYY0kUyeWwBLyuKyjcEA87skCyb/uysYDr3OudGwOBBRi',
			'codigocartao' => '20093953',
			'group_id' => '3',
			'created_by' => null,
			'modified_by' => null,
			'ultimo_login' => null,
			'codigo_activacao' => '1',
			'estado_objecto_id' => '1',
			'verificar_permissoes' => '0',
			'created' => null,
			'modified' => null
		),
		array(
			'id' => '9',
			'username' => 'elisio.xerinda@uem.ac.mz',
			'password' => '$2a$10$mTJ6XoK9SMYnGltO8YHHTOktz2KtLVGcJO/uL2fLmR6i8/3dWztji',
			'codigocartao' => '20090054',
			'group_id' => '3',
			'created_by' => null,
			'modified_by' => null,
			'ultimo_login' => null,
			'codigo_activacao' => '1',
			'estado_objecto_id' => '1',
			'verificar_permissoes' => '0',
			'created' => null,
			'modified' => null
		),
		array(
			'id' => '10',
			'username' => 'catia.mbebe@uem.ac.mz',
			'password' => '$2a$10$VlDrEM8URMdYI9JE7VWmW.UFRg5Hp9hWKaiC7Bkqx7ugLiVpev/nK',
			'codigocartao' => '20094064',
			'group_id' => '3',
			'created_by' => null,
			'modified_by' => null,
			'ultimo_login' => null,
			'codigo_activacao' => '1',
			'estado_objecto_id' => '1',
			'verificar_permissoes' => '0',
			'created' => null,
			'modified' => null
		),
	);

}
