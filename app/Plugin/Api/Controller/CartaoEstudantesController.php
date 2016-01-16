<?php

    App::uses('AppController', 'Controller');

    /**
     * CerimoniaGraduacaos Controller
     *
     * @property CerimoniaGraduacao $CerimoniaGraduacao
     * @property PaginatorComponent $Paginator
     */
    class CartaoEstudantesController extends ApiAppController
    {


        public function get_dados_estudante($codigo_aluno, $password)
        {


            $password_v = 'cartao_estudantes' . 'get_dados_estudante' . $codigo_aluno . 'SIG@2013';
            $password_md5 = md5($password_v);
            if ($password != $password_md5) {
                return false;
            }
            $this->loadModel('Aluno');
            $this->Aluno->contain([
                'Entidade' => [
                    'fields' => [
                        'name',
                        'apelido',
                        'data_nascimento',
                        'nomes'
                    ],
                    'Genero'
                ],
                'Curso'    => [
                    'UnidadeOrganica'
                ]
            ]);
            $aluno = $this->Aluno->findByCodigo($codigo_aluno);
            if (empty($aluno)) {
                return 0;
            }
            $unidade_organica = $aluno['Curso']['UnidadeOrganica'];
            $faculdade = $unidade_organica;
            if ($unidade_organica['tipo_unidade_organica_id'] == 2) {
                $unidade_organica_nova = $this->Aluno->Curso->UnidadeOrganica->findById($unidade_organica['parent_id']);
                $faculdade = $unidade_organica_nova['UnidadeOrganica'];
            }
            $dados_cartao = [
                'numero_estudante' => $aluno['Aluno']['codigo'],
                'apelido'          => $aluno['Entidade']['apelido'],
                'nomes'            => $aluno['Entidade']['nomes'],
                'nome_completo'    => $aluno['Entidade']['name'],
                'ano_ingresso'     => $aluno['Aluno']['ano_ingresso'],
                'curso'            => $aluno['Curso']['name'],
                'faculdade'        => $faculdade['name'],
                'codigo_curso'     => $aluno['Curso']['codigo'],
                'codigo_faculdade' => $faculdade['codigo']

            ];
            $this->set('dados_cartao', $dados_cartao);
            $this->set('_serialize', ['dados_cartao']);
        }


        public function get_estudante_for_fotografia($codigo_aluno, $password)
        {


            $password_v = 'estudantes' . 'get_estudante_for_fotografia' . $codigo_aluno . 'SIG@2013';
            $password_md5 = md5($password_v);
            if ($password != $password_md5) {
                throw new NotFoundException();
            }
            $this->loadModel('Aluno');

            $this->Aluno->contain([
                'Entidade' => [
                    'fields' => [
                        'name',
                        'apelido',
                        'data_nascimento',
                        'nomes'
                    ],
                    'Genero'
                ],
                'Curso'    => [
                    'UnidadeOrganica'
                ]
            ]);
            $aluno = $this->Aluno->findByCodigo($codigo_aluno);

            $unidade_organica = $aluno['Curso']['UnidadeOrganica'];
            $faculdade = $unidade_organica;
            if ($unidade_organica['tipo_unidade_organica_id'] == 2) {
                $unidade_organica_nova = $this->Aluno->Curso->UnidadeOrganica->findById($unidade_organica['parent_id']);
                $faculdade = $unidade_organica_nova['UnidadeOrganica'];
            }
            $dados_estudante = [
                'numero_estudante' => $aluno['Aluno']['codigo'],
                'apelido'          => $aluno['Entidade']['apelido'],
                'nomes'            => $aluno['Entidade']['nomes'],
                'nome_completo'    => $aluno['Entidade']['name'],
                'ano_ingresso'     => $aluno['Aluno']['ano_ingresso'],
                'curso'            => $aluno['Curso']['name'],
                'faculdade'        => $faculdade['name'],

            ];

            $this->set('dados_estudante', $dados_estudante);
            $this->set('_serialize', ['dados_estudante']);
        }


    }
