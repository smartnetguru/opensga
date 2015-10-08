<?php

    App::uses('AppModel', 'Model');

    /**
     * FinanceiroPagamento Model
     *
     * @property Aluno $Aluno
     * @property FinanceiroConta $FinanceiroConta
     * @property FinanceiroTipoPagamento $FinanceiroTipoPagamento
     * @property AnoLectivo $AnoLectivo
     * @property FinanceiroEstadoPagamento $FinanceiroEstadoPagamento
     * @property FinanceiroTransacao $FinanceiroTransacao
     */
    class FinanceiroPagamento extends AppModel
    {
        //The Associations below have been created with all possible keys, those that are not needed can be removed

        /**
         * belongsTo associations
         *
         * @var array
         */
        public $belongsTo = [
            'Aluno'                     => [
                'className'  => 'Aluno',
                'foreignKey' => 'aluno_id',
                'conditions' => '',
                'fields'     => '',
                'order'      => ''
            ],
            'FinanceiroConta'           => [
                'className'  => 'FinanceiroConta',
                'foreignKey' => 'financeiro_conta_id',
                'conditions' => '',
                'fields'     => '',
                'order'      => ''
            ],
            'FinanceiroTipoPagamento'   => [
                'className'  => 'FinanceiroTipoPagamento',
                'foreignKey' => 'financeiro_tipo_pagamento_id',
                'conditions' => '',
                'fields'     => '',
                'order'      => ''
            ],
            'AnoLectivo'                => [
                'className'  => 'AnoLectivo',
                'foreignKey' => 'ano_lectivo_id',
                'conditions' => '',
                'fields'     => '',
                'order'      => ''
            ],
            'FinanceiroEstadoPagamento' => [
                'className'  => 'FinanceiroEstadoPagamento',
                'foreignKey' => 'financeiro_estado_pagamento_id',
                'conditions' => '',
                'fields'     => '',
                'order'      => ''
            ],
            'SemestreLectivo'           => [
                'className'  => 'SemestreLectivo',
                'foreignKey' => 'semestre_lectivo_id',
                'conditions' => '',
                'fields'     => '',
                'order'      => ''
            ],
            'FinanceiroTransacao'       => [
                'className'  => 'FinanceiroTransacao',
                'foreignKey' => 'financeiro_transacao_id',
                'conditions' => '',
                'fields'     => '',
                'order'      => ''
            ]
        ];

        public function geraPagamentoRenovacaoMatriculas($anoLectivo = null)
        {
            $this->Aluno->contain();
            $alunos = $this->Aluno->find('all', ['conditions' => ['estado_aluno_id' => [1, 11]]]);

            foreach ($alunos as $aluno) {


                $ano_ingresso = $aluno['Aluno']['ano_ingresso'];
                if ($ano_ingresso >= 2000 && $ano_ingresso <= 2007) {
                    $referencia = substr($aluno['Aluno']['codigo'], 2);
                } elseif ($ano_ingresso > 2007) {
                    $referencia = "0" . $aluno['Aluno']['codigo'];
                } else {
                    $referencia = $aluno['Aluno']['codigo'];
                }

                $datasource = $this->Aluno->getDatasource();
                $datasource->begin();
                $transacao = [];
                $pagamento = [];

                $curso_turno = $this->Aluno->Curso->CursosTurno->find('first',
                    ['conditions' => ['curso_id' => $aluno['Aluno']['curso_id']]]);
                if ($curso_turno['CursosTurno']['turno_id'] == 1) {
                    $transacao['financeiro_tipo_transacao_id'] = 2;
                    $pagamento['tipo_pagamento_id'] = 37;
                    $transacao['valor'] = 80;
                    $referencia = $referencia . "02";
                } else {
                    $transacao['financeiro_tipo_transacao_id'] = 2;
                    $pagamento['tipo_pagamento_id'] = 38;
                    $transacao['valor'] = 160;
                    $referencia = $referencia . "03";
                }
                $transacao['entidade_id'] = $aluno['Aluno']['entidade_id'];

                $conta_existe = $this->Aluno->Entidade->FinanceiroTransacao->FinanceiroConta->find('first',
                    ['conditions' => ['entidade_id' => $aluno['Aluno']['entidade_id'], 'unidade_organica_id' => 29]]);
                if (empty($conta_existe)) {
                    $this->Aluno->Entidade->FinanceiroTransacao->FinanceiroConta->create();
                    $this->Aluno->Entidade->FinanceiroTransacao->FinanceiroConta->save([
                        'FinanceiroConta' => [
                            'entidade_id'         => $aluno['Aluno']['entidade_id'],
                            'unidade_organica_id' => 29
                        ]
                    ]);
                    $conta_existe = $this->Aluno->Entidade->FinanceiroTransacao->FinanceiroConta->find('first', [
                        'conditions' => [
                            'entidade_id'         => $aluno['Aluno']['entidade_id'],
                            'unidade_organica_id' => 29
                        ]
                    ]);
                }
                $transacao['financeiro_conta_id'] = $conta_existe['FinanceiroConta']['id'];
                $transacao['financeiro_estado_transacao_id'] = 1;
                $this->Aluno->Entidade->FinanceiroTransacao->create();
                $this->Aluno->Entidade->FinanceiroTransacao->save(['FinanceiroTransacao' => $transacao]);

                $pagamento['aluno_id'] = $aluno['Aluno']['id'];
                $pagamento['financeiro_conta_id'] = $conta_existe['FinanceiroConta']['id'];
                $pagamento['valor'] = $transacao['valor'];
                $pagamento['data_limite'] = '2013-12-31';
                $pagamento['data_emissao'] = '2013-09-30';
                $anolectivo = $this->Aluno->Matricula->AnoLectivo->findByAno('2014');
                $pagamento['ano_lectivo_id'] = $anolectivo['AnoLectivo']['id'];
                $pagamento['financeiro_estado_pagamento_id'] = 1;
                $pagamento['codigo'] = $referencia;
                $pagamento['financeiro_transacao_id'] = $this->Aluno->Entidade->FinanceiroTransacao->id;
                $pagamento['referencia_pagamento'] = $referencia;
                $pagamento['entidade_id'] = $aluno['Aluno']['entidade_id'];

                $this->Aluno->Entidade->FinanceiroTransacao->FinanceiroPagamento->create();
                $this->Aluno->Entidade->FinanceiroTransacao->FinanceiroPagamento->save(['FinanceiroPagamento' => $pagamento]);

                $datasource->commit();
                debug($aluno);
            }

        }

        public function geraReferenciaPagamentoGraduacao($alunoId)
        {


            $this->Aluno->contain('Curso');
            $aluno = $this->Aluno->findById($alunoId);

            $valor = 0;

            $nomeCurso = $aluno['Curso']['name'];
            if (strpos($nomeCurso, 'Licenciatura') !== false) {
                $valor = 350000;
            } elseif (strpos($nomeCurso, 'Mestrado') !== false) {
                $valor = 400000;
            } elseif (strpos($nomeCurso, 'Doutoramento') !== false) {
                $valor = 450000;
            }

            $entidade = 77001;

            $ano_ingresso = $aluno['Aluno']['ano_ingresso'];
            if ($ano_ingresso >= 2000 && $ano_ingresso <= 2007) {
                $referencia = "1" . substr($aluno['Aluno']['codigo'], 3);
            } elseif ($ano_ingresso > 2007) {
                $referencia = "1" . $aluno['Aluno']['codigo'];
            } else {
                $referencia = $aluno['Aluno']['codigo'];
            }

            $checkDigito = $this->FinanceiroTransacao->geraCheckDigito($entidade, $referencia, $valor);

            $referenciaFinal = $referencia . $checkDigito;

            return $referenciaFinal;
        }

        /**
         * Gera todos os pagamentos de todos os alunos matriculados
         * Nao duplica pagamentos para o mesmo plano de estudos
         */
        function gerarPagamentos($ano_lectivo_id, $aluno_id = null, $num_semestre = null)
        {

            foreach ($alunos as $aluno) {
                $aluno_id = $aluno['Matricula']['aluno_id'];

                foreach ($tipopagamentos as $tp) {


                    $codigo_pagamento = $aluno['Aluno']['codigo'] . $tp['Tipopagamento']['codigo'] . "01";

                    $pagamento['codigo'] = $codigo_pagamento;
                    $pagamento['estadopagamento_id'] = 1;
                    $pagamentos = ['Pagamento' => $pagamento];

                    if (!$this->evitaDuplicados($pagamento)) {
                        $this->create();
                        $this->save($pagamentos);
                    }
                }
            }
        }

        /**
         * Verifica se nao existe nenhum pagamento gerado para este tipo
         *
         * @param type $pagamento
         *
         * @return type
         */
        function evitaDuplicados($pagamento)
        {
            $this->recursive = -1;
            $pagamento = $this->find('first', [
                'conditions' => [
                    'FinanceiroPagamento.aluno_id'       => $pagamento['aluno_id'],
                    'FinanceiroPagamento.ano_lectivo_id' => $pagamento['ano_lectivo_id'],
                    'financeiro_tipo_pagamento_id'       => $pagamento['financeiro_tipo_pagamento_id']
                ]
            ]);

            return $pagamento;
        }

        /**
         * Gera todos os pagamentos de mensalidades de um aluno, para o semestre que se inscreveu.
         * A funcao deve ter em consideracao o tipo de cadeiras que o aluno se inscreveu, para assim determinar o valor
         * das mensalidades
         *
         * @todo implementar a verificacao do tipo de cadeiras inscritas
         *
         * @param type $aluno_id
         *
         * @return boolean
         */
        public function gerarPagamentosByAluno($aluno_id, $data)
        {
            $dataSource = $this->getDataSource();
            $dataSource->begin();

            $semestre_lectivo = Configure::read('OpenSGA.semestre_lectivo');
            if ($semestre_lectivo == 1) {
                $tipos = [3, 4, 5, 6, 7];
            } else {
                $tipos = [8, 9, 10, 11, 12];
            }


            $financeiro_tipo_pagamentos = $this->FinanceiroTipoPagamento->find('all',
                ['conditions' => ['FinanceiroTipoPagamento.id' => $tipos]]);
            $valor_mensalidade_atraso = $this->FinanceiroTipoPagamento->findByCodigo(30);

            foreach ($financeiro_tipo_pagamentos as $ftp) {

                //Acerta O valor
                if ($data['cadeiras_normais'] == 0 && $data['cadeiras_atraso'] <= 3) {
                    $valor_mensalidade = 0 + $data['cadeiras_atraso'] * $valor_mensalidade_atraso['FinanceiroTipoPagamento']['valor'];
                } elseif ($data['cadeiras_normais'] == 0 && $data['cadeiras_atraso'] > 3) {
                    $valor_mensalidade = $ftp['FinanceiroTipoPagamento']['valor'];
                } else {
                    $valor_mensalidade = $ftp['FinanceiroTipoPagamento']['valor'] + $data['cadeiras_atraso'] * $valor_mensalidade_atraso['FinanceiroTipoPagamento']['valor'];
                }


                $novo_pagamento = [
                    'aluno_id'                       => $aluno_id,
                    'financeiro_conta_id'            => $this->Aluno->getContaIdByAlunoId($aluno_id),
                    'valor'                          => $valor_mensalidade,
                    'data_limite'                    => date('Y') . "-" . $ftp['FinanceiroTipoPagamento']['mes_limite'] . "-" . $ftp['FinanceiroTipoPagamento']['dia_limite'],
                    'ano_lectivo_id'                 => Configure::read('OpenSGA.ano_lectivo_id'),
                    'semestre_lectivo_id'            => Configure::read('OpenSGA.semestre_lectivo_id'),
                    'financeiro_estado_pagamento_id' => 1,
                    'codigo'                         => $this->gerarCodigoPagamento($aluno_id,
                        $ftp['FinanceiroTipoPagamento']['codigo']),
                    'data_emissao'                   => date('Y-m-d H:i:s'),
                    'financeiro_tipo_pagamento_id'   => $ftp['FinanceiroTipoPagamento']['id']
                ];

                if (!$this->evitaDuplicados($novo_pagamento)) {
                    $this->create();
                    if (!$this->save($novo_pagamento)) {
                        $dataSource->rollback();

                        return false;
                    }
                }
            }

            return $dataSource->commit();
        }

        public function gerarCodigoPagamento($aluno_id, $tipo_pagamento)
        {
            $this->Aluno->id = $aluno_id;
            $codigo_aluno = $this->Aluno->field('codigo');

            $this->FinanceiroTipoPagamento->id = $tipo_pagamento;
            $codigo_tipo_pagamento = $this->FinanceiroTipoPagamento->field('codigo');

            $numero_pagamentos = $this->find('count',
                ['conditions' => ['aluno_id' => $aluno_id, 'financeiro_tipo_pagamento_id' => $tipo_pagamento]]);
            $numero_pagamentos_novo = str_pad($numero_pagamentos + 1, 2, "0", STR_PAD_LEFT);;
            $codigo_pagamento = $codigo_aluno . $codigo_tipo_pagamento . $numero_pagamentos_novo;

            return $codigo_pagamento;
        }

        function getValorDividaTotal()
        {
            $valor_divida = $this->find('all', [
                'conditions' => [
                    'FinanceiroPagamento.financeiro_estado_pagamento_id' => 1,
                    'FinanceiroPagamento.data_limite <='                 => date('Y-m-d')
                ],
                'fields'     => 'sum(FinanceiroPagamento.valor) as valor'
            ]);

            return $valor_divida[0][0]['valor'];
        }

        /**
         * Paga uma factura previamente criada ou cria uma nova factura e marca como paga
         * @param $entidadeId
         * @param $valor
         * @param $dataPagamento
         * @param $tipoPagamentoId
         * @param $referenciaPagamento
         * @param $numeroComprovativo
         *
         * @todo desenvolver essa funcao
         *
         * @fixme Esta funcoa sempre retorna true;
         */
        public function pagar(
            $entidadeId,
            $valor,
            $dataPagamento,
            $tipoPagamentoId,
            $referenciaPagamento,
            $numeroComprovativo
        ) {

            return true;
            $deposito = $this->FinanceiroTransacao->FinanceiroDeposito->findByReferenciaDeposito($referenciaPagamento);
            if (empty($deposito)) {
                $depositoResult = $this->FinanceiroTransacao->FinanceiroDeposito->depositaValor($entidadeId,
                    $numeroComprovativo, $valor, $referenciaPagamento, $dataPagamento);

                $deposito = $this->FinanceiroTransacao->FinanceiroDeposito->findById($depositoResult[1]);

            }
            $pagamento = $this->findByReferenciaPagamento($referenciaPagamento);
            if(empty($pagamento)){
                $pagamentoResult = $this->criaPagamento($entidadeId,$valor,$dataPagamento,$tipoPagamentoId,$referenciaPagamento);
                $this->id = $pagamentoResult[1];
            } else{
                $this->id = $pagamento['FinanceiroPagamento']['id'];
            }
            $this->set('numero_comprovativo',$numeroComprovativo);
            $this->set('');

            //

        }

        public function criaPagamento($entidadeId,$valor,$dataPagamento,$tipoPagamentoId,$referenciaPagamento){
            //Financeiro-Pagamento===aluno_id,financeiro_conta_id,valor,data_pagamento,financeiro_tipo_pagamento_id,ano_lectivo_id,financeiro_estado_pagamento_id,data_emissao,financeiro_transacao_id,semestre_lectivo_id,referencia_pagamento,ano_lectivo_id
            //Financeiro-Pagamento===aluno_id,financeiro_conta_id,valor,data_pagamento,financeiro_tipo_pagamento_id,ano_lectivo_id,financeiro_estado_pagamento_id,data_emissao,financeiro_transacao_id,semestre_lectivo_id,referencia_pagamento,ano_lectivo_id
        }

        public function setPagamentoRenovacaoMatricula($alunoId, $cursoId, $montante, $data, $referencia, $entidadeId)
        {
            $datasource = $this->Aluno->getDatasource();
            $datasource->begin();
            $transacao = [];
            $pagamento = [];

            $curso_turno = $this->Aluno->Curso->CursosTurno->find('first', ['conditions' => ['curso_id' => $cursoId]]);
            if ($curso_turno['CursosTurno']['turno_id'] == 1) {
                $tipoPagamento = $this->FinanceiroTipoPagamento->findById(37);
                $pagamento['tipo_pagamento_id'] = 37;
                $transacao['valor'] = $tipoPagamento['FinanceiroTipoPagamento']['valor'];
            } else {
                $tipoPagamento = $this->FinanceiroTipoPagamento->findById(38);
                $pagamento['tipo_pagamento_id'] = 38;
                $transacao['valor'] = $tipoPagamento['FinanceiroTipoPagamento']['valor'];
            }

            $transacao['entidade_id'] = $entidadeId;
            $transacao['financeiro_tipo_transacao_id'] = 2;

            $financeiroConta = $this->Aluno->Entidade->FinanceiroTransacao->FinanceiroConta->getByEntidadeId($entidadeId);
            $transacao['financeiro_conta_id'] = $financeiroConta['FinanceiroConta']['id'];
            $transacao['financeiro_estado_transacao_id'] = 2;
            $this->Aluno->Entidade->FinanceiroTransacao->create();
            $this->Aluno->Entidade->FinanceiroTransacao->save(['FinanceiroTransacao' => $transacao]);

            $pagamento['aluno_id'] = $alunoId;
            $pagamento['financeiro_conta_id'] = $financeiroConta['FinanceiroConta']['id'];
            $pagamento['valor'] = $transacao['valor'];
            $pagamento['data_limite'] = $data;
            $pagamento['data_emissao'] = $data;
            $pagamento['data_pagamento'] = $data;
            $anolectivo = $this->Aluno->Matricula->AnoLectivo->findByAno(
                Configure::read('OpenSGA.ano_lectivo')
            );
            $pagamento['ano_lectivo_id'] = $anolectivo['AnoLectivo']['id'];
            $pagamento['financeiro_estado_pagamento_id'] = 2;
            $pagamento['codigo'] = $referencia;
            $pagamento['financeiro_transacao_id'] = $this->Aluno->Entidade->FinanceiroTransacao->id;
            $pagamento['referencia_pagamento'] = $referencia;
            $pagamento['entidade_id'] = $entidadeId;
            $semestre = Configure::read('OpenSGA.semestre_lectivo');
            $semestreLectivo = $this->SemestreLectivo->findByAnoLectivoIdAndSemestre($anolectivo['AnoLectivo']['id'],
                $semestre);
            $pagamento['semestre_lectivo_id'] = $semestreLectivo['SemestreLectivo']['id'];

            //verificar antes se o pagamento ainda nao foi registado
            $pagamentoExiste = $this->find('first', [
                'conditions' => [
                    'aluno_id'             => $alunoId,
                    'referencia_pagamento' => $referencia,
                    'data_pagamento'       => $data,
                ]
            ]);
            if (!$pagamentoExiste) {
                $this->Aluno->Entidade->FinanceiroTransacao->FinanceiroPagamento->create();
                $this->Aluno->Entidade->FinanceiroTransacao->FinanceiroPagamento->save(['FinanceiroPagamento' => $pagamento]);
                $datasource->commit();

                return $this->id;
            } else {
                $datasource->rollback();

                return $pagamentoExiste['FinanceiroPagamento']['id'];
            }

        }
    }
