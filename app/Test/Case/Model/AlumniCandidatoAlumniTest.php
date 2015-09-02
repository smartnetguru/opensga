<?php
App::uses('AlumniCandidatoAlumni', 'Model');

/**
 * AlumniCandidatoAlumni Test Case
 */
class AlumniCandidatoAlumniTest extends CakeTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.alumni_candidato_alumni',
        'app.genero',
        'app.aluno',
        'app.aluno_via_admissao',
        'app.user',
        'app.group',
        'app.estado_objecto',
        'app.bolsa_pedido',
        'app.ano_lectivo',
        'app.regime_lectivo',
        'app.turma',
        'app.semestre_lectivo',
        'app.semestre',
        'app.financeiro_deposito',
        'app.entidade',
        'app.pais',
        'app.funcionario',
        'app.grau_academico',
        'app.curso',
        'app.unidade_organica',
        'app.tipo_unidade_organica',
        'app.area_academica',
        'app.area_unidade',
        'app.docente',
        'app.docente_categoria',
        'app.tipo_curso',
        'app.curso_responsavel',
        'app.plano_estudo',
        'app.disciplina_plano_estudo',
        'app.disciplina',
        'app.disciplina_unidade_organica',

        'app.precedencia',
        'app.tipo_precedencia',
        'app.cursos_turno',
        'app.turno',
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
        'app.estado_civil',
        'app.documento_identificacao',
        'app.tipo_ingresso',
        'app.bolsa_tipo_bolsa',
        'app.bolsa_resultado',
        'app.bolsa_motivo_indeferimento',
        'app.bolsa_bolsa',
        'app.banco',
        'app.bolsa_fonte_bolsa',
        'app.bolsa_valor_bolsa',
        'app.bolsa_temporaria',
        'app.tipo_matricula',
        'app.financeiro_pagamento',
        'app.financeiro_conta',
        'app.financeiro_tipo_pagamento',
        'app.month',
        'app.feriado',
        'app.mensalidade',
        'app.financeiro_estado_pagamento',
        'app.tipo_funcionario',
        'app.estado_entidade',
        'app.financeiro_transacao',
        'app.financeiro_tipo_transacao',
        'app.entidade_identificacao',
        'app.entidade_contacto',
        'app.tipo_contacto',
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
        'app.candidato_graduacao',
        'app.cerimonia_graduacao',
        'app.estado_candidatura',
        'app.regime_estudo',
        'app.regalia_social',
        'app.forma_mudanca_curso',
        'app.funcao_profissional_role',
        'app.funcao_profissional',
        'app.role',
        'app.group_role',
        'app.groups_user',
        'app.message',
        'app.unidade_organica_role',
        'app.user_role',
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
        'app.aluno_estado',
        'app.motivo_estado_aluno',
        'app.alumni_alumni'
    ];


    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $this->AlumniCandidatoAlumni = ClassRegistry::init('AlumniCandidatoAlumni');
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->AlumniCandidatoAlumni);

        parent::tearDown();
    }

    /**
     * testSaveCandidatoAlumni method
     *
     * @return void
     */
    public function testSaveCandidatoAlumni()
    {

        $data = [
            'AlumniCandidatoAlumni' => [
                'apelido'                               => 'Leonardo',
                'nomes'                                 => 'Elisio',
                'genero_id'                             => '1',
                'data_nascimento'                       => '2015-08-04',
                'estado_civil_id'                       => '1',
                'nome_pai'                              => 'Elisio',
                'nome_mae'                              => 'Leonardo',
                'naturalidade'                          => 'kljhkjh',
                'pais_nascimento'                       => '152',
                'provincia_nascimento'                  => '7',
                'cidade_nascimento'                     => '74',
                'unidade_organica_id'                   => '7',
                'curso_id'                              => '136',
                'numero_estudante'                      => '268723687',
                'ano_ingresso_uem'                      => '2342',
                'ano_conclusao'                         => '2423',
                'grau_academico_id'                     => '2',
                'grau_academico_actual'                 => '2',
                'local_trabalho_actual'                 => '2423423',
                'candidato_alumni_area_pesquisa'        => '53ertsdfsafs',
                'pais_morada'                           => '1',
                'provincia_morada'                      => '1',
                'cidade_morada'                         => '1',
                'bairro_morada'                         => '',
                'avenida_rua_morada'                    => '',
                'caixa_postal_morada'                   => '',
                'email'                                 => 'ewrjwelkjlk@kljflksjfkls.cvom',
                'telemovel'                             => '56445645',
                'documento_identificacao_id'            => '1',
                'documento_identificacao_numero'        => '2435235423',
                'documento_identificacao_data_emissao'  => '2015-08-19',
                'documento_identificacao_local_emissao' => '',
                'observacoes'                           => '',
                'nuit'=>'23987492874298'
            ]
        ];
        $resultado = $this->AlumniCandidatoAlumni->saveCandidatoAlumni($data);
        $this->assertTrue($resultado);

    }

}
