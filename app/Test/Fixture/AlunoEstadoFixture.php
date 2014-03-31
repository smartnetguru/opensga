<?php
/**
 * AlunoEstadoFixture
 *
 */
class AlunoEstadoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'aluno_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'estado_anterior' => array('type' => 'integer', 'null' => true, 'default' => null),
		'estado_actual' => array('type' => 'integer', 'null' => true, 'default' => null),
		'motivo_estado_aluno_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'observacao' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'data_mudanca' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'funcionario_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'anexo_url' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
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
			'id' => '1',
			'aluno_id' => '11072',
			'estado_anterior' => '1',
			'estado_actual' => '3',
			'motivo_estado_aluno_id' => '2',
			'observacao' => 'testando funcionalidade',
			'data_mudanca' => '2010-09-09 15:18:19',
			'funcionario_id' => null,
			'anexo_url' => null,
			'created' => null,
			'modified' => null,
			'created_by' => null,
			'modified_by' => null
		),
		array(
			'id' => '2',
			'aluno_id' => '11072',
			'estado_anterior' => '3',
			'estado_actual' => '1',
			'motivo_estado_aluno_id' => '6',
			'observacao' => 'cg',
			'data_mudanca' => '2010-09-20 15:19:40',
			'funcionario_id' => null,
			'anexo_url' => null,
			'created' => null,
			'modified' => null,
			'created_by' => null,
			'modified_by' => null
		),
		array(
			'id' => '3',
			'aluno_id' => '14431',
			'estado_anterior' => '9',
			'estado_actual' => '1',
			'motivo_estado_aluno_id' => '0',
			'observacao' => 'Certificado confirmado pela Escola Sec da Lhanguene. 
Processo Nr 390/2010

Responderam a nossa carta 314/DRA/2010.',
			'data_mudanca' => '2010-09-20 15:53:54',
			'funcionario_id' => null,
			'anexo_url' => null,
			'created' => null,
			'modified' => null,
			'created_by' => null,
			'modified_by' => null
		),
		array(
			'id' => '4',
			'aluno_id' => '6826',
			'estado_anterior' => '9',
			'estado_actual' => '1',
			'motivo_estado_aluno_id' => '0',
			'observacao' => 'Certificado confirmado pela Escola S F Manyanga. 
Ref. 615/95/66/ESFM/2010

Resposta da nossa carta de 21 de Julho de 2010',
			'data_mudanca' => '2010-09-20 16:02:41',
			'funcionario_id' => null,
			'anexo_url' => null,
			'created' => null,
			'modified' => null,
			'created_by' => null,
			'modified_by' => null
		),
		array(
			'id' => '5',
			'aluno_id' => '11072',
			'estado_anterior' => '1',
			'estado_actual' => '3',
			'motivo_estado_aluno_id' => '14',
			'observacao' => 'gfgvhvh',
			'data_mudanca' => '2010-09-21 12:30:26',
			'funcionario_id' => null,
			'anexo_url' => null,
			'created' => null,
			'modified' => null,
			'created_by' => null,
			'modified_by' => null
		),
		array(
			'id' => '6',
			'aluno_id' => '11072',
			'estado_anterior' => '3',
			'estado_actual' => '1',
			'motivo_estado_aluno_id' => '6',
			'observacao' => 'ccxc',
			'data_mudanca' => '2010-09-21 15:56:40',
			'funcionario_id' => null,
			'anexo_url' => null,
			'created' => null,
			'modified' => null,
			'created_by' => null,
			'modified_by' => null
		),
		array(
			'id' => '7',
			'aluno_id' => '11072',
			'estado_anterior' => '1',
			'estado_actual' => '3',
			'motivo_estado_aluno_id' => '14',
			'observacao' => 'testatndo funcao',
			'data_mudanca' => '2010-09-21 16:07:31',
			'funcionario_id' => null,
			'anexo_url' => null,
			'created' => null,
			'modified' => null,
			'created_by' => null,
			'modified_by' => null
		),
		array(
			'id' => '8',
			'aluno_id' => '15088',
			'estado_anterior' => '9',
			'estado_actual' => '1',
			'motivo_estado_aluno_id' => '0',
			'observacao' => 'Mudou de turno. Ver doc no PI REF 100/FD/Proc L /05 
Ver PI nº 20053212112',
			'data_mudanca' => '2010-09-29 12:22:09',
			'funcionario_id' => null,
			'anexo_url' => null,
			'created' => null,
			'modified' => null,
			'created_by' => null,
			'modified_by' => null
		),
		array(
			'id' => '9',
			'aluno_id' => '15452',
			'estado_anterior' => '9',
			'estado_actual' => '1',
			'motivo_estado_aluno_id' => '0',
			'observacao' => 'Ver a pasta - admitidos 2004.  ',
			'data_mudanca' => '2010-10-18 16:15:05',
			'funcionario_id' => null,
			'anexo_url' => null,
			'created' => null,
			'modified' => null,
			'created_by' => null,
			'modified_by' => null
		),
		array(
			'id' => '10',
			'aluno_id' => '11072',
			'estado_anterior' => '3',
			'estado_actual' => '1',
			'motivo_estado_aluno_id' => '14',
			'observacao' => 'dasdas',
			'data_mudanca' => '2010-10-21 12:08:40',
			'funcionario_id' => null,
			'anexo_url' => null,
			'created' => null,
			'modified' => null,
			'created_by' => null,
			'modified_by' => null
		),
		array(
			'id' => '11',
			'aluno_id' => '11072',
			'estado_anterior' => '3',
			'estado_actual' => '1',
			'motivo_estado_aluno_id' => '14',
			'observacao' => 'dgdf',
			'data_mudanca' => '2010-10-21 15:52:16',
			'funcionario_id' => null,
			'anexo_url' => null,
			'created' => null,
			'modified' => null,
			'created_by' => null,
			'modified_by' => null
		),
		array(
			'id' => '12',
			'aluno_id' => '15017',
			'estado_anterior' => '9',
			'estado_actual' => '1',
			'motivo_estado_aluno_id' => '0',
			'observacao' => 'Situação verificada. O Estudante é regular, bastou verificar a lista de ingressos do ano 2004 para confirmar.',
			'data_mudanca' => '2010-10-27 14:24:59',
			'funcionario_id' => null,
			'anexo_url' => null,
			'created' => null,
			'modified' => null,
			'created_by' => null,
			'modified_by' => null
		),
		array(
			'id' => '13',
			'aluno_id' => '11696',
			'estado_anterior' => '9',
			'estado_actual' => '1',
			'motivo_estado_aluno_id' => '0',
			'observacao' => 'Ano de Ingresso 2002, na UEM. 2004 - Mudança de curso via Administrativa. Novo número - 20041611106

Adérito',
			'data_mudanca' => '2010-11-02 15:39:36',
			'funcionario_id' => null,
			'anexo_url' => null,
			'created' => null,
			'modified' => null,
			'created_by' => null,
			'modified_by' => null
		),
		array(
			'id' => '14',
			'aluno_id' => '13408',
			'estado_anterior' => '1',
			'estado_actual' => '10',
			'motivo_estado_aluno_id' => '9',
			'observacao' => 'passou a usar o numero 20083474',
			'data_mudanca' => '2010-11-12 09:26:49',
			'funcionario_id' => null,
			'anexo_url' => null,
			'created' => null,
			'modified' => null,
			'created_by' => null,
			'modified_by' => null
		),
		array(
			'id' => '15',
			'aluno_id' => '15075',
			'estado_anterior' => '9',
			'estado_actual' => '1',
			'motivo_estado_aluno_id' => '0',
			'observacao' => 'Engano!! Trata-se dos estudantes que foram bloqueiados em conjunto por suspeita do número fora do intervalo normal.
',
			'data_mudanca' => '2010-11-16 13:01:11',
			'funcionario_id' => null,
			'anexo_url' => null,
			'created' => null,
			'modified' => null,
			'created_by' => null,
			'modified_by' => null
		),
		array(
			'id' => '16',
			'aluno_id' => '10188',
			'estado_anterior' => '1',
			'estado_actual' => '9',
			'motivo_estado_aluno_id' => '14',
			'observacao' => 'esta a frequentar dois cursos em simultaneo. Informacao obtida por  meio do sr. Eurico, do DMI, no dia 18 de Novembro de 2010 na formacao sobre sistema financeiro. O outro numero eh: 20085571. Renovou a matricula com os dois numeros em 2010',
			'data_mudanca' => '2010-11-18 09:03:40',
			'funcionario_id' => null,
			'anexo_url' => null,
			'created' => null,
			'modified' => null,
			'created_by' => null,
			'modified_by' => null
		),
		array(
			'id' => '17',
			'aluno_id' => '6385',
			'estado_anterior' => '1',
			'estado_actual' => '9',
			'motivo_estado_aluno_id' => '14',
			'observacao' => 'esta a frequentar dois cursos em simultaneo. Informacao obtida por  meio do sr. Eurico, do DMI, no dia 18 de Novembro de 2010 na formacao sobre sistema financeiro. O outro numero eh: 20072046023. Renovou a matricula com os dois numeros em 2010',
			'data_mudanca' => '2010-11-18 09:04:38',
			'funcionario_id' => null,
			'anexo_url' => null,
			'created' => null,
			'modified' => null,
			'created_by' => null,
			'modified_by' => null
		),
		array(
			'id' => '18',
			'aluno_id' => '10299',
			'estado_anterior' => '1',
			'estado_actual' => '7',
			'motivo_estado_aluno_id' => '9',
			'observacao' => 'passou a usar o numero 20072046023',
			'data_mudanca' => '2010-11-18 09:05:17',
			'funcionario_id' => null,
			'anexo_url' => null,
			'created' => null,
			'modified' => null,
			'created_by' => null,
			'modified_by' => null
		),
		array(
			'id' => '19',
			'aluno_id' => '14988',
			'estado_anterior' => '9',
			'estado_actual' => '1',
			'motivo_estado_aluno_id' => '0',
			'observacao' => 'Número de estudante acima do padrão. Depois de verificada sua situação, através do processo, constatou-se que o estudante é regular.',
			'data_mudanca' => '2010-11-25 09:28:36',
			'funcionario_id' => null,
			'anexo_url' => null,
			'created' => null,
			'modified' => null,
			'created_by' => null,
			'modified_by' => null
		),
		array(
			'id' => '20',
			'aluno_id' => '16349',
			'estado_anterior' => '1',
			'estado_actual' => '10',
			'motivo_estado_aluno_id' => '14',
			'observacao' => 'novo numero 20080882',
			'data_mudanca' => '2010-12-01 10:00:53',
			'funcionario_id' => null,
			'anexo_url' => null,
			'created' => null,
			'modified' => null,
			'created_by' => null,
			'modified_by' => null
		),
	);

}
