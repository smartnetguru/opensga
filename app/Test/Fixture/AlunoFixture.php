<?php
/**
 * AlunoFixture
 *
 */
class AlunoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'codigo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 25, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'user_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'dataingresso' => array('type' => 'date', 'null' => true, 'default' => null),
		'etrabalhador' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'areatrabalho_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'empresanome' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'empresamorada' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'empresacontacto' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'empresatelefone' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'empresaemail' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'empresasite' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'curso_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'docdataemissao' => array('type' => 'date', 'null' => true, 'default' => null),
		'doclocalemissao' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'detalhes' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'estadoentidade_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'entidade_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'escola_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'numero_estudante' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'numero_estudante_antigo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'aluno_via_admissao_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'codigo_exame_admissao' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'lista' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'ano_ingresso' => array('type' => 'text', 'null' => true, 'default' => null, 'length' => 4),
		'curso_ingresso_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'regime_ingresso_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'faculdade_ingresso_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'created_by' => array('type' => 'integer', 'null' => true, 'default' => null),
		'modified_by' => array('type' => 'integer', 'null' => true, 'default' => null),
		'nome_encarregado' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'parentesco_encarregado' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'telefone_encarregado' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'telemovel_encarregado' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'nome_emergencia' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'telefone_emergencia' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'telemovel_emergencia' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'AreaTrabalho' => array('column' => 'areatrabalho_id', 'unique' => 0),
			'Curso' => array('column' => 'curso_id', 'unique' => 0),
			'Entidade' => array('column' => 'entidade_id', 'unique' => 0),
			'Escola' => array('column' => 'escola_id', 'unique' => 0),
			'Estadoentidade' => array('column' => 'estadoentidade_id', 'unique' => 0),
			'Usuario' => array('column' => 'user_id', 'unique' => 0)
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
			'id' => 1,
			'codigo' => 'Lorem ipsum dolor sit a',
			'user_id' => 1,
			'dataingresso' => '2012-09-25',
			'etrabalhador' => 1,
			'areatrabalho_id' => 1,
			'empresanome' => 'Lorem ipsum dolor sit amet',
			'empresamorada' => 'Lorem ipsum dolor sit amet',
			'empresacontacto' => 'Lorem ipsum dolor sit amet',
			'empresatelefone' => 'Lorem ipsum dolor sit amet',
			'empresaemail' => 'Lorem ipsum dolor sit amet',
			'empresasite' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 1,
			'docdataemissao' => '2012-09-25',
			'doclocalemissao' => 'Lorem ipsum dolor sit amet',
			'detalhes' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'estadoentidade_id' => 1,
			'created' => '2012-09-25 16:30:37',
			'modified' => '2012-09-25 16:30:37',
			'entidade_id' => 1,
			'escola_id' => 1,
			'numero_estudante' => 'Lorem ipsum dolor sit amet',
			'numero_estudante_antigo' => 'Lorem ipsum dolor sit amet',
			'aluno_via_admissao_id' => 1,
			'codigo_exame_admissao' => 'Lorem ipsum dolor sit amet',
			'lista' => 'Lorem ipsum dolor sit amet',
			'ano_ingresso' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'curso_ingresso_id' => 1,
			'regime_ingresso_id' => 1,
			'faculdade_ingresso_id' => 1,
			'created_by' => 1,
			'modified_by' => 1,
			'nome_encarregado' => 'Lorem ipsum dolor sit amet',
			'parentesco_encarregado' => 'Lorem ipsum dolor sit amet',
			'telefone_encarregado' => 'Lorem ipsum dolor sit amet',
			'telemovel_encarregado' => 'Lorem ipsum dolor sit amet',
			'nome_emergencia' => 'Lorem ipsum dolor sit amet',
			'telefone_emergencia' => 'Lorem ipsum dolor sit amet',
			'telemovel_emergencia' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 2,
			'codigo' => 'Lorem ipsum dolor sit a',
			'user_id' => 2,
			'dataingresso' => '2012-09-25',
			'etrabalhador' => 1,
			'areatrabalho_id' => 2,
			'empresanome' => 'Lorem ipsum dolor sit amet',
			'empresamorada' => 'Lorem ipsum dolor sit amet',
			'empresacontacto' => 'Lorem ipsum dolor sit amet',
			'empresatelefone' => 'Lorem ipsum dolor sit amet',
			'empresaemail' => 'Lorem ipsum dolor sit amet',
			'empresasite' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 2,
			'docdataemissao' => '2012-09-25',
			'doclocalemissao' => 'Lorem ipsum dolor sit amet',
			'detalhes' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'estadoentidade_id' => 2,
			'created' => '2012-09-25 16:30:37',
			'modified' => '2012-09-25 16:30:37',
			'entidade_id' => 2,
			'escola_id' => 2,
			'numero_estudante' => 'Lorem ipsum dolor sit amet',
			'numero_estudante_antigo' => 'Lorem ipsum dolor sit amet',
			'aluno_via_admissao_id' => 2,
			'codigo_exame_admissao' => 'Lorem ipsum dolor sit amet',
			'lista' => 'Lorem ipsum dolor sit amet',
			'ano_ingresso' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'curso_ingresso_id' => 2,
			'regime_ingresso_id' => 2,
			'faculdade_ingresso_id' => 2,
			'created_by' => 2,
			'modified_by' => 2,
			'nome_encarregado' => 'Lorem ipsum dolor sit amet',
			'parentesco_encarregado' => 'Lorem ipsum dolor sit amet',
			'telefone_encarregado' => 'Lorem ipsum dolor sit amet',
			'telemovel_encarregado' => 'Lorem ipsum dolor sit amet',
			'nome_emergencia' => 'Lorem ipsum dolor sit amet',
			'telefone_emergencia' => 'Lorem ipsum dolor sit amet',
			'telemovel_emergencia' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 3,
			'codigo' => 'Lorem ipsum dolor sit a',
			'user_id' => 3,
			'dataingresso' => '2012-09-25',
			'etrabalhador' => 1,
			'areatrabalho_id' => 3,
			'empresanome' => 'Lorem ipsum dolor sit amet',
			'empresamorada' => 'Lorem ipsum dolor sit amet',
			'empresacontacto' => 'Lorem ipsum dolor sit amet',
			'empresatelefone' => 'Lorem ipsum dolor sit amet',
			'empresaemail' => 'Lorem ipsum dolor sit amet',
			'empresasite' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 3,
			'docdataemissao' => '2012-09-25',
			'doclocalemissao' => 'Lorem ipsum dolor sit amet',
			'detalhes' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'estadoentidade_id' => 3,
			'created' => '2012-09-25 16:30:37',
			'modified' => '2012-09-25 16:30:37',
			'entidade_id' => 3,
			'escola_id' => 3,
			'numero_estudante' => 'Lorem ipsum dolor sit amet',
			'numero_estudante_antigo' => 'Lorem ipsum dolor sit amet',
			'aluno_via_admissao_id' => 3,
			'codigo_exame_admissao' => 'Lorem ipsum dolor sit amet',
			'lista' => 'Lorem ipsum dolor sit amet',
			'ano_ingresso' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'curso_ingresso_id' => 3,
			'regime_ingresso_id' => 3,
			'faculdade_ingresso_id' => 3,
			'created_by' => 3,
			'modified_by' => 3,
			'nome_encarregado' => 'Lorem ipsum dolor sit amet',
			'parentesco_encarregado' => 'Lorem ipsum dolor sit amet',
			'telefone_encarregado' => 'Lorem ipsum dolor sit amet',
			'telemovel_encarregado' => 'Lorem ipsum dolor sit amet',
			'nome_emergencia' => 'Lorem ipsum dolor sit amet',
			'telefone_emergencia' => 'Lorem ipsum dolor sit amet',
			'telemovel_emergencia' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 4,
			'codigo' => 'Lorem ipsum dolor sit a',
			'user_id' => 4,
			'dataingresso' => '2012-09-25',
			'etrabalhador' => 1,
			'areatrabalho_id' => 4,
			'empresanome' => 'Lorem ipsum dolor sit amet',
			'empresamorada' => 'Lorem ipsum dolor sit amet',
			'empresacontacto' => 'Lorem ipsum dolor sit amet',
			'empresatelefone' => 'Lorem ipsum dolor sit amet',
			'empresaemail' => 'Lorem ipsum dolor sit amet',
			'empresasite' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 4,
			'docdataemissao' => '2012-09-25',
			'doclocalemissao' => 'Lorem ipsum dolor sit amet',
			'detalhes' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'estadoentidade_id' => 4,
			'created' => '2012-09-25 16:30:37',
			'modified' => '2012-09-25 16:30:37',
			'entidade_id' => 4,
			'escola_id' => 4,
			'numero_estudante' => 'Lorem ipsum dolor sit amet',
			'numero_estudante_antigo' => 'Lorem ipsum dolor sit amet',
			'aluno_via_admissao_id' => 4,
			'codigo_exame_admissao' => 'Lorem ipsum dolor sit amet',
			'lista' => 'Lorem ipsum dolor sit amet',
			'ano_ingresso' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'curso_ingresso_id' => 4,
			'regime_ingresso_id' => 4,
			'faculdade_ingresso_id' => 4,
			'created_by' => 4,
			'modified_by' => 4,
			'nome_encarregado' => 'Lorem ipsum dolor sit amet',
			'parentesco_encarregado' => 'Lorem ipsum dolor sit amet',
			'telefone_encarregado' => 'Lorem ipsum dolor sit amet',
			'telemovel_encarregado' => 'Lorem ipsum dolor sit amet',
			'nome_emergencia' => 'Lorem ipsum dolor sit amet',
			'telefone_emergencia' => 'Lorem ipsum dolor sit amet',
			'telemovel_emergencia' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 5,
			'codigo' => 'Lorem ipsum dolor sit a',
			'user_id' => 5,
			'dataingresso' => '2012-09-25',
			'etrabalhador' => 1,
			'areatrabalho_id' => 5,
			'empresanome' => 'Lorem ipsum dolor sit amet',
			'empresamorada' => 'Lorem ipsum dolor sit amet',
			'empresacontacto' => 'Lorem ipsum dolor sit amet',
			'empresatelefone' => 'Lorem ipsum dolor sit amet',
			'empresaemail' => 'Lorem ipsum dolor sit amet',
			'empresasite' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 5,
			'docdataemissao' => '2012-09-25',
			'doclocalemissao' => 'Lorem ipsum dolor sit amet',
			'detalhes' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'estadoentidade_id' => 5,
			'created' => '2012-09-25 16:30:37',
			'modified' => '2012-09-25 16:30:37',
			'entidade_id' => 5,
			'escola_id' => 5,
			'numero_estudante' => 'Lorem ipsum dolor sit amet',
			'numero_estudante_antigo' => 'Lorem ipsum dolor sit amet',
			'aluno_via_admissao_id' => 5,
			'codigo_exame_admissao' => 'Lorem ipsum dolor sit amet',
			'lista' => 'Lorem ipsum dolor sit amet',
			'ano_ingresso' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'curso_ingresso_id' => 5,
			'regime_ingresso_id' => 5,
			'faculdade_ingresso_id' => 5,
			'created_by' => 5,
			'modified_by' => 5,
			'nome_encarregado' => 'Lorem ipsum dolor sit amet',
			'parentesco_encarregado' => 'Lorem ipsum dolor sit amet',
			'telefone_encarregado' => 'Lorem ipsum dolor sit amet',
			'telemovel_encarregado' => 'Lorem ipsum dolor sit amet',
			'nome_emergencia' => 'Lorem ipsum dolor sit amet',
			'telefone_emergencia' => 'Lorem ipsum dolor sit amet',
			'telemovel_emergencia' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 6,
			'codigo' => 'Lorem ipsum dolor sit a',
			'user_id' => 6,
			'dataingresso' => '2012-09-25',
			'etrabalhador' => 1,
			'areatrabalho_id' => 6,
			'empresanome' => 'Lorem ipsum dolor sit amet',
			'empresamorada' => 'Lorem ipsum dolor sit amet',
			'empresacontacto' => 'Lorem ipsum dolor sit amet',
			'empresatelefone' => 'Lorem ipsum dolor sit amet',
			'empresaemail' => 'Lorem ipsum dolor sit amet',
			'empresasite' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 6,
			'docdataemissao' => '2012-09-25',
			'doclocalemissao' => 'Lorem ipsum dolor sit amet',
			'detalhes' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'estadoentidade_id' => 6,
			'created' => '2012-09-25 16:30:37',
			'modified' => '2012-09-25 16:30:37',
			'entidade_id' => 6,
			'escola_id' => 6,
			'numero_estudante' => 'Lorem ipsum dolor sit amet',
			'numero_estudante_antigo' => 'Lorem ipsum dolor sit amet',
			'aluno_via_admissao_id' => 6,
			'codigo_exame_admissao' => 'Lorem ipsum dolor sit amet',
			'lista' => 'Lorem ipsum dolor sit amet',
			'ano_ingresso' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'curso_ingresso_id' => 6,
			'regime_ingresso_id' => 6,
			'faculdade_ingresso_id' => 6,
			'created_by' => 6,
			'modified_by' => 6,
			'nome_encarregado' => 'Lorem ipsum dolor sit amet',
			'parentesco_encarregado' => 'Lorem ipsum dolor sit amet',
			'telefone_encarregado' => 'Lorem ipsum dolor sit amet',
			'telemovel_encarregado' => 'Lorem ipsum dolor sit amet',
			'nome_emergencia' => 'Lorem ipsum dolor sit amet',
			'telefone_emergencia' => 'Lorem ipsum dolor sit amet',
			'telemovel_emergencia' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 7,
			'codigo' => 'Lorem ipsum dolor sit a',
			'user_id' => 7,
			'dataingresso' => '2012-09-25',
			'etrabalhador' => 1,
			'areatrabalho_id' => 7,
			'empresanome' => 'Lorem ipsum dolor sit amet',
			'empresamorada' => 'Lorem ipsum dolor sit amet',
			'empresacontacto' => 'Lorem ipsum dolor sit amet',
			'empresatelefone' => 'Lorem ipsum dolor sit amet',
			'empresaemail' => 'Lorem ipsum dolor sit amet',
			'empresasite' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 7,
			'docdataemissao' => '2012-09-25',
			'doclocalemissao' => 'Lorem ipsum dolor sit amet',
			'detalhes' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'estadoentidade_id' => 7,
			'created' => '2012-09-25 16:30:37',
			'modified' => '2012-09-25 16:30:37',
			'entidade_id' => 7,
			'escola_id' => 7,
			'numero_estudante' => 'Lorem ipsum dolor sit amet',
			'numero_estudante_antigo' => 'Lorem ipsum dolor sit amet',
			'aluno_via_admissao_id' => 7,
			'codigo_exame_admissao' => 'Lorem ipsum dolor sit amet',
			'lista' => 'Lorem ipsum dolor sit amet',
			'ano_ingresso' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'curso_ingresso_id' => 7,
			'regime_ingresso_id' => 7,
			'faculdade_ingresso_id' => 7,
			'created_by' => 7,
			'modified_by' => 7,
			'nome_encarregado' => 'Lorem ipsum dolor sit amet',
			'parentesco_encarregado' => 'Lorem ipsum dolor sit amet',
			'telefone_encarregado' => 'Lorem ipsum dolor sit amet',
			'telemovel_encarregado' => 'Lorem ipsum dolor sit amet',
			'nome_emergencia' => 'Lorem ipsum dolor sit amet',
			'telefone_emergencia' => 'Lorem ipsum dolor sit amet',
			'telemovel_emergencia' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 8,
			'codigo' => 'Lorem ipsum dolor sit a',
			'user_id' => 8,
			'dataingresso' => '2012-09-25',
			'etrabalhador' => 1,
			'areatrabalho_id' => 8,
			'empresanome' => 'Lorem ipsum dolor sit amet',
			'empresamorada' => 'Lorem ipsum dolor sit amet',
			'empresacontacto' => 'Lorem ipsum dolor sit amet',
			'empresatelefone' => 'Lorem ipsum dolor sit amet',
			'empresaemail' => 'Lorem ipsum dolor sit amet',
			'empresasite' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 8,
			'docdataemissao' => '2012-09-25',
			'doclocalemissao' => 'Lorem ipsum dolor sit amet',
			'detalhes' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'estadoentidade_id' => 8,
			'created' => '2012-09-25 16:30:37',
			'modified' => '2012-09-25 16:30:37',
			'entidade_id' => 8,
			'escola_id' => 8,
			'numero_estudante' => 'Lorem ipsum dolor sit amet',
			'numero_estudante_antigo' => 'Lorem ipsum dolor sit amet',
			'aluno_via_admissao_id' => 8,
			'codigo_exame_admissao' => 'Lorem ipsum dolor sit amet',
			'lista' => 'Lorem ipsum dolor sit amet',
			'ano_ingresso' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'curso_ingresso_id' => 8,
			'regime_ingresso_id' => 8,
			'faculdade_ingresso_id' => 8,
			'created_by' => 8,
			'modified_by' => 8,
			'nome_encarregado' => 'Lorem ipsum dolor sit amet',
			'parentesco_encarregado' => 'Lorem ipsum dolor sit amet',
			'telefone_encarregado' => 'Lorem ipsum dolor sit amet',
			'telemovel_encarregado' => 'Lorem ipsum dolor sit amet',
			'nome_emergencia' => 'Lorem ipsum dolor sit amet',
			'telefone_emergencia' => 'Lorem ipsum dolor sit amet',
			'telemovel_emergencia' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 9,
			'codigo' => 'Lorem ipsum dolor sit a',
			'user_id' => 9,
			'dataingresso' => '2012-09-25',
			'etrabalhador' => 1,
			'areatrabalho_id' => 9,
			'empresanome' => 'Lorem ipsum dolor sit amet',
			'empresamorada' => 'Lorem ipsum dolor sit amet',
			'empresacontacto' => 'Lorem ipsum dolor sit amet',
			'empresatelefone' => 'Lorem ipsum dolor sit amet',
			'empresaemail' => 'Lorem ipsum dolor sit amet',
			'empresasite' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 9,
			'docdataemissao' => '2012-09-25',
			'doclocalemissao' => 'Lorem ipsum dolor sit amet',
			'detalhes' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'estadoentidade_id' => 9,
			'created' => '2012-09-25 16:30:37',
			'modified' => '2012-09-25 16:30:37',
			'entidade_id' => 9,
			'escola_id' => 9,
			'numero_estudante' => 'Lorem ipsum dolor sit amet',
			'numero_estudante_antigo' => 'Lorem ipsum dolor sit amet',
			'aluno_via_admissao_id' => 9,
			'codigo_exame_admissao' => 'Lorem ipsum dolor sit amet',
			'lista' => 'Lorem ipsum dolor sit amet',
			'ano_ingresso' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'curso_ingresso_id' => 9,
			'regime_ingresso_id' => 9,
			'faculdade_ingresso_id' => 9,
			'created_by' => 9,
			'modified_by' => 9,
			'nome_encarregado' => 'Lorem ipsum dolor sit amet',
			'parentesco_encarregado' => 'Lorem ipsum dolor sit amet',
			'telefone_encarregado' => 'Lorem ipsum dolor sit amet',
			'telemovel_encarregado' => 'Lorem ipsum dolor sit amet',
			'nome_emergencia' => 'Lorem ipsum dolor sit amet',
			'telefone_emergencia' => 'Lorem ipsum dolor sit amet',
			'telemovel_emergencia' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 10,
			'codigo' => 'Lorem ipsum dolor sit a',
			'user_id' => 10,
			'dataingresso' => '2012-09-25',
			'etrabalhador' => 1,
			'areatrabalho_id' => 10,
			'empresanome' => 'Lorem ipsum dolor sit amet',
			'empresamorada' => 'Lorem ipsum dolor sit amet',
			'empresacontacto' => 'Lorem ipsum dolor sit amet',
			'empresatelefone' => 'Lorem ipsum dolor sit amet',
			'empresaemail' => 'Lorem ipsum dolor sit amet',
			'empresasite' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 10,
			'docdataemissao' => '2012-09-25',
			'doclocalemissao' => 'Lorem ipsum dolor sit amet',
			'detalhes' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'estadoentidade_id' => 10,
			'created' => '2012-09-25 16:30:37',
			'modified' => '2012-09-25 16:30:37',
			'entidade_id' => 10,
			'escola_id' => 10,
			'numero_estudante' => 'Lorem ipsum dolor sit amet',
			'numero_estudante_antigo' => 'Lorem ipsum dolor sit amet',
			'aluno_via_admissao_id' => 10,
			'codigo_exame_admissao' => 'Lorem ipsum dolor sit amet',
			'lista' => 'Lorem ipsum dolor sit amet',
			'ano_ingresso' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'curso_ingresso_id' => 10,
			'regime_ingresso_id' => 10,
			'faculdade_ingresso_id' => 10,
			'created_by' => 10,
			'modified_by' => 10,
			'nome_encarregado' => 'Lorem ipsum dolor sit amet',
			'parentesco_encarregado' => 'Lorem ipsum dolor sit amet',
			'telefone_encarregado' => 'Lorem ipsum dolor sit amet',
			'telemovel_encarregado' => 'Lorem ipsum dolor sit amet',
			'nome_emergencia' => 'Lorem ipsum dolor sit amet',
			'telefone_emergencia' => 'Lorem ipsum dolor sit amet',
			'telemovel_emergencia' => 'Lorem ipsum dolor sit amet'
		),
	);

}
