<?php

    App::uses('CendAppController', 'Cend.Controller');

    class MatriculasController extends CendAppController
    {

        public $uses = ['Matricula'];


        /**
         * Overview das Matriculas
         * Mostra o grafico de Novos ingressos por Curso
         *
         * @todo So se anula a matricula do presente ano Lectivo :)
         */
        function index()
        {

            $this->Matricula->Aluno->Curso->contain([
                'CursosTurno',
            ]);
            $cursos = $this->Matricula->Aluno->Curso->find('list', ['conditions' => ['CursosTurno.turno_id' => 3]]);
            $conditions = [];
            $conditions['Curso.id'] = array_keys($cursos);
            $this->paginate = [
                'conditions' => $conditions,
                'contain'    => [
                    'Aluno' => [
                        'Entidade',
                    ],
                    'Curso',
                    'EstadoMatricula',
                    'AnoLectivo',
                    'TipoMatricula',
                ],
                'order'      => 'Matricula.data DESC',
                'limit'      => '10',
            ];

            $matriculas = $this->paginate('Matricula');

            $this->set(compact('matriculas'));
        }

        public function print_boletim_matricula($alunoId)
        {
            $this->Matricula->Aluno->contain([
                'Entidade'        => [
                    'Genero',
                    'PaisNascimento',
                    'EstadoCivil',
                    'EntidadeIdentificacao' => [
                        'DocumentoIdentificacao',
                    ],
                ],
                'Curso'           => [
                    'UnidadeOrganica',
                ],
                'AlunoNivelMedio' => [
                    'EscolaNivelMedio' => [
                        'Provincia',
                    ],
                ],
            ]);
            $aluno = $this->Matricula->Aluno->findById($alunoId);

            $faculdade = $this->Matricula->Aluno->Curso->UnidadeOrganica->findById($aluno['Curso']['unidade_organica_id']);
            if ($faculdade['UnidadeOrganica']['tipo_unidade_organica_id'] != 1) {
                $faculdade = $this->Matricula->Aluno->Curso->UnidadeOrganica->findById($faculdade['UnidadeOrganica']['parent_id']);
            }

            $contactos = $this->Matricula->Aluno->processaContacto($alunoId);
            $this->set(compact('aluno', 'faculdade', 'contactos'));
        }

        public function print_comprovativo_matricula($alunoId)
        {
            $this->Matricula->Aluno->contain([
                'Entidade' => ['User'],
                'Curso',
            ]);

            $aluno = $this->Matricula->Aluno->findById($alunoId);
            $this->set(compact('aluno', 'faculdade'));
        }

        public function print_comprovativo_renovacao_matricula($matriculaId)
        {
            $this->Matricula->contain([
                'Aluno' => [
                    'Entidade',
                    'User',
                ],
                'AnoLectivo',
                'Curso',
                'User'  => [
                    'Entidade',
                ],
            ]);
            $aluno = $this->Matricula->findById($matriculaId);

            $this->set(compact('aluno'));
        }
    }