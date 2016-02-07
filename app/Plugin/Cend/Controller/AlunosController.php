<?php

    App::uses('CendAppController', 'Cend.Controller');

    class AlunosController extends CendAppController
    {

        public $uses = ['Aluno'];

        public function busca_candidato()
        {

            if ($this->request->is('post')) {
                $this->loadModel('Candidatura');
                $candidato = $this->Candidatura->findByNumeroEstudanteAndEstadoCandidaturaId($this->request->data['Candidatura']['numero_estudante'],
                    2);
                if (!empty($candidato)) {
                    $this->redirect(['action' => 'matricular_candidato', $candidato['Candidatura']['id']]);
                } else {
                    $this->Session->setFlash(__('Candidato Invalido'));
                }
            }
        }


        public function index()
        {
            $this->helpers[] = 'Cache';
            $this->cacheAction = '10 minutes';

            $this->Aluno->Curso->contain([
                'CursosTurno',
            ]);
            $cursos = $this->Aluno->Curso->find('list', ['conditions' => ['CursosTurno.turno_id' => 3]]);
            $conditions = [];
            $conditions['Curso.id'] = array_keys($cursos);
            if ($this->request->is('post')) {
                if ($this->request->data['Aluno']['codigo'] != '') {
                    $conditions['Aluno.codigo'] = $this->request->data['Aluno']['codigo'];
                } else {
                    $conditions['Entidade.nomes LIKE'] = '%' . $this->request->data['Aluno']['nomes'] . '%';
                    $conditions['Entidade.apelido LIKE'] = '%' . $this->request->data['Aluno']['apelido'] . '%';
                }
            }
            $this->paginate = [
                'conditions' => $conditions,
                'contain'    => ['Entidade', 'Curso', 'EstadoAluno'],
            ];
            $alunos = $this->paginate('Aluno');

            if (count($alunos) == 1) {
                $this->redirect(['action' => 'perfil_estudante', $alunos[0]['Aluno']['id']]);
            }

            $this->set('alunos', $alunos);
        }

        public function matricular_candidato($candidatoId)
        {


            $this->Aluno->Candidatura->id = $candidatoId;
            if (!$this->Aluno->Candidatura->exists()) {
                throw new NotFoundException('Candidato Nao encontrado');
            }
            $candidato = $this->Aluno->Candidatura->findByIdAndEstadoCandidaturaId($candidatoId, 2);
            if (!$candidato) {
                $this->Session->setFlash(__('Este candidato nao tem permissao para matricular ou ja esta matriculado'));
                $this->redirect(['action' => 'index']);
            }
            $curso = $this->Aluno->Curso->CursosTurno->findByCursoIdAndTurnoId($candidato['Candidatura']['curso_id'],
                3);
            if (empty($curso)) {
                throw new NotFoundException('Candidato Invalido');
            }
            $alunoExiste = $this->Aluno->findByCodigo($candidato['Candidatura']['numero_estudante']);
            if (!empty($alunoExiste)) {
                $this->Session->setFlash(__('Este candidato já está matriculado'));
                $this->redirect(['action' => 'perfil_estudante', $alunoExiste['Aluno']['id']]);
            }

            if ($this->request->is('post')) {
                $this->request->data['Entidade']['name'] = $this->request->data['Entidade']['nomes'] . ' ' . $this->request->data['Entidade']['apelido'];
                $this->request->data['Dados']['user_id'] = $this->Session->read('Auth.User.id');
                $this->request->data['Dados']['numero_candidato'] = $candidatoId;
                $this->request->data['Aluno']['estado_aluno_id'] = 14;
                if ($this->Aluno->matriculaNovoIngresso($this->request->data)) {
                    $this->Session->setFlash("Aluno Registrado com Sucesso. Os dados foram submetidos ao Registo Academico Central para Validacao",
                        'default', ['class' => 'alert alert-success']);
                    $this->redirect(['controller' => 'alunos', 'action' => 'perfil_estudante', $this->Aluno->id]);
                } else {
                    $this->Session->setFlash('Problemas ao registrar os dados do Aluno', 'default',
                        ['class' => 'alert alert-danger']);
                }
            }

            $cursos = $this->Aluno->Curso->find('list');
            $paises = $this->Aluno->Entidade->PaisNascimento->find('list');
            $escolaNivelMedios = $this->Aluno->AlunoNivelMedio->EscolaNivelMedio->find('list');
            $provincias = $this->Aluno->Entidade->ProvinciaNascimento->find('list');
            $cidades = $this->Aluno->AlunoNivelMedio->EscolaNivelMedio->Distrito->find('list');
            $proveniencianomes = $this->Aluno->AlunoNivelMedio->EscolaNivelMedio->Provincia->find('list');
            $documento_identificacaos = $this->Aluno->Entidade->DocumentoIdentificacao->find('list');
            $areatrabalhos = $this->Aluno->AreaTrabalho->find('list');
            $generos = $this->Aluno->Entidade->Genero->find('list');
            $turnos = $this->Aluno->Matricula->Turno->find('list');
            $estado_civil = $this->Aluno->Entidade->EstadoCivil->find('list');
            $cidadeNascimentos = $this->Aluno->Entidade->CidadeNascimento->find('list', [
                    'conditions' => [
                        'provincia_id' => $candidato['Candidatura']['provincia_nascimento'],
                    ],
                ]
            );
            $grauParentescos = $this->Aluno->GrauParentesco->find('list');
            $this->loadModel('SimNaoResposta');
            $simNaoRespostas = $this->SimNaoResposta->find('list');

            $naturalidade = '';
            $necessidadeEspeciais = $this->Aluno->Entidade->EntidadeNecessidade->NecessidadeEspecial->find('list');
            $this->set(compact('candidato', 'cursos', 'paises', 'provincias', 'documento_identificacaos',
                'areatrabalhos',
                'generos', 'cidadeNascimentos', 'proveniencianomes', 'cidades', 'turnos', 'escolaNivelMedios',
                'estado_civil', 'naturalidade', 'grauParentescos', 'simNaoRespostas', 'necessidadeEspeciais'));

            $this->set('siga_page_title', 'Matriculas');
            $this->set('siga_page_overview', 'Formulario de Matricula de Novos Ingressos');

        }

        public function beforeFilter()
        {
            parent::beforeFilter();
            $this->Security->unlockedActions = [
                'matricular_candidato',
            ];
        }

        /**
         * @Todo Optimizar esta pagina
         * @Todo Colocar os links para as opcoes do estudante
         * @Todo remover o find de Matreiculas, Ja faz parte do Get Aluno For Perfil
         *
         * @param type $id
         */
        function perfil_estudante($alunoId = null)
        {
            $aluno = $this->Aluno->getAlunoForPerfil($alunoId);
            if (!$aluno) {
                throw new NotFoundException('Este aluno não existe no Sistema');
            }
            $curso = $this->Aluno->Curso->CursosTurno->findByCursoIdAndTurnoId($aluno['Aluno']['curso_id'], 3);
            if (empty($curso)) {
                throw new NotFoundException('Candidato Invalido');
            }
            $matriculas = $this->Aluno->Matricula->getAllMatriculasByAluno($alunoId);

            $this->Aluno->Inscricao->contain([
                    'Turma'     => [
                        'fields'     => [
                            'id',
                            'disciplina_id',
                            'ano_curricular',
                            'semestre_curricular',
                        ],
                        'Disciplina' => [
                            'fields' => ['id', 'name'],
                        ],
                    ],
                    'Matricula' => [
                        'fields'     => ['id', 'ano_lectivo_id'],
                        'AnoLectivo' => [
                            'fields' => ['id', 'ano'],
                        ],
                    ],
                ]
            );
            $inscricoes_activas = $this->Aluno->Inscricao->find('all',
                ['conditions' => ['Inscricao.aluno_id' => $alunoId, 'Inscricao.estado_inscricao_id' => 1]]);

            $this->Aluno->Inscricao->contain([
                    'Turma'     => [
                        'fields'     => [
                            'id',
                            'disciplina_id',
                            'ano_curricular',
                            'semestre_curricular',
                        ],
                        'Disciplina' => [
                            'fields' => ['id', 'name'],
                        ],
                    ],
                    'Matricula' => [
                        'fields'     => ['id', 'ano_lectivo_id'],
                        'AnoLectivo' => [
                            'fields' => ['id', 'ano'],
                        ],
                    ],
                ]
            );
            $todas_inscricoes = $this->Aluno->Inscricao->find('all', [
                'conditions' => ['Inscricao.aluno_id' => $alunoId],
                'order'      => [
                    'Turma.ano_curricular',
                    'Turma.semestre_curricular',
                ],
            ]);

            $this->Aluno->Inscricao->contain([
                    'Turma'     => [
                        'fields'     => [
                            'id',
                            'disciplina_id',
                            'ano_curricular',
                            'semestre_curricular',
                        ],
                        'Disciplina' => [
                            'fields' => ['id', 'name'],
                        ],
                    ],
                    'Matricula' => [
                        'fields'     => ['id', 'ano_lectivo_id'],
                        'AnoLectivo' => [
                            'fields' => ['id', 'ano'],
                        ],
                    ],
                ]
            );
            $cadeiras_aprovadas = $this->Aluno->Inscricao->find('all',
                ['conditions' => ['Inscricao.aluno_id' => $alunoId]]);

            if ($this->Aluno->isMatriculado($alunoId, Configure::read('OpenSGA.ano_lectivo_id'))) {
                $this->set('is_matriculado', 1);
            } else {
                $this->set('is_matriculado', 0);
            }

            $is_bolseiro = $this->Aluno->isBolseiro($alunoId) ? 1 : 0;
            $is_regular = $this->Aluno->isRegular($alunoId);

            if (count($is_regular) == 1 && $is_regular[0]['regular'] == true) {
                if ($is_regular[0]['estado'] == 1) {
                    $classe_estado = "alert alert-info";
                } else {
                    $classe_estado = "alert alert-success";
                }
            } else {
                $classe_estado = "alert alert-danger";
            }
            //Requisicoes

            $requisicoes = $this->Aluno->RequisicoesPedido->getAllRequisicoesPedidoByEstudante($alunoId);


            $this->Aluno->FinanceiroPagamento->contain([
                'FinanceiroTipoPagamento',
            ]);
            $pagamentos = $this->Aluno->FinanceiroPagamento->find('all',
                ['conditions' => ['FinanceiroPagamento.aluno_id' => $alunoId]]);
            $is_bolseiro = $this->Aluno->isBolseiro($alunoId, $this->Session->read('SGAConfig.ano_lectivo_id'));

            $this->set(compact('aluno', 'inscricoes_activas', 'todas_inscricoes', 'cadeiras_aprovadas', 'pagamentos',
                'is_bolseiro', 'is_regular', 'classe_estado', 'requisicoes', 'matriculas'));
        }

    }