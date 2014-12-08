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
 */
class FinanceiroPagamento extends AppModel {
    //The Associations below have been created with all possible keys, those that are not needed can be removed

    /**
     * belongsTo associations
     *
     * @var array
     */
    public $belongsTo = array(
        'Aluno' => array(
            'className' => 'Aluno',
            'foreignKey' => 'aluno_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        ),
        'FinanceiroConta' => array(
            'className' => 'FinanceiroConta',
            'foreignKey' => 'financeiro_conta_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        ),
        'FinanceiroTipoPagamento' => array(
            'className' => 'FinanceiroTipoPagamento',
            'foreignKey' => 'financeiro_tipo_pagamento_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        ),
        'AnoLectivo' => array(
            'className' => 'AnoLectivo',
            'foreignKey' => 'ano_lectivo_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        ),
        'FinanceiroEstadoPagamento' => array(
            'className' => 'FinanceiroEstadoPagamento',
            'foreignKey' => 'financeiro_estado_pagamento_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        )
    );

    /**
     * Verifica se nao existe nenhum pagamento gerado para este tipo
     * @param type $pagamento
     * @return type
     */
    function evitaDuplicados($pagamento) {
        $this->recursive = -1;
        $pagamento = $this->find('first', array('conditions' => array('FinanceiroPagamento.aluno_id' => $pagamento['aluno_id'], 'FinanceiroPagamento.ano_lectivo_id' => $pagamento['ano_lectivo_id'], 'financeiro_tipo_pagamento_id' => $pagamento['financeiro_tipo_pagamento_id'])));

        return $pagamento;
    }

    public function gerarCodigoPagamento($aluno_id, $tipo_pagamento) {
        $this->Aluno->id = $aluno_id;
        $codigo_aluno = $this->Aluno->field('codigo');

        $this->FinanceiroTipoPagamento->id = $tipo_pagamento;
        $codigo_tipo_pagamento = $this->FinanceiroTipoPagamento->field('codigo');

        $numero_pagamentos = $this->find('count', array('conditions' => array('aluno_id' => $aluno_id, 'financeiro_tipo_pagamento_id' => $tipo_pagamento)));
        $numero_pagamentos_novo = str_pad($numero_pagamentos + 1, 2, "0", STR_PAD_LEFT);
        ;
        $codigo_pagamento = $codigo_aluno . $codigo_tipo_pagamento . $numero_pagamentos_novo;
        return $codigo_pagamento;
    }

    /**
     * Gera todos os pagamentos de mensalidades de um aluno, para o semestre que se inscreveu.
     * A funcao deve ter em consideracao o tipo de cadeiras que o aluno se inscreveu, para assim determinar o valor das mensalidades
     *
     * @todo implementar a verificacao do tipo de cadeiras inscritas
     *
     * @param type $aluno_id
     * @return boolean
     */
    public function gerarPagamentosByAluno($aluno_id, $data) {
        $dataSource = $this->getDataSource();
        $dataSource->begin();

        $semestre_lectivo = Configure::read('OpenSGA.semestre_lectivo');
        if ($semestre_lectivo == 1) {
            $tipos = array(3, 4, 5, 6, 7);
        } else {
            $tipos = array(8, 9, 10, 11, 12);
        }



        $financeiro_tipo_pagamentos = $this->FinanceiroTipoPagamento->find('all', array('conditions' => array('FinanceiroTipoPagamento.id' => $tipos)));
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


            $novo_pagamento = array(
                'aluno_id' => $aluno_id,
                'financeiro_conta_id' => $this->Aluno->getContaIdByAlunoId($aluno_id),
                'valor' => $valor_mensalidade,
                'data_limite' => date('Y') . "-" . $ftp['FinanceiroTipoPagamento']['mes_limite'] . "-" . $ftp['FinanceiroTipoPagamento']['dia_limite'],
                'ano_lectivo_id' => Configure::read('OpenSGA.ano_lectivo_id'),
                'semestre_lectivo_id' => Configure::read('OpenSGA.semestre_lectivo_id'),
                'financeiro_estado_pagamento_id' => 1,
                'codigo' => $this->gerarCodigoPagamento($aluno_id, $ftp['FinanceiroTipoPagamento']['codigo']),
                'data_emissao' => date('Y-m-d H:i:s'),
                'financeiro_tipo_pagamento_id' => $ftp['FinanceiroTipoPagamento']['id']
            );

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

    function getValorDividaTotal() {
        $valor_divida = $this->find('all', array('conditions' => array('FinanceiroPagamento.financeiro_estado_pagamento_id' => 1, 'FinanceiroPagamento.data_limite <=' => date('Y-m-d')), 'fields'=>'sum(FinanceiroPagamento.valor) as valor'));

        return $valor_divida[0][0]['valor'];
    }

    /**
     * Gera todos os pagamentos de todos os alunos matriculados
     * Nao duplica pagamentos para o mesmo plano de estudos
     */
    function gerarPagamentos($ano_lectivo_id, $aluno_id = null, $num_semestre = null) {

        foreach ($alunos as $aluno) {
            $aluno_id = $aluno['Matricula']['aluno_id'];

            foreach ($tipopagamentos as $tp) {


                $codigo_pagamento = $aluno['Aluno']['codigo'] . $tp['Tipopagamento']['codigo'] . "01";

                $pagamento['codigo'] = $codigo_pagamento;
                $pagamento['estadopagamento_id'] = 1;
                $pagamentos = array('Pagamento' => $pagamento);

                if (!$this->evitaDuplicados($pagamento)) {
                    $this->create();
                    $this->save($pagamentos);
                }
            }
        }
    }


    public function geraPagamentoRenovacaoMatriculas($anoLectivo = null){
        $this->Aluno->contain();
        $alunos = $this->Aluno->find('all',['conditions'=>['estado_aluno_id'=>[1,11]]]);

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
            $transacao = array();
            $pagamento = array();

            $curso_turno = $this->Aluno->Curso->CursosTurno->find('first', array('conditions' => array('curso_id' => $aluno['Aluno']['curso_id'])));
            if ($curso_turno['CursosTurno']['turno_id'] == 1) {
                $transacao['financeiro_tipo_transacao_id'] = 2;
                $pagamento['tipo_pagamento_id']            = 37;
                $transacao['valor']                        = 80;
                $referencia                                = $referencia . "02";
            } else {
                $transacao['financeiro_tipo_transacao_id'] = 2;
                $pagamento['tipo_pagamento_id']            = 38;
                $transacao['valor']                        = 160;
                $referencia                                = $referencia . "03";
            }
            $transacao['entidade_id'] = $aluno['Aluno']['entidade_id'];

            $conta_existe = $this->Aluno->Entidade->FinanceiroTransacao->FinanceiroConta->find('first', array('conditions' => array('entidade_id' => $aluno['Aluno']['entidade_id'], 'unidade_organica_id' => 29)));
            if (empty($conta_existe)) {
                $this->Aluno->Entidade->FinanceiroTransacao->FinanceiroConta->create();
                $this->Aluno->Entidade->FinanceiroTransacao->FinanceiroConta->save(array('FinanceiroConta' => array('entidade_id' => $aluno['Aluno']['entidade_id'], 'unidade_organica_id' => 29)));
                $conta_existe = $this->Aluno->Entidade->FinanceiroTransacao->FinanceiroConta->find('first', array('conditions' => array('entidade_id' => $aluno['Aluno']['entidade_id'], 'unidade_organica_id' => 29)));
            }
            $transacao['financeiro_conta_id']            = $conta_existe['FinanceiroConta']['id'];
            $transacao['financeiro_estado_transacao_id'] = 1;
            $this->Aluno->Entidade->FinanceiroTransacao->create();
            $this->Aluno->Entidade->FinanceiroTransacao->save(array('FinanceiroTransacao' => $transacao));

            $pagamento['aluno_id']                       = $aluno['Aluno']['id'];
            $pagamento['financeiro_conta_id']            = $conta_existe['FinanceiroConta']['id'];
            $pagamento['valor']                          = $transacao['valor'];
            $pagamento['data_limite']                    = '2013-12-31';
            $pagamento['data_emissao']                   = '2013-09-30';
            $anolectivo                                  = $this->Aluno->Matricula->AnoLectivo->findByAno('2014');
            $pagamento['ano_lectivo_id']                 = $anolectivo['AnoLectivo']['id'];
            $pagamento['financeiro_estado_pagamento_id'] = 1;
            $pagamento['codigo']                         = $referencia;
            $pagamento['financeiro_transacao_id']        = $this->Aluno->Entidade->FinanceiroTransacao->id;
            $pagamento['referencia_pagamento']           = $referencia;
            $pagamento['entidade_id']                    = $aluno['Aluno']['entidade_id'];

            $this->Aluno->Entidade->FinanceiroTransacao->FinanceiroPagamento->create();
            $this->Aluno->Entidade->FinanceiroTransacao->FinanceiroPagamento->save(array('FinanceiroPagamento' => $pagamento));

            $datasource->commit();
            debug($aluno);
    }

}
}
