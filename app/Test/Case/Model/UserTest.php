<?php
App::uses('User', 'Model');

/**
 * User Test Case
 *
 */
class UserTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.user',
		'app.group',
		'app.estado_objecto',
		'app.bolsa_pedido',
		'app.aluno',
		'app.aluno_via_admissao',
		'app.entidade',
		'app.genero',
		'app.pais',
		'app.funcionario',
		'app.grau_academico',
		'app.candidato_alumni',
		'app.estado_civil',
		'app.unidade_organica',
		'app.tipo_unidade_organica',
		'app.area_academica',
		'app.area_unidade',
		'app.docente',
		'app.docente_categoria',
		'app.curso',
		'app.tipo_curso',
		'app.plano_estudo',
		'app.disciplina_plano_estudo',
		'app.disciplina',
		'app.turma',
		'app.ano_lectivo',
		'app.regime_lectivo',
		'app.matricula',
		'app.estado_matricula',
		'app.candidatura',
		'app.escola_nivel_medio',
		'app.cidade',
		'app.provincia',
		'app.paise',
		'app.bairro',
		'app.rua',
		'app.aluno_nivel_medio',
		'app.tipo_ingresso',
		'app.bolsa_tipo_bolsa',
		'app.bolsa_resultado',
		'app.bolsa_motivo_indeferimento',
		'app.bolsa_bolsa',
		'app.banco',
		'app.bolsa_fonte_bolsa',
		'app.bolsa_valor_bolsa',
		'app.turno',
		'app.bolsa_temporaria',
		'app.tipo_matricula',
		'app.semestre_lectivo',
		'app.semestre',
		'app.financeiro_deposito',
		'app.financeiro_conta',
		'app.financeiro_pagamento',
		'app.financeiro_tipo_pagamento',
		'app.month',
		'app.feriado',
		'app.mensalidade',
		'app.financeiro_estado_pagamento',
		'app.financeiro_estado_deposito',
		'app.financeiro_forma_deposito',
		'app.financeiro_banco',
		'app.estado_turma',
		'app.inscricao',
		'app.estado_inscricao',
		'app.epoca_avaliacao',
		'app.tipo_inscricao',
		'app.avaliacao',
		'app.turma_tipo_avaliacao',
		'app.tipo_avaliacao',
		'app.docente_turma',
		'app.estado_docente_turma',
		'app.tipo_docente_turma',
		'app.disciplina_unidade_organica',
		'app.disciplina_docente',
		'app.precedencia',
		'app.tipo_precedencia',
		'app.cursos_turno',
		'app.documento_identificacao',
		'app.alumni',
		'app.tipo_funcionario',
		'app.estado_entidade',
		'app.financeiro_transacao',
		'app.financeiro_tipo_transacao',
		'app.entidade_identificacao',
		'app.entidade_contacto',
		'app.tipo_contacto',
		'app.area_trabalho',
		'app.estado_aluno',
		'app.grau_parentesco',
		'app.requisicoes_pedido',
		'app.requisicoes_tipo_pedido',
		'app.requisicoes_estado_pedido',
		'app.requisicoes_pedido_log',
		'app.historico_curso',
		'app.motivo_termino_curso',
		'app.mudanca_curso',
		'app.forma_mudanca_curso',
		'app.aluno_estado',
		'app.motivo_estado_aluno',
		'app.candidato_graduacao',
		'app.cerimonia_graduacao',
		'app.estado_candidatura',
		'app.regime_estudo',
		'app.regalia_social',
		'app.curso_responsavel',
		'app.funcao_profissional_role',
		'app.funcao_profissional',
		'app.role',
		'app.group_role',
		'app.groups_user',
		'app.message',
		'app.unidade_organica_role',
		'app.user_role'
	);

    public $autoFixtures = false;

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
        $this->loadFixtures('User');
		$this->User = ClassRegistry::init('User');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->User);

		parent::tearDown();
	}


/**
 * testGetUserByFuncionario method
 *
 * @return void
 */
	public function testGetUserByFuncionario() {
        $this->loadFixtures('User');
		$this->markTestIncomplete('testGetUserByFuncionario not implemented.');
	}

/**
 * testGetAlunoIDByUser method
 *
 * @return void
 */
	public function testGetAlunoIDByUser() {
        $this->loadFixtures('User');
		$this->markTestIncomplete('testGetAlunoIDByUser not implemented.');
	}

/**
 * testGetFuncionarioIDByUser method
 *
 * @return void
 */
	public function testGetFuncionarioIDByUser() {
        $this->loadFixtures('User');
		$this->markTestIncomplete('testGetFuncionarioIDByUser not implemented.');
	}

/**
 * testDeleteUser method
 *
 * @return void
 */
	public function testDeleteUser() {
        $this->loadFixtures('User');
		$this->markTestIncomplete('testDeleteUser not implemented.');
	}

/**
 * testGeraUsername method
 *
 * @return void
 */
	public function testGeraUsername() {
        $this->loadFixtures('User');
		$this->markTestIncomplete('testGeraUsername not implemented.');
	}

/**
 * testAlteraPassword method
 *
 * @return void
 */
	public function testAlteraPassword() {
        $this->loadFixtures('User');
		$this->markTestIncomplete('testAlteraPassword not implemented.');
	}

/**
 * testResetPassword method
 *
 * @return void
 */
	public function testResetPassword() {
        $this->loadFixtures('User');
		$this->markTestIncomplete('testResetPassword not implemented.');
	}

/**
 * testIsAluno method
 *
 * @return void
 */
	public function testIsAluno() {
        $this->loadFixtures('User');
		$this->markTestIncomplete('testIsAluno not implemented.');
	}

/**
 * testNormalizeStr method
 *
 * @return void
 */
	public function testNormalizeStr() {
        $this->loadFixtures('User');
		$this->markTestIncomplete('testNormalizeStr not implemented.');
	}

/**
 * testGeraEmailUem method
 *
 * @return void
 */
	public function testGeraEmailUem() {
        $this->loadFixtures('User');
		$this->markTestIncomplete('testGeraEmailUem not implemented.');
	}

/**
 * testGetFuncionarioActivoId method
 *
 * @return void
 */
	public function testGetFuncionarioActivoId() {
        $this->loadFixtures('User');
		$this->markTestIncomplete('testGetFuncionarioActivoId not implemented.');
	}

/**
 * testIsFromFaculdade method
 *
 * @return void
 */
	public function testIsFromFaculdade() {
        $this->loadFixtures('User');
		$this->markTestIncomplete('testIsFromFaculdade not implemented.');
	}

/**
 * testGeneratePassword method
 *
 * @return void
 */
	public function testGeneratePassword() {
        $this->loadFixtures('User');
		$this->markTestIncomplete('testGeneratePassword not implemented.');
	}

/**
 * testSplitName method
 *
 * @return void
 */
	public function testSplitName() {
        $this->loadFixtures('User');
		$this->markTestIncomplete('testSplitName not implemented.');
	}

    public function testCadastraUser(){
        $this->loadFixtures('User');
        $data = ['User' => array(
            'codigocartao' => '20146226',
            'name' => 'Sandra Fazenete Picardo Massamba',
            'group_id' => (int) 3,
            'verificar_permissoes' => (int) 1,
            'estado_email' => (int) 0,
            'estado_objecto_id' => (int) 1,
            'timezone' => 'Africa/Maputo',
            'password'=>'12345'
        ),
            'Entidade'=>[
                'apelido'=>'Sitoe',
                'nomes'=>'Elisio'
            ]
        ];


        $result = $this->User->cadastraUser($data);
        $this->AssertEquals(11,$result);
    }

}
