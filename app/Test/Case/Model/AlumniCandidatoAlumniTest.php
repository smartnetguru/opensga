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
                'apelido' => 'Leonardo',
                'nomes' => 'Elisio',
                'genero_id' => '1',
                'data_nascimento' => '2015-08-04',
                'estado_civil_id' => '1',
                'nome_pai' => 'Elisio',
                'nome_mae' => 'Leonardo',
                'naturalidade' => 'kljhkjh',
                'pais_nascimento' => '152',
                'provincia_nascimento' => '7',
                'cidade_nascimento' => '74',
                'unidade_organica_id' => '7',
                'curso_id' => '136',
                'numero_estudante' => '268723687',
                'ano_ingresso_uem' => '2342',
                'ano_conclusao' => '2423',
                'grau_academico_id' => '2',
                'grau_academico_actual' => '2',
                'local_trabalho_actual' => '2423423',
                'candidato_alumni_area_pesquisa' => '53ertsdfsafs',
                'pais_morada' => '1',
                'provincia_morada' => '1',
                'cidade_morada' => '1',
                'bairro_morada' => '',
                'avenida_rua_morada' => '',
                'caixa_postal_morada' => '',
                'email' => 'ewrjwelkjlk@kljflksjfkls.cvom',
                'telemovel' => '56445645',
                'documento_identificacao_id' => '1',
                'documento_identificacao_numero' => '2435235423',
                'documento_identificacao_data_emissao' => '2015-08-19',
                'documento_identificacao_local_emissao' => '',
                'observacoes' => '',
                'nuit' => '23987492874298',
            ],
        ];
        $resultado = $this->AlumniCandidatoAlumni->saveCandidatoAlumni($data);
        $this->assertTrue($resultado);

    }

}
