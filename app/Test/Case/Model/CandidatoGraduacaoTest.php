<?php
App::uses('CandidatoGraduacao', 'Model');

/**
 * CandidatoGraduacao Test Case
 */
class CandidatoGraduacaoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.candidato_graduacao',
        'app.cerimonia_graduacao',
        'app.aluno',
        'app.financeiro_pagamento',
        'app.curso',
        'app.financeiro_transacao',
        'app.financeiro_deposito',
        'app.entidade',
        'app.financeiro_conta'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CandidatoGraduacao = ClassRegistry::init('CandidatoGraduacao');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CandidatoGraduacao);

		parent::tearDown();
	}

/**
 * testCadastraCandidatoGraduacao method
 *
 * @return void
 */
	public function testCadastraCandidatoGraduacao() {

        $data = array(
            'CandidatoGraduacao' => array(
                'apelido' => 'Leonardo',
                'nomes' => 'Elísio',
                'ano_conclusao' => '2015',
                'data_defesa' => '2015-09-14',
                'media_defesa' => '12',
                'genero_id' => '1',
                'data_nascimento' => '1989-02-09',
                'estado_civil_id' => '1',
                'regime_estudo_id' => '1',
                'regalia_social_id' => '1',
                'telemovel' => '435443',
                'naturalidade' => 'SGFDFGD',
                'pais_nascimento' => '152',
                'provincia_nascimento' => '10',
                'distrito_nascimento' => '17',
                'aluno_id' => '2'
            )
        );

$data2 = array(
    'CandidatoGraduacao' => array(
        'apelido' => 'Leonardo',
        'nomes' => 'Elísio',
        'ano_conclusao' => '2015',
        'data_defesa' => '2015-10-05',
        'media_defesa' => '12',
        'genero_id' => '1',
        'data_nascimento' => '1989-02-09',
        'estado_civil_id' => '1',
        'regime_estudo_id' => '1',
        'regalia_social_id' => '2',
        'telemovel' => '826489374',
        'naturalidade' => 'Chimoio',
        'pais_nascimento' => '152',
        'provincia_nascimento' => '4',
        'distrito_nascimento' => '44',
        'aluno_id' => '10',
        'estado_candidatura_id' =>1,
        'numero_talao' => '234454353543',
        'data_pagamento' => '2015-10-07',
        'valor_pago' => '3500'
    )
);
        $resultado = $this->CandidatoGraduacao->cadastraCandidatoGraduacao($data);
        $this->assertSame(true,$resultado);

        $resultado2 = $this->CandidatoGraduacao->cadastraCandidatoGraduacao($data2);
        $this->assertSame(true,$resultado2);
	}

}
