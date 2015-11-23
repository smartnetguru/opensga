<?php

    /**
     * OpenSGA - Sistema de Gestão Académica
     *   Copyright (C) 2010-2011  INFOmoz (Informática-Moçambique)
     *
     * Este programa é um software livre: Você pode redistribuir e/ou modificar
     * todo ou parte deste programa, desde que siga os termos da licença por nele
     * estabelecidos. Grande parte do código deste programa está sob a licença
     * GNU Affero General Public License publicada pela Free Software Foundation.
     * A versão original desta licença está disponível na pasta raiz deste software.
     *
     * Este software é distribuido sob a perspectiva de que possa ser útil para
     * satisfazer as necessidades dos seus utilizadores, mas SEM NENHUMA GARANTIA. Veja
     * os termos da licença GNU Affero General Public License para mais detalhes
     *
     * As redistribuições deste software, mesmo quando o código-fonte for modificado significativamente,
     * devem manter está informação legal, assim como a licença original do software.
     *
     * @copyright       Copyright 2010-2011, INFOmoz (Informática-Moçambique) (http://infomoz.net)
     * * @link          http://opensga.com OpenSGA  - Sistema de Gestão Académica
     * @author          Elisio Leonardo (elisio.leonardo@gmail.com)
     * @package         opensga
     * @subpackage      opensga.core.controller
     * @since           OpenSGA v 0.10.0.0
     *
     */
    /**
     * Bibliotecas incluidas
     */

    /**
     * Modelo Turma
     *
     * Modelo para a manipulação da turma
     * Executa todas as conexões á base de dados que envolvam directamente a tabela turmas.
     * Todas as funções para a manipulação da tabela turmas devem ser definidas aqui
     *
     *
     * @package       opensga
     * @subpackage    opensga.core.modelo
     * @link          http://book.cakephp.org/view/1000/Models
     * @Todo          Colocar o link para a documentação aqui
     *
     * @property Inscricao $Inscricao
     * @property AnoLectivo $AnoLectivo
     * @property SemestreLectivo $SemestreLectivo
     * @property Curso $Curso
     * @property PlanoEstudo $PlanoEstudo
     * @property EstadoTurma $EstadoTurma
     * @property Avaliacao $Avaliacao
     * @property TurmaTipoAvaliacao $TurmaTipoAvaliacao
     * @property DocenteTurma $DocenteTurma
     *
     */
    class Turma extends AppModel
    {

        //The Associations below have been created with all possible keys, those that are not needed can be removed

        public $belongsTo = [
            'AnoLectivo'      => [
                'className'  => 'AnoLectivo',
                'foreignKey' => 'ano_lectivo_id',
                'conditions' => '',
                'fields'     => '',
                'order'      => ''
            ],
            'SemestreLectivo' => [
                'className'  => 'SemestreLectivo',
                'foreignKey' => 'semestre_lectivo_id',
                'conditions' => '',
                'fields'     => '',
                'order'      => ''
            ],
            'Curso'           => [
                'className'  => 'Curso',
                'foreignKey' => 'curso_id',
                'conditions' => '',
                'fields'     => '',
                'order'      => ''
            ],
            'PlanoEstudo'     => [
                'className'  => 'PlanoEstudo',
                'foreignKey' => 'plano_estudo_id',
                'conditions' => '',
                'fields'     => '',
                'order'      => ''
            ],
            'Turno'           => [
                'className'  => 'Turno',
                'foreignKey' => 'turno_id',
                'conditions' => '',
                'fields'     => '',
                'order'      => ''
            ],
            'Disciplina'      => [
                'className'  => 'Disciplina',
                'foreignKey' => 'disciplina_id',
                'conditions' => '',
                'fields'     => '',
                'order'      => ''
            ],
            'AnoLectivo'      => [
                'className'  => 'AnoLectivo',
                'foreignKey' => 'ano_lectivo_id',
                'conditions' => '',
                'fields'     => '',
                'order'      => ''
            ],
            'PlanoEstudo'     => [
                'className'  => 'PlanoEstudo',
                'foreignKey' => 'plano_estudo_id',
                'conditions' => '',
                'fields'     => '',
                'order'      => ''
            ],
            'EstadoTurma'     => [
                'className'  => 'EstadoTurma',
                'foreignKey' => 'estado_turma_id',
                'conditions' => '',
                'fields'     => '',
                'order'      => ''
            ]
        ];
        public $virtualFields = [

        ];
        public $hasMany = [
            'Inscricao'          => [
                'className'    => 'Inscricao',
                'foreignKey'   => 'turma_id',
                'dependent'    => false,
                'conditions'   => '',
                'fields'       => '',
                'order'        => '',
                'limit'        => '',
                'offset'       => '',
                'exclusive'    => '',
                'finderQuery'  => '',
                'counterQuery' => ''
            ],
            'Avaliacao'          => [
                'className'    => 'Avaliacao',
                'foreignKey'   => 'turma_id',
                'dependent'    => false,
                'conditions'   => '',
                'fields'       => '',
                'order'        => '',
                'limit'        => '',
                'offset'       => '',
                'exclusive'    => '',
                'finderQuery'  => '',
                'counterQuery' => ''
            ],
            'TurmaTipoAvaliacao' => [
                'className'    => 'TurmaTipoAvaliacao',
                'foreignKey'   => 'turma_id',
                'dependent'    => false,
                'conditions'   => '',
                'fields'       => '',
                'order'        => '',
                'limit'        => '',
                'offset'       => '',
                'exclusive'    => '',
                'finderQuery'  => '',
                'counterQuery' => ''
            ],
            'DocenteTurma'       => [
                'className'    => 'DocenteTurma',
                'foreignKey'   => 'turma_id',
                'dependent'    => false,
                'conditions'   => '',
                'fields'       => '',
                'order'        => '',
                'limit'        => '',
                'offset'       => '',
                'exclusive'    => '',
                'finderQuery'  => '',
                'counterQuery' => ''
            ]
        ];

        public $validate = [
            'curso_id'            => [
                'cursoRule-3' => [
                    'rule'     => 'notBlank',
                    'required' => 'create',
                    'message'  => 'O curso não pode estar vazio'
                ]
            ],
            'ano_lectivo_id'      => [
                'anoLectivoRule-3' => [
                    'rule'     => 'notBlank',
                    'required' => 'create',
                    'message'  => 'O ano lectivo não pode estar vazio'
                ]
            ],
            'plano_estudo_id'     => [
                'planoEstudoRule-3' => [
                    'rule'     => 'notBlank',
                    'required' => 'create',
                    'message'  => 'O plano de estudos não pode estar vazio'
                ]
            ],
            'disciplina_id'       => [
                'disciplinaRule-3' => [
                    'rule'     => 'notBlank',
                    'required' => 'create',
                    'message'  => 'A disciplina não pode estar vazia'
                ]
            ],
            'ano_curricular'      => [
                'anoCurricularRule-3' => [
                    'rule'     => 'notBlank',
                    'required' => 'create',
                    'message'  => 'O ano curricular não pode estar vazio'
                ]
            ],
            'semestre_curricular' => [
                'semestreCurricularRule-3' => [
                    'rule'     => 'notBlank',
                    'required' => 'create',
                    'message'  => 'O semestre curricular não pode estar vazio'
                ]
            ],
            'semestre_lectivo_id' => [
                'semestreLectivoRule-3' => [
                    'rule'     => 'notBlank',
                    'required' => 'create',
                    'message'  => 'O Semestre Lectivo não pode estar vazio'
                ]
            ]

        ];


        /**
         * Grava os dados da Avaliacao a Criar
         * Controla o total de Pesos das Avaliacoes da Turma
         * @param $data
         */
        public function criaAvaliacao($data){

            $turmaId = $data['TurmaTipoAvaliacao']['turma_id'];
            $totalPesos = $this->TurmaTipoAvaliacao->getTotalPesos($turmaId);
            if($totalPesos+$data['TurmaTipoAvaliacao']['peso']>100){
                return [false,'ERRO: O Peso total das Avaliacoes sera Superior a 100%!'];
            }
            $this->TurmaTipoAvaliacao->create();
            if($this->TurmaTipoAvaliacao->save($data)){
                return [true];
            } else{
                $erro = implode(',',$this->TurmaTipoAvaliacao->validationErrors);
                debug($this->TurmaTipoAvaliacao->validationErrors);
                debug($erro);
                return [false,'ERRO ao gravar: '.$erro];

            }

            debug($data);
        }
        public function getTurmasSemDocente($anoLectivoId,$semestreLectivoId,$unidadeOrganicaId = null,$type='all')
        {



            $options['joins'] = [
                ['table' => 'docente_turmas',
                      'alias' => 'DocenteTurma',
                      'type' => 'left',
                      'conditions' => [
                          'Turma.id = DocenteTurma.turma_id'
                      ]
                ],
                ['table' => 'cursos',
                      'alias' => 'Curso',
                      'type' => 'left',
                      'conditions' => [
                          'Curso.id = Turma.curso_id'
                      ]
                ],

            ];

            $options['fields']='*';
            $options['conditions'] = [
                'DocenteTurma.docente_id' => null,
                'Turma.ano_lectivo_id'=>$anoLectivoId,
            'Turma.semestre_lectivo_id'=>$semestreLectivoId
            ];
            if(isset($unidadeOrganicaId)){
                $options['conditions']['Curso.unidade_organica_id'] = $unidadeOrganicaId;
            }

            $options['order']=['Curso.name','Disciplina.name'];



            $turmas = $this->find($type, $options);
            return $turmas;
        }
        /**
         * @param $data
         *
         * @return array
         *
         * @todo provavelmente calcular totais aqui ou no Shell
         */
        public function actualizaNotas($data)
        {



            foreach ($data['Inscricao'] as $k => $inscricao) {
                if ($inscricao['gravar'] == 1) {
                    $arrayInscricao['Inscricao'] = $inscricao;
                    if(!$this->Inscricao->actualizaDadosInscricao($arrayInscricao)){
                        return [false,$arrayInscricao];
                    }
                }
            }
            $message = [
                'Option1' => 'Message',
                //'Type'=>'cake',
                'Command' => 'Turma',
                'Action'  => 'processaTurmaActualizada',
                'turmaId'  => $data['Turma']['turma_id']
            ];
            CakeRabbit::publish($message);
            return true;

        }

        /**
         * Adiciona um Docente a Uma turma.
         *
         * @todo falta validar
         * @todo Uma turma so pode ter um regente
         *
         * @todo se calhar limitar o numero de assistentes
         *
         * @param type $data
         *
         * @return type
         */
        public function adicionaDocente($data)
        {
            $turma = $this->findById($data['DocenteTurma']['turma_id']);
            $docenteDisciplinaExiste = $this->DocenteTurma->Docente->DocenteDisciplina->find('first', [
                'conditions' => [
                    'docente_id'        => $data['DocenteTurma']['docente_id'],
                    'disciplina_id'     => $turma['Turma']['disciplina_id'],
                    'estado_objecto_id' => 1
                ]
            ]);
            if (!$docenteDisciplinaExiste) {
                $arrayDocenteDisciplina = [
                    'DocenteDisciplina' => [
                        'docente_id'        => $data['DocenteTurma']['docente_id'],
                        'disciplina_id'     => $turma['Turma']['disciplina_id'],
                        'estado_objecto_id' => 1,
                        'data_inicio'       => date('Y-m-d')
                    ]
                ];
                $this->DocenteTurma->Docente->DocenteDisciplina->create();
                if (!$this->DocenteTurma->Docente->DocenteDisciplina->save($arrayDocenteDisciplina)) {
                    debug($arrayDocenteDisciplina);

                    return false;
                }
            }

            if ($this->DocenteTurma->save($data)) {
                return true;
            } else {
                debug($data);
                debug($this->DocenteTurma->validationErrors);

                return false;
            }
        }

        /**
         * Cria todas as turmas referentes a aquele ano lectivo e aquele semestre
         *
         * @Todo Testar essa funcao
         * @Todo Para facilitar vamos considerar so um plano de estudos activo
         * @todo Podemos usar transactions aqui ;)
         */
        function criarTurmas($plano_estudo_id)
        {
            $datasource = $this->getDataSource();
            $datasource->begin();

            $ano_lectivo_id = Configure::read('OpenSGA.ano_lectivo_id');
            $semestre_id = Configure::read('OpenSGA.semestre_lectivo_id');
            $disciplinas = $this->PlanoEstudo->getAllDisciplinasByPlanoestudo($plano_estudo_id);
            //$semestre = $this->SemestreLectivo->findById($semestre_id);
            $turnos = $this->Turno->find('list');
            foreach ($turnos as $turno_id => $turno) {
                foreach ($disciplinas as $disciplina) {

                    $turma = [];
                    $turma['ano_lectivo_id'] = $ano_lectivo_id;
                    $turma['ano_curricular'] = $disciplina['p']['ano'];
                    $turma['semestre_curricular'] = $disciplina['p']['semestre'];
                    $turma['curso_id'] = $disciplina['pe']['curso_id'];
                    $turma['escola_id'] = 1;
                    $turma['plano_estudo_id'] = $plano_estudo_id;
                    $turma['turno_id'] = $turno_id;
                    $turma['disciplina_id'] = $disciplina['d']['id'];
                    $turma['estado_turma_id'] = 1;
                    $turma['semestre_lectivo_id'] = $semestre_id;
                    $nome = $disciplina['d']['name'] . " - " . $disciplina['pe']['name'];
                    $turma['name'] = $nome;

                    $turmas = ['Turma' => $turma];

                    //Primeiro precisamos ver se a turma nao esta criada ainda
                    $turma_existe = $this->find('first', [
                        'recursive'  => -1,
                        'conditions' => [
                            'ano_lectivo_id'      => $ano_lectivo_id,
                            'plano_estudo_id'     => $plano_estudo_id,
                            'disciplina_id'       => $disciplina['d']['id'],
                            'ano_curricular'      => $turma['ano_curricular'],
                            'semestre_curricular' => $turma['semestre_curricular'],
                            'turno_id'            => $turma['turno_id'],
                            'semestre_lectivo_id' => $semestre_id
                        ]
                    ]);

                    if (!$turma_existe) {
                        $this->create();
                        $this->save($turmas);
                    }
                }
            }
            $datasource->commit();
        }

        /**
         * Fecha todas as turmas e inscricoes de um dado semestre.
         */
        public function fecharTodasTurmas($semestre = null)
        {
            if ($semestre == null) {
                $semestre = Configure::read('OpenSGA.semestre_lectivo_id');
            }
            $dataSource = $this->getDataSource();
            $dataSource->begin();

            $this->contain('Inscricao');
            $turmas = $this->find('all',
                [
                    'conditions' => ['Turma.semestre_lectivo_id' => $semestre, 'Turma.estado_turma_id' => 1],
                    'limit'      => 100
                ]);


            foreach ($turmas as $turma) {
                $inscricaos = $turma['Inscricao'];
                foreach ($inscricaos as $inscricao) {
                    if ($inscricao['estadoinscricao_id'] == 1) {
                        $this->Inscricao->id = $inscricao['id'];
                        $this->Inscricao->set('estadoinscricao_id', 6);
                        $this->Inscricao->save();
                    }
                }

                //Fechamos a turma tambem
                $this->id = $turma['Turma']['id'];
                $this->set('estado_turma_id', 3);
                $this->save();
            }

            //return $dataSource->rollback();
            return $dataSource->commit();
        }

        /**
         * Fecha uma Turma. Depois envia uma notificacao para Calcular os aprovados e notificar os usuarios
         *
         * @param $turmaId
         *
         * @todo No processamento calcular totais e medias
         */
        public function fecharTurma($turmaId)
        {
            $this->id = $turmaId;
            $this->set('estado_turma_id', 2);
            $this->set('data_fecho', date('Y-m-d H:i:s'));
            $this->set('user_fecho', CakeSession::read('Auth.User.id'));
            if ($this->save()) {
                $message = [
                    'Option1' => 'Message',
                    //'Type'=>'cake',
                    'Command' => 'Turma',
                    'Action'  => 'processarTurmaFechada',
                    'turmaId' => $turmaId
                ];
                CakeRabbit::publish($message);

                return true;
            } else {
                return false;
            }


        }

        public function geraPautaExcel($turmaId)
        {
            $this->id = $turmaId;
            $turma = $this->read();
            $todasTurmas = $this->find('list', [
                'conditions' => [
                    'Turma.curso_id'       => $turma['Turma']['curso_id'],
                    'Turma.disciplina_id'  => $turma['Turma']['disciplina_id'],
                    'Turma.ano_lectivo_id' => $turma['Turma']['ano_lectivo_id']
                ]
            ]);
            $todasTurmasIds = array_keys($todasTurmas);

            $this->Inscricao->contain([
                'EstadoInscricao',
                'Matricula' => [
                    'Aluno' => [
                        'Entidade' => [
                        ]
                    ]
                ],
                'Turma'     => [
                    'Curso' => [
                        'fields' => ['name']
                    ],
                    'Disciplina',
                    'Turno',
                    'AnoLectivo'
                ]
            ]);
            $inscricaos2 = $this->Inscricao->find('all',
                ['conditions' => ['turma_id' => $todasTurmasIds, 'Inscricao.estado_inscricao_id' => 1]]);
            $inscricaos = Hash::sort($inscricaos2, '{n}.Matricula.Aluno.Entidade.apelido', 'asc');
            $faculdade = $this->Curso->getFaculdadeByCursoId($inscricaos[0] ['Turma']['curso_id']);

            App::import('Vendor', 'PHPExcel', ['file' => 'PHPExcel.php']);
            if (!class_exists('PHPExcel')) {
                throw new CakeException('Vendor class PHPExcel not found!');
            }

            $xls = PHPExcel_IOFactory::load(APP . 'Reports' . DS . 'Turmas' . DS . 'faculdade_print_pauta.xlsx');

            $xls->setActiveSheetIndexByName('avaliacoes');
            $xls->getActiveSheet()->setCellValue('A2', $faculdade['UnidadeOrganica']['name']);
            $xls->getActiveSheet()->setCellValue('A3', $inscricaos[0]['Turma']['Curso']['name']);
            $xls->getActiveSheet()->setCellValue('A4', $inscricaos[0]['Turma']['Disciplina']['name']);
            $xls->getActiveSheet()->setCellValue('A5',
                "Ano lectivo: {$inscricaos[0]['Turma']['AnoLectivo']['ano']}. Semestre: {$inscricaos[0]['Turma']['semestre_curricular']}");


            $linha_actual = 9;
            $i = 1;
            $xls->getActiveSheet()->getColumnDimension('B')->setVisible(false);
            foreach ($inscricaos as $inscricao) {

                $xls->getActiveSheet()->setCellValue('A' . $linha_actual, $i);

                $xls->getActiveSheet()->setCellValue('C' . $linha_actual, $inscricao['Matricula']['Aluno']['codigo']);
                $xls->getActiveSheet()->setCellValue('D' . $linha_actual,
                    $inscricao['Matricula']['Aluno']['Entidade']['apelido']);
                $xls->getActiveSheet()->setCellValue('E' . $linha_actual,
                    $inscricao['Matricula']['Aluno']['Entidade']['name']);
                $linha_actual++;
                $i++;
            }


            $xls->setActiveSheetIndexByName("pauta");
            $linha_actual = 9;
            $i = 1;
            $xls->getActiveSheet()->getColumnDimension('B')->setVisible(false);
            foreach ($inscricaos as $inscricao) {

                $xls->getActiveSheet()->setCellValue('A' . $linha_actual, $i);

                $xls->getActiveSheet()->setCellValue('C' . $linha_actual, $inscricao['Matricula']['Aluno']['codigo']);
                $xls->getActiveSheet()->setCellValue('D' . $linha_actual,
                    $inscricao['Matricula']['Aluno']['Entidade']['apelido']);
                $xls->getActiveSheet()->setCellValue('E' . $linha_actual,
                    $inscricao['Matricula']['Aluno']['Entidade']['name']);
                $linha_actual++;
                $i++;
            }
            // $this->PhpExcel->addImage(WWW_ROOT . 'img' . DS . 'logo_login_' . Configure::read('OpenSGA.instituicao.sigla') . '.png', 'A2', 10, 108, 115); //Logotipo


            //$this->PhpExcel->addWorksheetMeta($this->Session->read('Auth.User.name'), 'Lista de Estudantes');
//$xls->getActiveSheet()->setShowGridlines(false);


            return $xls;

        }

        /**
         * Retorna todos os assistentes de uma turma
         *
         * @param type $turma_id
         *
         * @return type
         */
        public function getAllAssistentes($turmaId)
        {
            $this->DocenteTurma->contain([
                'Docente' => [
                    'Entidade'
                ]
            ]);

            return $this->DocenteTurma->find('all',
                [
                    'conditions' => [
                        'turma_id'                => $turmaId,
                        'estado_docente_turma_id' => 1,
                        'tipo_docente_turma_id'   => 2
                    ]
                ]);
        }

        /**
         * Esta função retorna todas as turmas do plano curricular do aluno
         *
         * A função filtra as turmas existentes no sistema de acordo com as condições da
         * matricula do aluno.
         * Retorna um array contendo o ID da turma e o nome da disciplina correspondente a turma
         *
         * @param int $aluno_id o ID do aluno em questão
         *
         * @return array Um array contendo todas as turmas do plano curricular do aluno
         * @access public
         * @link   http://book.cakephp.org/view/1031/Saving-Your-Data
         * @Todo   Colocar o link para a documentação aqui
         * @Todo   Filtrar para apenas mostrar as turmas em que o aluno pode se inscrever
         */
        function getAllByAlunoForInscricao($alunoId, $anoLectivoId = null)
        {

            if ($anoLectivoId == null) {
                $anoLectivo = $this->AnoLectivo->findByAno(Configure::read('OpenSGA.ano_lectivo'));
                $anoLectivoId = $anoLectivo['AnoLectivo']['id'];
            }

            $matricula = $this->Inscricao->Matricula->findByAlunoIdAndAnoLectivoId($alunoId, $anoLectivoId);

            //Se nao renovou matricula naquele ano, nao aparece nenhuma cadeira para se inscrever
            if (empty($matricula)) {
                return [];
            }

            $conditions = [
                'Turma.plano_estudo_id' => $matricula['Matricula']['plano_estudo_id'],
                'Turma.estado_turma_id' => 1,
                'Turma.ano_lectivo_id'  => $anoLectivoId
            ];

            $this->contain([
                'Disciplina',
                'PlanoEstudo'
            ]);

            $turmas = $this->find('all', [
                'conditions' => $conditions,
                'fields'     => [
                    'Turma.id',
                    'Disciplina.name',
                    'Disciplina.id',
                    'Turma.ano_curricular',
                    'Turma.semestre_curricular',
                    'PlanoEstudo.name'
                ],
                'order'      => ['Turma.ano_curricular', 'Turma.semestre_curricular']
            ]);

            return $turmas;
        }

        function getAllByPlanoEstudoAntigo($aluno_id)
        {
            $matricula = $this->Inscricao->Matricula->findByAlunoId($aluno_id);
            $this->Inscricao->Aluno->recursive = -1;
            //Primeiro vamos pegar todas as disciplinas do plano de estudos

            $todas_disciplinas = $this->PlanoEstudo->getAllDisciplinas($matricula['Matricula']['plano_estudo_id']);

            $conditions = [
                'Turma.plano_estudo_id' => $matricula['Matricula']['plano_estudo_id'],
                'Turma.estado_turma_id' => 1,
                'Turma.ano_lectivo_id'  => Configure::read('OpenSGA.ano_lectivo_id')
            ];

            $this->contain([
                'Disciplina',
                'PlanoEstudo'
            ]);
            $turmas = $this->find('all', [
                'conditions' => $conditions,
                'fields'     => [
                    'Turma.id',
                    'Disciplina.name',
                    'Disciplina.id',
                    'Turma.ano_curricular',
                    'Turma.semestre_curricular',
                    'PlanoEstudo.name'
                ],
                'order'      => ['Turma.ano_curricular', 'Turma.semestre_curricular']
            ]);

            $turmaIds = Hash::extract($turmas, '{n}.Disciplina.id');
            $conditions2 = [
                'Turma.curso_id'          => $matricula['Matricula']['curso_id'],
                'Turma.estado_turma_id'   => 1,
                'Turma.ano_lectivo_id'    => Configure::read('OpenSGA.ano_lectivo_id'),
                'Turma.disciplina_id NOT' => $turmaIds
            ];

            $this->contain([
                'Disciplina',
                'PlanoEstudo'
            ]);
            $turmas2 = $this->find('all', [
                'conditions' => $conditions2,
                'fields'     => [
                    'Turma.id',
                    'Disciplina.name',
                    'Disciplina.id',
                    'Turma.ano_curricular',
                    'Turma.semestre_curricular',
                    'PlanoEstudo.name'
                ],
                'order'      => ['Turma.ano_curricular', 'Turma.semestre_curricular']
            ]);


            return $turmas2;
        }

        public function getAllDisciplinasForInscricao($aluno_id)
        {
            $anoLectivoAno = Configure::read('OpenSGA.ano_lectivo');
            $anoLectivo = $this->AnoLectivo->findByAno($anoLectivoAno);
            //$matricula = $this->Inscricao->Matricula->findByAlunoIdAndAnoLectivoId($aluno_id,
            //  $anoLectivo['AnoLectivo']['id']);
            $aluno = $this->Inscricao->Aluno->findById($aluno_id);

            //Pegamos todos os planos de estudos do aluno
            $this->PlanoEstudo->contain([
                'DisciplinaPlanoEstudo' => [
                    'Disciplina',
                    'order' => [
                        'DisciplinaPlanoEstudo.ano_curricular ASC',
                        'DisciplinaPlanoEstudo.semestre_curricular ASC'
                    ]
                ]
            ]);
            $planoEstudos = $this->PlanoEstudo->find('all', [
                'conditions' => [
                    'PlanoEstudo.curso_id' => $aluno['Aluno']['curso_id']
                ],
                'order'      => 'PlanoEstudo.ano_criacao DESC'

            ]);

            return $planoEstudos;

        }

        // Faz o update do estado da turma para fechada

        function getAllTurmasActivasByPlanoEstudo($plano)
        {
            $this->recursive = 0;
            $turmas = $this->find('all', [
                'conditions' => ['plano_estudo_id' => $plano, 'estado' => 1],
                'fields'     => ['Turma.id', 'Disciplina.name']
            ]);


            return $turmas;
        }

        // Contacta os alunos inscritos numa determinada turma

        public function getAllTurmasByDocente($docenteId, $estadoTurmaId = 1)
        {
            $turmasDocente = $this->DocenteTurma->findAllByDocenteId($docenteId);

            $turmaIds = Hash::extract($turmasDocente, '{n}.DocenteTurma.turma_id');

            $turmas = $this->find('all',
                ['conditions' => ['Turma.id' => $turmaIds, 'Turma.estado_turma_id' => $estadoTurmaId]]);

            return $turmas;
        }

        // Devolve todos os estudante aprovados

        function getAllTurmasInscritas()
        {

        }

        // Devolve todos os estudante reprovados

        function getAlunosAprovados($turma_id)
        {
            $query = "select count(*) from t0013inscricaos ti, t0010turmas tt where ti.t0010turma_id = tt.id and ti.tg0020estadoinscricao_id =2 and ti.t0010turma_id = {$turma_id}";
            $resultado = $this->query($query);

            return $resultado;
        }

        // Devolve a media da turma

        function getAlunosInscritos($turma_id)
        {
            $query = "select count(*) from t0013inscricaos ti, t0010turmas tt where ti.t0010turma_id = tt.id and ti.t0010turma_id = {$turma_id}";
            $resultado = $this->query($query);

            //var_dump($resultado);
            return $resultado;
        }

        // Devolve o nome do docente da turma

        function getAlunosReprovados($turma_id)
        {
            $query = "select count(*) from t0013inscricaos ti, t0010turmas tt where ti.t0010turma_id = tt.id and ti.tg0020estadoinscricao_id =3 and ti.t0010turma_id = {$turma_id}";
            $resultado = $this->query($query);

            return $resultado;
        }

        // Devolve o nome do assistente da turma

        function getAssistente($turma_id)
        {
            $query = "select tf.name from t0010turmas tt, t0013inscricaos ti, funcionarios tf where ti.t0010turma_id = tt.id and tt.funcionario_ass_id = tf.id and ti.t0010turma_id = {$turma_id}";
            //var_dump($query);
            $resultado = $this->query($query);

            return $resultado;
        }

        // Devolve o nome do plano

        function getDocente($turma_id)
        {
            $query = "select tf.name from t0010turmas tt, t0013inscricaos ti, funcionarios tf where ti.t0010turma_id = tt.id and tt.funcionario_id = tf.id and ti.t0010turma_id = {$turma_id}";
            //var_dump($query);
            $resultado = $this->query($query);

            return $resultado;
        }

        function getPlanoEstudo($turma_id)
        {
            $query = "select tp.name from t0010turmas tt, t0005planoestudos tp, t0013inscricaos ti where ti.t0010turma_id = tt.id and  tt.t0005planoestudo_id = tp.id and ti.t0010turma_id = {$turma_id}";
            //var_dump($query);
            $resultado = $this->query($query);

            return $resultado;
        }

        public function getRegente($turmaId)
        {
            $this->DocenteTurma->contain([
                'Docente' => [
                    'Entidade'
                ]
            ]);

            return $this->DocenteTurma->find('first',
                [
                    'conditions' => [
                        'turma_id'                => $turmaId,
                        'estado_docente_turma_id' => 1,
                        'tipo_docente_turma_id'   => 1
                    ]
                ]);
        }

        function getSomaNotaFinal($turma_id)
        {
            $query = "select sum(notafinal) from t0013inscricaos ti, t0010turmas tt where ti.t0010turma_id = tt.id and ti.t0010turma_id = {$turma_id}";
            //var_dump($query);
            $resultado = $this->query($query);

            return $resultado;
        }

        function getTotalAlunosInscritosByTurma($turma_id = null)
        {

        }

        public function getTotalTurmasSemDocente($unidadeOrganicaId)
        {
            $dataSource = $this->getDataSource();
            $query = 'select count(*) as total from turmas as Turma,cursos as Curso where
                  Turma.id not in (select turma_id from docente_turmas where Turma.id = docente_turmas.turma_id)
                  and Turma.curso_id = Curso.id
                  and Curso.unidade_organica_id = ' . $unidadeOrganicaId;
            $turmas = $dataSource->fetchAll($query);

            return $turmas[0][0]['total'];
        }

        function getTurmasByFuncionario($funcionario_id)
        {
            $query = "SELECT tt.id FROM t0010turmas tt, funcionarios tf where (tf.id = tt.funcionario_id or tt.funcionario_ass_id = tf.id) and tf.id  = {$funcionario_id} ";
            $resultado = $this->query($query);

            return $resultado;
        }

        public function hasAvaliacoesAbertas($turma_id)
        {
            $avaliacoes = $this->TurmaTipoAvaliacao->find('all',
                ['conditions' => ['TurmaTipoAvaliacao.turma_id' => $turma_id]]);
            debug($avaliacoes);
        }

        public function isDocente($turmaId, $docenteId)
        {
            $docenteTurma = $this->DocenteTurma->find('first',
                ['conditions' => ['turma_id' => $turmaId, 'docente_id' => $docenteId, 'estado_docente_turma_id' => 1]]);
            if ($docenteTurma) {
                return true;
            }

            return false;
        }

        /**
         * Verifica se uma Turma pode ser fechada.
         * Para uma turma ser fechada deve:
         *  -Ter todas avaliacoes realizadas e publicadas
         *  -Ter todas aulas agendadas leccionadas
         *  -Ter todas as notas de frequencia calculadas e publicadas
         *  -Ter todas as inscricoes num estado nao aberto
         *
         * @param $turmaId
         */
        public function podeSerFechada($turmaId)
        {

            $motivoNaoFecho = [];
            $valorRetorno = true;
            //Pegamos todas as avaliccoes da turma
            $avaliacoes = $this->TurmaTipoAvaliacao->find('count',
                ['conditions' => ['turma_id' => $turmaId, 'estado_turma_avaliacao_id' => 1]]);
            if ($avaliacoes > 0) {
                $motivoNaoFecho['Avaliaces'] = $avaliacoes;
                $valorRetorno = false;
            } else{
                $motivoNaoFecho['Avaliacoes'] = 0;
            }
            $inscricaos = $this->Inscricao->find('count', [
                'conditions' => [
                    'turma_id'            => $turmaId,
                    'estado_inscricao_id' => $this->Inscricao->estadoInscricoesAbertas
                ]
            ]);
            if ($inscricaos > 0) {
                $motivoNaoFecho['Inscricoes'] = $inscricaos;
                $valorRetorno = false;
            } else{
                $motivoNaoFecho['Inscricoes'] = 0;
            }
            if ($valorRetorno == false) {
                return $motivoNaoFecho;
            } else {
                return true;
            }
        }

        public function processaPauta($pautaURL, $turmaId)
        {
            AuditableConfig::$Logger = ClassRegistry::init('Auditable.Logger');
            App::import('Vendor', 'PHPExcel', ['file' => 'PHPExcel.php']);
            if (!class_exists('PHPExcel')) {
                throw new CakeException('Vendor class PHPExcel not found!');
            }

            $xls = PHPExcel_IOFactory::load(Configure::read('OpenSGA.save_path') . DS . $pautaURL);

            $ws = $xls->getSheetByName('avaliacoes');

            //Primeiro vamos ver todos os testes feitos
            $testeExiste = true;
            $mapaTodosTestes = ['F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O'];
            $mapaTestes = [];
            $ordemTeste = 0;
            foreach ($mapaTodosTestes as $k => $v) {
                $verificaTeste = $ws->getCell($v . '6')->getCalculatedValue();

                if ($verificaTeste == 0) {

                } else {
                    $ordemTeste += 1;

                    $turmaTipoAvaliacao = $this->TurmaTipoAvaliacao->find('first',
                        ['conditions' => ['turma_id' => $turmaId, 'ordem' => $ordemTeste]]);
                    if (empty($turmaTipoAvaliacao)) {
                        $arrayNovaAvaliacao = [
                            'TurmaTipoAvaliacao' => [
                                'turma_id'                  => $turmaId,
                                'tipo_avaliacao_id'         => 1,
                                'peso'                      => $verificaTeste * 100,
                                'ordem'                     => $ordemTeste,
                                'estado_turma_avaliacao_id' => 1
                            ]
                        ];
                        $this->TurmaTipoAvaliacao->create();
                        $this->TurmaTipoAvaliacao->save($arrayNovaAvaliacao);
                        $turmaTipoAvaliacao = $this->TurmaTipoAvaliacao->find('first',
                            ['conditions' => ['turma_id' => $turmaId, 'ordem' => $ordemTeste]]);
                    } else {
                        $pesoOriginal = $turmaTipoAvaliacao['TurmaTipoAvaliacao']['peso'];
                        if ($pesoOriginal != $verificaTeste * 100) {
                            $this->TurmaTipoAvaliacao->id = $turmaTipoAvaliacao['TurmaTipoAvaliacao']['id'];
                            $this->TurmaTipoAvaliacao->set('peso', $verificaTeste * 100);
                            $this->TurmaTipoAvaliacao->save();
                        }
                    }
                    $mapaTestes[] = [
                        'letra'                   => $v,
                        'peso'                    => $verificaTeste * 100,
                        'ordem'                   => $ordemTeste,
                        'turma_tipo_avaliacao_id' => $turmaTipoAvaliacao['TurmaTipoAvaliacao']['id'],
                        'tipo_avaliacao_id'       => $turmaTipoAvaliacao['TurmaTipoAvaliacao']['tipo_avaliacao_id'],
                        'data_marcada'            => $turmaTipoAvaliacao['TurmaTipoAvaliacao']['data_marcada'],
                        'data_realizada'          => $turmaTipoAvaliacao['TurmaTipoAvaliacao']['data_realizada']
                    ];
                }
            }

            $linhaActual = 9;
            foreach ($ws->getRowIterator() as $row) {
                if ($ws->getCell('A' . $linhaActual)->getValue() == '') {
                    break;
                }
                $numeroEstudante = $ws->getCell('C' . $linhaActual)->getCalculatedValue();
                $aluno = $this->Inscricao->Aluno->findByCodigo($numeroEstudante);
                if (!empty($aluno)) {
                    foreach ($mapaTestes as $mapaTeste) {
                        $nota = $ws->getCell($mapaTeste['letra'] . $linhaActual)->getCalculatedValue();
                        $avaliacaoExiste = $this->TurmaTipoAvaliacao->Avaliacao->find('first', [
                            'conditions' => [
                                'turma_tipo_avaliacao_id' => $mapaTeste['turma_tipo_avaliacao_id'],
                                'aluno_id'                => $aluno['Aluno']['id'],
                                'estado_avaliacao_id'     => 1
                            ]
                        ]);
                        if (!$avaliacaoExiste) {
                            $arrayNovaAvaliacao = [
                                'Avaliacao' => [
                                    'turma_tipo_avaliacao_id' => $mapaTeste['turma_tipo_avaliacao_id'],
                                    'nota'                    => $nota,
                                    'data_avaliacao'          => $mapaTeste['data_realizada'],
                                    'aluno_id'                => $aluno['Aluno']['id'],
                                    'estado_avaliacao_id'     => 1
                                ]
                            ];
                            $this->TurmaTipoAvaliacao->Avaliacao->create();
                            $this->TurmaTipoAvaliacao->Avaliacao->save($arrayNovaAvaliacao);
                        } else {
                            $this->TurmaTipoAvaliacao->Avaliacao->id = $avaliacaoExiste['Avaliacao']['id'];
                            $this->TurmaTipoAvaliacao->Avaliacao->set('nota', $nota);
                            $this->TurmaTipoAvaliacao->Avaliacao->set('data_avaliacao', $mapaTeste['data_realizada']);
                            $this->TurmaTipoAvaliacao->Avaliacao->save();
                        }
                    }
                    $mediaFrequencia = $ws->getCell('P' . $linhaActual)->getCalculatedValue();
                    $inscricao = $this->Inscricao->findByAlunoIdAndTurmaId($aluno['Aluno']['id'], $turmaId);
                    if (!empty($inscricao)) {
                        $this->Inscricao->id = $inscricao['Inscricao']['id'];
                        $this->Inscricao->set('nota_frequencia', $mediaFrequencia);

                        $notaExameNormal = $xls->getSheetByName('pauta')->getCell('G' . $linhaActual)->getCalculatedValue();
                        if ($notaExameNormal) {
                            $this->Inscricao->set('nota_exame_normal', $notaExameNormal);
                        }
                        $notaExameRecorrencia = $xls->getSheetByName('pauta')->getCell('H' . $linhaActual)->getCalculatedValue();
                        if ($notaExameRecorrencia) {
                            $this->Inscricao->set('nota_exame_normal', $notaExameRecorrencia);
                        }
                        $notaExameEspecial = $xls->getSheetByName('pauta')->getCell('I' . $linhaActual)->getCalculatedValue();
                        if ($notaExameEspecial) {
                            $this->Inscricao->set('nota_exame_especial', $notaExameEspecial);
                        }
                        $notaFinal = $xls->getSheetByName('pauta')->getCell('J' . $linhaActual)->getCalculatedValue();
                        if ($notaFinal) {
                            $this->Inscricao->set('nota_final', $notaFinal);
                        }

                        $this->Inscricao->save();
                    }
                }

                $linhaActual++;
            }

            return true;
        }

    }

?>